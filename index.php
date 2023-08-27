<?php
session_start(); // start session

// check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // get form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to database
    $servername = "sql109.epizy.com";
    $dbusername = "epiz_33722902";
    $dbpassword = "DgRYDMrBI3RPg";
    $dbname = "epiz_33722902_hims";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // check if user exists
    if ($result->num_rows > 0) {
        // set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        // redirect to maternalform.php
        header("location: registrationpatient.php");
        exit();
    } else {
        // show error message
        $error = "Invalid username or password";
    }

    // close connection
    $stmt->close();
    $conn->close();
}
?>





<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="login.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">CODING-GEM</a>

        <ul class="nav_items">
          <li class="nav_item">
            <a href="#" class="nav_link">Home</a>
            <a href="#" class="nav_link">Product</a>
            <a href="#" class="nav_link">Services</a>
            <a href="#" class="nav_link">Contact</a>
          </li>
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form method = "POST">
            <h2>Login</h2>

            <div class="input_box">
              <input type="text" placeholder="Enter your username" name = "username" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Enter your password" name = "password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            <button class="button" type = "submit" >Login Now</button>

            <!--<div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>-->
          </form>
        </div>

        <!-- Signup From -->
        <!--<div class="form signup_form">
          <form action="#">
            <h2>Signup</h2>

            <div class="input_box">
              <input type="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Confirm password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Signup Now</button>-->

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="login.js"></script>
  </body>
</html>


