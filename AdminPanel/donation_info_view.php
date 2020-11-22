<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <h3> DONATION PLAN LIST </h3>
    <meta charset="UTF-8">

    <script>
        function updaterow(plan_id)
        {
            alert(plan_id);
            window.location.href = "donation_plan_update_form.php?plan_id=" + plan_id;
        }
        function deleterow(plan_id)
        {
            alert(plan_id);
            window.location.href = "../controller/donation_plan_delete.php?plan_id=" + plan_id;
        }
    </script>
<!--    <h4>Print Click Here ::</h4> 
    <i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Plan Id</th>
                            <th>Plan Name</th>
                            <th>Duration</th>
                            <th>Amount</th>
                            <th>Donation Description </th>
                            <th>Donation Type</th>      
                            <!--<th>Photo</th>-->
                            <th>Is Active</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select dt.donation_type , dp.* from tbl_donation_plan dp left join tbl_donation_type dt on dp.donation_type_id =dt.donation_type_id;";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[plan_id]</td>"
                                . "<td>$row[plan_name]</td>"
                                . "<td>$row[duration]</td>"
                                . "<td>$row[amount]</td>"
                                . "<td>$row[donation_plan_description]</td>"
                                . "<td>$row[donation_type]</td>"
//                    . "<td>$row[photo_path]</td>"
//                                . "<td><img src=$row[photo_path] style=height:50%></td>"
                                . "<td>$row[is_active]</td>"
//                     . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[plan_id])' value='update'/> </td>"
                                . "<td><i class='glyphicon glyphicon-pencil' onclick='updaterow($row[plan_id])' value='update'>"
                                . "<td><i class='glyphicon glyphicon-trash' onclick='deleterow($row[plan_id])' value='delete'/> </td></tr>";
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