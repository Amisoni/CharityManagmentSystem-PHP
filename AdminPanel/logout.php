<?php
session_start();
session_destroy();
header("LOCATION:signin_signup.php");
echo 'you logout';
?>
