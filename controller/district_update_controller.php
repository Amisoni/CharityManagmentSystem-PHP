<?php
include './connection.php';
$districtname=$_POST['txtDistrictName'];
$districtid=$_POST['txtDistrictId'];

$query = "UPDATE `angelcharity`.`tbl_district` SET  `district_name`='$districtname' WHERE   `district_id`='$districtid' ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    mysqli_close($conn);
?>