<?php
include './connection.php';


$payment_id = $_POST['payment_id'];
$paymenttype = $_POST['txtPaymentType'];

$query="UPDATE `angelcharity`.`tbl_payment_mode` SET  `payment_name`='$paymenttype' WHERE `payment_id`='$payment_id';";

echo $query;
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record updateded';
}
mysqli_close($conn);
?>
