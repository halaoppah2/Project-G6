<!DOCTYPE html>
<html>
<head>
    <title>Information System</title>
    <style>

        body{
            overflow-x: hidden;
        }
        .table-container {
            display: flex;
            gap: 2px; /* Adds space between tables */
            margin-left: 10px;
            margin-top: 10px;
        }
        table {
            border-collapse: collapse;
            width: 45%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
<h2 style="text-align: center;">WINNIE IT SOLUTION</h3>
<h1 style="text-align: center; margin-top: 20px;">INFORMATION SYSTEM</h2>

<?php
$conn = mysqli_connect("localhost", "root", "", "information_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection open</br>";
echo "Database is selected</br>";
?>

<div class="table-container">
    <!-- Employee Table -->
    <div>
        <table>
            <tr>
                <th>employee_id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>role</th>
                <th>salary</th>
            </tr>
            <?php
            $query = "SELECT * FROM employee";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                echo "<td>" . $row['employee_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <!-- Clien Table -->
    <div>
        <table>
            <tr>
                <th>client_id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>company_name</th>
                <th>address</th>
            </tr>
            <?php
            $query = "SELECT * FROM client";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                    echo "<td>" . $row['client_id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['company_name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>


</div>


<div class="table-container" style="position: relative; top: 20px; margin-bottom: 50px;">

 <!-- Project Table -->
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


<!-- Service Table -->
<div>
        <table>
            <tr>
                <th>service_id</th>
                <th>service_name</th>
                <th>description</th>
                <th>price</th>
            </tr>
            <?php
            $query = "SELECT * FROM services";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                    echo "<td>" . $row['service_id'] . "</td>";
                    echo "<td>" . $row['service_name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 40px; margin-bottom: 30px;">

<!-- logout -->
<button><a href="login.php" style="text-decoration: none;">Logout</a></button>

<!-- insert record -->
<button><a href="update.php" style="text-decoration: none;">Update Record</a></button>

<!-- retrieve record -->
<button><a href="retrieve_form.php" style="text-decoration: none;">Retrieve Record</a></button>

</div>

<!-- footer -->

<footer>
        &copy; 2025 Winnie IT Solution. All rights reserved.
  </footer>

</body>

<style>
    body{
        margin: 0;
        padding: 0;
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
