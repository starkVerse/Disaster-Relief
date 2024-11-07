<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pending Requests</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/userReq.css">
</head>
<body>
    <?php
    include("connection.php");
    $query = "select * from accepted_posts ORDER BY `accepted_posts`.`serial_no` DESC";
    $result = $conn->query($query);
    ?>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN']?></a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
        <li><a href="user_homepage.php">Home</a></li>
            <li><a href="user_disaster_forecast.php">Disaster Forecast</a></li>
            <li><a href="user_requestRelief.php">Request Relief</a></li>
            <li><a href="user_AlertnUpdates.php">Alerts & Updates</a></li>
        </ul>
    </div>
</nav>
<!-- <?php
// if($_SESSION["Flag"] == 0){
?> -->
<h2>Volunteer Errands</h2>
<div class="transparent-box">
    <div class="posts">
    <?php
        while($row = $result->fetch_assoc()){
        if($row['user_id'] != $_SESSION['UID'] && $row['completed'] == 'NO')
        {
          echo "
          <div class='content'>
            <div class='post'>
                <p><span>User Name: </span> $row[user_name] <span class='date_time'>Date: <span class='time'>$row[date]</span></span></p>
                <p><span> Requested Help: </span></p>
                <p>$row[post]</p>
            </div>
            <div class='buttons'>
            <a class='approve' href='user_routing.php?id=$row[serial_no]'>Accept</a><br>
            </div>
            </div>";
        }
        }
      ?>
    </div>
</div>
<!-- <?php
// }
// else{
//     header("Location:user_routing.php?id=$row[serial_no]");
// }
?> -->
</body>
</html>