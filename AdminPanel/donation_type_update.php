
<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<body>

    <form class="ulockd-login-form" action="../controller/donation_type_update_controlller.php" method="post">
        <h3> donation type</h3>
       
        <div class="form-group" hidden="donation_type_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_donation_type WHERE donation_type_id = " . $_GET['donation_type_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='donation_type_id' value='$row[donation_type_id]' />";
            }
            ?>
                </div>

        <div class="form-group">
            <input type="text" class="form-control" name="txtDonationType" id="txtDonationType" placeholder="Donation Type" value="<?php echo $row['donation_type']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
    </form>
</div>
</body>
<?php
include './include/include_js.php';
//include '../include/include_footer.php';
?>