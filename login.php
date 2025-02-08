<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TechSolutions Inc.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Base Styles */
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

        /* Login Container */
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

        .login-btn {
            background: #2ecc71;
            color: white;
        }

        .register-btn {
            background: #3498db;
            color: white;
            margin-top: 20px;
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

        /* Hidden elements */
        .hidden {
            display: none;
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
            <a href="register.php">Register</a>
        </div>
    </nav>

    <div class="auth-container">
        <h1 class="auth-heading">Login to Dashboard</h1>
        
        <div id="response" class="response"></div>

        <form id="loginForm" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            
            <div class="form-group password-container">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
            </div>

            <button type="submit" class="btn login-btn">Login</button>
        </form>

        <div class="links">
            <a href="#forgot-password" onclick="showForgotPassword()">Forgot Password?</a>
        </div>

        <button class="btn register-btn" onclick="window.location.href='register.html'">
            Create New Account
        </button>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgotPassword" class="auth-container hidden">
        <h1 class="auth-heading">Reset Password</h1>
        <form id="forgotForm" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Registered Email" required>
            </div>
            <button type="submit" class="btn login-btn">Reset Password</button>
            <button type="button" class="btn register-btn" onclick="hideForgotPassword()">Cancel</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.querySelector('.toggle-password');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function showForgotPassword() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('forgotPassword').classList.remove('hidden');
        }

        function hideForgotPassword() {
            document.getElementById('loginForm').classList.remove('hidden');
            document.getElementById('forgotPassword').classList.add('hidden');
        }

        // Handle form submissions
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            const response = await fetch('login_handler.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            showResponse(result);
        });

        document.getElementById('forgotForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            const response = await fetch('password_reset.php', {
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
                    window.location.href = result.redirect;
                }
            }
        }
    </script>
</body>
</html>