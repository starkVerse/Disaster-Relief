<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/WT_Project/CSS/adsigninstyle.css">
</head>
<body>
    <div class="header">
        <div class="logo">Disaster Relief</div>
        <div class="signin-register">
            <!-- <?php
                session_start();
                if(isset($_SESSION['username'])) {
                    echo '<span class="welcome-message">Welcome, '.$_SESSION['username'].'!</span>';
                    echo '<br>';
                    echo ' <a href="logout.php" class="logout-link">Logout</a>';
                } else {
                    echo '<a href="signin.html">Sign In/Register</a>';
                }
            ?> -->
        </div>
    </div>
    <nav>
        <div class="container">
            <ul>
                <!-- <li><a href="#">Send Disaster Alert</a></li> -->
                <!-- <li><a href="#">Pending Requests</a></li> -->
                <!-- <li><a href="#"> </a></li> -->
            </ul>
        </div>
    </nav>
    <div class="transparent-box"></div>
    <div class="signin-container">
        <!-- Show sign-in form if not logged in -->
        <form action="admin_login.php" method="POST">
            <input type="email" name="email" placeholder="Email Address">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit">Login</button>   
        </form>
    </div>
</body>
</html>
