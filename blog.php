<!DOCTYPE html>
<?php
include './include/include_css.php';
?>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/non-profit/be-ahand/demo/blog-grid-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 11:29:38 GMT -->

<body>
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Modal -->
	<div id="Donation-form-modal" class="modal fade bs-example-modal-default text-left" role="dialog">
		<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		    	<div class="modal-header text-center">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        	<h3> <span class="flaticon-make-a-donation text-thm2"></span> DONATION FORM</h3>
		        	<p>Your Donation Can Save Lot's Of Life</p>
		    	</div>
		    	<div class="modal-body">
			      	<div class="row">
			      		<div class="col-sm-6 col-md-6 donation-form-samount">
			      			<h4>Select Your Amount</h4>
			      			<ul class="list-inline selected-amount">
			      				<li class="amount-box">
				      				<input id="radio-one" type="radio" name="payment-group">
			      					<label for="radio-one"> $10</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-two" type="radio" name="payment-group">
			      					<label for="radio-two"> $20</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-three" type="radio" name="payment-group">
			      					<label for="radio-three"> $30</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-four" type="radio" name="payment-group">
			      					<label for="radio-four"> $50</label>
			      				</li>
			      				<li class="amount-box">
				      				<input id="radio-five" type="radio" name="payment-group">
			      					<label for="radio-five"> $100</label>
			      				</li>
			      			</ul>
			      			<h5>Would you like to make regular donations?</h5>
			      			<ul class="list-inline">
			      				<li><p>I would like to make </p></li>
			      				<li>
			      					<select name="pts" class="payment-time-selection">
										<option value="0">a one time</option>
										<option value="W">weekly</option>
										<option value="M">monthly</option>
										<option value="Y">yearly</option>
									</select>
			      				</li>
			      				<li> Donations</li>
			      			</ul>
			      		</div>
			      		<div class="col-sm-6 col-md-6 donation-form-samount">
			      			<form class="form-inline">
					        	<h4>Custom Amount</h4>
							    <div class="form-group">
								    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
								    <div class="input-group">
								    	<div class="input-group-addon">$</div>
								    	<input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount">
								    	<div class="input-group-addon">.00</div>
								    </div>
							    </div>
							</form>
			      		</div>
			      		<div class="col-sm-12 col-md-12">
					        <form class="donation-form donor-details">
					        	<h4>Donor Information</h4>
				        		<div class="row">
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputNamex" placeholder="First Name">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputNamexx" placeholder="Last Name">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="email" class="form-control required" id="exampleInputEmailxy" placeholder="Email">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputPhone" placeholder="Phone">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputAddress" placeholder="Address line 1">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputAddress2" placeholder="Address line 2">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputCity" placeholder="City/State">
        								</div>
				        			</div>
				        			<div class="col-md-6">
    						            <div class="form-group">
        								    <input type="text" class="form-control required" id="exampleInputZip" placeholder="Zipcode/Postcode">
        								</div>
				        			</div>
				        		</div>
	                            <div class="form-group">
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="4" placeholder="Additional Note" ></textarea>
	                            </div>
								<div class="form-group text-center">
						        	<button type="submit" class="btn btn-lg btn-block ulockd-btn-thm2" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
								</div>
					        </form>
			      		</div>
			      	</div>
		    	</div>
		    	<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    	</div>
		    </div>
		</div>
	</div>
  	<div class="header-topped">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div class="social-linked">
  						<ul class="list-inline">
  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  							<li><a href="#"><i class="fa fa-rss"></i></a></li>
  							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
  						</ul>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="welcm-ht text-center">
	  					<p class="ulockd-welcntxt">Welcome To Our<span class="color-black31"> Be aHand</span> Charity Organizations</p>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="welcm-ht text-right">
						<ul class="list-inline">
							<li>
								<div class="dropdown lang-button text-center">
									<button class="dropbtn">Language</button>
									<div class="dropdown-content">
									    <a href="#">English</a>
									    <a href="#">French</a>
									    <a href="#">Spanish</a>
									</div>
								</div>
							</li>
							<li>
								<a href="#">
									<div data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo">Sign In | Sign Up</div>
								</a>
		        				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
		        				    <div class="modal-dialog modal-lg" role="document">
			        				    <div class="modal-content">
			        				        <div class="modal-header">
				        				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        				        <h4 class="modal-title text-center" id="exampleModalLabel">Login or Register</h4>
				        				        <p class="text-center">Sign in and choose your service to have access to all our service.</p>
			        				        </div>
			        				        <div class="modal-body">
				        				      	<div class="row">
				        				      		<div class="col-sm-12 col-md-6 col-lg-5 text-center hvr-float-shadow">
				        						        <form class="ulockd-login-form">
				        						        	<h3><span class="flaticon-lock"></span> Login</h3>
				        						        	<p>Enter username and password to login:</p>
				        						            <div class="form-group">
				            								    <input type="email" class="form-control" id="email" placeholder="Email">
				            								</div>
				            								<div class="form-group">
				            								    <input type="password" class="form-control" placeholder="Password">
				            								</div>
				        						            <button type="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
				        						        </form>
				        				      		</div>
				        				      		<div class="col-sm-12 col-lg-7 hvr-float-shadow">
				        						        <form class="ulockd-reg-form text-center">
				        						        	<h3> <span class="flaticon-house-key"></span> Register</h3>
				        						        	<p>Join our community today:</p>
				        						            <div class="form-group">
				            								    <input type="text" class="form-control" id="exampleInputNamexa" placeholder="First Name">
				            								</div>
				        						            <div class="form-group">
				            								    <input type="text" class="form-control" id="exampleInputNamexb" placeholder="Last Name">
				            								</div>
				        						            <div class="form-group">
				            								    <input type="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
				            								</div>
				            								<div class="form-group">
				            								    <input type="password" class="form-control" placeholder="Password">
				            								</div>
				            								<div class="form-group">
				            								    <input type="password" class="form-control" placeholder="Repeat password">
				            								</div>
				            								<div class="form-group text-center">
				            						        	<button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
				            								</div>
				        						        </form>
				        				      		</div>
				        				      	</div>	
			        				        </div>
			        				        <!-- modal footer start here-->
			        				    </div>
		        				    </div>
		        				</div>
							</li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="header-middle">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
  					<div class="ulockd-welcm-hmddl">
						<a href="index.html" class="ulockd-main-logo"><img src="images/header-logo.png" alt=""></a>
  					</div>  					
  				</div>
  				<div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
					<div class="ulockd-ohour-info style2">
						<div class="ulockd-icon pull-left text-thm2"><span class="flaticon-map-marker"></span></div>
						<div class="ulockd-info">
							<h3>Location</h3>
							<p class="ulockd-cell">your location here</p>
						</div>
					</div>
  				</div>
  				<div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
					<div class="ulockd-ohour-info style2">
						<div class="ulockd-icon pull-left text-thm2"><span class="flaticon-clock-1"></span></div>
						<div class="ulockd-info">
							<h3>Openig Hour</h3>
							<p class="ulockd-addrss">Sat-Thi 9:00-20:00</p>
						</div>
					</div>
  				</div>
  				<div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
					<div class="ulockd-ohour-info style2">
						<div class="ulockd-icon pull-left text-thm2"><span class="flaticon-old-handphone"></span></div>
						<div class="ulockd-info">
							<h3>Call Us</h3>
							<p class="ulockd-addrss">+98 9875 5968 54</p>
						</div>
					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<!-- Header Styles -->
	<header class="header-nav">
		<div class="main-header-nav navbar-scrolltofixed">
			<div class="container">
			    <nav class="navbar navbar-default bootsnav menu-style1">
			        <div class="container ulockd-pdng0">
			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse ulockd-padd-md-30" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-left">
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
			                        <ul class="dropdown-menu">
										<li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Multipage</a>
					                        <ul class="dropdown-menu">
												<li><a href="index-multipage.html">Multipage One</a></li>
												<li><a href="index-multipage2.html">Multipage Two</a></li>
					                        </ul>
					                    </li>
										<li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Page</a>
					                        <ul class="dropdown-menu">
												<li><a href="index-singlepage.html">Single Page One</a></li>
												<li><a href="index-singlepage2.html">Single Page Two</a></li>
					                        </ul>
					                    </li>
										<li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Boxed Style</a>
					                        <ul class="dropdown-menu">
												<li><a href="index-multipage-boxed.html">Multipage One Boxed</a></li>
												<li><a href="index-multipage2-boxed.html">Multipage Two Boxed</a></li>
												<li><a href="index-singlepage-boxed.html">Single Page One Boxed</a></li>
												<li><a href="index-singlepage2-boxed.html">Single Page Two Boxed</a></li>
					                        </ul>
					                    </li>
										<li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">RTL Style</a>
					                        <ul class="dropdown-menu">
												<li><a href="index-multipage-rtl.html">Multipage One RTL</a></li>
												<li><a href="index-multipage2-rtl.html">Multipage Two RTL</a></li>
												<li><a href="index-singlepage-rtl.html">Single Page One RTL</a></li>
												<li><a href="index-singlepage2-rtl.html">Single Page Two RTL</a></li>
					                        </ul>
					                    </li>
			                        </ul>
			                    </li>
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
			                        <ul class="dropdown-menu">
										<li><a href="page-about.html">About</a></li>
			                        </ul>
			                    </li>
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Causes</a>
			                        <ul class="dropdown-menu">
										<li><a href="page-causes-grid.html">Causes Grid</a></li>
										<li><a href="page-causes-list.html">Causes List</a></li>
										<li><a href="page-causes-single.html">Causes Single</a></li>
			                        </ul>
			                    </li>
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Volunteer</a>
			                        <ul class="dropdown-menu">
										<li><a href="page-team-one.html">Volunteer One</a></li>
										<li><a href="page-team-two.html">Volunteer Two</a></li>
										<li><a href="page-team-details.html">Volunteer Details</a></li>
										<li><a href="page-team-registration.html">Volunteer Registration</a></li>
			                        </ul>
			                    </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu">
										<li class="dropdown">
											<a href="blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Blog Grid</a>
	                                        <ul class="dropdown-menu">
												<li><a href="blog-grid-one.html">Blog Grid One</a></li>
												<li><a href="blog-grid-two.html">Blog Grid Two</a></li>
												<li><a href="blog-grid-three.html">Blog Grid Three</a></li>
	                                        </ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Single</a>
	                                        <ul class="dropdown-menu">
												<li><a href="blog-signle-left-sidebar.html">Sidebar left</a></li>
												<li><a href="blog-signle-right-sidebar.html">Sidebar Right</a></li>
												<li><a href="blog-signle-sidebar-less.html">Sidebar Less</a></li>
	                                        </ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>
	                                        <ul class="dropdown-menu">
												<li><a href="blog-left-sidebar.html">Sidebar left</a></li>
												<li><a href="blog-right-sidebar.html">Sidebar Right</a></li>
												<li><a href="blog-sidebar-less.html">Sidebar Less</a></li>
	                                        </ul>
										</li>
                                    </ul>
                                </li>
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
			                        <ul class="dropdown-menu">
										<li><a href="page-appointment.html">Appointment</a></li>
										<li><a href="page-coming-soon.html">Coming Soon</a></li>
										<li><a href="page-donation.html">Donation Form</a></li>
										<li><a href="page-error.html">Error</a></li>
					                    <li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event</a>
					                        <ul class="dropdown-menu">
												<li><a href="page-event-grid.html">Event Grid</a></li>
												<li><a href="page-event-list.html">Event List</a></li>
												<li><a href="page-event-single.html">Event Single</a></li>
					                        </ul>
					                    </li>
										<li><a href="page-faq.html">Faq</a></li>
					                    <li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Google Calendar</a>
					                        <ul class="dropdown-menu">
												<li><a href="page-fullcalendar.html">Monthly Event</a></li>
												<li><a href="page-fullcalendar2.html">Weekly Event</a></li>
					                        </ul>
					                    </li>
					                    <li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
					                        <ul class="dropdown-menu">
												<li><a href="page-gallery.html">Gallery One</a></li>
												<li><a href="page-gallery2.html">Gallery Two</a></li>
												<li><a href="page-gallery3.html">Gallery Three</a></li>
					                        </ul>
					                    </li>
					                    <li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pricing</a>
					                        <ul class="dropdown-menu">
												<li><a href="page-pricing.html">Pricing One</a></li>
												<li><a href="page-pricing2.html">Pricing Two</a></li>
					                        </ul>
					                    </li>
					                    <li class="dropdown">
					                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
					                        <ul class="dropdown-menu">
												<li><a href="page-shop.html">Our Shop</a></li>
												<li><a href="page-product-details.html">Product Details</a></li>
												<li><a href="page-shoping-cart.html">Shopping Cart</a></li>
												<li><a href="page-shoping-checkout.html">Shopping Checkout</a></li>
					                        </ul>
					                    </li>
										<li><a href="page-sitemap.html">Sitemap</a></li>
										<li><a href="page-under-construction.html">Under Construction</a></li>
			                        </ul>
			                    </li>
			                    <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
			                        <ul class="dropdown-menu">
										<li><a href="page-contact.html">Contact Us</a></li>
										<li><a href="page-contact2.html">Contact Us Two</a></li>
			                        </ul>
			                    </li>
			                </ul>
							<ul class="ulockd-quote-btn pull-right hidden-xs hidden-sm">
				                <li>
				                  	<a href="#" class="btn btn-lg ulockd-btn-thm2" data-toggle="modal" data-target=".bs-example-modal-default"> Donate Now </a>
				                </li>
				            </ul>
			            </div><!-- /.navbar-collapse -->
			        </div>
			    </nav>
			</div>
		</div>		
	</header>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">LATEST NEWS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-icd-layer">
						<ul class="list-inline ulockd-icd-sub-menu">
							<li><a href="#"> HOME </a></li>
							<li><a href="#"> > </a></li>
							<li> <a href="#"> LATEST NEWS </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ulockd-ip-latest-news">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/1.jpg" alt="1.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post">
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/2.jpg" alt="2.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/3.jpg" alt="3.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
			</div>
			<div class="row ulockd-mrgn1225">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/4.jpg" alt="4.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/5.jpg" alt="5.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<article class="ulockd-blog-post ulockd-mrgn630">
						<div class="post-thumb">
							<div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
							<img class="img-responsive img-whp" src="images/blog/6.jpg" alt="6.jpg">
							<ul class="list-inline posted-date">
								<li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Diade3007</a></li>
								<li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
							</ul>
						</div>
						<div class="bp-details one text-left">
							<h3 class="post-title">Let's Move With Our Blog</h3>
							<p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor dignissimos eum corporis, quaerat, placeat.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partner -->
	<section class="ulockd-partner">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner1.png" alt="partner1.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner2.png" alt="partner2.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner3.png" alt="partner3.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner4.png" alt="partner4.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner5.png" alt="partner5.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="images/partners/partner6.png" alt="partner6.png"></div></div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
					<div class="ulockd-footer-fst-col">
						<img alt="" src="images/footer-logo.png" class="img-responsive ulockd-footer-log">
    					<p class="ulockd-ftr-text">Regardless of whether you need to stay in your own house, are searching for help with a more established relative, looking for exhortation on paying for care, we can help you.</p>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quis assumenda adipisci, quasi perferendis id.</p>
						<ul class="list-inline ulockd-footer-font-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-feed"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
					<div class="ulockd-footer-qlink">
						<h3 class="text-uppercase">NAVIGATI<span class="text-thm2">ON</span></h3>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Home</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Our Services</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Team Details</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-contact">
						<h3 class="text-uppercase">CONTACT <span class="text-thm2">US</span></h3>
						<p>Victoria 8007 Australia Envato HQ 121 King Street, Melbourne.</p>
						<div class="ulockd-ftr-phone"><span>Phone </span>: <a href="#"> 99 55 66 88 526</a></div>
						<div class="ulockd-ftr-fax"><span>Fax </span>: <a href="#"> 55 44 77 62</a></div>
						<div class="ulockd-ftr-mail"><span>Email </span>: <a href="#"> beahand@email.com</a></div>
						<div class="ulockd-ftr-mail"><span>Website </span>: <a href="#"> https://envato.com/</a></div>
						<div class="ulockd-ftr-mail"><span>Website </span>: <a href="#"> https://themeforest.net/</a></div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-twitter example1">
						<h3 class="text-uppercase">TWITT<span class="text-thm2">ER</span></h3>
						<div class="twitter"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<section class="ulockd-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Be aHand Copyright© 2017.Unlock Design All right reserved.</p>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
</body>

<!-- Mirrored from unlockdesizn.com/html/non-profit/be-ahand/demo/blog-grid-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 11:29:50 GMT -->
</html>

<?php
include './include/include_js.php';
?>
