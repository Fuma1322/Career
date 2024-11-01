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
                    <li><a class="active" href="institutions.php">Institutions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <img id="menu-btn" src="images/menu.png" alt="menubutton">
            </div>
        </nav

        <!-- Home -->

        <section id="about-home">
            <h2>Institutions</h2>
        </section>

        <!-- Institutions -->

        <section id="course">
            <h1>Discover  Institutions</h1>
            <p>Click on your prefered institution to learn more</p>
            <div class="course-box">
                <div onclick="window.location.href='limkos.php';" class="courses">
                    <img src="/images/c1.jpg" alt="courses">
                    <div class="details">
                        <span>Launched In August, 2008</span>
                        <h6>Limkokwing University Of Creative Technology</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                </div>
                <div onclick="window.location.href='null.php';" class="courses">
                    <img src="/images/c2.jpg" alt="courses">
                    <div class="details">
                        <span>Established In April, 1945</span>
                        <h6>National Univerity Of Lesotho</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(500)</span>
                        </div>
                    </div>
                </div> 
                <div onclick="window.location.href='botho.php';" class="courses">
                    <img src="/images/c3.jpg" alt="courses">
                    <div class="details">
                        <span>Launched in 2015 </span>
                        <h6>Botho University Lesotho</h6>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(120)</span>
                        </div>
                    </div>
                </div>  
            </div>
        </section>

        <!-- footer -->

        <footer class="footer">
            <div class="Container">
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