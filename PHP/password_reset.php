<!-- password_reset.php -->
<?php
// Database configuration same as above

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        
        $email = $_POST['email'];
        
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            // Generate reset token (implement proper token generation)
            $resetToken = bin2hex(random_bytes(32));
            
            // Store token in database
            $stmt = $pdo->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
            $stmt->execute([$resetToken, $email]);
            
            // Send email (implement actual email sending)
            echo json_encode([
                'status' => 'success',
                'message' => 'Password reset instructions sent to your email!'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Email not found!'
            ]);
        }
    } catch(PDOException $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        ]);
    }
}
?>