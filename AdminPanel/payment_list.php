<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <h3> PAYMENT LIST </h3>

    <script>
        function updaterow(payment_id)
        {
            alert(payment_id);
            window.location.href = "payment_mode_update.php?payment_id=" + payment_id;
        }
        function deleterow(payment_id)
        {
            alert(payment_id);
            window.location.href = "../controller/payment_delete.php?payment_id=" + payment_id;
        }
    </script>
    <!--<h4>Print Click Here ::</h4>--> 
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">  
                        <tr>
                            <th> Payment Id </th> 
                            <th> Payment Type </th> 
                            <th>Is Active</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_payment_mode";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[payment_id]</td>"
                                . "<td>$row[payment_name]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-pencil' onclick='updaterow($row[payment_id])' value='update'/> </td>"
                                . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[payment_id])' value='delete'/> </td></tr>";
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
            
