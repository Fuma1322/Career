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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <img id="menu-btn" src="images/menu.png" alt="menubutton">
            </div>
        </nav

        <!-- modal -->
        <body>
          <!-- Modal Structure -->
          <div class="modal">
            <div class="modal-content">
              <button class="close-btn" onclick="document.querySelector('.modal').style.display='none'">&times;</button>
              <h2>Welcome to CareerSpark</h2>
              <p>Are you a student or an institution?</p>
              <p>Select below to register and get started</p>
        
              <!-- Modal buttons -->
              <div class="modal-buttons">
                <a href="register.php" class="modal-button confirm-btn">Student</a>
                <a href="institute-register.php" class="modal-button cancel-btn">Institution</a>
              </div>
            </div>
          </div>
        </body>

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