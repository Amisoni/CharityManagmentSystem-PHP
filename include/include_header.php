<?php
include 'include_css.php';
?>
<!DOCTYPE html>

<html dir="ltr" lang="en">
    <!-- Mirrored from unlockdesizn.com/html/non-profit/be-ahand/demo/index-multipage.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 11:18:56 GMT -->
    <body>
        <div class="wrapper">
            <div class="preloader"></div>
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
                                    <!--                                <li>
                                                                        <div class="dropdown lang-button text-center">
                                                                            <button class="dropbtn">Language</button>
                                                                            <div class="dropdown-content">
                                                                                <a href="#">English</a>
                                                                                <a href="#">French</a>
                                                                                <a href="#">Spanish</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>-->

                                    <li>

                                        <a href="update_forms/registration_update.php" class="btn btn-default ulockd-btn-styledark">upadate your info</a>                                                                                      
                                        <a href="../logout.php" class="btn btn-default ulockd-btn-styledark">logout</a>                                                                                      

                                        <a href="#">
                                            <div data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"> Sign In | Sign Up</div>
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
                                                                <form class="ulockd-login-form" action="../controller/login_controller.php" method="post">
                                                                    <h3><span class="flaticon-lock"></span> Login</h3>
                                                                    <p>Enter phonenumber and password to login:</p>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="phonenumber" name="txtNo">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Password" name="txtPassword">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>

                                                                </form>
                                                            </div>                           
                                                            <div class="col-sm-12 col-lg-7 hvr-float-shadow">
                                                                <form class="ulockd-reg-form text-center" action="../controller/registration_controller.php" method="post">
                                                                    <h3> <span class="flaticon-house-key"></span> Register</h3>
                                                                    <p>Join our community today:</p>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="exampleInputNamexa" id="exampleInputNamexa" placeholder="First Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="exampleInputNamexb" id="exampleInputNamexb" id="exampleInputNamexb" placeholder="Last Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="date" class="form-control" name="date" id="date" placeholder="birthdate">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control"  name="exampleInputEmailx" id="exampleInputEmailx" placeholder="Email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Password" name="txtPassword">
                                                                    </div>
                                                                    <!--                                                                    <div class="form-group">
                                                                                                                                            <input type="password" class="form-control" placeholder="Repeat password">
                                                                                                                                       </div>-->
                                                                  <div class="form-group">
                                                                        <label class="radio-inline" style="float: left">
                                                                            <input  style="height: 20px" type="radio" name="optradio" value="m">Male
                                                                        </label>
                                                                        <label class="radio-inline" style="float: left">
                                                                            <input  style="height: 20px" type="radio" name="optradio" value="f">FeMale
                                                                        </label>
                                                                    </div>
 
                                                                    <div class="form-group"> 
                                                                        <input type ="text"  class="form-control" placeholder="mobilenumber" name ="txtNo"> 
                                                                    </div> 

                                                                    <div class="form-group">
                                                                        <div class="form-control" style="padding-right: 180px;">
                                                                            Usertype
                                                                            <select name="sltUsertype" value="sltUsertype" >
                                                                                <option value = '0'>--SelectYourUserType--</option>

                                                                                <?php
                                                                                include './controller/connection.php';
                                                                                $query = "select * from tbl_user_type where user_type_id != 1"
                                                                                        . "";

                                                                                $result = mysqli_query($conn, $query);
                                                                                if ($result) {
                                                                                    while ($show = mysqli_fetch_array($result)) {
                                                                                        echo "<option value='" . $show['user_type_id'] . "'> $show[user_type]</option>";
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>                                                                                                                                                        
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <div  class="form-control" style="padding-right: 250px;">

                                                                            City  
                                                                            <select name="txtCity" value="txtCity"> 
                                                                                <option value = '0'>--SelectYourCity--</option>                                                                               
                                                                                <?php
                                                                                include './controller/connection.php';
                                                                                $query = "select * from tbl_city";
                                                                                $result = mysqli_query($conn, $query);
                                                                                if ($result) {
                                                                                    while ($show = mysqli_fetch_array($result)) {
                                                                                        echo "<option value='" . $show['city_id'] . "'> $show[city_name]</option>";
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
 
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">  
                                                                        <input type="text" class="form-control" placeholder="adderess_line_one" name="txtAdd">
                                                                    </div>

                                                                    <div  class="form-group"> 
                                                                        <input type="text" class="form-control" placeholder="adderess_line_two" name="txtAdd2">
                                                                    </div>

                                                                    <div class="form-group" >  
                                                                        <input type ="text" class="form-control" placeholder="pincode" name ="pincode"> </div>


                                                                    <div class="form-group text-center">
                                                                        <button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
                                                                    </div>
                                                                </form>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="ulockd-ohour-info style2">
                                <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-email-filled-closed-envelope"></span></div>
                                <div class="ulockd-info">
                                    <h3>Mail Us</h3>
                                    <p class="ulockd-addrss"><strong>Email:</strong> beahand@email.com</p>
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
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-3">
                            <div class="ulockd-ohour-info style2">
                                <div class="ulockd-icon pull-left text-thm2"><span class="flaticon-make-a-donation"></span></div>
                                <div class="ulockd-info">
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-lg ulockd-btn-thm2 ulockd-mrgn1215 ulockd-mrgn610" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
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
                            <!-- Start Top Search -->
                            <div class="top-search">
                                <div class="container">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Top Search -->

                            <div class="container ulockd-pad90">
                                <!-- Start Atribute Navigation -->
                                <div class="attr-nav">
                                    <ul>
                                        <li class="dropdown">
                                            <!--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                                                                        <i class="fa fa-shopping-bag"></i>
                                                                                        <span class="badge">3</span>
                                                                                    </a>-->
                                            <ul class="dropdown-menu cart-list">
                                                <li>
                                                    <a href="#" class="photo"><img src="images/shop/s1.jpg" class="cart-thumb" alt="s1.jpg" /></a>
                                                    <h6><a href="#">Delica omtantur </a></h6>
                                                    <p>2x - <span class="price">$99.99</span></p>
                                                </li>
                                                <li>
                                                    <a href="#" class="photo"><img src="images/shop/s2.jpg" class="cart-thumb" alt="s2.jpg" /></a>
                                                    <h6><a href="#">Omnes ocurreret</a></h6>
                                                    <p>1x - <span class="price">$33.33</span></p>
                                                </li>
                                                <li>
                                                    <a href="#" class="photo"><img src="images/shop/s3.jpg" class="cart-thumb" alt="s3.jpg" /></a>
                                                    <h6><a href="#">Agam facilisis</a></h6>
                                                    <p>2x - <span class="price">$99.99</span></p>
                                                </li>
                                                <li class="total">
                                                    <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                                    <a href="#" class="btn btn-default btn-cart">Cart</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End Atribute Navigation -->

                                <!-- Start Header Navigation -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                                <!-- End Header Navigation -->

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav navbar-left" data-in="fadeIn">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                                            <!--                                        <ul class="dropdown-menu">
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
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                                            <!--                                        <ul class="dropdown-menu">
                                                                                        <li><a href="page-about.html">About</a></li>
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Causes</a>
                                            <!--                                        <ul class="dropdown-menu">
                                                                                        <li><a href="page-causes-grid.html">Causes Grid</a></li>
                                                                                        <li><a href="page-causes-list.html">Causes List</a></li>
                                                                                        <li><a href="page-causes-single.html">Causes Single</a></li>
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Volunteer</a>
                                            <!--                                        <ul class="dropdown-menu">
                                                                                        <li><a href="page-team-one.html">Volunteer One</a></li>
                                                                                        <li><a href="page-team-two.html">Volunteer Two</a></li>
                                                                                        <li><a href="page-team-details.html">Volunteer Details</a></li>
                                                                                        <li><a href="page-team-registration.html">Volunteer Registration</a></li>
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                            <!--                                        <ul class="dropdown-menu">
                                                                                        <li class="dropdown">
                                                                                            <a href="blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Blog Grid </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a href="blog-grid-one.html">Blog Grid One </a></li>
                                                                                                <li><a href="blog-grid-two.html">Blog Grid Two </a></li>
                                                                                                <li><a href="blog-grid-three.html">Blog Grid Three </a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="dropdown">
                                                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Single </a>
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
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                            <!--                                        <ul class="dropdown-menu">
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
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                            <!--                                        <ul class="dropdown-menu">
                                                                                        <li><a href="page-contact.html">Contact Us</a></li>
                                                                                        <li><a href="page-contact2.html">Contact Us Two</a></li>
                                                                                    </ul>-->
                                        </li>
                                        <li class="dropdown megamenu-fw">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                                            <!--                                        <ul class="dropdown-menu megamenu-content" role="menu">
                                                                                        <li>
                                                                                            <div class="row">
                                                                                                <div class="col-menu col-md-3">
                                                                                                    <h4 class="title">Blog Classic/Single</h4>
                                                                                                    <div class="content">
                                                                                                        <ul class="menu-col">
                                                                                                            <li><a href="blog-signle-left-sidebar.html">Blog Single Sidebar left</a></li>
                                                                                                            <li><a href="blog-left-sidebar.html">Blog Sidebar left</a></li>
                                                                                                            <li><a href="blog-right-sidebar.html">Blog Sidebar Right</a></li>
                                                                                                            <li><a href="blog-sidebar-less.html">Blog Sidebar Less</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div> end col-3 
                                                                                                <div class="col-menu col-md-3">
                                                                                                    <h4 class="title">Shop Page</h4>
                                                                                                    <div class="content">
                                                                                                        <ul class="menu-col">
                                                                                                            <li><a href="page-shop.html">Our Shop</a></li>
                                                                                                            <li><a href="page-product-details.html">Product Details</a></li>
                                                                                                            <li><a href="page-shoping-cart.html">Shopping Cart</a></li>
                                                                                                            <li><a href="page-shoping-checkout.html">Shopping Checkout</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div> end col-3 
                                                                                                <div class="col-menu col-md-3">
                                                                                                    <h4 class="title">Our Gallery</h4>
                                                                                                    <div class="content">
                                                                                                        <ul class="menu-col">
                                                                                                            <li><a href="page-gallery.html" target="_blank">Gallery One</a></li>
                                                                                                            <li><a href="page-gallery2.html" target="_blank">Gallery Two</a></li>
                                                                                                            <li><a href="page-gallery3.html" target="_blank">Gallery Three</a></li>
                                                                                                            <li><a href="shortcode-buttons.html">Sitemap</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>    
                                                                                                <div class="col-menu col-md-3">
                                                                                                    <h4 class="title">Video Campaign</h4>
                                                                                                    <div class="content">
                                                                                                        <ul class="menu-col">
                                                                                                            <li>
                                                                                                                <div class="ulockd-project-sm-thumb">
                                                                                                                    <iframe src="https://player.vimeo.com/video/16405052?title=0&amp;byline=0&amp;portrait=0&amp;color=f2f2ea" width="140" height="120" allowfullscreen></iframe>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div> end col-3 
                                                                                            </div> end row 
                                                                                        </li>
                                                                                    </ul>-->
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>

                            <!-- Start Side Menu -->
                            <div class="side">
                                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                                <div class="widget">
                                    <h4 class="title">Custom Pages</h4>
                                    <ul class="link">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="title">Additional Links</h4>
                                    <ul class="link">
                                        <li><a href="#">Retina Homepage</a></li>
                                        <li><a href="#">New Page Examples</a></li>
                                        <li><a href="#">Parallax Sections</a></li>
                                        <li><a href="#">Shortcode Central</a></li>
                                        <li><a href="#">Ultimate Font Collection</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Side Menu -->
                        </nav>
                    </div>
                </div>		
            </header>
        </div>
        <?php
        include 'include_js.php';
        ?>