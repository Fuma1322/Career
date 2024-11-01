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
            <h2>Enroll and follow your dreams</h2>
        </section>

        <!-- Institutions -->

        <section id="course-inner">
           <div class="overview">
            <img class="course-img" src="images/limkokwing.jpeg" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2>Limkokwing Univerity Of Creative Technology</h2>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Creativity without limits</p>
                </div>
            </div>
            <h3>Founder</h3>
            <div class="tutor">
                <img src="images/c4.jpg" alt="">
                <div class="tutor-det">
                    <h5>Tan Sri Limkokwing</h5>
                    <p>Businessman, Philanthropist, Educator, and Illustrator</p>
                </div>
            </div>
            <hr>
            <h3>Institute Overview</h3>
            <p>
                Secure a bright future at Malaysia&#39;s University of Innovation. Limkokwing University of Creative
                Technology in Lesotho offers more than just degree studies, empowering students to explore their 
                hidden talents and ensure career success. By matching your passion with a career path, Limkokwing
                allows you to overcome challenges and stand out in your field. The university&#39;s approach blends academic
                and practical learning, equipping students with a unique edge in a competitive world. 
                <br><br>
                Limkokwing provides unparalleled access to high-end technology and professional industry experiences.
                Final-year students gain hands-on experience within the campus's award-winning Digital Innovation Centre, 
                featuring cutting-edge digital resources. This access, paired with opportunities for real-world industry 
                exposure, allows students to gain critical skills and knowledge before entering the workforce. 
                This holistic, integrated learning model is unique to Limkokwing, where students participate in events, 
                projects, and competitions that foster confidence and apply classroom learning to real-world scenarios.
                <br><br>
                At Limkokwing, a global network is at your fingertips. The university boasts over 30,000 students from 
                165 countries, offering a rich cultural exchange that builds a foundation for thriving in today&#39;s 
                international job market. With strong industry partnerships and top-tier connections, students are 
                well-prepared to step into high-income careers with an understanding of global perspectives. 
                The culturally diverse and stimulating environment at Limkokwing University encourages creativity and 
                innovation, preparing students to become confident, multi-skilled global graduates.
            </p>
            <hr>
            <h3>Some Courses Offered</h3>
            <div class="learn">
                <p><i class="far fa-check-circle"></i>Bachelor of Arts in Fashion & Retailing</p>
                <p><i class="far fa-check-circle"></i>Bachelor of Arts in Interior Architecture</p>
                <p><i class="far fa-check-circle"></i>Bachelor of Science in Information Technology</p>
                <p><i class="far fa-check-circle"></i>Diploma in Creative Advertising</p>
                <p><i class="far fa-check-circle"></i>Diploma in Multimedia and Software Engineering</p>
            </div>
            <div class="courses-btn">
                <a class="green" href="https://www.limkokwing.net/lesotho/academic/courses/" target="_blank">Browse More</a>
            </div>
           </div>

           <div class="enroll">
            <h3>This course includes</h3>
            <p><i class="far fa-video"></i>52 hours Video</p>
            <p><i class="far fa-video"></i>52 hours Video</p>
            <p><i class="far fa-video"></i>52 hours Video</p>
            <p><i class="far fa-video"></i>52 hours Video</p>
            <p><i class="far fa-video"></i>52 hours Video</p>
            <div class="enroll-btn">
                <a class="green" href="#">Enroll Course</a>
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