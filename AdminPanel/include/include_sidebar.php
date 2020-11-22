<?php
//include './include_css.php';
session_start();
?>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <!--<input type="text" placeholder="START TYPING...">-->
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index-2.html"> Angel Charity Organizations</a>
            </div>
        </div>
    </nav>
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img  width="48" height="48" src="<?Php echo "$_SESSION[profile_path]"; ?>"/>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucwords($_SESSION['first_name']) . " " . ucwords($_SESSION['last_name']); ?></div>
                    <!--<div class="email"></div>-->
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="../update_profile.php"> UPDATE PROFILE </a>
                            </li>
                            <li><a href="../logout.php">LOG OUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>HOME</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="admin_panel.php"> HOME </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>DONATION</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../donation_plan.php">DONATION PLAN FORM</a>
                            </li>

                            <li>
                                <a href="../donation_type.php">DONATION TYPE FORM</a>
                            </li>
                            <li>
                                <a href="../donation_info_view.php">DONATION PLAN LIST</a>
                            </li>
                            <li>
                                <a href="../donation_type_list.php"> DONATION TYPE LIST</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>NEEDER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=".../needer_list.php"> NEEDER LIST </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span> GEO </span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../city_insert.php"> CITY </a>
                            </li>

                            <li>
                                <a href="../city_list.php"> CITY LIST  </a>
                            </li>
                            <li>
                                <a href="../country_insert.php"> COUNTRY </a>
                            </li>
                            <li>
                                <a href="../country_list.php"> COUNTRY  LIST </a>
                            </li>
                            <li>
                                <a href="../district_insert.php"> DISTRICT </a>
                            </li>
                            <li>
                                <a href="../district_list.php"> DISTRICT LIST </a>
                            </li>
                            <li>
                                <a href="../state_insert.php"> STATE </a>
                            </li>
                            <li>
                                <a href="../state_list.php"> STATE LIST </a>
                            </li>
                        </ul>
                    </li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>BANK</span>
                    </a>
                    <ul class="ml-menu"> 
                        <li>
                            <a href="../bank_name_form.php"> BANK NAME </a>
                        </li>
                        <li>
                            <a href="../bank_info_list.php"> BANK INFO </a>
                        </li>

                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>PAYMENT MODE</span>
                    </a>
                    <ul class="ml-menu"> 
                        <li>
                            <a href="../payment_mode.php"> PAYMENT </a>
                        </li>
                        <li>
                            <a href="../payment_list.php"> PAYMNET LIST </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>BLOG</span>
                    </a>
                    <ul class="ml-menu"> 
                        <li>
                            <a href="../blog.php"> BLOG </a>
                        </li>
                        <li>
                            <a href="../blog_list.php"> BLOG LIST </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>FEED BACK</span>
                    </a>
                    <ul class="ml-menu"> 
                        <li>
                            <a href="../feedback.php"> FEED BACK FORM </a>
                        </li>
                        <li>
                            <a href="../feedback_list.php"> FEED BACK LIST </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span> APPROVE DONATION</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="approve_donate.php">
                                APPROVE DONATION  
                            </a>
                            <a href="needer_donor_donate.php">
                                NEEDER DONOR DONATION   
                            </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span> REGISTRATION LIST</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="registration_list.php"> REGISTRATION LIST </a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>REPORTS</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href="plan_report.php"> PLAN REPORT </a>
                        </li>
                        <li>
                            <a href="donationtype_report_form.php"> DONATION TYPE REPORT FORM </a>
                        </li>
                        <li>
                            <a href="../donationplan_report.php"> DONATION PLAN REPORT </a>
                        </li>
                        <li>
                            <a href="report_registration.php"> REGISTRATION REPORT </a>
                        </li>
                    </ul>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>
    <!--
    -->    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <!--<h2>DASHBOARD</h2>-->
            </div>
            <!--            <div class="row clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="col-lg-3">
                                    <div class="info-box bg-pink hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">playlist_add_check</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">TOTAL DONOR</div>
                                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>-->
            <!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="col-lg-3">
                                    <div class="info-box bg-cyan hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">help</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">TOTAL NEEDER</div>
                                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>-->
            <!--</div>-->
            <!--</div>-->
            <!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class= "col-lg-3"> 
                                    <div class="info-box bg-light-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">forum</i>
                                        </div>-->
            <!--                            <div class="content">
                                            <div class="text">TOTAL VISITORS</div>
                                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>-->
            <!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="col-lg-3">
                                    <div class="info-box bg-deep-orange hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">forum</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">TOTAL USERS</div>
                                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>-->
            <!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="info-box bg-orange hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">NEW VISITORS</div>
                                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                                </div>-->
            <!--</div>-->
            <?php
//include './include_js.php';
            ?>