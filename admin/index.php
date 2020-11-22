<?php
//include '../include/include_header.php';
?>
<?php
//include 'include_css.php';
//
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
<!--                                                                    <div class="radio">
                                                                        <div class="gender">Gender</div>
                                                                            <input  type="radio" name="rBtngender" value="m" id="rBtngender"> male
                                                                            <label for="rBtngender"> male</label>  
                                                                            <input  type="radio"  name="rBtngender" value="f" id="rBtngender1"> female
                                                                            <label for="rBtngender1"> female</label>  
                                                                    </div>-->

                                                                    <div class="form-group">
                                                                        <div class="form-control">
                                                                            gender
                                                                            <input  type="radio" name="rBtngender" value="m" id="rBtngender"> <label class="male" for="rBtngender"> male</label>  
                                                                            <input  type="radio"  name="rBtngender" value="f" id="rBtngender1"> <label class="female" for="rBtngender1"> female</label>
                                                                        </div>
                                                                    </div>
                                                                    <!--                                                                    <div>
                                                                                                                                            <li class="amount-box">
                                                                                                                                                <input id="radio-three" type="radio" name="payment-group">
                                                                                                                                                <label for="radio-three"> $30</label>
                                                                                                                                            </li>
                                                                                                                                        </div>-->
                                                                    <div class="form-group"> 
                                                                        <input type ="text"  class="form-control" placeholder="mobilenumber" name ="txtNo"> 
                                                                    </div> 

                                                                    <div class="form-group">
                                                                        <div class="form-control">
                                                                            usertype
                                                                            <select name="txtUsertype" value="txtUsertype">
                                                                                <?php
                                                                                include '../controller/connection.php';
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
                                                                        <div  class="form-control">
                                                                            city   
                                                                            <select name="txtCity" value="txtCity"> 
                                                                                <?php
                                                                                include '../controller/connection.php';
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
<!--            <div class="header-middle">
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
                                     Trigger the modal with a button 
                                    <button type="button" class="btn btn-lg ulockd-btn-thm2 ulockd-mrgn1215 ulockd-mrgn610" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
                                     Modal 
                                    <div id="Donation-form-modal" class="modal fade bs-example-modal-default text-left" role="dialog">
                                        <div class="modal-dialog">

                                             Modal content
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
            </div>-->

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
<!--                                <div class="attr-nav">
                                    <ul>
                                        <li class="dropdown">
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
                                </div>-->
                                <!-- End Atribute Navigation -->

                                <!-- Start Header Navigation -->
<!--                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                       <i class="fa fa-bars"></i>
                                    </button>
                                </div>-->
                                 <!--End Header Navigation--> 

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav navbar-left" data-in="fadeIn">
                                        <li class="dropdown">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Donation Details</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="DonationPlanView.php">DonationPlanView </a></li>
                                                <li><a href="donation_information.php">Donation Information</a></li>
                                                <li><a href="donation_plan_form.php">Donation Plan Form</a></li>
                                                <li><a href="donation_type.php">Donation Type</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Needer Details</a>
                                            <ul class="dropdown-menu">
                                                <li> <a href="receiver_bank_detail.php">Bank Detail</a></li>
                                                <li>  <a href="receiver_information.php">Needer Information</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="blog.php">Blog</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Forms</a>
                                            <ul class="dropdown-menu">
                                                <li> <a href="feedback.php">FeedBack</a></li>
                                                <li>  <a href="payment_mode.php">Payment Type</a></li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update Forms</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="country_update.php"> Country </a></li>
                                                <li><a href="donation_information_update.php">Donation Information</a></li>
                                                <li><a href="donation_plan_update_form.php">Donation Plan</a></li>
                                                <li><a href="donation_type_update.php">Donation Type</a></li>
                                                <li><a href="payment_mode_update.php">Payment</a></li>
                                                <li><a href="receiver_bank_update.php">Bank Details</a></li>
                                                <li><a href="receiver_update.php">Receiver Details</a></li>
                                                <li><a href="registration_update.php">Registration</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">List Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="bank_info_list.php"> Bank Information </a></li>
                                                <li><a href="country_list.php"> Country </a></li>
                                                <li><a href="donation_info_list.php"> Donation Information </a></li>
                                                <li><a href="donation_plan_list.php"> Donation Plan </a></li>
                                                <li><a href="donation_type_list.php"> Donation Type </a></li>
                                                <li><a href="payment_list.php"> Payment </a></li>
                                                <li><a href="receiver_info_list.php"> Receiver Bank Information </a></li>
                                                <li><a href="registration_update_list.php"> Donation Information </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
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
            </header>

            </div>		

            <?php
            //          include 'include_js.php';
            ?>

            <?php
            include '../include/include_footer.php';
            ?>