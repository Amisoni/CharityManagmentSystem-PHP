<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form class="ulockd-login-form" action="../controller/donate_controller.php" method="post">
        <h3> Donation Information</h3>

        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    Donation Plan
                    <select class="form-control" name="sltDonationPlan" value="sltDonationPlan" readOnly="readOnly">
                        <?php
                        include '../controller/connection.php';
                        $query = "select * from tbl_donation_plan";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($show = mysqli_fetch_array($result)) {
                                if ($show['plan_id'] == $_GET['id'])
                                    echo "<option value='" . $show['plan_id'] . "' selected>" . $show['plan_name'] . "</option>";
                            }
                        }
                        ?>
                    </select>   
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    Payment Mode
                    <select class="form-control" name="sltPayment_id" value="sltPayment_id" id="sltPayment">
                        <?php
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
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="noAmount" id="noAmount" placeholder="Amount">
                </div>
            </div>
        </div>
        <div id="dvBankDetail" style="display: none">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        Bank Name
                        <select class="form-control" name="sltBank_id" value="sltBank_id">
                            <?php
                            include '../controller/connection.php';
                            $query = "select * from tbl_bank";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($show = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $show['bank_id'] . "'> $show[bank_name]</option>";
                                }
                            }
                            ?>
                        </select>            
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="noCh_dd" id="noCh_dd" placeholder="Enter Your Cheque OR  Dimand Draft Number">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Submit</button>
        </div>
    </form>
    <?php
    include '../include/include_js.php';
    ?>
    <script>
        $(document).ready(function () {
            $("#sltPayment").change(function () {

                if ($("#sltPayment").val() == "1") {
                    $("#dvBankDetail").hide();
                } else {
                    $("#dvBankDetail").show();
                }
            });
        });
    </script>

</body>
<?php
include '../include/include_js.php';

include '../include/include_footer.php';
?>

