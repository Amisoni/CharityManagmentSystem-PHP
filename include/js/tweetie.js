/**
 * Tweetie: A simple Twitter feed plugin
 * Author: Sonny T. <hi@sonnyt.com>, sonnyt.com
 */

(function ($) {
    'use strict';

    $.fn.twittie = function () {
        var options = (arguments[0] instanceof Object) ? arguments[0] : {},
            callback = (typeof arguments[0] === 'function') ? arguments[0] : arguments[1];

        // Default settings
        var settings = $.extend({
            'username': null,
            'list': null,
            'hashtag': null,
            'count': 10,
            'hideReplies': false,
            'dateFormat': '%b/%d/%Y',
            'template': '{{date}} - {{tweet}}',
            'apiPath' : 'api/tweet.php',
            'loadingText': 'Loading...'
        }, options);

        if (settings.list && !settings.username) {
            $.error('If you want to fetch tweets from a list, you must define the username of the list owner.');
        }

        /**
         * Applies @reply, #hash and http links
         * @param  {String} tweet A single tweet
         * @return {String}       Fixed tweet
         *
         * Thanks to @Wachem enhanced linking.
         */
        var linking = function (tweet) {
            var twit = tweet.replace(/(https?:\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/ig,'<a href="$1" target="_blank" title="Visit this link">$1</a>')
                 .replace(/#([a-zA-Z0-9_]+)/g,'<a href="https://twitter.com/search?q=%23$1&amp;src=hash" target="_blank" title="Search for #$1">#$1</a>')
                 .replace(/@([a-zA-Z0-9_]+)/g,'<a href="https://twitter.com/$1" target="_blank" title="$1 on Twitter">@$1</a>');

            return twit;
        };

        /**
         * Formating a date
         * @param  {String} twt_date Twitter date
         * @return {String}          Formatted date
         */
        var dating = function (twt_date) {
            // fix for IE
            var time = twt_date.split(' ');
            twt_date = new Date(Date.parse(time[1] + ' ' + time[2] + ', ' + time[5] + ' ' + time[3] + ' UTC'));

            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            var _date = {
                '%d': twt_date.getDate(),
                '%m': twt_date.getMonth()+1,
                '%b': months[twt_date.getMonth()].substr(0, 3),
                '%B': months[twt_date.getMonth()],
                '%y': String(twt_date.getFullYear()).slice(-2),
                '%Y': twt_date.getFullYear()
            };

            var date = settings.dateFormat;
            var format = settings.dateFormat.match(/%[dmbByY]/g);

            for (var i = 0, len = format.length; i < len; i++) {
                date = date.replace(format[i], _date[format[i]]);
            }

            return date;
        };

        /**
         * Templating a tweet using '{{ }}' braces
         * @param  {Object} data Tweet details are passed
         * @return {String}      Templated string
         */
        var templating = function (data) {
            var temp = settings.template;
            var temp_variables = ['date', 'tweet', 'avatar', 'url', 'retweeted', 'screen_name', 'user_name'];

            for (var i = 0, len = temp_variables.length; i < len; i++) {
                temp = temp.replace(new RegExp('{{' + temp_variables[i] + '}}', 'gi'), data[temp_variables[i]]);
            }

            return temp;
        };

        // Set loading
        this.html('<span>'+settings.loadingText+'</span>');

        var that = this;

        // Fetch tweets
        $.getJSON(settings.apiPath, { username: settings.username, list: settings.list, hashtag: settings.hashtag, count: settings.count, exclude_replies: settings.hideReplies }, function (twt) {
            that.find('span').fadeOut('fast', function () {
                that.html('<ul></ul>');

                for (var i = 0; i < settings.count; i++) {
                    var tweet = false;
                    if(twt[i]) {
                        tweet = twt[i];
                    } else if(twt.statuses !== undefined && twt.statuses[i]) {
                        tweet = twt.statuses[i];
                    } else {
                        break;
                    }

                    var temp_data = {
                        user_name: tweet.user.name,
                        date: dating(tweet.created_at),
                        tweet: (tweet.retweeted) ? linking('RT @'+ tweet.user.screen_name +': '+ tweet.retweeted_status.text) : linking(tweet.text),
                        avatar: '<img src="'+ tweet.user.profile_image_url +'" />',
                        url: 'https://twitter.com/' + tweet.user.screen_name + '/status/' + tweet.id_str,
                        retweeted: tweet.retweeted,
                        screen_name: linking('@'+ tweet.user.screen_name)
                    };

                    that.find('ul').append('<li>' + templating(temp_data) + '</li>');
                }

                if (typeof callback === 'function') { callback(); }
            });
        });
    };

})(jQuery);

/* Twitte */
!function(a){"use strict";a.fn.twittie=function(){var b=arguments[0]instanceof Object?arguments[0]:{},c="function"==typeof arguments[0]?arguments[0]:arguments[1],d=a.extend({username:null,list:null,hashtag:null,count:10,hideReplies:!1,dateFormat:"%b/%d/%Y",template:"{{date}} - {{tweet}}",apiPath:"api/tweet.php",loadingText:"Loading..."},b);d.list&&!d.username&&a.error("If you want to fetch tweets from a list, you must define the username of the list owner.");var e=function(a){return a.replace(/(https?:\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/gi,'<a href="$1" target="_blank" title="Visit this link">$1</a>').replace(/#([a-zA-Z0-9_]+)/g,'<a href="https://twitter.com/search?q=%23$1&src=hash" target="_blank" title="Search for #$1">#$1</a>').replace(/@([a-zA-Z0-9_]+)/g,'<a href="https://twitter.com/$1" target="_blank" title="$1 on Twitter">@$1</a>')},f=function(a){var b=a.split(" ");a=new Date(Date.parse(b[1]+" "+b[2]+", "+b[5]+" "+b[3]+" UTC"));for(var c=["January","February","March","April","May","June","July","August","September","October","November","December"],e={"%d":a.getDate(),"%m":a.getMonth()+1,"%b":c[a.getMonth()].substr(0,3),"%B":c[a.getMonth()],"%y":String(a.getFullYear()).slice(-2),"%Y":a.getFullYear()},f=d.dateFormat,g=d.dateFormat.match(/%[dmbByY]/g),h=0,i=g.length;h<i;h++)f=f.replace(g[h],e[g[h]]);return f},g=function(a){for(var b=d.template,c=["date","tweet","avatar","url","retweeted","screen_name","user_name"],e=0,f=c.length;e<f;e++)b=b.replace(new RegExp("{{"+c[e]+"}}","gi"),a[c[e]]);return b};this.html("<span>"+d.loadingText+"</span>");var h=this;a.getJSON(d.apiPath,{username:d.username,list:d.list,hashtag:d.hashtag,count:d.count,exclude_replies:d.hideReplies},function(a){h.find("span").fadeOut("fast",function(){h.html("<ul></ul>");for(var b=0;b<d.count;b++){var i=!1;if(a[b])i=a[b];else{if(void 0===a.statuses||!a.statuses[b])break;i=a.statuses[b]}var j={user_name:i.user.name,date:f(i.created_at),tweet:e(i.retweeted?"RT @"+i.user.screen_name+": "+i.retweeted_status.text:i.text),avatar:'<img src="'+i.user.profile_image_url+'" />',url:"https://twitter.com/"+i.user.screen_name+"/status/"+i.id_str,retweeted:i.retweeted,screen_name:e("@"+i.user.screen_name)};h.find("ul").append("<li>"+g(j)+"</li>")}"function"==typeof c&&c()})})}}(jQuery);