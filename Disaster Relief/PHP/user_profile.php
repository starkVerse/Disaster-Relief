<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Community</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/pro.css">
</head>
<body>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN']?></a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
                <li><a href="user_disaster_forecast.php">Disaster Forecast</a></li>
                <li><a href="user_AlertnUpdates.php">Alerts and Updates</a></li>
                <li><a href="user_requestRelief.php">Request Relief</a></li>
                <li><a href="user_volunteer.php">Volunteer Tasks</a></li>
        </ul>
    </div>
</nav>
<div class="transparent-box">
    <div class="profile-container">
        <div class="profile-details">
          <h2><?php echo $_SESSION['UN'] ?></h2>
          <p>Email: <?php echo $_SESSION['email'] ?></p>
          <p>Phone: <?php echo $_SESSION['num'] ?></p>
          <p>Blood Group: Z+</p>
        </div>
        <div class="profile-picture">
            <img src="coffee.png" alt="Profile Picture">
          </div>
      </div>
</div>
<button class="update-button">Update</button>


</body>
</html>