<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Relief</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="/WT_Project/CSS/about.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Disaster Relief</div>
            <a href="user_profile.php" class="signin-register"><?php echo $_SESSION['UN']?></a>
        </div>
    </header>
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
    <div class="content">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="/WT_Project/images/pic1.jpg">
            </div>
            <div class="slide">
                <img src="/WT_Project/images/pic2.jpg">
            </div>
            <div class="slide">
                <img src="/WT_Project/images/pic3.jpg">
            </div>
            <div class="slide">
                <img src="/WT_Project/images/pic4.jpg">
            </div>
            <div class="slide-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="slide-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</div>
<div class="boxes">
        <a href="#" class="box" id="about-us-link">About Us</a>
        <a href="#" class="box" id="services-link">Services</a>
        <a href="#" class="box" id="faq-link">FAQ</a>
</div>
<hr>
    <footer>
        <div class="footerpart">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsam maiores, dolor accusamus mollitia ipsum dolores deserunt incidunt quidem asperiores numquam quia ad blanditiis facilis molestiae. Deleniti fuga molestiae inventore!</p>
        </div>
    </footer>

<!-- Popup -->
<!-- About Us -->
<div id="about-us-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>About Us</h2>
        <p>Welcome to Disaster Relief, a dedicated platform designed to bridge the gap between those in need of disaster relief and generous donors willing to help. Our mission is to provide a seamless, transparent, and effective way to deliver aid to the affected areas in Bangladesh.
          <br><br>  Through our platform, individuals and organizations can offer donations, and victims of disasters can easily request the aid they require. Our interactive map feature helps to identify and highlight affected areas, ensuring that relief efforts are directed where they are needed most.</p>
    </div>
</div>
<!-- Services -->
<div id="services-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>Services</h2>
        <p><b>Donation Management:</b>
            Our platform allows individuals and organizations to easily donate supplies, and services. Users can browse active requests and choose how they want to contribute. <br>
            
            <b>Relief Request System:</b>
            Victims of disasters can submit detailed requests for the aid they need. Our system ensures that these requests are visible to potential donors who can provide the required support.<br>
            
            <b>Interactive Map:</b>
            Our real-time map of Bangladesh highlights disaster-affected areas, showing where aid is needed most. This feature helps donors direct their resources effectively and allows users to track the impact of their contributions.
            <br>
            <b>Matching and Tracking:</b>
            We provide a transparent system to match donations with requests. Donors receive updates on how and where their contributions are being used, ensuring accountability and trust.
            <br>
            
            Join us to make a meaningful impact in disaster relief efforts across Bangladesh. Whether you are looking to donate or need help, our platform is here to connect you with the resources and support you need.</p>
    </div>
</div>

<!-- FAQ -->
<div id="faq-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h2>FAQ</h2>
        <div class="accordion">
            <button class="accordion-button">How can I donate to those in need? <span class="accordion-icon">+</span></button>
                <div class="accordion-content">
                    <p>Donating is easy! Simply sign up on our platform, browse through the list of current relief requests, and select the items you wish to donate. Follow the prompts to complete your donation.</p>
                </div>
                <button class="accordion-button">I am a disaster victim. How can I request relief?
                    <span class="accordion-icon">+</span></button>
                <div class="accordion-content">
                    <p>If you are affected by a disaster, you can sign up on our platform and submit a relief request. Provide details about your needs, and our system will match you with available donations.
                    </p>
                </div>
                <button class="accordion-button">How do you ensure that donations reach the right people? 
                    <span class="accordion-icon">+</span></button>
                <div class="accordion-content">
                    <p>We use a combination of verified user profiles, detailed request forms, and our interactive map to ensure that donations are matched accurately with those in need. Our team also works closely with local authorities and organizations to verify and deliver aid.</p>
            </div>
            <button class="accordion-button">Can I track my donation? 
                <span class="accordion-icon">+</span></button>
            <div class="accordion-content">
                <p>Yes, once you make a donation, you will receive updates on its status, including when it has been matched with a recipient and when it has been delivered.</p>
            </div>
            <button class="accordion-button"> How does the interactive map feature work?
                <span class="accordion-icon">+</span></button>
            <div class="accordion-content">
                <p>Our interactive map shows real-time data on disaster-affected areas in Bangladesh. The map is regularly updated with information from various sources, allowing users to see where help is needed most and to track ongoing relief efforts.</p>
            </div>
        </div>
    </div>
</div>
<script src="/WT_Project/JS/aboutscript.js"></script>
<script src="/WT_Project/JS/home_script.js"></script>
</body>
</html>