
<?php
session_start();
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form class="ulockd-login-form" action="../controller/registration_update_controller.php" method="post" enctype="multipart/form-data">
        <h3>  Register</h3>
        <p>Join our community today:</p>
        <div class="form-group" hidden="registration_id">
            <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_registration WHERE registration_id = " . $_SESSION['registration_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='registration_id' value='$row[registration_id]' />";
            }
            ?>
        </div>
        <div class='col-sm-1 col-md-1 fservice-box ulockd-pad395'>
            <div class="form-group">
                <img class="img-responsive img-whp"  src="<?Php echo "$row[profile_path]"; ?>"/>
                <input type="file"  name="flUserPhoto" id="flUserPhoto"/>
            </div>
        </div>
        <div class="form-group"> 
            <input type="text" class="form-control" name="exampleInputNamexa" id="exampleInputNamexa" placeholder="First Name" value="<?php echo $row['first_name']; ?>">
        </div>
        <div class="form-group">             <input type="text" class="form-control" name="exampleInputNamexb" id="exampleInputNamexb" id="exampleInputNamexb" placeholder="Last Name" value="<?php echo $row['last_name']; ?>">
        </div>
        <div class="form-group"> 
            <input type="date" class="form-control" name="date" id="date" placeholder="birthdate" value="<?php echo $row['birth_date']; ?>">
        </div>
        <div class="form-group"> 
            <input type="email" class="form-control"  name="exampleInputEmailx" id="exampleInputEmailx" placeholder="Email" value="<?php echo $row['email_id']; ?>">
        </div>
        <div class="form-group"> 
            <input type="password" class="form-control" placeholder="Password" name="txtPassword" value="<?php echo $row['password']; ?>">
        </div>

        <div class="form-group"> 
            <div class="form-control"> 
                <input type = "radio"  name="rbtnGender" value="m" <?php
                if ($row['gender'] == 'm') {
                    echo "checked";
                }
                ?> > male 

                <input type = "radio"  name="rbtnGender" value="f" <?php
                if ($row['gender'] == 'f') {
                    echo "checked";
                }
                ?> >female
            </div>  
        </div>
        <div class="form-group"> 
            <input type ="text"  class="form-control" placeholder="mobilenumber" name ="txtNo" value="<?php echo $row['phone_number']; ?>"> 
        </div> 

        <div class="form-group">
            <div class="form-control">
                usertype
                <select name="sltUsertype" value="sltUsertype">
                    <?php
                    include './controller/connection.php';
                    $query = "select * from tbl_user_type where user_type_id != 1"
                            . "";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            if ($show['user_type_id'] == $row['user_type_id'])
                                echo "<option value='" . $show['user_type_id'] . "' selected> $show[user_type]</option>";
                            else {
                                echo "<option value='" . $show['user_type_id'] . "'> $show[user_type]</option>";
                            }
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div  class="form-control">
                city   
                <select name="sltCity" value="sltCity"> 
                    <?php
                    include './controller/connection.php';
                    $query = "select * from tbl_city";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            if ($show['city_id'] == $row['city_id'])
                                echo "<option value='" . $show['city_id'] . "'selected> $show[city_name]</option>";
                            else {
                                echo "<option value='" . $show['city_id'] . "'> $show[city_name]</option>";
                            }
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group"> 
            <input type="text" class="form-control" placeholder="adderess_line_one" name="txtAdd"  value="<?php echo $row['address_line_one']; ?>">
        </div>

        <div  class="form-group">    
            <input type="text" class="form-control" placeholder="adderess_line_two" name="txtAdd2" value="<?php echo $row['address_line_two']; ?>">
        </div>

        <div class="form-group" >  
            <input type ="text" class="form-control" placeholder="pincode" name ="noPincode" value="<?php echo $row['pincode']; ?>"> </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-styledark"">upadte</button>
        </div>
    </form>
</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>