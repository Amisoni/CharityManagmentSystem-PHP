<?php

include './connection.php';


$payment_id = $_GET['payment_id'];

$query = "DELETE FROM  tbl_payment_mode WHERE payment_id = '" . $payment_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
