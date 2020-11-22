<?php

include '../controller/connection.php';


$countryid = $_GET['country_id'];

$query = "DELETE FROM  tbl_country WHERE country_id = '" . $countryid . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
