
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST['form_type']; // Identify which form was submitted

    $conn = new mysqli('localhost', 'root', '', 'information_system');

    if ($conn->connect_error) {
        die("<script>alert('Connection Failed: " . $conn->connect_error . "'); window.history.back();</script>");
    }
        // inserting into employee
    if ($form_type == "employee") {
        $employee_id = $_POST['employee_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $salary = $_POST['salary'];

        $stmt = $conn->prepare("INSERT INTO employee (employee_id, name, email, phone, role, salary) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issisd", $employee_id, $name, $email, $phone, $role, $salary);
    } 

    
        // inserting into client
    elseif ($form_type == "client") {
        $client_id = $_POST['client_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $company_name = $_POST['company_name'];
        $address = $_POST['address'];

        $stmt = $conn->prepare("INSERT INTO client (client_id, name, email, phone, company_name, address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ississ", $client_id, $name, $email, $phone, $company_name, $address);
    }

    
        // inserting into project
    elseif ($form_type == "project") {
        $project_id = $_POST['project_id'];
        $client_id = $_POST['client_id'];
        $project_name = $_POST['project_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $status = $_POST['status'];

        $stmt = $conn->prepare("INSERT INTO project (project_id, client_id, project_name, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iissss", $project_id, $client_id, $project_name, $start_date, $end_date, $status);
    }

        // inserting into service
    elseif ($form_type == "service") {
        $service_id = $_POST['service_id'];
        $service_name = $_POST['service_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        

        $stmt = $conn->prepare("INSERT INTO services (service_id, service_name, description, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("issd", $service_id, $service_name, $description, $price);
    }


    if (isset($stmt) && $stmt->execute()) {
        echo "<script>alert('Record inserted successfully!'); window.location.href=document.referrer;</script>";
    } else {
        echo "<script>alert('Failed to insert record.'); window.location.href=document.referrer;</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
