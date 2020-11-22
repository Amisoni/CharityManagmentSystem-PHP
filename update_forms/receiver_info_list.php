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
            function updaterow(receiver_info_id)
            {
                alert(receiver_info_id);
                window.location.href = "receiver_update.php?receiver_info_id=" + receiver_info_id;
            }
            function deleterow(receiver_info_id)
            {
                alert(receiver_info_id);
                window.location.href = "../controller/receiver_info_delete.php?receiver_info_id=" + receiver_info_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th> receiver_info_id </th> 
                <th> user_id</th> 
                <th> plan_id</th>
                <th> payment_id</th>
                <th> is active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_receiver_info";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[receiver_info_id]</td>"
                    . "<td>$row[registration_id]</td>"
                    . "<td>$row[plan_id]</td>"
                    . "<td>$row[payment_id]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[receiver_info_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[receiver_info_id])' value='delete'/> </td></tr>";
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