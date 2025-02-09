<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST['form_type']; // Identify table
    $record_id = $_POST['record_id']; // Get the ID input

    $conn = new mysqli('localhost', 'root', '', 'information_system');

    if ($conn->connect_error) {
        die("<script>alert('Connection Failed: " . $conn->connect_error . "'); window.history.back();</script>");
    }

    // Define table and primary key based on form type
    switch ($form_type) {
        case "employee":
            $sql = "SELECT * FROM employee WHERE employee_id = ?";
            break;
        case "client":
            $sql = "SELECT * FROM client WHERE client_id = ?";
            break;
        case "project":
            $sql = "SELECT * FROM project WHERE project_id = ?";
            break;
        case "service":
            $sql = "SELECT * FROM services WHERE service_id = ?";
            break;
        default:
            die("<script>alert('Invalid form type!'); window.history.back();</script>");
    }

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $record_id); // Assuming the ID is an integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";

        // Fetch column names
        while ($field = $result->fetch_field()) {
            echo "<th>" . ucfirst($field->name) . "</th>";
        }

        echo "</tr>";

        // Fetch record
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No record found with ID: " . htmlspecialchars($record_id) . ".</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
