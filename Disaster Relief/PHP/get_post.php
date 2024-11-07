<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "user_posts";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts from database
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

$posts = [];

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
} 

// Output posts as JSON
header('Content-Type: application/json');
echo json_encode($posts);

$conn->close();
?>
