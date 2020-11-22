<?php

include 'connection.php';

if ($_POST['page'] == 'sltCountry') {
    $query = "SELECT country_id as id,country_name FROM tbl_country order by country_name";
//     $query = "SELECT country_id as id,name FROM tbl_country order by name";
} else if ($_POST['page'] == 'sltState') {
    $id = $_POST['id'];
    $query = "SELECT state_id as id,state_name FROM tbl_state WHERE country_id = '" . $id . "' order by country_name";
//    $query = "SELECT state_id as id,name FROM tbl_state WHERE country_id = '" . $id . "' order by name";
} else if ($_POST['page'] == 'sltDistrict') {
    $id = $_POST['id'];
    $query = "SELECT district_id as id, district_name as name FROM tbl_district WHERE state_id = '" . $id . "' order by district_name";
//    $query = "SELECT district_id as id, name as name FROM tbl_district WHERE state_id = '" . $id . "' order by name";
}else if ($_POST['page'] == 'sltCity') {
    $id = $_POST['id'];
    $query = "SELECT city_id as id, city_name as name FROM tbl_city WHERE district_id = '" . $id . "' order by name";
}

echo("<option value = '0'>---Select---</option>");

$result = mysqli_query($conn, $query);
if (!$result) {
    mysqli_error($conn);
    die('Invalid Query' . $query);
}
while ($row = mysqli_fetch_array($result)) {
    echo("<option value = '" . $row['id'] . "' >" . $row['name'] . "</option>");
//    echo("<option value = '" . $row['state_id'] . "' >" . $row['state_name'] . "</option>");
//    echo("<option value = '" . $row['district_id'] . "' >" . $row['district_name'] . "</option>");
//    echo("<option value = '" . $row['city_id'] . "' >" . $row['city_name'] . "</option>");
    
    
}

mysqli_free_result($result);
mysqli_close($conn);



?>