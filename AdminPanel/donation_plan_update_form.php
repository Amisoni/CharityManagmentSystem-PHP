
<?php
include 'include/include_css.php';
include 'include/include_sidebar.php';

?>
<form class="ulockd-login-form" action="../controller/donation_plan_update_controller.php" method="post" enctype="multipart/form-data">
    <h3>  Donation Plan update form </h3>
    <div class="form-group" hidden="plan_id">
        <?php
        include '../controller/connection.php';
        $query = "SELECT * from tbl_donation_plan WHERE plan_id = " . $_GET['plan_id'];
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            echo "<input type ='text' name='plan_id' value='$row[plan_id]' />";
        }
        ?>
    </div>

    <div class="form-group"> plan name
        <input type="text" class="form-control" name="txtPlan_name" id="txtPlan_name" placeholder="plan name" value="<?php echo $row['plan_name']; ?>">
    </div>
    <div class="form-group"> duration
        <input type="text" class="form-control" name="txtDuration" id="txtDuration"  placeholder="Duration" value="<?php echo $row['duration']; ?>">
    </div>
    <div class="form-group"> amount
        <input type="number" class="form-control" name="noAmount" id="noAmount" placeholder="Amount"  value="<?php echo $row['amount']; ?>">
    </div>
    <div class="form-group"> donation discription
        <input type="text" class="form-control"  name="txtDonationDiscription" id="txtDonationDiscription" placeholder="Donation Discription"  value="<?php echo $row['donation_plan_description']; ?>">
    </div>

    <div class="form-group">
        <div class="form-control">
            Donation Type
            <select name="sltDonation_type_id" value="sltDonation_type_id">
                <?php
                include './controller/connection.php';
                $query = "select * from tbl_donation_type";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($show = mysqli_fetch_array($result)) {
                        if ($show['donation_type_id'] == $row['donation_type_id'])
                            echo "<option value='" . $show['donation_type_id'] . "' selected> $show[donation_type]</option>";
                        else {
                            echo "<option value='" . $show['donation_type_id'] . "'> $show[donation_type]</option>";
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>

    <div class='col-sm-1 col-md-1 fservice-box ulockd-pad395'>
        <div class="form-group">  
            <img class="img-responsive img-whp"  src="<?Php echo "$row[photo_path]"; ?>"/>
            <input type="file"  name="flPlanPhoto" id="flPlanPhoto"/>              
        </div>
    </div>
    <div class="form-group">
        <button type="submit"  class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default"> Submit</button>
    </div>
</form>
</body>
<?php
include 'include/include_js.php';
//include '../include/include_footer.php';
?>