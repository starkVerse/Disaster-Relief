<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pending Requests</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/post_app.css">
</head>
<body>
    <?php
    include("connection.php");
    $query = "select * from relief_posts";
    $result = $conn->query($query);
    ?>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="signin.html" class="signin-register">Sign In/Register</a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
            <li><a href="admin_Acc.php">Admin Accounts</a></li>
            <li><a href="admin_send_alert.php">Disaster Alert</a></li>
            <li><a href="admin_userAcc.php">User Accounts</a></li>
        </ul>
    </div>
</nav>
<h2>Pending Posts</h2>
<div class="transparent-box">
    <div class="posts">
    <?php
        while($row = $result->fetch_assoc()){
        {
          echo "
          <div class='content'>
            <div class='post'>
                <p><span>User Name: </span> $row[user_name] <span class='date_time'>Date: <span class='time'>$row[date]</span></span></p>
                <p><span> Requested Help: </span></p>
                <p>$row[post]</p>
            </div>
            <div class='buttons'>
            <a class='approve' href='post_transfer.php?id=$row[serial_no]'>Approve</a>
            <a class='approve' href='post_delete.php?id=$row[serial_no]'>Decline</a><br> <br>
            </div>
            </div>" ;
        }
        }
      ?>
        </div>
    </div>
</div>
</body>
</html>
