<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>

<body>
    <form name="bankname"  class="ulockd-login-form" id="bankname" action="../controller/bank_name_controller.php" method="post">   
        <h3> Bank Name</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="txtBank_name" id="txtBank_name" placeholder="Bank Name">
        </div>
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">submit</button>
    </form>
</body>  
<?php
include './include/include_js.php';
?>
