<?php
if(isset($_GET["id"]))
{
    include("connection.php");
    $serial_number = $_GET["id"];
    $query = "select * from relief_posts where serial_no =$serial_number";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $post_id = $serial_number;
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $post = $row['post'];
    $lat = $row['latitude'];
    $lon = $row['longitude'];
    $date = $row['date'];
    $query = "insert into accepted_posts (serial_no, post_id, user_id, user_name, post, latitude, longitude, date, completed) values ('','$post_id','$user_id','$user_name','$post','$lat','$lon','$date','NO')";
    $result = $conn->query($query);
    $post = "Your post was accepted by the admin";
    $query = "insert into notification_data (serial_no, user_id, user_name, notification) values ('','$user_id','$user_name','$post')";
    $result = $conn->query($query);
    //  if(! $result) {
    //     echo mysqli_error($conn);
    // } else {
    //     echo "data was added"; 
    // }
    $query = "delete from relief_posts where serial_no =$serial_number";
    $conn->query($query);
    header("Location:admin_pending_Posts.php");
}
?>