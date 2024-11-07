<?php
    session_start();
?>
<?php
    include("connection.php");
        $email = $_POST["Email"];
        $pass = $_POST["Pass"];
        echo "".$email."".$pass."";
        $sql = "select * from user_data where email_add = '$email' and password = '$pass'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            $_SESSION["Flag"] = 0;
            $_SESSION["UID"] = $row['user_id'];
            $_SESSION["UN"] = $row['user_name']; 
            $_SESSION['email'] = $row['email_add'];
            $_SESSION['num'] = $row['phone_number'];
            header("Location: user_homepage.php");
        }
        else{
            echo '<script>
                window.location.href = "user_signin.php";
                alert("Login failed. Invalid Email address or Password!")
                </script>';
        }
?>