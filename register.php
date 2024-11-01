<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerSpark - Register</title>

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
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a class="login" href="login.php">Login</a>
                <a class="register" href="register.php">Register</a>
            </div>
            <img id="menu-btn" src="images/menu.png" alt="menubutton">
        </div>
    </nav>

    <!-- Register -->
    <section class="wrapper">
        <div class="title"><span class="log">Register Form</span></div>
        <form action="register_process.php" method="POST">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="full_names" placeholder="Full Names" required />
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="email_or_phone" placeholder="Email or Phone" required />
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="row button">
                <input type="submit" value="Register" />
            </div>
            <div class="signup-link">Already a member? <a href="login.php">Login now</a></div>
        </form>
    </section>

    <!-- Footer -->
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
        // Navigation Bar
        $('#menu-btn').click(function() {
            $('nav .navigation ul').addClass('active')
        });

        $('#menu-close').click(function() {
            $('nav .navigation ul').removeClass('active')
        });
    </script>

</body>

</html>
