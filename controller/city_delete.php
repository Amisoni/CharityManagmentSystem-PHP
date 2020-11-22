<?php

include '../controller/connection.php';

$cityid = $_GET['city_id'];

$query = "DELETE FROM  tbl_city WHERE city_id = '" . $citid . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
