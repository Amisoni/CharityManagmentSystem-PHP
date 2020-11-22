<?php
include '../include/include_css.php';
include '../include/header_top.php';
include '../include/header_menu.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>  
            table,td,th{
                border:1px solid red;
            }
            td{background:pink;}
            th{background:violet;}
        </style>

        <script>
            function updaterow(registration_id)
            {
                alert(registration_id);
                window.location.href = "registration_update.php?registration_id=" + registration_id;
            }
        </script>

        <script>
            function deleterow(registration_id)
            {
                alert(registration_id);
                window.location.href = "controller/registration_delete.php?registration_id=" + registration_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>

                <th>Name</th> 
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Email Id</th>
                <th>Mobile</th>
                <th>Address</th>                
                <th>City Name</th>
                <th>Pincode</th>
                <th>Is Active</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            include '../controller/connection.php';
            $query = "select * from tbl_registration";
         
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
                    . " <td> $row[city_id] </td> "
                    . " <td> $row[pincode] </td>"
                    . " <td>$row[is_active] </td> "
                    . " <td style='text-align : center'><a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[registration_id])' value='update'/> </td>"
                    . " <td style='text-align : center'><a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[registration_id])' value='delete'/> </td>"
                    . "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>
<?php
include '../include/include_js.php';
include '../include/include_footer.php';
?>