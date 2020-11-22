<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<form class="ulockd-login-form" action="../controller/city_update_controller.php" method="post">
    <h3>  City </h3>
<div class="form-group" hidden="city_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_city WHERE city_id = " . $_GET['city_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='city_id' value='$row[city_id]' />";
            }
            ?>
                </div>

        <div class="form-group"> city name
            <input type="text" class="form-control" name="txtcityName" id="txtcityName" placeholder="city name" value="<?php echo $row['city_name']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
</form>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>