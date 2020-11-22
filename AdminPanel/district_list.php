<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <h3> DISTRICT LIST </h3>
    <script>
        function updaterow(district_id)
        {
            alert(district_id);
            window.location.href = "district_update.php?district_id=" + district_id;
        }
        function deleterow(district_id)
        {
            alert(district_id);
            window.location.href = "distric_delete.php?district_id=" + district_id;
        }
    </script>

    <!--         <h4>Print Click Here ::</h4> 
        <i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">   
                        <tr>
                            <th>District Id</th> 
                            <th>District Name</th> 
                            <th>Is Active</th>
                            <th>Upadte</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_district";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[district_id]</td>"
                                . "<td>$row[district_name]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-pencil' onclick='updaterow($row[district_id])' value='update'/> </td>"
                                . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[district_id])' value='delete'/> </td></tr>";
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