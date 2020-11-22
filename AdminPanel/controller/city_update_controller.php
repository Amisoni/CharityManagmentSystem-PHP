<?php
include './connection.php';
$cityname=$_POST['txtcityName'];
$cityid=$_POST['city_id'];

$query = "UPDATE `angelcharity`.`tbl_city` SET  `city_name`='$cityid' WHERE `city_id`='$cityid' ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    mysqli_close($conn);
?>