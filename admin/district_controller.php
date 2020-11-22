<?php

include './connection.php';
$districtName=$_POST['districtName'];
$stateid=$_POST['state_id'];
$query = "INSERT INTO tbl_district (district_name,state_id) VALUES ('".$districtName."','".$stateid."')";
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
