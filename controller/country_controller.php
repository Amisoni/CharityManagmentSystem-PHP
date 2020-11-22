<?php
include '/connection.php';

$countryName=$_POST['countryName'];
$query= "INSERT INTO tbl_country (country_name) VALUES ('".$countryName."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
?>