    <?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <h3> DONATION APPROVE LIST  </h3>

    <script>
        function updaterow(donate_id)
        {
            alert(donate_id);
            window.location.href = "../controller/approve_controller.php?donate_id=" + donate_id;
        }
    </script>
    
    <!--<h4>Print Click Here</h4>--> 
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br> <br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">   
                        <tr>
                            <th> Donate Id </th> 
                            <th> Payment Name</th> 
                            <th> Plan Name</th> 
                            <th> Amount</th>
                            <th> Bank Name</th>
                            <th> Cheque DD Number</th>
                            <th> Registration Name</th>                
                            <th>Is Active</th>
                            <th>Approve</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select r.first_name , r.last_name ,b.bank_name, d.*,p.payment_name,pl.plan_name from tbl_donate d left join tbl_registration r on  r.registration_id=d.registration_id
               left join tbl_payment_mode p on p.payment_id = d.payment_name
               left join tbl_bank b on b.bank_id= d.bank_id
               left join tbl_donation_plan pl on pl.plan_id = d.plan_id order by donate_id";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[donate_id]</td>"
                                . "<td>$row[payment_name]</td>"
                                . "<td>$row[plan_name]</td>"
                                . "<td>$row[Amount]</td>"
                                . "<td>$row[bank_name]</td>"
                                . "<td>$row[ceque_dd]</td>"
                                . "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-check' onclick='updaterow($row[donate_id])' value='approve'/> </td> </tr>";
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