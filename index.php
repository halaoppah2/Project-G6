<!DOCTYPE html>
<html>
<head>
    <title>WINNIE IT Solution - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<h1 style="text-align: center;">WINNIE IT SOLUTION</h1>
<h2 style="text-align: center;">INFORMATION SYSTEM</h2>
    
    <nav>
        
        <ul> 
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>

            <li><a href="about.php"><i class="fas fa-info-circle"></i>About</a></li>

            <li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>

            <li><a href="popups.php"><i class="fas fa-window-restore"></i>Pop-up Demo</a></li>

            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>

        </ul>
    </nav>

    <!-- Scrolling Text -->
    <div class="scrolling-text" id="scrollingText">

        <!-- <marquee behavior="scroll" direction="left">Welcome to WINNIE IT Solution Inc! Your trusted IT partner since 2020.</marquee> -->

    </div>

    <!-- Image Swapping -->
    <div id="image-slider">
    <div class="slider-container">
        <img class="slider-image" src="images/img1.jpg">
        <img class="slider-image" src="images/img2.jpg">
        <img class="slider-image" src="images/img3.png">
        <img class="slider-image" src="images/img4.jpg">
        <img class="slider-image" src="images/img5.jpg">
    </div>
</div>

    <!-- Team Profiles -->
    <div class="profiles">
        <div class="member">
            <img src="images/KEYS.jpg">
            <h3>Wendy Bema Agyemang</h3>
            <p>ID: PS/ITC/22/0204 </p>
        </div>
        <div class="member">
            <img src="images/fred.jpg">
            <h3>Fredrick Madugu</h3>
            <p>ID: PS/ITC/22/0006</p>
        </div>
        <div class="member">
            <img src="images/eric.jpg">
            <h3>Eric Gyepi-Garbrah</h3>
            <p>ID: PS/ITC/22/0030 </p>
        </div>
        <div class="member">
            <img src="images/enoch.jpg">
            <h3>Enoch Oppah</h3>
            <p>ID: PS/ITC/22/0064</p>
        </div>
        <div class="member">
            <img src="images/.jpg">
            <h3>Osei Kwame Richard</h3>
            <p>ID: PS/ITC/22/0027</p>
        </div>
        <div class="member">
            <img src="images/robert.jpg">
            <h3>Opoku Robert</h3>
            <p>ID: PS/ITC/22/0112</p>
        </div>
        <div class="member">
            <img src="images/anthony.jpg">
            <h3>Freeman Bosompem Anthony</h3>
            <p>ID: PS/ITC/22/0251</p>
        </div>
        <div class="member">
            <img src="images/jeffery.jpg">
            <h3>Jeffery Opare Addo</h3>
            <p>ID: PS/ITC/22/0035</p>
        </div>
  
</body>

<!-- styling -->

<style>
#image-slider {
    max-width: 1200px;
    margin: 50px auto;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.slider-container {
    position: relative;
    height: 500px;
}

.slider-image {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
    pointer-events: none; /* Prevent image dragging */
}

.slider-image.active {
    opacity: 1;
    pointer-events: auto;
}

/* Optional: Add hover pause */
.slider-container:hover .slider-image {
    transition-duration: 2s;
}

.scrolling-text {
            background-color: #2c3e50;;
            padding: 10px;
            margin: 20px 0;
            overflow: hidden;
            white-space: nowrap;
            font-size: 15pt;
        }
</style>


<!-- scripting -->

<script>

    let currentSlide = 0;
    let slideInterval;
    const slides = document.querySelectorAll('.slider-image');
    const totalSlides = slides.length;

    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.add('active');
    }

    function startSlider() {
        if (totalSlides > 0) {
            slides[0].classList.add('active');
            slideInterval = setInterval(nextSlide, 4000); // 4s total (3s visible + 1s transition)
        }
    }

    // Initialize slider with safety checks
    document.addEventListener('DOMContentLoaded', () => {
        if (slides.length >= 2) { // Require at least 2 images
            startSlider();
            
            // Optional: Pause on hover
            document.querySelector('.slider-container').addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });
            
            document.querySelector('.slider-container').addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, 4000);
            });
        } else {
            console.warn('Slider requires at least 2 images');
        }
    });

    // scroling text
    const scrollingText = document.getElementById('scrollingText');
            const text = 'Welcome to our group page! Meet our team and explore our projects.';
            let index = 0;

            function scrollText() {
                scrollingText.textContent = text.slice(0, index);
                index++;
                if (index > text.length) {
                    index = 0;
                }
            }

            // Update the scrolling text every 150 milliseconds
            setInterval(scrollText, 150);
</script>

</html>