<?php
include './include/include_css.php';
?>
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
                        <form class="ulockd-login-form" action="controller/login_controller.php" method="post">
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
                        <form class="ulockd-reg-form text-center" action="../controller/registration_controller.php" method="post" enctype="multipart/form-data">
                            <h3> <span class="flaticon-house-key"></span> Register</h3>
                            <p>Join our community today:</p>

                            <div class="form-group">
                                <input type="file" class="form-control" name="flUserPhoto" id="flUserPhoto"/>
                            </div>

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
                                    <input style="height: 20px" type="radio" name="optradio">Male
                                </label>
                                <label class="radio-inline" style="float: left">
                                    <input style="height: 20px" type="radio" name="optradio">FeMale
                                </label>
                            </div>

                            <div class="form-group"> 
                                <input type ="text"  class="form-control" placeholder="mobilenumber" name ="txtNo"> 
                            </div> 
                            <div class="form-group">
                                <div class="form-control" style="padding-right: 290px;">
                                    Usertype
                                    <select name="sltUsertype" value="sltUsertype">
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
                                <div  class="form-control" style="padding-right: 290px;">
                                    City   
                                    <select name="txtCity" value="txtCity"> 
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
                                <input type="text" class="form-control" placeholder="Adderess Line One" name="txtAdd">
                            </div>

                            <div  class="form-group"> 
                                <input type="text" class="form-control" placeholder="Adderess Line Two" name="txtAdd2">
                            </div>

                            <div class="form-group" >  
                                <input type ="text" class="form-control" placeholder="Pincode" name ="pincode"> </div>


                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
                            </div>
                        </form>
                    </div>  	
                </div> 
            </div>
        </div>
    </div>
</div>
<?php
include './include/include_js.php';
?>