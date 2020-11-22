<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <H2> STATE LIST </h2>

    <script>
        function updaterow(state_id)
        {
            alert(state_id);
            window.location.href = "state_update.php?state_id=" + state_id;
        }
        function deleterow(state_id)
        {
            alert(state_id);
            window.location.href = "state_delete.php?state_id=" + state_id;
        }
    </script>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">    
                        <tr>
                            <th>State Id</th> 
                            <th>State Name</th> 
                            <th>Is Active</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';

                        $query = "select * from tbl_state";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$row[state_id]</td>"
                                . "<td>$row[state_name]</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-pencil' onclick='updaterow($row[state_id])' value='update'/> </td>"
                                . "<td> <i class='glyphicon glyphicon-trash' onclick='deleterow($row[state_id])' value='delete'/> </td></tr>";
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
            