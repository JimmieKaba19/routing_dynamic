<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['id'])) {
  header('location: dash.php');
  die();
}

include("include/config.php");
include("include/database.php");
include("include/functions.php");
// secure();

if (isset($_POST['login_btn'])) {
  if ($stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND active = 1')) {
    $hashed = SHA1($_POST['password']);
    $stm->bind_param('ss', $_POST['email'], $hashed);
    $stm->execute();

    $result = $stm->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['username'] = $user['username'];

      set_message('Welcome back, you have successfully logged in ' . $_SESSION['username']);
      header('location: dash.php');
      die();
    } else {
      set_message('Invalid email address or password, please confirm your details and try again!');
    }
    $stm->close();
  } else {
    echo ('Could not prepare statement');
  }

} elseif(isset($_POST['signup_btn'])) {
  $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $phone = mysqli_real_escape_string($connect, $_POST['phone']);
  $hashed = SHA1($_POST['password']);

// Check if email already exists
    if ($stm = $connect->prepare('SELECT * FROM users WHERE email = ?')) {
        $stm->bind_param('s', $email);
        $stm->execute();
        $result = $stm->get_result();

        if ($result->num_rows > 0) {
            set_message('Email already exists. Please use a different email.');
        } else {
            // Proceed with the insert
            if ($stm = $connect->prepare('INSERT INTO users (fullname, username, email, phone, password) VALUES (?, ?, ?, ?, ?)')) {
                $stm->bind_param('sssss', $fullname, $username, $email, $phone, $hashed);
                if ($stm->execute()) {
                    set_message('Thank you for Signing up to Rout-ing, kindly wait as your account is verified');    
                    header('location: index.php');
                } else {
                    echo "Error: " . $stm->error; // Display the error message
                }
                $stm->close();
                die();
            } else {
                echo ("Could not prepare statement!");
            }
        }
    }
}

include("include/header-login.php");
?>

<div class="form-content">
  <div class="login-form">
    <div class="title">Welcome back, Login to continue</div>
    <form method="post">
      <div class="input-boxes">
        <div class="input-box">
          <i class="fas fa-envelope"></i>
          <input type="email" id="email" name="email" placeholder="Enter your email" required aria-label="email">
        </div>
        <div class="input-box">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" name="password" placeholder="Your password ****" required aria-label="password">
        </div>
        <div class="button input-box">
          <input type="submit" name="login_btn" value="Log In">
        </div>
        <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
      </div>
    </form>
  </div>
  <div class="signup-form">
    <div class="title">Signup to get started, a new world awaits</div>
    <form method="post">
      <div class="input-boxes">
        <div class="input-box">
          <i class="fas fa-user"></i>
          <input name="fullname" id="fullname" aria-label="fullname" type="text" placeholder="Enter your full name" required>
        </div>
        <div class="input-box">
          <i class="fas fa-user"></i>
          <input name="username" id="username" aria-label="username" type="text" placeholder="Enter your username" required>
        </div>
        <div class="input-box">
          <i class="fas fa-envelope"></i>
          <input name="email" id="email" aria-label="email" type="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <i class="fas fa-envelope"></i>
          <input name="phone" id="phone" aria-label="phone" type="number" placeholder="Enter your Phone Number" required>
        </div>
        <div class="input-box">
          <i class="fas fa-lock"></i>
          <input name="password" id="password" aria-label="password" type="password" placeholder="Enter your password" required>
        </div>
        <div class="text">
          <p>By continuing, you agree to our <a href="#">Terms & Conditions</a></p>
        </div>
        <div class="button input-box">
          <input type="submit" name="signup_btn" value="Sign Up">
        </div>
        <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
      </div>
    </form>
  </div>
</div>

<?php
include("include/footer-login.php");
?>