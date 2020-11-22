<?php
session_start();
include './connection.php';

$donationType_id=$_POST['sltDonatioType_id'];
$payment_id=$_POST['sltPayment_id'];
$amount=$_POST['noAmount'];
$units=$_POST['noUnit'];
$date=$_POST['txtDate'];
$needer_description=$_POST['txtNeederDiscription'];

$query = "INSERT INTO tbl_needer_information (donation_type, payment_name, amount, number_of_unites, date, needer_description, reistration_id) VALUES ('".$donationType_id."','".$payment_id."','".$amount."','".$units."','".$date."','".$needer_description."','".$_SESSION['registration_id']."') ";
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