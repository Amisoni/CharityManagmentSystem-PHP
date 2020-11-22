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
                <th> registration_id </th> 
                <th> firstname</th> 
                <th> lastname</th>
                <th>birth_date</th>
                <th>gender</th>
                <th> email_id </th>
                <th> password </th>
                <th>mobile number</th>
                <th> add_line_one </th>
                <th> add_line_two</th>
                <th> cityid </th>
                <th>pincode</th>
                <th>usertype_id </th>
                 <th>profile_path</th>
<!--                <th> usertype</th>
                <th>cityname</th>-->
                <th> action </th>
                <th> action </th>
            </tr>
            <?php
            include '../controller/connection.php';
            $query = "select * from tbl_registration";
//            $query = "SELECT tr.user_id,tr.username,tr.email,tr.password,tr.gender,tr.mobilenumber,tr.usertype_id,tr.cityid,tr.add_line_one,tr.add_line_two,
//                      tr.pincode ,ut.usertype ,tc.cityname FROM regi tr
//                       LEFT JOIN usertype ut ON ut.usertype_id=tr.usertype_id
//                       LEFT JOIN city tc ON tr.cityid=tc.city_id ORDER BY user_id ";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[registration_id]</td>"
                    . "<td> $row[first_name]</td>"
                    . " <td> $row[last_name]</td>"
                    . " <td> $row[birth_date]</td>"
                    . " <td> $row[gender] </td> "
                    . " <td> $row[email_id] </td> "
                    . " <td> $row[phone_number] </td>"
                    . " <td> $row[password] </td>"
                    . " <td> $row[address_line_one] </td>"
                    . " <td> $row[address_line_two] </td>"
                    . " <td> $row[city_id] </td> "
                    . " <td> $row[pincode] </td>"
                    . " <td> $row[user_type_id] </td> "
                  . " <td> $row[profile_path] </td> "
                            //. " < td>$row[usertype]</td>"
                    //. "<td>$row[cityname]</td>"
                    . "<td> <input type = 'button' onclick = 'updaterow($row[registration_id])' value = 'update'/> </td>"
                    . " <td> <input type = 'button' onclick = 'deleterow($row[registration_id])' value = 'delete'/> </td></tr>";
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