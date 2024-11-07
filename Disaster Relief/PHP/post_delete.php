<?php
if(isset($_GET["id"]))
{
    include("connection.php");
    $serial_number = $_GET["id"];
    $query = "select * from relief_posts where serial_no =$serial_number";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $query = "delete from relief_posts where serial_no =$serial_number";
    $conn->query($query);
    $post = "Your post was declined by the admin";
    $query = "insert into notification_data (serial_no, user_id, user_name, notification) values ('','$user_id','$user_name','$post')";
    $result = $conn->query($query);
    header("Location:admin_pending_Posts.php");
}
?>