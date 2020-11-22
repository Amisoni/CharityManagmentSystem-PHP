<?php
//session_start();
include 'inclde_logo.php';
?>
<header class="header-nav">     
    <div class="main-header-nav navbar-scrolltofixed">
        <div class="container">
            <nav class="navbar navbar-default bootsnav menu-style1">
                <div class="container ulockd-pad90">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeIn">
                        <li class="dropdown">
                            <ul class="nav navbar-nav navbar-left" data-in="fadeIn">
                                <li class="dropdown">
                                    <a href="../index.php">  <h4> HOME </h4> </a> 
                                </li>  
                                <?php
                                if (isset($_SESSION['registration_id']) && $_SESSION['registration_id'] != "") {
                                    ?>
                                    <li class="dropdown">
                                        <a href="../insert_forms/DonationPlanView.php"> <h4> DONATION PLAN </h4> </a> 
                                    </li>
                                    <li class="dropdown">
                                        <a href="../insert_forms/needer_view.php"> <h4> NEEDER VIEW</h4> </a>
                                    </li>
                                <?php } ?>
                                    <li class="dropdown">
                                        <a href="../insert_forms/BlogView.php"><h4> BLOG </h4> </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="../insert_forms/donor_view.php"><h4> DONOR VIEW </h4></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="../about_us.php"><h4> ABOUT US</h4> </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="../insert_forms/feedback.php"><h4> FEEDBACK </h4></a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            </div>
            </nav>
        </div>
    </div>		

    <?php
//    include 'include_js.php';
    ?>