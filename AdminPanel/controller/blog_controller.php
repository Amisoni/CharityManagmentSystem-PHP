
<?php

include './connection.php';
session_start();
$blogname = $_POST['txtBlogName'];
$blogremark=$_POST['txtBlogRemark'];

$query = "INSERT INTO tbl_blog (blog_name,blog_remark,registration_id) VALUES ('" . $blogname . "','" . $blogremark . "','".$_SESSION['registration_id']."')";
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