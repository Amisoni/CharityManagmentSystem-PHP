
<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>

    <form class="ulockd-reg-form text-center" action="../controller/country_update.php" method="post">
        <h3> <span class="flaticon-house-key"></span> country </h3>
       
        <div class="form-group" hidden="country_id">
                           <?php
            include '../controller/connection.php';
            $query = "SELECT * from tbl_country WHERE country_id = " . $_GET['country_id'];
            $result = mysqli_query($conn, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo "<input type ='text' name='country_id' value='$row[country_id]' />";
            }
            ?>
                </div>

        <div class="form-group"> coutry name
            <input type="text" class="form-control" name="txtcountryName" id="txtcountryName" placeholder="country name" value="<?php echo $row['country_name']; ?>">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-default ulockd-btn-thm2">upadte</button>
        </div>
    </form>

</body>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>