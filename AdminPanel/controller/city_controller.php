<?php
include './connection.php';
$cityName=$_POST['cityName'];
$districtid=$_POST['district_id'];
$query = "INSERT INTO tbl_city (city_name,district_id) VALUES ('".$cityName."','".$districtid."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
?>