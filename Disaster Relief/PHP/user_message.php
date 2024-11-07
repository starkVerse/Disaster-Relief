<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WT_Project/CSS/user_mssg_style.css">
    <title>Message</title>
    <!-- <script src="\JS\sript_message.js"></script> -->
</head>
<body>
<?php
    $fname = $_POST["uname"];
    $email = $_POST["email_add"];
    $passwrd = $_POST["pass"];
    $p_num = $_POST["phone"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "disaster_management";
    $port = "3307";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    // if ($conn->connect_error) {
    //     echo "Couldn't connect to server";
    // } else {
    //     echo "Connection Complete";
    // }

    // echo "".$fname."".$email."".$passwrd."";
    $query = "insert into user_data (user_id,user_name,email_add,phone_number,password) values ('','$fname','$email','$p_num','$passwrd')";
    $result = $conn->query($query);
    // if(! $result) {
    //     echo mysqli_error($conn);
    // } else {
    //     echo "data was added"; 
   
?>
    <div class="box">
        <h2>Message</h2>
        <div class="description">
            <div class="prompt">Your Account</div><br>
            <div class="info">
                <span>User Name: </span> <?php echo $fname; ?> <br><br>
                <span>Email: </span>  <?php echo $email; ?> <br><br>
                <span>Phone Number: </span> <?php echo $p_num; ?> <br><br>
            </div>
            <div class="statement">Has Been Succesfully Created</div>
        </div>
        <a href="user_signin.php">Go to Sign-In Page</a>
    </div>
</body>
</html>
