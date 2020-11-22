<?php

session_start();
include './connection.php';

    $plan_name = $_POST['txtPlan_name'];
    $duration = $_POST['txtDuration'];
    $amount = $_POST['noAmount'];
    $plan_description = $_POST['txtDonationDiscription'];
    $donation_type_id = $_POST['sltDonation_type_id'];

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



    $query = " INSERT INTO tbl_donation_plan(plan_name, duration, amount, donation_plan_description, donation_type_id,photo_path) values "
            . "('" . $plan_name . "','" . $duration . "','" . $amount . "','" . $plan_description . "','" . $donation_type_id . "','".$targetPath."')";
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