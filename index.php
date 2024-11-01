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
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="institutions.php">Institutions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                </ul>
                <div class="auth-buttons">
                    <a class="login" href="modal.php">Get Started</a>
                </div>
                <div class="auth-buttons">
                    <a class="login" href="admin.php">Admin</a>
                </div>
                <img id="menu-btn" src="images/menu.png" alt="menubutton">
            </div>
        </nav>        
        
        <!-- Home -->

        <section id="home">
            <h2>Enhance Your Future With Us</h2>
            <p>
                Are you an Institution or a Student? Click on the buttons below to register with us and 
                enhance the future. 
            </p>
            <div class="btn">
                <a class="blue" href="student-dashboard.php">Students</a>
                <a class="yellow" href="dashboard.php">Institutions</a>
            </div>
        </section>

        <!-- features -->

        <section id="features">
            <h1>Features</h1>
            <p>Checkout our incredible features</p>
            <div class="fea-base">
                <div class="fea-box">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Institution Section</h3>
                    <p>Checkout top institutions on our site, browse through their elite courses and even apply</p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-file-certificate"></i>
                    <h3>Institute Dashboard</h3>
                    <p>Add faculty and courses, view applications, publish admissions and updates profiles </p>
                </div>
                <div class="fea-box">
                    <i class="fas fa-award"></i>
                    <h3>Student Dashboard</h3>
                    <p>Apply for a course, view admissions amd update your profile.</p>
                </div>
            </div>
        </section>

        <!-- Courses -->

        <section id="course">
            <h1>Popular Courses</h1>
            <p>Browse through different courses from different elite institutions on our site.</p>
            <div class="course-box">
                <div class="courses">
                    <img src="/images/c1.jpg" alt="courses">
                    <div class="details">
                        <span>Offered at Limkokwing Univerity Of Creative Technology</span>
                        <h6>Bachelor of Science in Information Technology</h6>
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
                <div class="courses">
                    <img src="/images/c2.jpg" alt="courses">
                    <div class="details">
                        <span>Offered at The National Univerity Of Lesotho</span>
                        <h6>B.Eng. in Computer Systems and Networks</h6>
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
                <div class="courses">
                    <img src="/images/c3.jpg" alt="courses">
                    <div class="details">
                        <span>Offered at Botho Univerity Lesotho</span>
                        <h6>Bachelor of Science (Hons) in Computing</h6>
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
            </div>
        </section>

        <!-- Registration -->

        <section id="registration">
            <div class="reminder">
                <p>Only the best courses</p>
                <h1>Register To Get Them</h1>
                <div class="time">
                    <div class="date">
                        250+ <br/> courses
                    </div>
                    <div class="date">
                        3+ <br/> Institutions
                    </div>
                    <div class="date">
                        24 <br/> Hrs/Day
                    </div>
                </div>
            </div>
            <div class="form">
                <h3>Create an account now!</h3>
                <div class="btn">
                    <a class="yellow" href="modal.php">Get Started</a>
                </div>
            </div>
        </section>

        <!-- Profiles -->
        <section id="experts">
            <div class="reminder">
                <h1>Leading Experts</h1>
                <p>Get 100 free Onine Courses</p>
                <div class="expert-box">
                    <div class="profile">
                        <img src="images/pro1.webp" alt="Intstitute 01">
                        <h6>Sarah Patel</h6>
                        <p>Python & Algorithm Expert</p>
                        <div class="pro-links">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="images/pro2.webp" alt="Intstitute 01">
                        <h6>John Doe</h6>
                        <p>NextJS & Git Expert</p>
                        <div class="pro-links">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="images/pro4.webp" alt="Intstitute 01">
                        <h6>Rachel Marshall</h6>
                        <p>Sales Expert</p>
                        <div class="pro-links">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                    <div class="profile">
                        <img src="images/pro3.webp" alt="Intstitute 01">
                        <h6>Dimitri Krukov</h6>
                        <p>IT Expert</p>
                        <div class="pro-links">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

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