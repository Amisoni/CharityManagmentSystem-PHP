<?php
include './connection.php';
$stateName=$_POST['stateName'];
$countryid=$_POST['country_id'];

$query = "INSERT INTO tbl_state (state_name,country_id) VALUES ('".$stateName."','".$countryid."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
 
 $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
?>