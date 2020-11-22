<?php

include './connection.php';

$donationType_id = $_POST['sltDonatioType_id'];
$query = "select * from tbl_donation_type where donation_type_id=" . $donationType_id;
echo $query;
$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record find';
    header("LOCATION:../donationtype_report_view.php");
}
?>
