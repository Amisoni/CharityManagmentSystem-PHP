<?php
session_start();
include 'include_css.php';
?>
<html dir="ltr" lang="en">
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="wrapper">
            <div class="preloader"></div>
            <div class="header-topped">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="welcm-ht text-center">
                                <p class="ulockd-welcntxt">Welcome To Our<span class="color-black31"> Angel </span> Charity Organizations</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="welcm-ht text-right">
                                <ul class="list-inline">
                                    <li>
                                        <?php
                                        if (isset($_SESSION['registration_id']) && $_SESSION['registration_id'] != "") {
                                            echo "<img src='$_SESSION[profile_path]' style=height:10% ;width:10%;/>";
                                            echo ucwords($_SESSION['first_name'] . " " . $_SESSION['last_name']);
                                           ?>
                                            <ul class="list-inline">
                                                <li><a href="update_forms/registration_update.php" >Profile</a></li>                                                                                   
                                                <li><a href="../logout.php">Logout</a> </li>                                         
                                            </ul>                                   
                                        <?php } else { ?>
                                            <a href="#">
                                                <div data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"> Sign In | Sign Up</div>
                                            </a>
                                        <?php } ?>
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
                                                                <form class="ulockd-reg-form text-center" name="fregister" action="../controller/registration_controller.php" onsubmit="return validateForm();" method="post" enctype="multipart/form-data" >
                                                                    <h3> <span class="flaticon-house-key"></span> Register</h3
                                                                    <p>Join our community today:</p>
                                                                    <div class="form-group">
                                                                        <input type="file" class="form-control" name="flUserPhoto" id="flUserPhoto"/> 
                                                                        <!--<label class="error" for="flUserPhoto" id="file_error" style="display:none">Select File</label>-->
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="exampleInputNamexa" id="exampleInputNamexa" placeholder="First Name">
                                                                        <label class="error" for="exampleInputNamexa" id="name_error" style="display: none"> First Name is required.</label>    
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="t3ext" class="form-control" name="exampleInputNamexb" id="exampleInputNamexb" id="exampleInputNamexb" placeholder="Last Name">
                                                                        <label class="error" for="exampleInputNamexa" id="lastname_error" style="display: none">Last Name is required</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="date" class="form-control" name="date" id="date" placeholder="birthdate">
                                                                        <label class="error" for="date" id="date_error" style="display: none">date is required.</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control"  name="exampleInputEmailx" id="exampleInputEmailx" placeholder="Email">
                                                                        <label class="error" for="exampleInputEmailx" id="email_error" style="display: none">E-mail is required.</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="Password" name="txtPassword" id="txtPassword">
                                                                        <label class="error" for="txtPassword" id="password_error" style="display: none">Password is required.</label> 
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="radio-inline" style="float: left">
                                                                            <input style="height: 20px" type="radio" name="optradio" value="m">Male
                                                                        </label>
                                                                        <label class="radio-inline" style="float: left">
                                                                            <input style="height: 20px" type="radio" name="optradio" value="f">FeMale
                                                                        </label>
                                                                        <label class="error" for="optradio" id="gender_error" style="display: none">Select Gender.</label>
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <input type ="number" maxlength="10" class="form-control" placeholder="mobilenumber" name ="txtNo" id="txtNo"> 
                                                                        <label class="error" for="txtNo" id="mobileno_error" style="display: none"> Enter valid Mobile Number</label>
                                                                    </div>                                                               
                                                                    <div class="form-group">
                                                                        <div class="form-control" style="padding-right: 180px;">
                                                                            Usertype
                                                                            <select name="sltUsertype" value="sltUsertype" id="sltUsertype" >
                                                                                <option value = "0">--SelectYourUserType--</option>

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
                                                                            <label class="error" for="sltUsertype" id="type_error" style="display: none">Select User Type</label>
                                                                        </div>                                                                                                                                                        
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-control" style="padding-right: 250px;">
                                                                            City  
                                                                            <select name="txtCity" value="txtCity" id="txtCity"> 
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
                                                                            <label class="error" for="txtCity" id="city_error" style="display: none">Select City.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">  
                                                                        <input type="text" class="form-control" placeholder="adderess_line_one" name="txtAdd" id="txtAdd">
                                                                        <label class="error" for="txtAdd" id="address_error" style="display: none">Address is required.</label>
                                                                    </div>
                                                                    <div  class="form-group"> 
                                                                        <input type="text" class="form-control" placeholder="adderess_line_two" name="txtAdd2" id="txtAdd2">
                                                                        <label class="error" for="txtAdd2" id="Add2_error" style="display: none">Address is required.</label>
                                                                    </div>
                                                                    <div class="form-group" >  
                                                                        <input type ="text" class="form-control" placeholder="pincode" id="pincode" name ="pincode"> </div>
                                                                    <label class="error" for="pincode" id="pincode_error" style="display: none">Pincode is required.</label>
                                                                    <div class="form-group text-center">
                                                                        <button type="submit" class="btn btn-default ulockd-btn-thm2"> Sign Up </button>
                                                                    </div>
                                                                </form>
                                                                <script>
                                                                    function validateForm() {
                                                                        var flag = true;
                                                                        if ($("#exampleInputNamexa").val() === '') {
                                                                            $("#name_error").show();
                                                                            flag = false;
                                                                        }

                                                                        if ($("#exampleInputNamexb").val() === '') {
                                                                            $("#lastname_error").show();
                                                                            flag = false;
                                                                        }

                                                                        if ($("#date").val() === '') {
                                                                            $("#date_error").show();
                                                                            flag = false;
                                                                        }

                                                                        if ($("#exampleInputEmailx").val() === '') {
                                                                            $("#email_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#txtPassword").val() === '') {
                                                                            $("#password_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if (!$("input[name=optradio]").is(":checked")) {
                                                                            $("#gender_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#txtNo").val().length !== 10) {
                                                                            $("#mobileno_error").show();
                                                                            flag = false;
                                                                        }
                                                                        alert($("#sltUsertype").val());
                                                                        if ($("#sltUsertype").val() === '0') {
                                                                            $("#type_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#txtCity").val() === "0") {
                                                                            $("#city_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#txtAdd").val() === '') {
                                                                            $("#address_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#txtAdd2").val() === '') {
                                                                            $("#Add2_error").show();
                                                                            flag = false;
                                                                        }
                                                                        if ($("#pincode").val().length !== 6) {
                                                                            $("#pincode_error").show();
                                                                            flag = false;
                                                                        }
                                                                        return flag;

                                                                    }
                                                                </script>
                                                            </div>  	
                                                        </div>
                                                    </div>
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
        </div>

        <?php
        include 'include_js.php';
        ?>