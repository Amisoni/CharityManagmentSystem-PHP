<?php

session_start();
include './connection.php';

$query1 = "insert into tbl_needer_donor_donate (needer_information_id, donor_id) values ('" . $_GET['needer_information_id'] . "','" . $_SESSION['registration_id'] . "')";

$result = mysqli_query($conn, $query1);

$queryUser = "SELECT r.email_id FROM angelcharity.tbl_needer_information ni 
LEFT JOIN tbl_registration r ON r.registration_id = ni.reistration_id 
where needer_information_id =" . $_needer_information_id;
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
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "angelcharityorganization@gmail.com";
$mail->Password = "angelcharity";
$mail->SetFrom("amisoni14111008@gmail.com");
$mail->Subject = 'Donation Confirmation';
$mail->Body = $body;
$mail->AddAddress($usermail); 
//$mail->AddAddress("amisoni141197@gmail.com");
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
