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
    <link rel="stylesheet" href="/WT_Project/CSS/request_help.css">
</head>

<body>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
	<script src="/WT_Project/JS/request_relief_mapping.js"></script> 
    <div class="header">
        <div class="logo">Disaster Relief</div>
        <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN']?></a>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="user_homepage.php">Home</a></li>
                <li><a href="user_disaster_forecast.php">Disaster Forecast</a></li>
                <li><a href="user_AlertnUpdates.php">Alerts and Updates</a></li>
                <li><a href="user_volunteer.php">Volunteer Tasks</a></li>
            </ul>
        </div>
    </nav>
    <div class="headline">
        <h1>Request For Relief</h1>
    </div>    
    <div class="bulletins">
        <p>* Please specify the name of the goods and their amount as precisely as possible.</p>
        <p>* If not mentioned precisely the volunteer will bring goods according to his/her judgement.</p>
    </div>
    <form action="requestAction.php" method="post">
        <div class="container textbox-container">
            <div>
                <textarea id="message" name="message" rows="9" cols="90" placeholder="mention the amount of chosen goods or volunteer will bring amount according to his capability"></textarea>
            </div>
        </div>
        <input type="hidden" name="js_lat_var" id="js_lat" value="">
        <input type="hidden" name="js_lon_var" id="js_lon" value="">
        <button id="postButton" onclick="submit">Post</button>
    </form>   
</body>
</html>

