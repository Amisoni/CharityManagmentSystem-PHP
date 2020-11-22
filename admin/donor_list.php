


 <div class="form-group">
            <div class="form-control">
                Donar list
                <select name="txtUser_type_id" value="txtUser_type_id">
                    <?php
                    include '../controller/connection.php';
                    $query = "select * from tbl_registration where user_type_id=2";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($show = mysqli_fetch_array($result)) {
                            echo "<option value='" . $show['user_type_id'] . "'> $show[first_name]</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
