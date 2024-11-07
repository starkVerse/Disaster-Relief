<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/WT_Project/CSS/admin_register.css">
</head>
<body>
    <div class="header">
        <div class="logo">Disaster Relief</div>
        <!-- <div class="signin-register"><a href="signin.html">Sign In/Register</a></div> -->
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
    <div class="transparent-box">
    </div>
    <form action="/WT_Project/PHP/admin_message.php" method="post">
    <div class="registration-container">
        <input type="text" placeholder="Username" name="uname" required> <br>
        <input type="email" placeholder="Email" name="email_add" required> <br>
        <input type="text" placeholder="Phone Number" name="phone" required> <br>
        <input type="password" placeholder="Password" name="pass" required> <br>
        <!-- <div class="checkboxes">
            <label>
                <input type="checkbox"><span> I accept the <a href="terms_and_conditions.html">terms and conditions</a></span>
            </label>
            <label>
                <input type="checkbox"><span> I accept the <a href="privacy_policy.html">privacy policy</a></span>
            </label>
        </div> -->
        <button type="submit">Register</button>
    </div>
    </form>
</body>
</html>