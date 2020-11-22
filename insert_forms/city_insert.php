<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<form  class="ulockd-login-form" name="city" id="city" action="controller/city_controller.php" method="post">      

    <h3>  City </h3>
    <div class="form-group">
      
        <input type="text" class="form-control" name="cityName" id="cityName" placeholder="city name"> 
    </div>  
<div class="form-group">
    <div class="form-control">
     district name
           <select name="district_id" value="district_id">
                <?php
                include '../controller/connection.php';
                $query = "select * from tbl_district";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($show = mysqli_fetch_array($result)) {
                        echo "<option value='" . $show['district_id'] . "'> $show[district_name]</option>";
                    }
                }
                ?>
            </select> 
    </div>
</div>
    <input type="submit" class="btn btn-default ulockd-btn-styledark" value="submit" name="submit" id="submit">
</form>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
