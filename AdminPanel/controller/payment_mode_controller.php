
<?php

include './connection.php';
$paymentmode = $_POST['txtPaymentType'];

$query = "INSERT INTO tbl_payment_mode (payment_name) VALUES ('" . $paymentmode . "')";


$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record added';
}
mysqli_close($conn);
?>