<?php

include './connection.php';

$registration_id = $_GET['registration_id'];
$query = "DELETE FROM tbl_registration WHERE registration_id = '" . $registration_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
