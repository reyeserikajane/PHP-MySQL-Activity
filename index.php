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
    <title>Login - IeRepertoire</title>
    <link
      rel="stylesheet"
      href="style.css"
    />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form
              action="includes/login.inc.php"
              class="sign-in-form"
              method="post"
            >
              <div class="logo">
                <img
                  src="./img/logo.png"
                  alt="easyclass"
                />
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
                  <input
                    name="emailOrUsername"
                    type="text"
                    class="input-field"
                    required
                  />
                  <label>Email or username</label>
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

                <button
                  type="submit"
                  class="sign-btn"
                >
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
    </main>
    
    <!-- Javascript file -->


    <script src="app.js"></script>
  </body>
</html>
