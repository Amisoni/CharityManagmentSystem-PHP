<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form name="bankdetail" class="ulockd-login-form" id="bank detail" action="../controller/receiver_bank_detail_controller.php" method="post">      
        <h3> Bank Details</h3>   
            <div class="form-group">
                <input type="text" class="form-control" name="a/cHolderName" id="a/cHolderName" placeholder="a/cHolderName">
            </div>
         <div class="form-group">
             <input type="text" class="form-control" name="a/cNumber" id="a/cNumber" placeholder="a/cNumber">
         </div>
                        <div class="form-group">
          <div  class="form-control"> bank_name
                 <select name="sltBank_id" value="sltBank_id">
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
                    <div class="form-group">
                <input type="text"  class="form-control" name="txtIfScCode" id="txtIfScCode" placeholder="ifScCode">
            </div>
               <div class="form-group">
                <input type="text" class="form-control" name="txtMicrCode" id="txtMicrCode" placeholder="micrCode"> 
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
                                echo "<option value='" . $show['city_id'] . "'> $show[city_name]</option>";
                            }
                        }
                        ?>
                    </select>
          </div>
        </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtBranchName" id="txtBranchName" placeholder="Branch Name"> 
            </div> 
       <div>
          <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">submit</button>
   </div>
    </form>

<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>