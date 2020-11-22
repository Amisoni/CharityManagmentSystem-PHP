<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<form class="ulockd-login-form" action="../controller/state_update_controller.php" method="post">
    <h3> state </h3>
<div class="form-group" hidden="state_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_state WHERE state_id = " . $_GET['state_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='txtstateId' value='$row[state_id]' />";
            }
            ?>
                </div>

        <div class="form-group"> state name
            <input type="text" class="form-control" name="txtstateName" id="txtstateName" placeholder="state name" value="<?php echo $row['state_name']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
</form>
<?php
include './include/include_js.php';
?>