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
    </head>
    <body>
        <table>   
            <tr>
                <th>stateid </th> 
                <th> statename </th> 
                <th> is active </th>
                <th> upadtde </th>
                <th> delete </th>
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
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[state_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[state_id])' value='delete'/> </td></tr>";
                    
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
            