<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<body>
    <form name="paymentmode" class="ulockd-login-form" id="paymentmode" action="../controller/payment_mode_controller.php" method="post">   
        <h3> Payment Type</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="txtPaymentType" id="txtPaymentType" placeholder="Payment Type">
        </div>
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">Payment</button>
    </form>
</body>  
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
