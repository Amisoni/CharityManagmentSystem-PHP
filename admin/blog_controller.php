
<?php

include './connection.php';
$blogname = $_POST['txtBlogName'];
$blogremark=$_POST['txtBlogRemark'];

$query = "INSERT INTO tbl_blog (blog_name,blog_remark) VALUES ('" . $blogname . "','" . $blogremark . "')";


$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record added';
}
mysqli_close($conn);
?>