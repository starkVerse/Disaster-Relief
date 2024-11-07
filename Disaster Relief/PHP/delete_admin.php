<?php
if(isset($_GET["id"]))
{
    include("connection.php");
    $id = $_GET["id"];
    $query = "delete from admin_data where admin_id =$id";
    $conn->query($query);
    header("Location: admin_Acc.php");
}
?>