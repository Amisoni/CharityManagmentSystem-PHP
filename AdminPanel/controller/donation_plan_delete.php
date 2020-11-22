<?php

include './connection.php';


$plan_id = $_GET['plan_id'];

$query = "DELETE FROM  tbl_donation_plan WHERE plan_id = '" . $plan_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
}
mysqli_close($conn);
?>
