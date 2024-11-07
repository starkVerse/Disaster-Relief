<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin View Posts</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/user_alertnupdates.css">
</head>
<body>
    <?php
    include("connection.php");
    $query = "select * from notification_data order by `notification_data`.`serial_no` DESC";
    $result = $conn->query($query);
    ?>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN'] ?></a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
            <li><a href="user_homepage.php">Home</a></li>
            <li><a href="user_disaster_forecast.php">Disaster Forecast</a></li>
            <li><a href="user_requestRelief.php">Request Relief</a></li>
            <li><a href="user_volunteer.php">Volunteer Tasks</a></li>
        </ul>
    </div>
</nav>
<h2>Notifications</h2>
<div class="transparent-box">
    <div class="posts">
    <?php
        while($row = $result->fetch_assoc()){
        if($row['user_id'] == $_SESSION['UID'] || $row['user_name'] == 'admin')
        {
          echo "
          <div class='content'>
            <div class='post'>
                <p><span class='date_time'>Date: <span class='time'>$row[date]</span></span></p>
                <p>$row[notification]</p>
            </div>
            </div>";
        }
        }
      ?>
    </div>
</div>
</body>
</html>
