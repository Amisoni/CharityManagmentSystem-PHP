<?php

include './connection.php';
$donate_id = $_GET['donate_id'];

$query = "UPDATE `angelcharity`.`tbl_donate` SET `is_active`='0' WHERE `donate_id`='" . $donate_id . "'";
$result = mysqli_query($conn, $query);

$queryUser = "select * from tbl_donate td LEFT JOIN tbl_registration tr ON tr.registration_id = td.registration_id where donate_id = " . $donate_id;
$resultUser = mysqli_query($conn, $queryUser);
$userdata = mysqli_fetch_assoc($resultUser);
$usermail = $userdata['email_id'];
echo $usermail;

include '../PHPMailer-master/class.phpmailer.php';
include '../PHPMailer-master/PHPMailerAutoload.php';
require("../PHPMailer-master/class.smtp.php");
header('Content-Type: application/json');

$body = "Inquiry Generated.";

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "angelcharityorganization@gmail.com"; //"rashminmevada.911@gmail.com";
$mail->Password = "angelcharity";
$mail->SetFrom("amisoni14111008@gmail.com");
$mail->Subject = 'Donation Confirmation';
$mail->Body = $body;
$mail->AddAddress($usermail); //sachin@bodal.com

if (!$mail->Send()) {
    $flag = TRUE;
} else {
    $flag = FALSE;
}

$output = array();
if ($flag) {
    $output["success"] = "1";
    echo json_encode($output, JSON_NUMERIC_CHECK);
} else {
    $output["success"] = "0";
    echo json_encode($output, JSON_NUMERIC_CHECK);
}
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record update  ';
}
mysqli_close($conn);
?>
