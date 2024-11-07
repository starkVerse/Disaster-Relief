<?php



$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "user_posts";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$post_content = $_POST['post_content'];


$sql = "INSERT INTO posts (content) VALUES ('$post_content')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Post submitted successfully!');</script>";
} else {
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}

$conn->close();
?>
