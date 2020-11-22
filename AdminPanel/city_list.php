<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <h3>  CITY LIST</h3>
    <script>
        function updaterow(city_id)
        {
            alert(city_id);
            window.location.href = "city_update.php?city_id=" + city_id;
        }
        function deleterow(city_id)
        {
            alert(city_id);
            window.location.href = "city_delete.php?city_id=" + city_id;
        }
    </script>

    <!--Print Click Here ::-->
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>--> 
    <!--<body>--> 
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>City Id</th> 
                            <th>City Name</th>
                            <th>Is Active</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_city";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[city_id]</td>"
                                . "<td>$row[city_name]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-pencil' onclick='updaterow($row[city_id])' value='update'/> </td>"
                                . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[city_id])' value='delete'/> </td></tr>";
//                . "<td> <input type='button' onclick='updaterow($row[city_id])' value='update'/> </td>"
//                . "<td> <input type='button' onclick='deleterow($row[city_id])' value='delete'/> </td> </tr>";
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
           