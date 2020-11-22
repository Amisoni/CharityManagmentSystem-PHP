<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<body>
    <form class="ulockd-login-form" name="paymentmode"  id="paymentmode" action="../controller/feedback_controller.php" method="post">   
        <h3> FeedBack</h3>
        <div class="form-group">
            <input type="textarea" class="form-control" row="4" name="txtFeedBack" id="txtFeedBack" placeholder="Your Feed Back">
        </div>
      
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">submit</button>
    </form>
</body>  
<?php
include './include/include_js.php';
?>
