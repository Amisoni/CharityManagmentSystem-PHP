<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <!--<head>--> 
    <h3> FEEDBACK LIST </H3>
    <!--<meta charset="UTF-8">-->
<!--    <style>  
        table,td,th{
            border:1px solid black;
        }            
    </style> -->
    <!--</head>-->
    <!--<bod    y>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                 <!--<th>Feedback_id </th>--> 
                            <th>Feedback</th>
                            <th>Name</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select r.first_name , r.last_name , f.feedback_description from tbl_feedback f left join tbl_registration r on  r.registration_id=f.registration_id;";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
//                    echo "<tr><td>$row[feedback_id]</td>"
                                echo "<tr> <td>$row[feedback_description]</td>"
                                . " <td>" . $row['first_name'] . " " . $row['last_name'] . "</td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--</body>-->
</html>
<?php
include './include/include_js.php';
?>
            