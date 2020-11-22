<?php
include './include/include_css.php';
include './include/header.php';
?>
<html>
    <head>
        <script>
            function donationtype(donationType_id)
            {
                alert(donationType_id);
                window.location.href = "controller/donationtype_report_controller.php?donationType_id=" + donationType_id;
            }
        </script>
    </head>
<!--    <div class="container-fluid">
        <div class="navbar-header"> 
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand"> 
                <h4 style="font-size: 33px; margin-top: -6px ; margin-left: 500px"> Angel Charity Organizations </h4>
            </a>
        </div>
    </div>-->
    <!--<br> <br> <br>-->
    <h3> <center> DONATION  TYPE  VISE  DONATION  PLAN </center> </h3>
    <!--<nav class="navbar">-->
   
    <!--</nav>-->
    <div style="float: right; margin:20px;" id="printbutton"><i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> </div> <br><br>
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
                            <th>Is Active</th>
                        </tr>   
                        <?php
                        include '../controller/connection.php';
                        $query1 = "select donation_type, dp.* from tbl_donation_plan dp
                                  left join tbl_donation_type dt on dt.donation_type_id=dp.donation_type_id where dp.donation_type_id=" . $_POST['sltDonatioType_id'];
//                        echo $query1;
                        $result = mysqli_query($conn, $query1);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[plan_id]</td>"
                                . "<td>$row[plan_name]</td>"
                                . "<td>$row[duration]</td>"
                                . "<td>$row[amount]</td>"
                                . "<td>$row[donation_plan_description]</td>"
                                . "<td>$row[donation_type]</td>"
                                . "<td>$row[is_active]</td></tr>";
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