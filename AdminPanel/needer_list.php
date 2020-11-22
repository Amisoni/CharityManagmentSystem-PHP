<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <h3> NEEDER LIST</h3>
    <!--<h4>Print Click Here ::</h4>--> 
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">     
                        <tr>
                            <th> Needer Information Id</th> 
                            <th> Donation Type</th> 
                            <th> Payment Name</th>
                            <th>Amount</th>
                            <th>Number Of Unites</th>
                            <th>Date</th>
                            <th>Needer Description</th>
                            <th>Name</th>       
                            <th>Is Active</th>

                            <?php
                            include '../controller/connection.php';
                            $query = "select r.first_name , r.last_name , n.*,d.donation_type,p.payment_name from tbl_needer_information n left join tbl_registration r on  r.registration_id=n.reistration_id
                           left join tbl_donation_type d on d.donation_type_id = n.donation_type
                            left join tbl_payment_mode p on p.payment_id = n.payment_name order by needer_information_id";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>$row[needer_information_id]</td>"
                                    . "<td> $row[donation_type]</td>"
                                    . " <td> $row[payment_name]</td>"
                                    . " <td> $row[amount]</td>"
                                    . " <td> $row[number_of_unites] </td> "
                                    . " <td> $row[date] </td> "
                                    . " <td> $row[needer_description] </td>"
                                    . " <td>" . $row['first_name'] . " " . $row['last_name'] . "</td>"
                                    . " <td> $row[is_active] </td></tr>";
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