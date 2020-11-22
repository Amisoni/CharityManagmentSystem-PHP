
<?php
session_start();
include './connection.php';
 
    $registration_id=$_POST['registration_id'];
    $firstname= $_POST['exampleInputNamexa'];
    $lastname=$_POST['exampleInputNamexb'];
    $birthdate=$_POST['date'];
    $password = $_POST['txtPassword'];
    $email = $_POST['exampleInputEmailx'];
    $gender = $_POST['rbtnGender'];
    $phonenumber = $_POST['txtNo'];
    $usertype_id = $_POST['sltUsertype'];
    $city=$_POST['sltCity'];
    $add_line_one=$_POST['txtAdd'];
    $add_line_two=$_POST['txtAdd2'];
    $pincode=$_POST['noPincode'];

    $valid_formats = array("jpg", "jpeg", "png");
$max_file_size = 1024 * 1024 * 1; //1 MB


$targetPath = "";
$flagFileUpload = FALSE;
if (isset($_FILES["flUserPhoto"]["type"])) {

    $file_extension = strtolower(pathinfo($_FILES["flUserPhoto"]["name"], PATHINFO_EXTENSION));
    //($_FILES["flUserPhoto"]["type"] == "application/pdf") &&
    if (($_FILES["flUserPhoto"]["size"] <= $max_file_size) && in_array($file_extension, $valid_formats)) {
        if ($_FILES["flUserPhoto"]["error"] > 0) {
            $flag = FALSE;
            echo "Please enter valid photo: " . $_FILES["flUserPhoto"]["error"] . "<br/><br/>";
        } else {
            $sourcePath = $_FILES['flUserPhoto']['tmp_name']; // Storing source path of the file in a variable
            $targetPath = '../profile_photo/' . time() . '_' . uniqid() . '.' . $file_extension; // Target path where file is to be stored
            $fileResult = move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file    
            $flagFileUpload = TRUE;
        }
    }
}

    
    
    
$query="UPDATE `angelcharity`.`tbl_registration` SET `first_name`='$firstname' ,`last_name`='$lastname',`birth_date`='$birthdate', `gender`='$gender', `email_id`='$email',
    `phone_number`='$phonenumber',`password`='$password', `address_line_one`='$add_line_one', `address_line_two`='$add_line_two', `city_id`='$city',"
        . " `pincode`='$pincode',`profile_path`='$targetPath' WHERE `registration_id`='$registration_id';";



echo $query;
$result = mysqli_query($conn, $query);
if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record update';
    }
    
    mysqli_close($conn);

?>

