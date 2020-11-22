<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>

<body>
    <form class="ulockd-login-form" action="../controller/donation_info_controller.php" method="post">
        <h3> Donation information</h3>
                          
     
     <div class="form-group">
         <div class="form-control">
             plan_name
                 <select name="sltPlan_id" value="sltPlan_id">
                        <?php
                        include '../controller/connection.php';
                        $query = "select * from tbl_donation_plan";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($show = mysqli_fetch_array($result)) {
                                echo "<option value='" . $show['plan_id'] . "'> $show[plan_name]</option>";
                            }
                        }
                        ?>
                    </select>
                    </div>
     </div>
   <div class="form-group">
       <div class="form-control">payment_name
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
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Save</button>
       </div>
        </form>
</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>

