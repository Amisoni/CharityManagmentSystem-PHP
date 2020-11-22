<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>

<body>
    <form class="ulockd-login-form" action="../controller/payment_update.php" method="post">
        <h3>  payment mode</h3>
       
        <div class="form-group" hidden="payment_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_payment_mode WHERE payment_id = " . $_GET['payment_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='payment_id' value='$row[payment_id]' />";
            }
            ?>
                </div>

        <div class="form-group">
            <input type="text" class="form-control" name="txtPaymentType" id="txtPaymentType" placeholder="Payment Type" value="<?php echo $row['payment_name']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
    </form>
</body>
<?php
include './include/include_js.php';
?>



















































