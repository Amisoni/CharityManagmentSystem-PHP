<?php
session_start();
include './connection.php';
$bank_detail_id=$_POST['bank_detail_id'];
$acHolderName=$_POST['a/cHolderName'];
$acNumber=$_POST['a/cNumber'];
$bank_id=$_POST['sltBank_id'];
$ifScCode=$_POST['txtIfScCode'];
$micrCode=$_POST['txtMicrCode'];
$city_id=$_POST['sltCity_id'];
$branchName=$_POST['txtBranchName'];


$query="UPDATE `angelcharity`.`tbl_receiver_bank_detail` SET `account_holder_name`='$acHolderName', "
. "`account_number`='$acNumber', `bank_name`='$bank_id', `branch_name`='$branchName', `ifsc_code`='$ifScCode', "
 . "`micr_code`='$micrCode', `city_id`='$city_id' WHERE `bank_detail_id`='$bank_detail_id'";
echo $query;
 $result = mysqli_query($conn, $query);
 
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    mysqli_close($conn);
?>