<?php
include 'include/include_css.php';
include 'include/header_top.php';
include 'include/header_menu.php';
?>
<body>
    <form  class="ulockd-login-form" name="donationtype"  id="donationtype" action=""method="post">   
        <!--<h3> BE A HAND </h3>-->
        <div class="form-group">
           
         <!--<a type="submit" href="slt_payment.php" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default"> BE A HAND</a>-->
        <a href="slt_payment.php" class="btn btn-default ulockd-btn-styledark"">BE A HAND</a>                                                                                      
        </div>

  
 <div class="form-group">
            <!--<div class="form-control">-->
                Needer list
                <select name="txtUser_type_id" value="txtUser_type_id">
                    <?php
                    include 'controller/connection.php';
                    $query = "select * from tbl_registration where user_type_id=3";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            echo "<option value='" . $show['user_type_id'] . "'> $show[first_name]</option>";
                        }
                    }
                    ?>
                </select>
            <!--</div>-->
        </div>

    </form>
</body>  
<?php
include 'include/include_js.php';
include 'include/include_footer.php';
?>
<!--<a href="include/include_css.php"></a>-->