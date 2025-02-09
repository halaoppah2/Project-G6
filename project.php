<!DOCTYPE html>
<html>
<head>
    <title>Project Table</title>
</head>
<body>

<h2>Project Table</h2>

<?php

// database connection

$conn = mysqli_connect("localhost", "root", "", "information_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection open</br>";
echo "Database is selected</br>";

?>


<!-- Customers Table -->

    <div>
        <table>
            <tr>
                <th>project_id</th>
                <th>client_id</th>
                <th>project_name</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>status</th>
            </tr>
         
            <?php
            $query = "SELECT * FROM project";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";

                    echo "<td>" . $row['project_id'] . "</td>";
                    echo "<td>" . $row['client_id'] . "</td>";
                    echo "<td>" . $row['project_name'] . "</td>";
                    echo "<td>" . $row['start_date'] . "</td>";
                    echo "<td>" . $row['end_date'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";

                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <footer>
        &copy; 2025 Winnie IT Solution. All rights reserved.
  </footer>

</body>


<!-- style -->
 
<style>

    body{
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    h2{
        text-align: center;
    }
    
        table {
            border-collapse: collapse;
            width: 45%;
            margin-bottom: 65px;
            margin-left: 20px;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        footer {
            text-align: center;
            padding: 30px;
            background-color: #333;
            color: #fff;
            width: 100%;
            height: 15px;
        }

</style>

</html>
