<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Portfolio Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1c1c1c;
            color: #fff;
            scroll-behavior: smooth;
        }
        header {
            background-color: #111;
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        header.scrolled {
            background-color: #222;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #f8f8f8;
            letter-spacing: 2px;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            color: #f8f8f8;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .hero {
            background: url('https://wallpaperaccess.com/full/4391661.jpg') center/cover no-repeat;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .hero h2 {
            font-size: 3em;
            margin: 0;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        .section h2 {
            margin-bottom: 40px;
            font-size: 2.5em;
            color: #f8f8f8;
            position: relative;
        }
        .section h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background-color: #0d4b5c;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
        }
        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .portfolio-item {
            width: 48%;
            margin-bottom: 20px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 10px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .portfolio-item img {
            width: 100%;
            transition: transform 0.3s ease;
        }
        .portfolio-item:hover img {
            transform: scale(1.1);
        }
        .portfolio-item h3 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            margin: 0;
            color: #f8f8f8;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
        }
        .about {
            background-color: #111;
            padding: 60px 20px;
            margin-bottom: 40px;
        }
        .about p {
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-form input, .contact-form textarea {
            width: 80%;
            max-width: 600px;
            margin-bottom: 20px;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }
        .contact-form button {
            padding: 15px 30px;
            background-color: #0d4b5c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .contact-form button:hover {
            background-color: #0d4b5c;
        }
    </style>
</head>
<body>
    <header id="header">
    <h1 style="color: #3AB0B0;">Kavindu Chamodya Nimshan</h1>

        <nav>
            <a href="#about">About</a>
            <a href="#portfolio">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div class="hero">
        <h2>| Web Developer |<br>| Web Designer |<br>| Front-end Developer |</h2>
    </div>
    <section id="portfolio" class="section">
        <h2>Projects</h2>
        <div class="portfolio-grid">

<div class="portfolio-item">
    <a href="https://www.youtube.com/" target="_blank">
        <img src="https://tse3.mm.bing.net/th?id=OIP.Sbh4FCFSmM-fbT2WQVocfQHaFj&pid=Api&P=0&h=220" alt="Project 1" style="width: 100%; height: auto;">
    </a>
    <h3>Project 1</h3>
</div>

<div class="portfolio-item">
    <a href="https://www.youtube.com/" target="_blank">
        <img src="https://tse3.mm.bing.net/th?id=OIP.Sbh4FCFSmM-fbT2WQVocfQHaFj&pid=Api&P=0&h=220" alt="Project 1" style="width: 100%; height: auto;">
    </a>
    <h3>Project 1</h3>
</div>

<div class="portfolio-item">
    <a href="https://www.youtube.com/" target="_blank">
        <img src="https://tse3.mm.bing.net/th?id=OIP.Sbh4FCFSmM-fbT2WQVocfQHaFj&pid=Api&P=0&h=220" alt="Project 1" style="width: 100%; height: auto;">
    </a>
    <h3>Project 1</h3>
</div>

<div class="portfolio-item">
    <a href="https://www.youtube.com/" target="_blank">
        <img src="https://tse3.mm.bing.net/th?id=OIP.Sbh4FCFSmM-fbT2WQVocfQHaFj&pid=Api&P=0&h=220" alt="Project 1" style="width: 100%; height: auto;">
    </a>
    <h3>Project 1</h3>
</div>
        </div>
    </section>
    <section id="about" class="section">
        <h2>About Me</h2>

        <div style="display: flex; border: 1px solid #000000; border-radius: 8px; overflow: hidden; width: 100%; max-width: 900px; margin: 0 auto;">
            <img src="https://th.bing.com/th/id/OIP.2TumufLJYnKvtmU6UMWe6wHaE8?rs=1&pid=ImgDetMain" alt="A beautiful landscape" style="width: 50%; height: auto; object-fit: cover;">
            <div style="padding: 10px; flex: 1;">
                <p style="text-align: left;">Hello, This is Kavindu Chamodya. Are you looking for a professional front-end, back-end or full-stack
                    developer? Yes, you are in the right place. I'm here to provide you fast and reliable service & my 
                    goal is to provide the best services possible to all of my clients. I'm a undergraduate student in 
                    Victoria University Australia. I'm following a Bachelor of Information Technology (Major in Cyber
                    Security) degree programme affiliated to Victoria University. In addition to that always I'm 
                    interested in editing photos and videos. I have more experiences about web designing more than 
                    5 years. I'm enthusiastic & do any type of web development works, along with my experiences</p>
            </div>
        </div>

  
    </section>
    <section id="contact" class="section">
        <h2>Contact</h2>
        <form class="contact-form" action="contact.php" method="post" onsubmit="handleSubmit(event)">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <input id="message" name="msg" rows="5" placeholder="Your Message" required></input>
          <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg text-light my-2 py-3"
       style="width: 100%; border-radius: 30px; font-weight: 600; background-color: #0d4b5c; color: white;" />

        </form>
    </section>


    <footer style="background-color:#0d4b5c; color:white; text-align:center; padding:20px 0; position:relative; bottom:0; width:100%;">
        <div style="max-width:1200px; margin:auto; padding:0 20px;">
            <div style="display:flex; flex-wrap:wrap; justify-content:space-between;">
                <div style="flex:1 1 200px; margin-bottom:20px;">
                    <h3 style="margin-bottom:10px;">About Us</h3>
                    <p style="font-size:14px;">We are dedicated to providing the best service possible. Our focus is on customer satisfaction and delivering top-notch solutions.</p>
                </div>
                <div style="flex:1 1 200px; margin-bottom:20px;">
                    <h3 style="margin-bottom:10px;">Quick Links</h3>
                    <ul style="list-style:none; padding:0;">
                        
                        <li><a href="#about" style="color:white; text-decoration:none;">About</a></li>
                        <li><a href="#portfolio" style="color:white; text-decoration:none;">Projects</a></li>
                        <li><a href="#contact" style="color:white; text-decoration:none;">Contact</a></li>
                    </ul>
                </div>
                <div style="flex:1 1 200px; margin-bottom:20px;">
                    <h3 style="margin-bottom:10px;">Follow Us</h3>
                    <div>
                        <a href="#" style="color:white; text-decoration:none; margin-right:10px;">Facebook</a>
                        <a href="#" style="color:white; text-decoration:none; margin-right:10px;">Twitter</a>
                        <a href="#" style="color:white; text-decoration:none; margin-right:10px;">LinkedIn</a>
                    </div>
                </div>
            </div>
            <hr style="border-color:#444;">
            <p style="font-size:14px;">&copy; 2024 Your Company Name. All rights reserved.</p>
        </div>
    </footer>
    










    <script>
        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Sticky Header Change on Scroll
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Portfolio Items Fade In on Scroll
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        window.addEventListener('scroll', function() {
            const triggerBottom = window.innerHeight / 5 * 4;

            portfolioItems.forEach(item => {
                const itemTop = item.getBoundingClientRect().top;

                if (itemTop < triggerBottom) {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }
            });
        });

        // Contact Form Submission Handling
        function handleSubmit(event) {
            event.preventDefault(); // Prevent the default form submission
            alert('Thank you for reaching out! I will get back to you soon.');
            document.querySelector('.contact-form').reset(); // Reset form fields
        }
    </script>



</body>
</html>
