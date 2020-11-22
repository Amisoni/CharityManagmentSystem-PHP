<?php
session_start();
include './controller/connection.php';
$id= $_GET['id'];
$query = "UPDATE `angelcharity`.`tbl_needer_donor_donate` SET `is_active`='1' WHERE `id`='$id';";
echo $query;
$result = mysqli_query($conn,$query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record update  ';
}
mysqli_close($conn);
?>
