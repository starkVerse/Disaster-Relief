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
<link rel="stylesheet" href="/WT_Project/CSS/disaster_forecast.css">
</head>
<body>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN'] ?></a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
            <li><a href="user_homepage.php">Home</a></li>
            <li><a href="user_requestRelief.php">Request Relief</a></li>
            <li><a href="user_AlertnUpdates.php">Alerts & Updates</a></li>
            <!-- <li><a href="#">Request Relief</a></li> -->
            <li><a href="user_volunteer.php">Volunteer Tasks</a></li>
        </ul>
    </div>
</nav>
<div class="map_container">
<iframe src="https://www.ventusky.com/" scrolling="no" frameborder="0" class="iframe_content"></iframe>
</div>
</body>
</html>