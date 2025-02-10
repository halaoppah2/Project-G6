<?php
$conn = new mysqli("localhost", "root", "", "information_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$entity = $_POST['entity'];
$message = "";

if ($entity === "employee") {
    $id = $_POST['employee_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employee SET name='$name', email='$email', phone='$phone', role='$role', salary='$salary' WHERE employee_id='$id'";
    
} elseif ($entity === "client") {
    $id = $_POST['client_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company_name'];
    $address = $_POST['address'];

    $sql = "UPDATE client SET name='$name', email='$email', phone='$phone', company_name='$company', address='$address' WHERE client_id='$id'";

} elseif ($entity === "project") {
    $id = $_POST['project_id'];
    $client_id = $_POST['client_id'];
    $project_name = $_POST['project_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $sql = "UPDATE project SET client_id='$client_id', project_name='$project_name', start_date='$start_date', end_date='$end_date', status='$status' WHERE project_id='$id'";

} elseif ($entity === "service") {
    $id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE services SET service_name='$service_name', description='$description', price='$price' WHERE service_id='$id'";
}

if ($conn->query($sql) === TRUE) {
    $message = "Record updated successfully!";
} else {
    $message = "Error updating record: " . $conn->error;
}

$conn->close();
?>

<script>
    alert("<?php echo $message; ?>");
    window.history.back(); // Keeps the user on the same page
</script>
