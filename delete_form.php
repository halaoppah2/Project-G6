<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>

<h1 style="text-align: center;">Delete Record Dashboard</h1>

<div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-bottom: 70px;">

    <fieldset style="width: 150px; padding: 20px; border-radius: 15px;">

    <!-- employee form -->
        <form action="delete.php" method="post">

            <input type="hidden" name="form_type" value="employee"><br><br>

            <label for="id"><b>Employee ID:</b></label>
            <input type="number" name="id" required><br><br>

            <div style="display: flex; gap: 10px">
                <input type="submit" value="Delete Record">

                <button><a href="employee.php" style="text-decoration: none;">Display Table</a></button>
            </div><br>
        </form>

  <!-- client form -->
        <form action="delete.php" method="post">
            <input type="hidden" name="form_type" value="client">

            <label for="id"><b>Client ID:</b></label>
            <input type="number" name="id" required><br><br>

            <div style="display: flex; gap: 10px">
                <input type="submit" value="Delete Record"><br><br>

                <button><a href="client.php" style="text-decoration: none;">Display Table</a></button>
            </div><br>
        </form>

          <!-- project form -->
        <form action="delete.php" method="post">
            <input type="hidden" name="form_type" value="project">

            <label for="id"><b>Project ID:</b></label>
            <input type="number" name="id" required><br><br>

            <div style="display: flex; gap: 10px">
                <input type="submit" value="Delete Record"><br><br>

                <button><a href="project.php" style="text-decoration: none;">Display Table</a></button>
            </div><br>
        </form>

  <!-- service form -->
        <form action="delete.php" method="post">
            <input type="hidden" name="form_type" value="service">

            <label for="id"><b>Service ID:</b></label>
            <input type="number" name="id" required><br><br>

            <div style="display: flex; gap: 10px">
                <input type="submit" value="Delete Record">

                <button><a href="service.php" style="text-decoration: none;">Display Table</a></button>
            </div>
        </form>
    </fieldset>

</div>

<div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-bottom: 20px;">

<button ><a href="login.php" style="text-decoration: none;">Logout</a></button>

<button ><a href="index.php" style="text-decoration: none;">Home</a></button>

</div>


<footer>
        &copy; 2025 Winnie IT Solution. All rights reserved.
  </footer>

</body>

<style>
body{
    overflow-x: hidden;
    margin: 0;
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