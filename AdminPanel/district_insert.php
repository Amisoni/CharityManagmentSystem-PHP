<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<form class="ulockd-login-form" name="district"  id="district" action="controller/district_controller.php" method="post">      
                   
    <h3> District </h3>
    <div class="form-group">
     <input type="text" class="form-control" name="districtName" id="districtName" placeholder="District Name">
    </div>       
    <div class="form-group">
        <div class="form-control">
                        state name
                   <select name="state_id" value="state_id"> 
                            <?php
                            include '../controller/connection.php';;
                            $query="select * from tbl_state";
                            $result = mysqli_query($conn,$query);
                            if($result){
                            while($show= mysqli_fetch_array($result)){
                            echo "<option value='".$show['state_id']."'> $show[state_name]</option>";


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
       