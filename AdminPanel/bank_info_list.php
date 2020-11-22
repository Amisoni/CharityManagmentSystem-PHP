<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <H2> BANK INFO LIST </H2>

    <script>
        function updaterow(bank_detail_id)
        {
            alert(bank_detail_id);
            window.location.href = "receiver_bank_update.php?bank_detail_id=" + bank_detail_id;
        }
        function deleterow(bank_detail_id)
        {
            alert(bank_detail_id);
            window.location.href = "../controller/receiver_bank_delete.php?bank_detail_id=" + bank_detail_id;
        }
    </script>
    <!--<h4>Print Click Here ::</h4>--> 
    <!--<i  class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th> Bank Detail ID </th> 
                            <th> Accout Holder </th> 
                            <th> Account Number</th>
                            <th> Bank Name</th>
                            <th> Branch Name</th>
                            <th> Ifsc Code</th>
                            <th> Micr Code</th>
                            <th> City Name </th>
                            <th> Name </th>
                            <th>Is Active</th>
                            <!--<th>Update</th>-->
                            <!--<th>Delete</th>-->
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select b.bank_name, c.city_name, r.first_name,r.last_name,rb.* from tbl_receiver_bank_detail rb 
left join tbl_bank b on b.bank_id = rb.bank_id
left join tbl_city c on c.city_id = rb.city_id
left join tbl_registration r on r.registration_id = rb.registration_id";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[bank_detail_id]</td>"
                                . "<td>$row[account_holder_name]</td>"
                                . "<td>$row[account_number]</td>"
                                . "<td>$row[bank_name]</td>"
                                . "<td>$row[branch_name]</td>"
                                . "<td>$row[ifsc_code]</td>"
                                . "<td>$row[micr_code]</td>"
                                . "<td>$row[city_name]</td>"
                                . " <td>" . $row['first_name'] . " " . $row['last_name'] . "</td>"
                                . "<td>$row[is_active]</td></tr>";
//                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[bank_detail_id])' value='update'/> </td>"
//                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[bank_detail_id])' value='delete'/> </td></tr>";
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