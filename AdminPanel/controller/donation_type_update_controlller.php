<?php
include './connection.php';


$donation_type_id = $_POST['donation_type_id'];
$donationtype = $_POST['txtDonationType'];

$query="UPDATE `angelcharity`.`tbl_donation_type` SET  `donation_type`='$donationtype' WHERE `donation_type_id`='$donation_type_id';";

echo $query;
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record updateded';
}
mysqli_close($conn);
?>
