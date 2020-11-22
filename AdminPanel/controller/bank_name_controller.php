
            <?php
            include './connection.php';
            $bankname = $_POST['txtBank_name'];
            $query = "INSERT INTO tbl_bank (bank_name) VALUES ('" . $bankname . "')";
           

            $result = mysqli_query($conn, $query);
            if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
            ?>