<?php
session_start();
include './connection.php';

$acHolderName=$_POST['a/cHolderName'];
$acNumber=$_POST['a/cNumber'];
$bank_id=$_POST['sltBank_id'];
$ifScCode=$_POST['txtIfScCode'];
$micrCode=$_POST['txtMicrCode'];
$city_id=$_POST['sltCity_id'];
$branchName=$_POST['txtBranchName'];


$query = "INSERT INTO tbl_receiver_bank_detail (account_holder_name, account_number, bank_name, branch_name, ifsc_code, micr_code, city_id,"
        . " registration_id) VALUES ('".$acHolderName."','".$acNumber."','".$bank_id."','".$branchName."','".$ifScCode."','".$micrCode."','".$city_id."','".$_SESSION['registration_id']."')";
echo $query;
 $result = mysqli_query($conn, $query);
 
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
?>