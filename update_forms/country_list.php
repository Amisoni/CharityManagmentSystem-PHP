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
            function updaterow(country_id)
            {
                alert(country_id);
                window.location.href = "country_update.php?country_id=" + country_id;
            }
            function deleterow(country_id)
            {
                alert(country_id);
                window.location.href = "../controller/country_delete.php?country_id=" + country_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th>countryid </th> 
                <th> countryname </th> 
                <th> is_active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_country";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[country_id]</td>"
                    . "<td>$row[country_name]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[country_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[country_id])' value='delete'/> </td></tr>";
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