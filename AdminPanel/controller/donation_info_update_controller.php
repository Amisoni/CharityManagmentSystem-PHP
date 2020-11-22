<?php
include './connection.php';

$donation_info_id=$_POST['donation_info_id'];
$plan_id=$_POST['sltPlan_id'];
$payment_id=$_POST['sltPayment_id'];


$query="UPDATE `demo`.`donationinfo` SET `plan_id`='$plan_id', `payment_id`='$payment_id' WHERE `donation_info_id`='$donation_info_id'";

 $result = mysqli_query($conn, $query);
 
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
?>