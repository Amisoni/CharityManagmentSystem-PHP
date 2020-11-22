<?php

include './connection.php';


$donation_info_id = $_GET['donation_info_id'];

$query = "DELETE FROM  tbl_donation_info WHERE donation_info_id = '" . $donation_info_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
