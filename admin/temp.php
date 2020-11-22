<?php

include '../PHPMailer-master/class.phpmailer.php';
include '../PHPMailer-master/PHPMailerAutoload.php';
require("../PHPMailer-master/class.smtp.php");
header('Content-Type: application/json');

$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$msg = $_POST['txtMessage'];

$body = 'Inquiry Generated.';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "fitnessclub032018@gmail.com"; //"rashminmevada.911@gmail.com";
$mail->Password = "gym!1234";
$mail->SetFrom("fitnessclub032018@gmail.com");
$mail->Subject = 'subject';
$mail->Body = $body;
$mail->AddAddress("dhaval.mistry1408@gmail.com"); //sachin@bodal.com

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