<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Record</title>
</head>
<body>

<h1 style="text-align: center;">Retrieve By ID Record Dashboard</h1>

<div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-bottom: 70px;">

    <fieldset style="width: 150px; padding: 20px; border-radius: 15px;">

      <!-- employee form -->
        <form action="retrieve.php" method="post">

            <input type="hidden" name="form_type" value="employee">

            <label for="record_id"><b>Enter Employee ID:</b></label>
            <input type="number" name="record_id" required><br><br>

            <input type="submit" value="Retrieve Employee Record"><br><br>
        </form>

     <!-- client form -->
        <form action="retrieve.php" method="post">

                <input type="hidden" name="form_type" value="client">

                <label for="record_id"><b>Enter Client ID:</b></label>
                <input type="number" name="record_id" required><br><br>

                <input type="submit" value="Retrieve Client Record"><br><br>
         </form>

          <!-- project form -->
        <form action="retrieve.php" method="post">

            <input type="hidden" name="form_type" value="project">

            <label for="record_id"><b>Enter Project ID:</b></label>
            <input type="number" name="record_id" required><br><br>

            <input type="submit" value="Retrieve Project Record"><br><br>
        </form>

         <!-- service form -->
        <form action="retrieve.php" method="post">
        
            <input type="hidden" name="form_type" value="service">

            <label for="record_id"><b>Enter Service ID:</b></label>
            <input type="number" name="record_id" required><br><br>

            <input type="submit" value="Retrieve Service Record"><br><br>
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