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
            function updaterow(donate_id)
            {
                alert(donate_id);
                window.location.href = "../controller/approve_controller.php?donate_id=" + donate_id;
            }
        </script>
    </head>
    <body>
        <table>   
            <tr>
                <th> Donate Id </th> 
                <th> Payment Name</th> 
                <th> Plan Name</th>
                <th> Amount</th>
                <th> Bank Name</th>
                <th> Cheque DD Number</th>
                <th> Registration Id</th>
                <th> Check Box </th>
                <th>Is Active </th>
                <th>Approve</th>
            </tr>
            <?php
            include '../controller/connection.php';
            $query = "select * from tbl_donate where is_active=0";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[donate_id]</td>"
                    . "<td>$row[payment_name]</td>"
                    . "<td>$row[Amount]</td>"
                    . "<td>$row[bank_name]</td>"
                    . "<td>$row[ceque_dd]</td>"
                    . "<td>$row[registration_id]</td>"
                    . "<td><input type='checkbox'></td>"
                    . "<td>$row[is_active]</td>"
                    . "<td> <input type='button' onclick='updaterow($row[donate_id])' value='approve'/> </td> </tr>";
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