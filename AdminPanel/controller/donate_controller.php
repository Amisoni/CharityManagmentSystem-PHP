<?php
session_start();
include './connection.php';

$payment_id=$_POST['sltPayment_id'];
$amount=$_POST['noAmount'];
$bankname=$_POST['sltBank_id'];
$ch_dd=$_POST['noCh_dd'];
//$approve=$_post['txtApprove'];

$query = "INSERT INTO tbl_donate (payment_name, Amount, bank_name, ceque_dd, registration_id) VALUES ('".$payment_id."','".$amount."','".$bankname."','".$ch_dd."','".$_SESSION['registration_id']."') ";
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