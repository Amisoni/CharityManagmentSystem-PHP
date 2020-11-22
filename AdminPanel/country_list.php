<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>

<html>

    <h3>  COUNTRY LIST</h3>

    <script>
        function updaterow(country_id)
        {
            alert(country_id);
            window.location.href = "country_update.php?country_id=" + country_id;
        }
        function deleterow(country_id)
        {
            alert(country_id);
            window.location.href = "../controller/country_delete.php?country_id=" + country_id;
        }
    </script>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">  
                        <tr>
                            <th>Country Id</th> 
                            <th>Country Name</th> 
                            <th>Is Active</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_country";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[country_id]</td>"
                                . "<td>$row[country_name]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-pencil' onclick='updaterow($row[country_id])' value='update'/> </td>"
                                . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[country_id])' value='delete'/> </td></tr>";
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