<?php
session_start();
include './connection.php';



    $phonenumber = $_POST['txtNo'];
    $password = $_POST['txtPassword'];
    

    $query = "SELECT  * FROM  tbl_registration WHERE phone_number = '" . $phonenumber . "'  AND password = '" . $password . "' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['registration_id'] = $data['registration_id'];
//       $_SESSION['first_name']=$data=['first_name'];
        header("LOCATION:../index.php");
            echo 'login successfully';
    } else {
        echo 'wrong credential';
    }

    mysqli_free_result($result);
    mysqli_close($conn);

?>


