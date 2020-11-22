<?php

include './connection.php';


$donate_id = $_GET['donate_id'];

$query = "UPDATE `angelcharity`.`tbl_donate` SET `is_active`='0' WHERE `donate_id`='".$donate_id."'";
$result = mysqli_query($conn, $query);

if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
mysqli_close($conn);
?>
