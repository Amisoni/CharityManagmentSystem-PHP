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
            function updaterow(donation_type_id)
            {
                alert(donation_type_id);
                window.location.href = "donation_type_update.php?donation_type_id=" + donation_type_id;
            }
            function deleterow(donation_type_id)
            {
                alert(donation_type_id);
                window.location.href = "../controller/donation_type_delete_controller.php?donation_type_id=" + donation_type_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th> donationtypeid </th> 
                <th> donationtype </th> 
                <th> is active </th>
                <th> update </th>
                <th> delete </th>
            </tr>
            <?php
            include '../controller/connection.php';

            $query = "select * from tbl_donation_type";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[donation_type_id]</td>"
                    . "<td>$row[donation_type]</td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-edit' onclick='updaterow($row[donation_type_id])' value='update'/> </td>"
                    . "<td> <a href='#' style='font-size:24px' class='fa fa-remove' onclick='deleterow($row[donation_type_id])' value='delete'/> </td></tr>";
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