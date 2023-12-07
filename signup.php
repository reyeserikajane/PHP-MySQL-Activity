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
                  <input
                    name="username"
                    type="text"
                    class="input-field"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="email"
                    type="email"
                    class="input-field"
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
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
