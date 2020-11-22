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
            function updaterow(bank_detail_id)
            {
                alert(bank_detail_id);
                window.location.href = "receiver_bank_update.php?bank_detail_id=" + bank_detail_id;
            }
            function deleterow(bank_detail_id)
            {
                alert(bank_detail_id);
                window.location.href = "../controller/receiver_bank_delete.php?bank_detail_id=" + bank_detail_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th>bank_detail_id </th> 
                <th> account_holders</th> 
                <th> account number</th>
                <th> bank name</th>
                <th> branch name</th>
                <th> ifsc code</th>
                <th> micr code</th>
                <th> city id</th>
                <th> registration id</th>
                <th> action </th>
                <th> action </th>
            </tr>
            <?php
            include '../controller/connection.php';
            $query = "select * from tbl_receiver_bank_detail";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[bank_detail_id]</td>"
                    . "<td>$row[account_holder_name]</td>"
                    . "<td>$row[account_number]</td>"
                    . "<td>$row[bank_name]</td>"
                    . "<td>$row[branch_name]</td>"
                    . "<td>$row[ifsc_code]</td>"
                    . "<td>$row[micr_code]</td>"
                    . "<td>$row[city_id]</td>"
                    . "<td>$row[registration_id]</td>"
                    . "<td> <input type='button' onclick='updaterow($row[bank_detail_id])' value='update'/> </td>"
                    . "<td> <input type='button' onclick='deleterow($row[bank_detail_id])' value='delete'/> </td></tr>";
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