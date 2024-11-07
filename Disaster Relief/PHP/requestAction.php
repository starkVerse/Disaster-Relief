<?php
    session_start();
?>
<?php
include('connection.php');
    // Retrieve the JavaScript variable from the POST data
    $lat = $_POST['js_lat_var'];
    $lon = $_POST['js_lon_var'];
    $user_id = $_SESSION['UID'];
    $user_name = $_SESSION['UN'];
    // $lat = $_POST['js_lat_var'];
    // $lng = $_POST['js_lon_var'];
    $user_post = $_POST['message']; 
    $querry = "insert into relief_posts (user_id, user_name, post, latitude, longitude) values ('$user_id','$user_name', '$user_post','$lat','$lon')";
    $result = $conn->query($querry);
    //  if(! $result) {
    //     echo mysqli_error($conn);
    // } else {
    //     echo "data was added"; 
    // }
    header("Location:user_requestRelief.php")
?>