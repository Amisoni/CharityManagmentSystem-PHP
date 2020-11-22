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
            function updaterow(city_id)
            {
                alert(city_id);
                window.location.href = "city_update.php?city_id=" + city_id;
            }
            function deleterow(city_id)
            {
                alert(city_id);
                window.location.href = "city_delete.php?city_id=" + city_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th>city_id </th> 
                <th> cityname </th>
                <th> is_active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_city";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[city_id]</td>"
                    . "<td>$row[city_name]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[city_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[city_id])' value='delete'/> </td></tr>";
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
            