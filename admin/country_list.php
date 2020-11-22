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
            function updaterow(country_id)
            {
                alert(country_id);
                window.location.href = "country_update.php?country_id=" + country_id;
            }
               function deleterow(country_id)
            {
                alert(country_id);
                window.location.href = "../controller/country_delete.php?country_id=" + country_id;
            }
        </script>
    </head>
          <body>
        <table>   
            <tr>
                <th>countryid </th> 
                <th> countryname </th> 
                <th> action </th>
                 <th> action </th>
            </tr>
            <?php
            include '../controller/connection.php';
            
            $query = "select * from tbl_country";

            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>$row[country_id]</td>"
                            . "<td>$row[country_name]</td>"
                            . "<td> <input type='button' onclick='updaterow($row[country_id])' value='update'/> </td>"
                            . "<td> <input type='button' onclick='deleterow($row[country_id])' value='delete'/> </td></tr>";
                    
                }
            }
            ?>
        </table>
    </body>
</html>
            
            