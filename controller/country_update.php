<?php
include './connection.php';
$countryname=$_POST['countryName'];
$countryid=$_POST['country_id'];

$query = "UPDATE `angelcharity`.`country` SET  `country_name`='$countryname' WHERE `country_id`='$countryid' ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    mysqli_close($conn);
?>