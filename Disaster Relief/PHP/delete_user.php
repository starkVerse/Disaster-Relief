<?php
if(isset($_GET["id"]))
{
    include("connection.php");
    $id = $_GET["id"];
    $query = "delete from user_data where user_id =$id";
    $conn->query($query);
    header("Location: admin_userAcc.php");
}
?>