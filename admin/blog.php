<?php
include '../include/include_css.php';
include '../include/header_top.php.';
include '../include/header_menu.php';
?>
<body>
    <form name="blog"  id="blog" action="../controller/blog_controller.php" method="post">   
        <h3> Blog</h3>
        <div class="form-group">
            <!--<input type="textarea"  class="form-control required" name="txtBlogName" id="txtBlogName" placeholder="Blog Name"/>-->
            <textarea name="txtBlogName" id="txtBlogName" class="form-control" rows="4" placeholder="Blog Name">
          </textarea>    
    </div>
        <div class="form-group">
            <!--<input type="textarea" class="form-control" name="txtBlogRemark" id="txtBlogRemark" placeholder="Blog Remarks">-->
         <textarea name="txtBlogRemark" id="txtBlogRemark" class="form-control" rows="4" placeholder="Blog Remarks">
          </textarea>
        </div>
        <button type="submit" class="btn btn-default ulockd-btn-styledark" data-toggle="modal" data-target=".bs-example-modal-default">submit</button>
    </form>
</body>  
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>
