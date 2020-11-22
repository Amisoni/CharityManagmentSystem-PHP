<?php //
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
                <th>blog_id </th> 
                <th> blog name </th>
                <th> blog remarks </th>
                <th> is_active </th>
                <th> registration id </th>
                <!--<th> action </th>-->
                 
            </tr>
            <?php
            include '../controller/connection.php';
            
            $query = "select * from tbl_blog";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[blog_id]</td>"
                            . "<td>$row[blog_name]</td>"
                            . "<td>$row[blog_remark]</td>"
                            . "<td>$row[is_active]</td>"
                           . "<td>$row[registration_id]</td></tr>";
//                            . "<td> <input type='button' onclick='updaterow($row[city_id])' value='update'/> </td>"
//                            . "<td> <input type='button' onclick='deleterow($row[blog_id])' value='delete'/> </td></tr>";
                  
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
            