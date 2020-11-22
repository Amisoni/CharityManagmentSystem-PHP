<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<form class="ulockd-login-form" action="../controller/district_update_controller.php" method="post">
    <h3>  District </h3>
<div class="form-group" hidden="district_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_district WHERE district_id = " . $_GET['district_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='txtDistrictId' value='$row[district_id]' />";
            }
            ?>
                </div>

        <div class="form-group"> District name
            <input type="text" class="form-control" name="txtDistrictName" id="txtDistrictName" placeholder="District Name" value="<?php echo $row['district_name']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
</form>
<?php
include './include/include_js.php';
?>