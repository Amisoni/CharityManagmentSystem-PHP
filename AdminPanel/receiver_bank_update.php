<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<body>
    <form class="ulockd-login-form" name="bankdetail"  id="bank detail" action="../controller/receiver_bank_update_controller.php" method="post">      
        <h3>  Bank Details</h3>   

        <div class="form-group" hidden="bank_detail_id">
            <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_receiver_bank_detail WHERE bank_detail_id= " . $_GET['bank_detail_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='bank_detail_id' value='$row[bank_detail_id]' />";
            }
            ?>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="a/cHolderName" id="a/cHolderName" placeholder="a/cHolderName" value="<?php echo $row['account_holder_name']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="a/cNumber" id="a/cNumber" placeholder="a/cNumber" value="<?php echo $row['account_number']; ?>">
        </div>
        <div class="form-group">
            <div  class="form-control">bank_name
                <select name="sltBank_id" value="sltBank_id">
                    <?php
                    include '../controller/connection.php';
                    $query = "select * from tbl_bank";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            if ($show['bank_id'] == $row['bank_id']) {
                                echo "<option value='" . $show['bank_id'] . "' selected> $show[bank_name]</option>";
                            } else {
                                echo "<option value='" . $show['bank_id'] . "'> $show[bank_name]</option>";
                            }
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <input type="text"  class="form-control" name="txtIfScCode" id="txtIfScCode" placeholder="ifScCode" value="<?php echo $row['ifsc_code']; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="txtMicrCode" id="txtMicrCode" placeholder="micrCode" value="<?php echo $row['micr_code']; ?>"> 
        </div>
        <div class="form-group">
            <div  class="form-control">   city 
                <select name="sltCity_id" value="sltCity_id">
                    <?php
                    include '../controller/connection.php';
                    $query = "select * from tbl_city";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            if ($show['city_id'] == $row['city_id']) {
                                echo "<option value='" . $show['city_id'] . "' selected> $show[city_name]</option>";
                            } else {
                                echo "<option value='" . $show['city_id'] . "'> $show[city_name]</option>";
                            }
                        }
                    }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtBranchName" id="txtBranchName" placeholder="branchName" value="<?php echo $row['branch_name']; ?>"> 
            </div> 
            <div>
                <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">update</button>
            </div>
        </form>

        <?php
        include './include/include_js.php';
        ?>