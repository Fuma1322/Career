<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CareerSpark</title>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Navigation -->

        <nav>
            <img src="images/logo.png" alt="logo">
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fas fa-times"></i>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="institutions.php">Institutions</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                </ul>
                <div class="auth-buttons">
                    <a class="login" href="login.php">Login</a>
                    <a class="register" href="register.php">Register</a>
                </div>
                <img id="menu-btn" src="images/menu.png" alt="menubutton">
            </div>
        </nav

        <!-- hero -->

        <section id="about-home">
            <h2>Contact</h2>
        </section>

        <!-- contact -->

        <section id="contact">
            <div class="getin">
                <h2>Get in touch</h2>
                <p>Looking for help? Fill the form and lets help you</p>
                <div class="getin-details">
                    <h3>Headquaters</h3>
                    <div>
                        <i class="far fa-home get"></i>
                        <p>LEAP Offices, Lesotho Housing</p>
                    </div>
                    <h3>Phone</h3>
                    <div>
                        <i class="fas fa-phone-alt get"></i>
                        <p>
                            +266 56120463 <br>
                            +266 62601042
                        </p>
                    </div>
                    <h3>Support</h3>
                    <div>
                        <i class="fa fa-envelope-open-text get"></i>
                        <p>bookings@clinicease.tech <br> help@origin.com </p>
                    </div>
                    <h3>Follow Us</h3>
                    <div class="pro-links">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>

            <div class="form">
                <h4>Lets Connect</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <form action="contact_process.php" method="POST">
                <div class="form-row">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-col">
                <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-col">
                    <textarea name="message" id="" cols="30" rows="8" placeholder="How can we be of help to you?"></textarea>
                </div>
                <div class="form-col">
                    <button>Submit</button>
                </div>
            </div>
        </section>

        <!-- map -->

        <!-- footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="institutions.php">institutions</a></li>
                            <li><a href="#">privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="contact.php">contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
       </footer>

        <script>

            // Navaigation Bar

            $('#menu-btn').click(function(){
               $('nav .navigation ul').addClass('active') 
            });

            $('#menu-close').click(function(){
               $('nav .navigation ul').removeClass('active') 
            });

        </script>

    </body>

</html>