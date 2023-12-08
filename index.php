<?php
session_start();
if (isset($_SESSION['full_name'])) {
  // Redirect the user to another page

  header("Location: ./profile.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - IeRepertoire</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="img/logo.png">

</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="includes/login.inc.php" class="sign-in-form" method="post">
            <div class="logo">
              <img src="./img/logo.png" alt="easyclass" />
              <h4>IeRepertoire</h4>
            </div>

            <div class="heading">
              <h2>Log In</h2>
              <p>
                Welcome back! Enter your credentials to access your account.
              </p>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <?php
                if (isset($_SESSION['isExisting'])) {
                  echo "<div class='validation-popup'>Account not exiting!</div>";
                  unset($_SESSION['isExisting']);
                }
                ?>
                
                <input name="emailOrUsername" type="text" class="input-field" required />
                <label>Email or username</label>
              </div>
              <div class="input-wrap">
                <!-- Write a condition that will show this validation popup only if email or username is found but password entered is wrong-->
                <?php
                if (isset($_SESSION['pwd-validation'])) {
                  echo "<div class='validation-popup'>Wrong password!</div>";
                  unset($_SESSION['pwd-validation']);
                }
                ?>

                <input name="pwd" type="password" class="input-field" required />
                <label>Password</label>
              </div>

              <button type="submit" class="sign-btn">
                Login
              </button>

              <div class="new">
                <p>New Here?</p>
                <a href="signup.php">Sign Up Here</a>
              </div>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="./img/image2.png" class="image img-1 show" alt="" />
            <img src="./img/image3.png" class="image img-2" alt="" />
            <img src="./img/image1.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Customize your own library</h2>
                <h2>Embark on a literary journey</h2>
                <h2>Enjoy our virtual bookshelf</h2>
              </div>
            </div>
            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Write a condition that this will only show if email is not found -->
    <div class="popup" id="popup" style="">
      <div class="popup-content">
        <p>Account not found. Do you want to register instead?</p>

        <div class="flex-gap">
          <button class="profile-btn" onclick="location.href='index.php'">Register</button>
          <button class="profile-btn" onclick="closePopup()">Close</button>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript file -->


  <script src="app.js"></script>
</body>

</html>