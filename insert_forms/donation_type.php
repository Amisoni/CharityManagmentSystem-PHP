<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form  class="ulockd-login-form" name="donationtype"  id="donationtype" action="controller/donation_type_controller.php" method="post">   
        <h3>  Donation Type</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="txtDonationType" id="txtDonationType" placeholder="Donation Type">
        </div>
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Donatation</button>
    </form>
</body>  
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
