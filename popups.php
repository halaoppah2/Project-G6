<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Demo | WINNIE IT Solutions Inc.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
        </ul>
    </nav>

    <div class="demo-container">
        <h1 class="demo-heading">Demonstration of the Three Pop-ups</h1>
        
        <div class="popup-buttons">
            <button class="popup-btn alert-btn" onclick="showAlert()">
                <i class="fas fa-exclamation-triangle"></i>
                Alert Box
            </button>

            <button class="popup-btn confirm-btn" onclick="showConfirm()">
                <i class="fas fa-question-circle"></i>
                Confirm Box
            </button>

            <button class="popup-btn prompt-btn" onclick="showPrompt()">
                <i class="fas fa-comment-dots"></i>
                Prompt Box
            </button>
        </div>

        <div id="result" class="result-display"></div>
    </div>

    <script>
        function showAlert() {
            alert("This is a JavaScript Alert!\nWelcome to TechSolutions Inc.");
        }

        function showConfirm() {
            const result = confirm("This is a Confirm Box!\nDo you agree to the terms?");
            document.getElementById('result').textContent = 
                `Confirm Result: ${result ? 'Accepted' : 'Declined'}`;
        }

        function showPrompt() {
            const name = prompt("This is a Prompt Box!\nPlease enter your name:", " ");
            document.getElementById('result').textContent = 
                `Prompt Result: ${name ? name : 'No name entered'}`;
        }
    </script>
</body>

<style>
        /* Reuse existing styles */
        body {
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 25px;
            background: #2c3e50;
            margin: 0;
            gap: 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 1.3em;
            padding: 15px 25px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Pop-up demo specific styles */
        .demo-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
        }

        .demo-heading {
            font-size: 2.5em;
            color: #7ed6df;
            margin-bottom: 50px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .popup-buttons {
            display: flex;
            flex-direction: column;
            gap: 30px;
            align-items: center;
            margin-top: 50px;
        }

        .popup-btn {
            padding: 25px 50px;
            font-size: 1.5em;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .alert-btn {
            background: #e74c3c;
            color: white;
        }

        .confirm-btn {
            background: #f1c40f;
            color: #2c3e50;
        }

        .prompt-btn {
            background: #2ecc71;
            color: white;
        }

        .popup-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .result-display {
            margin-top: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            font-size: 1.2em;
            color: #7ed6df;
        }

        @media (max-width: 768px) {
            .popup-btn {
                width: 80%;
                font-size: 1.2em;
                padding: 20px 30px;
            }
        }
    </style>

</html>