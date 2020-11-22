<?php

include './connection.php';


$donation_type_id = $_GET['donation_type_id'];

$query = "DELETE FROM  tbl_donation_type WHERE donation_type_id = '" . $donation_type_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
