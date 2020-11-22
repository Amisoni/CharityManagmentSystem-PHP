<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>

    <h3> REGISTRATION LIST </h3>

    <!--<h4>Print Click Here ::</h4>--> 
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br><br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">   
                        <tr>
                            <th>Name</th> 
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Email Id</th>
                            <th>Mobile</th>
                            <th>Address</th>                
                            <th>City Name</th>
                            <th>User Type </th>
                            <th>Pincode</th>
                            <th>Is Active</th>
                            <!--<th>Update</th>-->
                            <!--<th>Delete</th>-->
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select c.city_name ,ut.user_type , r.* from tbl_registration r left join  tbl_city c on c.city_id = r.city_id left join tbl_user_type ut on r.user_type_id = ut.user_type_id  order by registration_id";

                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>"
                                . " <td>" . $row['first_name'] . " " . $row['last_name'] . "</td>"
                                . " <td> $row[birth_date]</td>"
                                . " <td> $row[gender] </td> "
                                . " <td> $row[email_id] </td> "
                                . " <td> $row[phone_number] </td>"
                                . " <td>" . $row['address_line_one'] . " " . $row['address_line_two'] . " </td>"
                                . " <td> $row[city_name] </td> "
                                . " <td> $row[user_type] </td> "
                                . " <td> $row[pincode] </td>"
                                . " <td>$row[is_active] </td> </tr>";
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