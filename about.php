<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About WINNIE IT Solution </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reuse existing styles from index page */
        body {
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            font-family: 'Arial', sans-serif;
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

        /* About page specific styles */
        .about-content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
        }

        .about-heading {
            font-size: 2.5em;
            color: #7ed6df;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .about-text {
            font-size: 1.3em;
            line-height: 1.8;
            color: #ecf0f1;
            letter-spacing: 1.2px;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .highlight {
            color: #7ed6df;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <nav>
        <ul> 
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
        </ul>
    </nav>

    <div class="about-content">
        <h1 class="about-heading">About WINNIE IT Solution</h1>
        
        <p class="about-text">
            <span class="highlight">Founded in 2020</span>, WINNIE IT Solution has rapidly emerged as a leader 
            in innovative IT solutions and digital transformation services. 
            Our mission is to empower businesses through cutting-edge technology 
            and strategic digital solutions.
        </p>

        <p class="about-text">
            With a team of <span class="highlight">150+ certified professionals</span>, we've successfully delivered 
            over <span class="highlight">500 projects</span> across various industries, maintaining a 
            <span class="highlight">98% client satisfaction rate</span>. Our expertise spans cloud computing, 
            cybersecurity, AI integration, and enterprise software development.
        </p>

        <p class="about-text">
            What sets us apart is our commitment to <span class="highlight">personalized service</span> and 
            <span class="highlight">24/7 technical support</span>. We believe in building long-term partnerships 
            that drive sustainable growth and technological excellence.
        </p>
    </div>
</body>
</html>