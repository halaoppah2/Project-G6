<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST['form_type']; // Identify which table to delete from
    $id = $_POST['id']; // ID of the record to delete

    $conn = new mysqli('localhost', 'root', '', 'information_system');

    if ($conn->connect_error) {
        die("<script>alert('Connection Failed: " . $conn->connect_error . "'); window.history.back();</script>");
    }

    // Determine the correct table and ID column
    switch ($form_type) {
        case "employee":
            $stmt = $conn->prepare("DELETE FROM employee WHERE employee_id = ?");
            break;
        case "client":
            $stmt = $conn->prepare("DELETE FROM client WHERE client_id = ?");
            break;
        case "project":
            $stmt = $conn->prepare("DELETE FROM project WHERE project_id = ?");
            break;
        case "service":
            $stmt = $conn->prepare("DELETE FROM services WHERE service_id = ?");
            break;
        default:
            die("<script>alert('Invalid form type!'); window.history.back();</script>");
    }

    if (!$stmt) {
        die("<script>alert('Prepare failed: " . $conn->error . "'); window.history.back();</script>");
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully!'); window.location.href=document.referrer;</script>";
    } else {
        echo "<script>alert('Failed to delete record.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
