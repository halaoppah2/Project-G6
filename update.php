<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>

    <h1 style="text-align: center;">Information Management</h1>

    <div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 20px; margin-bottom: 70px;">

    <!-- employee form -->

        <form action="insert.php" method="post">


            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Employee Form</b></legend>

                <input type="hidden" name="form_type" value="employee">

                <label for="employee_id">Employee ID:</label>
                <input type="number" name="employee_id" id="employee_id" required><br><br>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">email:</label>
                <input type="text" name="email" id="email"><br><br>

                <label for="phone">Phone:</label>
                <input type="number" name="phone" id="fname"><br><br>

                <label for="role">Role:</label>
                <input type="text" name="role" id="role"><br><br>

                <label for="salary">Salary:</label>
                <input type="number" name="salary" id="salary"><br><br>

                <input type="submit" value="Insert Record">

                <!-- display button -->

                <button style="position: relative; top: 10px;"><a href="employee.php" style="text-decoration: none;">Display Employee Table</a></button>

            </fieldset>
        </form>

    <!-- client form -->
    
         <form action="insert.php" method="post">

            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Client Form</b></legend>

                <input type="hidden" name="form_type" value="client">

                <label for="client_id">Client ID:</label>
                <input type="number" name="client_id" id="purchases_id" required><br><br>

                <label for="name">Name</label>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" ><br><br>

                <label for="phone">Phone:</label>
                <input type="number" name="phone" id="phone" required><br><br>

                <label for="company_name">Company Name:</label>
                <input type="text" name="company_name" id="company_name"  required><br><br>

                <label for="address">Address:</label>
                <input type="text" name="address" id="address"><br><br>

                <input type="submit" value="Insert Record">

                <!-- display Client table -->
                 
                <button style="position: relative; top: 10px;"><a href="client.php" style="text-decoration: none;">Display Client Table</a></button>

            </fieldset>
        </form>

    <!-- project form -->

        <form action="insert.php" method="post">

            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Project Form</b></legend>

                <input type="hidden" name="form_type" value="project">

                <label for="products_id">Project ID:</label>

                <input type="number" name="project_id" id="project_id" required><br><br>

                <label for="name">Client ID:</label>

                <input type="number" name="client_id" id="client_id" required><br><br>

                <label for="project_name">Project Name:</label>

                <textarea name="project_name" id="project_name"></textarea><br><br>

                <label for="quantity">Start Date:</label>
                <input type="date" name="start_date" id="start_date" required><br><br>

                <label for="end_date">End Date:</label>
                <input type="date" name="end_date" id="end_date" required><br><br>

                <label for="staus">Staus:</label>
                <input type="text" name="status" id="status" required><br><br>

                <input type="submit" value="Insert Record">

                <!-- display products -->

                <button style="position: relative; top: 10px;"><a href="project.php" style="text-decoration: none;">Display Project Table</a></button>

            </fieldset>
        </form>

    <!-- service form -->

         <form action="insert.php" method="post">

            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Service Form</b></legend>

                <input type="hidden" name="form_type" value="service">

                <label for="service_id">Service ID:</label>
                <input type="number" name="service_id" id="service_id" required><br><br>

                <label for="service_name">Service Name:</label>

                <input type="text" name="service_name" id="service_name" required><br><br>

                <label for="description">Description:</label>
                
                <textarea name="description" id="description"></textarea><br><br>

                <label for="price">Price:</label>
                <input type="number" name="price" id="price" step="0.01" required><br><br>

                <input type="submit" value="Insert Record">

                <!-- display pp -->

                <button style="position: relative; top: 10px;"><a href="service.php" style="text-decoration: none;">Display Service Table</a></button>

            </fieldset>
        </form>

    </div>

     <!-- logout -->

     <div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 40px">

     <button><a href="index.php" style="text-decoration: none;">Logout</a></button>

     <!-- deleting records -->

     <button><a href="delete_form.php" style="text-decoration: none;">Delete Record</a></button>

     <!-- display all tables-->

     <button><a href="info_sys.php" style="text-decoration: none;">Display All Tables</a></button>

     </div>

     <footer>
        &copy; 2025 Winnie IT Solution. All rights reserved.
  </footer>
    
</body>

<style>

    body{
        margin: 0;
        overflow-x: hidden;
    }

    button{
        position: relative;
        margin-top: -70px;
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