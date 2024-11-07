<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/WT_Project/CSS/signinstyle.css">
</head>
<body>
    <div class="header">
        <div class="logo">Disaster Relief</div>
    </div>
    <nav>
        <div class="container">
            <ul>
                <!-- <li><a href="#">Community</a></li>
                <li><a href="#">Alerts and Updates</a></li>
                <li><a href="#">Request Relief</a></li>
                <li><a href="#">Become a Volunteer</a></li> -->
            </ul>
        </div>
    </nav>
    <div class="transparent-box"></div>
    <form action="user_login.php" method="post">
    <div class="signin-container">
        <input type="email" placeholder="Email Address" name="Email">
        <br>
        <input type="password" placeholder="Password" name="Pass">
        <br>
        <button type="submit">Login</button>
        <p>Do not have an account? <a href="/WT_Project/PHP/user_register.php">Register</a></p>   
    </div>
    </form>
    <!-- <div class="social-icons">
        <p>Login with</p>
        <a href="https://www.facebook.com/login/">
            <img src="https://freelogopng.com/images/all_img/1657548084facebook-logo-png.png" alt="Facebook">
        </a>
        <a href="https://accounts.google.com/accounts">
            <img src="https://freelogopng.com/images/all_img/1657952440google-logo-png-transparent.png">
        </a>
    </div>   -->
</body>
</html>