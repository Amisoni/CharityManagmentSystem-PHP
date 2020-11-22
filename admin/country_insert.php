<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>

<form class="ulockd-login-form" name="country"  id="country" action="controller/country_controller.php" method="post">      
<h3>  Country </h3>
    <div class="form-group">
        <input type="text" class="form-control"  name="countryName" id="countryName" placeholder="Country Name">     
    </div>
    <input type="submit" class="btn btn-default ulockd-btn-styledark" value="submit" name="submit" id="submit">
</form>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
