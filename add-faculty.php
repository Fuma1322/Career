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
  <div class="container">
    <!-- Title section -->
    <div class="title">Add Faculty & Course</div>
    <div class="content">
      <!-- Registration form -->
      <form action="#">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Course Name</span>
            <input type="text" placeholder="Enter course name" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">Faculty</span>
            <input type="text" placeholder="Enter faculty" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter email" required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Course Duration</span>
            <input type="text" placeholder="Enter duration" required>
          </div>
        </div>
        <div class="gender-details">
          <!-- <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div> -->
        </div>
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Save">
        </div>
        <div class="button">
            <a class="button" href="dashboard.php">Cancel</a>
          </div>
      </form>
    </div>
  </div>
</body>
</html>