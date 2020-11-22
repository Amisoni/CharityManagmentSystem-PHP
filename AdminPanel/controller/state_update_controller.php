<?php
include './connection.php';
$stateName=$_POST['txtstateName'];
$stateid=$_POST['txtstateId'];

$query = "UPDATE `angelcharity`.`tbl_state` SET  `state_name`='$stateName' WHERE `state_id`='$stateid' ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    mysqli_close($conn);
?>