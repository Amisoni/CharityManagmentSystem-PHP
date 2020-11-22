        <?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<form  class="ulockd-login-form" name="state"  id="state" action="controller/state_controller.php" method="post">      
        
            <h3> State </h3>
            <div class="form-group">
                <input type="text" class="form-control" name="stateName" id="stateName" placeholder="State Name"> 
            </div>
            <div class="form-group">
                <div class="form-control">
                 country name
                   <select name="country_id" value="country_id">
                        <?php
                        include '../controller/connection.php';
                        $query = "select * from tbl_country";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($show = mysqli_fetch_array($result)) {
                                echo "<option value='" . $show['country_id'] . "'> $show[country_name]</option>";
                            }
                        }
                        ?>
                    </select> 
                </div>
            </div>
          <input type="submit" class="btn btn-default ulockd-btn-styledark" value="submit" name="submit" id="submit"> 
</form>
<?php
include './include/include_js.php';
?>
