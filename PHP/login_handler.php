<!-- login_handler.php -->
<?php
session_start();
// Database configuration
$host = 'localhost';
$dbname = 'your_database';
$user = 'db_user';
$pass = 'db_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo json_encode([
            'status' => 'success',
            'message' => 'Login successful!',
            'redirect' => 'dashboard.php'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid credentials!'
        ]);
    }
} catch(PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database error: ' . $e->getMessage()
    ]);
}
?>