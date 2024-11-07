<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Send Disaster Alert</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/sendAlert.css">
</head>
<body>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <a href="signin.html" class="signin-register">Sign In/Register</a>
    </div>
</div>
<nav>
    <div class="container">
        <ul>
            <li><a href="admin_userAcc.php">User Account</a></li>
            <li><a href="admin_pending_Posts.php">Pending Requests</a></li>
            <li><a href="admin_Acc.php">Admin Accounts</a></li>
        </ul>
    </div>
</nav>
    <div class="alert-container">
        <h2>Send Disaster Alert</h2><br>
        <form action="posting_alerts.php" method="post">
            <label for="location">Location</label>
            <input type="text" id="locations" name="location">
            <div class="severity">
                <label for="severity">Severity</label>                
                <label>Very Low</label>
                <input type="radio" name="severity" value="Less Severe">
                <input type="radio" name="severity" value="Intense"> 
                <input type="radio" name="severity" value="Alarming"> 
                <input type="radio" name="severity" value="Severe"> 
                <input type="radio" name="severity" value="Very Severe"> 
                <label>Very High</label>
            </div>
            <label for="description">Description</label>
            <textarea id="descriptions" name="description" rows="4" cols="70"></textarea>
            <button type="submit">SEND ALERT</button>        
        </form>
    </div>
</body>
</html>