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
    </head>
    <body>
        <table>     
            <tr>
                <th> needer_information_id</th> 
                <th> donation_type</th> 
                <th> payment_name</th>
                <th>amount</th>
                <th>number_of_unites</th>
                <th> date </th>
                <th> needer_description </th>
                <th>reistration_id</th>       
                <th>is active</th>

                <?php
                include '../controller/connection.php';
                $query = "select * from tbl_needer_information";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>$row[needer_information_id]</td>"
                        . "<td> $row[donation_type]</td>"
                        . " <td> $row[payment_name]</td>"
                        . " <td> $row[amount]</td>"
                        . " <td> $row[number_of_unites] </td> "
                        . " <td> $row[date] </td> "
                        . " <td> $row[needer_description] </td>"
                        . " <td> $row[reistration_id] </td>"
                        . " <td> $row[is_active] </td></tr>";
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