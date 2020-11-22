<?php

include './connection.php';


$bank_detail_id = $_GET['bank_detail_id'];

$query = "DELETE FROM  tbl_receiver_bank_detail WHERE bank_detail_id = '" . $bank_detail_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
