<?php
$conn = new mysqli("localhost", "root", "", "information_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
    <script>
        function showFields() {
            var entity = document.getElementById("entity").value;
            var fieldsDiv = document.getElementById("fields");
            var fields = "";

            if (entity === "employee") {
                fields = `
                    <label>Employee ID:</label> <input type="text" name="employee_id" required><br>
                    <label>Name:</label> <input type="text" name="name"><br>
                    <label>Email:</label> <input type="email" name="email"><br>
                    <label>Phone:</label> <input type="text" name="phone"><br>
                    <label>Role:</label> <input type="text" name="role"><br>
                    <label>Salary:</label> <input type="text" name="salary"><br>
                `;
            } else if (entity === "client") {
                fields = `
                    <label>Client ID:</label> <input type="text" name="client_id" required><br>
                    <label>Name:</label> <input type="text" name="name"><br>
                    <label>Email:</label> <input type="email" name="email"><br>
                    <label>Phone:</label> <input type="text" name="phone"><br>
                    <label>Company Name:</label> <input type="text" name="company_name"><br>
                    <label>Address:</label> <input type="text" name="address"><br>
                `;
            } else if (entity === "project") {
                fields = `
                    <label>Project ID:</label> <input type="text" name="project_id" required><br>
                    <label>Client ID:</label> <input type="text" name="client_id"><br>
                    <label>Project Name:</label> <input type="text" name="project_name"><br>
                    <label>Start Date:</label> <input type="date" name="start_date"><br>
                    <label>End Date:</label> <input type="date" name="end_date"><br>
                    <label>Status:</label> <input type="text" name="status"><br>
                `;
            } else if (entity === "service") {
                fields = `
                    <label>Service ID:</label> <input type="text" name="service_id" required><br>
                    <label>Service Name:</label> <input type="text" name="service_name"><br>
                    <label>Description:</label> <input type="text" name="description"><br>
                    <label>Price:</label> <input type="text" name="price"><br>
                `;
            }

            fieldsDiv.innerHTML = fields;
        }
    </script>
</head>
<body>
    <form action="update.php" method="POST">
        <label>Select Entity:</label>
        <select id="entity" name="entity" onchange="showFields()">
            <option value="">--Select--</option>
            <option value="employee">Employee</option>
            <option value="client">Client</option>
            <option value="project">Project</option>
            <option value="service">Service</option>
        </select>
        <br>
        <div id="fields"></div>
        <br>
        <button type="submit">Update</button>
    </form>
</body>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-top: 10px;
    text-align: left;
}

select, input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    margin-top: 20px;
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

#fields {
    margin-top: 15px;
}

</style>

</html>
