<?php

include '../controller/connection.php';

$districtid = $_GET['district_id'];

$query = "DELETE FROM  tbl_district WHERE district_id = '" . $districtid . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
