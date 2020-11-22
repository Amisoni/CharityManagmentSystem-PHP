
            <?php
            include './connection.php';
            $donationtype = $_POST['txtDonationType'];
            $query = "INSERT INTO tbl_donation_type (donation_type) VALUES ('" . $donationtype . "')";
            //   $query = "select * from donationtype";

            $result = mysqli_query($conn, $query);
            if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
    }
    mysqli_close($conn);
            ?>