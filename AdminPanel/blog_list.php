<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <H3> BLOG LIST </h3>
    <!--<h4>Print Click Here ::</h4>--> 
    <!--<i  class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th> Blog Name </th>
                            <th> Blog Remarks </th>
                            <th>Name</th>

                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select r.first_name , r.last_name , b.blog_name, b.blog_remark , b.date from tbl_blog b left join tbl_registration r on  r.registration_id=b.registration_id;";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[blog_name]</td>"
                                . "<td>$row[blog_remark]</td>"
                                . " <td>" . $row['first_name'] . " " . $row['last_name'] . "</td> </tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</html>
<?php
include './include/include_js.php';
?>
            