<?php
include '../PHPMailer-master/class.phpmailer.php';
include '../PHPMailer-master/PHPMailerAutoload.php';
require("../PHPMailer-master/class.smtp.php");
header('Content-Type: application/json');

$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$msg = $_POST['txtMessage'];

$body = 'Inquiry Generated. <br> Name: ' . $name . ' <br> Email: ' . $email . ' <br> Message: ' . $msg;

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "amisoni14111008@gmail.com"; //"rashminmevada.911@gmail.com";
$mail->Password = "angel@1411";
$mail->SetFrom("amisoni14111008@gmail.com");
$mail->Subject = $email;
$mail->Body = $body;
$mail->AddAddress("drashtishah16798@gmail.com"); //sachin@bodal.com

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