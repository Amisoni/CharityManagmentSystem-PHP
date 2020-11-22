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
            function updaterow(payment_id)
            {
                alert(payment_id);
                window.location.href = "payment_mode_update.php?payment_id=" + payment_id;
            }
            function deleterow(payment_id)
            {
                alert(payment_id);
                window.location.href = "../controller/payment_delete.php?payment_id=" + payment_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th> payment_id </th> 
                <th> payment type </th> 
                <th> is active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_payment_mode";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[payment_id]</td>"
                    . "<td>$row[payment_name]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[payment_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[payment_id])' value='delete'/> </td></tr>";
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
            
