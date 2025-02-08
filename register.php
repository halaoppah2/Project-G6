<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | TechSolutions Inc.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reuse existing styles */
        body {
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
        }

        nav {
            background: #2c3e50;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Registration Container */
        .auth-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            text-align: center;
        }

        .auth-heading {
            font-size: 2.2em;
            color: #7ed6df;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        input {
            width: 100%;
            padding: 15px;
            border: 2px solid #2c3e50;
            border-radius: 8px;
            background: #1a1a1a;
            color: #fff;
            font-size: 1.1em;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #7ed6df;
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .register-btn {
            background: #3498db;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .links {
            margin-top: 25px;
        }

        .links a {
            color: #7ed6df;
            text-decoration: none;
            font-size: 0.9em;
        }

        /* Response messages */
        .response {
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .error {
            background: #e74c3c;
        }

        .success {
            background: #2ecc71;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <div>
            <a href="login.php">Login</a>
        </div>
    </nav>

    <div class="auth-container">
        <h1 class="auth-heading">Create New Account</h1>
        
        <div id="response" class="response"></div>

        <form id="registerForm" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            
            <div class="form-group password-container">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
            </div>

            <div class="form-group password-container">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                <i class="fas fa-eye toggle-password" onclick="toggleConfirmPassword()"></i>
            </div>

            <button type="submit" class="btn register-btn">Register</button>
        </form>

        <div class="links">
            Already have an account? <a href="login.html">Login here</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.querySelector('#password + .toggle-password');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function toggleConfirmPassword() {
            const confirmPassword = document.getElementById('confirm_password');
            const icon = document.querySelector('#confirm_password + .toggle-password');
            if (confirmPassword.type === 'password') {
                confirmPassword.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                confirmPassword.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        // Handle form submission
        document.getElementById('registerForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(e.target);
            const password = formData.get('password');
            const confirmPassword = formData.get('confirm_password');

            if (password !== confirmPassword) {
                showResponse({ status: 'error', message: 'Passwords do not match!' });
                return;
            }

            const response = await fetch('register_handler.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            showResponse(result);
        });

        function showResponse(result) {
            const responseDiv = document.getElementById('response');
            responseDiv.className = `response ${result.status}`;
            responseDiv.textContent = result.message;
            
            if (result.status === 'success') {
                if (result.redirect) {
                    setTimeout(() => {
                        window.location.href = result.redirect;
                    }, 2000);
                }
            }
        }
    </script>
</body>
</html>