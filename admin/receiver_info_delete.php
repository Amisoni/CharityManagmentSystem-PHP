<?php

include './connection.php';


$receiver_info_id= $_GET['receiver_info_id'];

$query = "DELETE FROM  tbl_receiver_info WHERE receiver_info_id = '" . $receiver_info_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
