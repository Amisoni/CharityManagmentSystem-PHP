<?php

session_start();
include './connection.php';

$payment_id = $_POST['sltPayment_id'];
$amount = $_POST['noAmount'];
$plan = $_POST['sltDonationPlan'];

$query = "INSERT INTO tbl_donate (payment_name,Amount,registration_id,plan_id) VALUES ('" . $payment_id . "','" . $amount . "','" . $_SESSION['registration_id'] . "'," . $plan . ") ";
if ($payment_id != 1) {
    $bankname = $_POST['sltBank_id'];
    $ch_dd = $_POST['noCh_dd'];
    $query = "INSERT INTO tbl_donate (payment_name,Amount,bank_id,ceque_dd,registration_id,plan_id) VALUES ('" . $payment_id . "','" . $amount . "','" . $bankname . "','" . $ch_dd . "','" . $_SESSION['registration_id'] . "'," . $plan . ") ";
}

$result = mysqli_query($conn, $query);
echo $query;
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record added';
}
mysqli_close($conn);
?>