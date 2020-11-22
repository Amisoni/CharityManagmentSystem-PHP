<?php
include '../include/include_js.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form class="ulockd-login-form" action="../controller/donation_info_update_controller.php" method="post">
        <h3>  Donation information</h3>

        <div class="form-group" hidden="donation_info_id">
            <div class="form-control">
            <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_donation_info WHERE donation_info_id = " . $_GET['donation_info_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='donation_info_id' value='$row[donation_info_id]' />";
            }
            ?>
        </div>
        </div>
        <div class="form-group">
            <div class="form-control">plan_name
            <select name="sltPlan_id" value="txtPlan_id">
                <?php
                include '../controller/connection.php';
                $query = "select * from tbl_donation_plan";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($show = mysqli_fetch_array($result)) {
                        if ($show['plan_id'] == $row['plan_id']) {
                            echo "<option value='" . $show['plan_id'] . "' selected> $show[plan_name]</option>";
                        } else {
                            echo "<option value='" . $show['plan_id'] . "'> $show[plan_name]</option>";
                        }
                    }
                }
                ?>
            </select>
        </div>
        </div>
        <div class="form-group"> 
            <div class="form-control">payment type
            <select name="sltPayment_id" value="sltPayment_id">
                <?php
                include '../controller/connection.php';
                $query = "select * from tbl_payment_mode";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($show = mysqli_fetch_array($result)) {
                        if ($show['payment_id'] == $row['payment_id']) {
                            echo "<option value='" . $show['payment_id'] . "'selected> $show[payment_name]</option>";
                        } else {
                            echo "<option value='" . $show['payment_id'] . "'> $show[payment_name]</option>";
                        }
                    }
                }
                ?>
            </select>
        </div>
        </div>
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
    </form>
</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>

