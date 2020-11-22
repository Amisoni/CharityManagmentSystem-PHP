<?php
session_start();
include './connection.php';

$plan_id=$_POST['sltPlan_id'];
$payment_id=$_POST['sltPayment_id'];


$query = "INSERT INTO tbl_donation_info (registration_id,plan_id,payment_id) VALUES ('".$_SESSION['registration_id']."','".$plan_id."','".$payment_id."') ";
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