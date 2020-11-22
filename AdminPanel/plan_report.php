<?php
include './include/include_css.php';
include './include/header.php';
?>
<html>
   
<!--    <H3> PLAN REOPORT </H3>-->
 
    <!--<br> <br> <br>-->
    <H2> <center> PLAN REOPORT </center> </H2>
    <!--<h4>Print Click Here ::</h4>--> 
    <div style="float: right; margin:20px;" id="printbutton">   <i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> </div> <br><br>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">  
                        <tr>
                            <th>Received Amount</th>
                            <th>Plan Name</th>
                            <th>Amount</th>
                            <th>Duration</th>
                            <th>Donation Description </th>
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select sum(d.amount) as amount_received, dp.plan_name, dp.amount, dp.duration, dp.donation_plan_description "
                                . "from tbl_donate d RIGHT JOIN tbl_donation_plan dp ON dp.plan_id = d.plan_id where d.is_active =1 group by d.plan_id;";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[amount_received]</td>"
                                . "<td>$row[plan_name]</td>"
                                . "<td>$row[amount]</td>"
                                . "<td>$row[duration]</td>"
                                . "<td>$row[donation_plan_description]</td></tr>";
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