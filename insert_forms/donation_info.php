<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form class="ulockd-login-form" action="../controller/btn_donation_information_controller.php" method="post">
        <h3> Donation Information</h3>
        <div class="form-group">
            <div class="form-control">Donation Type
                <select name="sltDonatioType_id" value="sltDonatioType_id">
                    <?php
                    include '../controller/connection.php';
                    $query = "select * from tbl_donation_type";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            echo "<option value='" . $show['donation_type_id'] . "'> $show[donation_type]</option>";
                        }
                    }
                    ?>
                </select>
            </div>        
        </div>
        <div class="form-group">
            <div class="form-control">Payment Name
                <select name="sltPayment_id" value="sltPayment_id">
                    <?php
                    include '../controller/connection.php';
                    $query = "select * from tbl_payment_mode";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            echo "<option value='" . $show['payment_id'] . "'> $show[payment_name]</option>";
                        }
                    }
                    ?>
                </select>
            </div>        
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="noAmount" id="noAmount" placeholder="Amount">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="noUnit" id="noUnit" placeholder="Enter Number Of Units">
        </div>
<!--         <div class="form-group">
            <input type="date" class="form-control" name="txtDate" id="txtDate" placeholder="Enter Number Of Requery Date">
        </div>-->
        <div class="form-group">
            <textarea id="txtDonationDiscription" name="txtDonationDiscription" class="form-control required" rows="4" placeholder="Enter Your Donation Description"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Submit</button>
        </div>
    </form>
</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>

