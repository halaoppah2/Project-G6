<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact WINNIE IT Solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <h1 class="contact-heading">Connect Us</h1>

        <div class="essential-contact">
            <div class="contact-item">
                <i class="fas fa-envelope contact-icon"></i>
                <div class="contact-text">contact@winniesolutions.com</div>
            </div>
            
            <div class="contact-item">
                <i class="fas fa-phone contact-icon"></i>
                <div class="contact-text">+233 (0)244 555 666</div>
            </div>
        </div>

        <div class="contact-grid">
            <div class="contact-item">
                <i class="fab fa-facebook-square contact-icon"></i>
                <div class="contact-text">Facebook</div>
                <div class="contact-text">@winnieSolutionInc</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-twitter contact-icon"></i>
                <div class="contact-text">Twitter</div>
                <div class="contact-text">@winnieSolutionHQ</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-linkedin contact-icon"></i>
                <div class="contact-text">LinkedIn</div>
                <div class="contact-text">WinnieSolutions Inc.</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-instagram contact-icon"></i>
                <div class="contact-text">Instagram</div>
                <div class="contact-text">@wiineSolutions.gram</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-youtube contact-icon"></i>
                <div class="contact-text">YouTube</div>
                <div class="contact-text">WinnieSolutions TV</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-github contact-icon"></i>
                <div class="contact-text">GitHub</div>
                <div class="contact-text">@Winnieolutions-Dev</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-slack contact-icon"></i>
                <div class="contact-text">Slack Community</div>
                <div class="contact-text">winniesolutions.slack.com</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-discord contact-icon"></i>
                <div class="contact-text">Discord</div>
                <div class="contact-text">WinnieSolutions Hub</div>
            </div>

            <div class="contact-item">
                <i class="fab fa-whatsapp contact-icon"></i>
                <div class="contact-text">WhatsApp</div>
                <div class="contact-text">+233 (0)20 254 2548</div>
            </div>

            <!-- <div class="contact-item">
                <i class="fab fa-stack-overflow contact-icon"></i>
                <div class="contact-text">Stack Overflow</div>
                <div class="contact-text">TechSolutions Team</div>
            </div> -->
        </div>
    </div>
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

        /* Contact page specific styles */
        .contact-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
        }

        .contact-heading {
            font-size: 2.5em;
            color: #7ed6df;
            margin-bottom: 50px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            padding: 30px;
        }

        .contact-item {
            padding: 30px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        .contact-icon {
            font-size: 2.5em;
            margin-bottom: 15px;
            color: #7ed6df;
        }

        .contact-text {
            font-size: 1.3em;
            color: #ecf0f1;
            letter-spacing: 1.2px;
            margin: 10px 0;
        }

        .essential-contact {
            margin: 50px auto;
            padding: 30px;
            background: rgba(44, 62, 80, 0.3);
            border-radius: 15px;
            max-width: 600px;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</html>