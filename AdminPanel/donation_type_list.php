<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <h3> DONATION TYPE LIST</h3>

    <script>
        function updaterow(donation_type_id)
        {
            alert(donation_type_id);
            window.location.href = "donation_type_update.php?donation_type_id=" + donation_type_id;
        }
        function deleterow(donation_type_id)
        {
            alert(donation_type_id);
            window.location.href = "../controller/donation_type_delete_controller.php?donation_type_id=" + donation_type_id;
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
                            <th> Donation Type Id </th> 
                            <th> Donation Type </th> 
                            <th> Is Active </th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_donation_type";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[donation_type_id]</td>"
                                . "<td>$row[donation_type]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td><i class='glyphicon glyphicon-pencil' onclick='updaterow($row[donation_type_id])' value='update'>"
                                . "<td><i class='glyphicon glyphicon-trash' onclick='deleterow($row[donation_type_id])' value='delete'/> </td></tr>";
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