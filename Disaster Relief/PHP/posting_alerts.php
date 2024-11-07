<?php
include('connection.php');
    // Retrieve the JavaScript variable from the POST data
    $admin_id = -1;
    $admin_name = 'admin';
    $location = $_POST['location'];
    $severity = $_POST['severity'];
    $description = $_POST['description'];
    $post = "$severity disaster will occur at $location: $description";
    echo $post;
    $querry = "insert into notification_data (serial_no, user_id, user_name, notification) values ('','$admin_id','$admin_name', '$post')";
    $result = $conn->query($querry);
    //  if(! $result) {
    //     echo mysqli_error($conn);
    // } else {
    //     echo "data was added"; 
    // }
    header("Location:admin_send_alert.php")
?>