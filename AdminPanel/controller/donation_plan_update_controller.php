<?php
include './connection.php';


$plan_id = $_POST['plan_id'];
$planname = $_POST['txtPlan_name'];
$plan_duration = $_POST['txtDuration'];
$plan_amount = $_POST['noAmount'];
$donation_description = $_POST['txtDonationDiscription'];
$donationType_id = $_POST['sltDonation_type_id'];

$valid_formats = array("jpg", "jpeg", "png");
    $max_file_size = 1024 * 1024 * 1; //1 MB


    $targetPath = "";
    $flagFileUpload = FALSE;
    if (isset($_FILES["flPlanPhoto"]["type"])) {

        $file_extension = strtolower(pathinfo($_FILES["flPlanPhoto"]["name"], PATHINFO_EXTENSION));
        //($_FILES["flUserPhoto"]["type"] == "application/pdf") &&
        if (($_FILES["flPlanPhoto"]["size"] <= $max_file_size) && in_array($file_extension, $valid_formats)) {
            if ($_FILES["flPlanPhoto"]["error"] > 0) {
                $flag = FALSE;
                echo "Please enter valid photo: " . $_FILES["flPlanPhoto"]["error"] . "<br/><br/>";
            } else {
                $sourcePath = $_FILES['flPlanPhoto']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = '../uploaded_photos/' . time() . '_' . uniqid() . '.' . $file_extension; // Target path where file is to be stored
                $fileResult = move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file    
                $flagFileUpload = TRUE;
            }
        }
    }





$query="UPDATE `angelcharity`.`tbl_donation_plan` SET `plan_name`='$planname', `duration`='$plan_duration', `amount`='$plan_amount',"
        . " `donation_plan_description`='$donation_description', `donation_type_id`='$donationType_id', `photo_path`='$targetPath' WHERE `plan_id`='$plan_id';";


echo $query;
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record updateded';
}
mysqli_close($conn);
?>
