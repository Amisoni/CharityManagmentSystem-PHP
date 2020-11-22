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
                <th>feedback_id </th> 
                <th> feedback </th>
                
                <th> registration id </th>
                <!--<th> action </th>-->

            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_feedback";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[feedback_id]</td>"
                    . "<td>$row[feedback_description]</td>"
                    . "<td>$row[registration_id]</td></tr>";       
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
            