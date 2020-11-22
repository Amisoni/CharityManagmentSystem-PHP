<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>

<body>
    <form class="ulockd-login-form" action="../controller/donation_plan_controller.php" method="post" enctype="multipart/form-data">
        <h3>  Donation Plan</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="txtPlan_name" id="txtPlan_name" placeholder="plan name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="txtDuration" id="txtDuration"  placeholder="Duration">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="noAmount" id="noAmount" placeholder="Amount">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="txtDonationDiscription" id="txtDonationDiscription" placeholder="Donation Discription">
        </div>

        <div class="form-group">
            <div class="form-control">
                Donation Type
                <select name="sltDonation_type_id" value="sltDonation_type_id">
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
                      <input type="file" class="form-control" name="flPlanPhoto" id="flPlanPhoto"/>              
        </div>
            <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Donate now</button>
    </form>
</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
