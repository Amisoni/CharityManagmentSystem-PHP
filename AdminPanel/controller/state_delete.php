<?php

include '../controller/connection.php';

$stateid = $_GET['state_id'];

$query = "DELETE FROM  tbl_state WHERE state_id = '" . $stateid . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
