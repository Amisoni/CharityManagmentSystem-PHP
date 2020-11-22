<?php
include './include/include_css.php';
include './include/include_sidebar.php';
?>
<html>
    <h3> Needer Donor Donate List  </h3>
    <script>
        function updaterow(id)
        {
            alert(id);
            window.location.href = "needer_donor_donate_1.php?id=" + id;
        }
    </script>
    <!--<h4>Print Click Here</h4>--> 
    <!--<i class="glyphicon glyphicon-print" onclick="window.print()" value="Print Table"> </i> <br> <br>-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table table-bordered">   
                        <tr>
                            <th> Id </th> 
                            <th>  Donor Name</th> 
                            <th> Donor Phone Number</th>
                            <th> Needer Name</th>                
                            <th> Needer Phone Number </th>
                            <th>Is Active</th>
                            <th>Approve</th>
                        </tr>
                        <?php
                        include '../controller/connection.php';
                        $query = "select concat(r.first_name , r.last_name)as name, r.phone_number as donor_phone_number,
ri.first_name , ri.last_name, ri.phone_number as needer_phone_number,nd.* from tbl_needer_donor_donate nd 
left join tbl_registration r on  r.registration_id = nd.donor_id
left join tbl_needer_information ni on ni.needer_information_id = nd.needer_information_id
left join tbl_registration ri on ri.registration_id = ni.reistration_id";
                        $result = mysqli_query($conn, $query);
                        $i = 1;//show id(first column)
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>$i</td>"
                                . "<td>" . $row['name'] . "</td>"
                                . "<td>" . $row['donor_phone_number'] . "</td>"
                                . "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>"
                                . "<td>" . $row['needer_phone_number'] . "</td>"
                                . "<td>$row[is_active]</td>"
                                . "<td> <i class='glyphicon glyphicon-check' onclick='updaterow($row[id])' value='approve'/> </td> </tr>";
                                $i++;
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