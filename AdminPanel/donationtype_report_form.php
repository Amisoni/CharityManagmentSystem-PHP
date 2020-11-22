<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<div class="row clearfix">
    <h3> <center> SELECT  DONATION  TYPE </center> </h3>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <h3>
                Donation Type
            </h3>            
            
            
            
            
            <form action="donationtype_report_view.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" name="sltDonatioType_id" value="sltDonatioType_id">
                                <option value="0">-- Select Donation Type --</option>               
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
                </div>
                <div>
                    <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Click</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include './include/include_js.php';
?>