<?php
    include("connection.php");
        $email = $_POST["email"];
        $pass = $_POST["password"];
        echo "".$email."".$pass."";
        $sql = "select * from admin_data where email_add = '$email' and passwords = '$pass'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location: admin_userAcc.php");
        }
        else{
            echo '<script>
                window.location.href = "admin_signin.php";
                alert("Login failed. Invalid Email address or Password!")
                </script>';
        }
?>