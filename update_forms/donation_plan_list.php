<?php
include '../include/include_js.php';
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
            function updaterow(plan_id)
            {
                alert(plan_id);
                window.location.href = "donation_plan_update_form.php?plan_id=" + plan_id;
            }
            function deleterow(plan_id)
            {
                alert(plan_id);
                window.location.href = "../controller/donation_plan_delete.php?plan_id=" + plan_id;
            }
        </script>
    <body>
        <table>   
            <tr>
                <th> plan_id</th>
                <th>planname</th>
                <th>duration</th>
                <th>amount</th>
                <th>donation_description </th>
                <th>donation_type_id</th>
                <th>photo path</th>
                <th> is active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';
            $query = "select * from tbl_donation_plan";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[plan_id]</td>"
                    . "<td>$row[plan_name]</td>"
                    . "<td>$row[duration]</td>"
                    . "<td>$row[amount]</td>"
                    . "<td>$row[donation_plan_description]</td>"
                    . "<td>$row[donation_type_id]</td>"
//                    . "<td>$row[photo_path]</td>"
                    . "<td><img src=$row[photo_path]></td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[plan_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[plan_id])' value='delete'/> </td></tr>";
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