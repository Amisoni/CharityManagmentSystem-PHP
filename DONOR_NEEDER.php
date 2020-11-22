<form class="ulockd-login-form" action="./controller/needer_donor_donate.php" method="post" >
<?php

include '../controller/connection.php';
$query = "SELECT * from tbl_needer_information WHERE needer_information_id = " . $_GET['needer_information_id'];
$result = mysqli_query($conn, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "<input type ='text' name='needer_information_id' value='$row[needer_information_id]' />";
}
?>
</form>