
<?php
session_start();
include './connection.php';
$feedback = $_POST['txtFeedBack'];


$query = "INSERT INTO tbl_feedback (feedback_description,registration_id) VALUES ('" . $feedback . "','".$_SESSION['registration_id']."')";
echo $query;


$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record added';
}
mysqli_close($conn);
?>