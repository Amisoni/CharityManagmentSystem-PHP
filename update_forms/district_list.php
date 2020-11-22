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
            function updaterow(district_id)
            {
                alert(district_id);
                window.location.href = "district_update.php?district_id=" + district_id;
            }
            function deleterow(district_id)
            {
                alert(district_id);
                window.location.href = "distric_delete.php?district_id=" + district_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th>districtid </th> 
                <th> districtname </th> 
                <th> is active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_district";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[district_id]</td>"
                    . "<td>$row[district_name]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[district_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[district_id])' value='delete'/> </td></tr>";
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