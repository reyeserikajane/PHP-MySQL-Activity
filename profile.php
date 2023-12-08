<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile - IeRepertoire</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="profile">
          <img src="img/banner.png" class="profile-banner" />

          <img src="img/no-profile.webp" class="profile-img" />

          <div class="info">
            <div class="info-wrap">
              <p class="info-title">Name:</p>
              <p class="info-content"><?php echo $_SESSION["full_name"] ?></p>
            </div>

            <div class="info-wrap">
              <p class="info-title">Username:</p>
              <p class="info-content"><?php echo $_SESSION["username"] ?></p>
            </div>

            <div class="info-wrap">
              <p class="info-title">Email:</p>
              <p class="info-content"><?php echo $_SESSION["email"] ?></p>
            </div>

            <!-- <div class="info-wrap">
                <p class="info-title">Password:</p>
                <p class="info-content">hello</p>
              </div>
            </div> -->
            

            </div>

            <div class="info-wrap">
            <button class="profile-btn">Edit Profile</button>
            <button class="profile-btn">Logout</button>
          </div>
        </div>
      </div>
  </main>

  <!-- Javascript file -->

  <script src="app.js"></script>
</body>

</html>