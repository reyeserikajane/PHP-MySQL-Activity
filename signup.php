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
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Register - IeRepertoire</title>
    <link
      rel="stylesheet"
      href="style.css"
    />
    <link rel="icon" type="image/x-icon" href="img/logo.png">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form
              action="includes/register.inc.php"
              autocomplete="off"
              method="post"
              class="sign-in-form"
            >
              <div class="logo">
                <img
                  src="./img/logo.png"
                  alt="IeRepertoire"
                />
                <h4>IeRepertoire</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <p>Discover and read hundreds of books. Join IeRepertoire!</p>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    name="name"
                    type="text"
                    class="input-field"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                <?php
                    if(isset($_SESSION['username_validation'])){
                      echo "<div class='validation-popup'>Username is already existing</div>";
                      unset($_SESSION['username_validation']);
                    }
                  ?>
                  <input
                    name="username"
                    type="text"
                    class="input-field"
                    id="UN"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <!-- Write a condition that will show this validation popup only if email address provided is in the wrong format -->
                  <?php
                    if(isset($_SESSION['email_validation'])){
                      echo "<div class='validation-popup'>Email is already existing</div>";
                      unset($_SESSION['email_validation']);
                    }
                  ?>
                  <input
                    name="email"
                    type="email"
                    class="input-field"
                    id="EM"
                    required
                  />
                  <label>Email</label>
                </div>

           

                <div class="input-wrap">
                  <input
                    name="pwd"
                    type="password"
                    class="input-field"
                    required
                  />
                  <label>Password</label>
                </div>

                

                <div class="terms">
                  <input type="checkbox" required/>
                  <p>
                    By signing up, I agree to the
                    <span href="#">Terms of Services</span> and
                    <span href="#">Privacy Policy</span>
                  </p>
                </div>

                <button
                  type="submit"
                  class="sign-btn"
                >
                  Sign Up
                </button>

                <div class="new">
                  <p>Already have an account?</p>
                  <a href="index.php">Sign In</a>
                </div>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img
                src="./img/image2.png"
                class="image img-1 show"
                alt=""
              />
              <img
                src="./img/image3.png"
                class="image img-2"
                alt=""
              />
              <img
                src="./img/image1.png"
                class="image img-3"
                alt=""
              />
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
                <span
                  class="active"
                  data-value="1"
                ></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Write a condition that this will only show if the user provided an email that is already used -->
      <div class="popup" id="popup" style="">
        <div class="popup-content">
          <p>Email is already registered. Do you want to sign in instead?</p>

          <div class="flex-gap">
            <button class="profile-btn" onclick="location.href='index.php'">Sign In</button>
            <button class="profile-btn" onclick="closePopup()">Close</button>       
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
