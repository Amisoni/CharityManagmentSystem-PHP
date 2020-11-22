<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../include/include_css.php'; ?>
    </head>
    <body>
        <?php
        include '../include/header_top.php';
        include '../include/header_menu.php';
        include '../controller/connection.php';
        ?>
       
        <b><h3 style="padding-left: 1100px;">Insert Your Blog</h3></b>
        <a href="blog.php"><b><h5 style="padding-left: 1200">Click hear</h5></b></a>
        <section class="ulockd-ip-latest-news">
            <div class="container">
                <div class="row">
                      <?php
                    $query = "select  b.blog_name , b.blog_remark , r.first_name , r.last_name , r.profile_path from tbl_blog b 
                              left join tbl_registration r on r.registration_id = b.registration_id;";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <div class="col-xs-12 col-sm-6 col-md-4">

                            <article class="ulockd-blog-post ulockd-mrgn630">
                              
                                <div class="post-thumb">
                                    <div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
                                    <!--<img class="img-responsive img-whp" src="/images/blog/1.jpg" alt="1.jpg">-->
                                    <ul class="list-inline posted-date">
                                        <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
                                        <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                                    </ul>
                                </div>
                                <div class = 'col-sm-4 col-md-4 fservice-box ulockd-pad395'>
                                    <img height="150" min-width="150" src="<?Php echo "$row[profile_path]"; ?>"/>
                                    <div class="db-overlayer"></div>
                                </div>
                                <div class="bp-details one text-left">
                                    <!--<h3 class="post-title">Let's Move With Our Blog</h3>-->
                                    <h3 class="post-title"><?php echo"$row[blog_name]"; ?></h3>
                                      <!--<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>-->
                                    <p><?php echo"$row[blog_remark]"; ?></p>
                                    <!--<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>-->
                                    
                                        <strong> Name: </strong><?php echo ucwords("$row[first_name]"); ?> <?php echo ucwords("$row[last_name]"); ?>                                

                                   
                                </div>
                            </article>
                        </div>
                        <?php
                    }
                    ?> 
                </div>
            </div>
        </section>
    </body>
    <?php
    include '../include/include_js.php';
    include '../include/include_footer.php';
    ?>
</html>