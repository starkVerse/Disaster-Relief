<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin View Posts</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/acc_admin.css">
</head>
<body>
  <?php
    include("connection.php");
    $query = "select * from admin_data";
    $result = $conn->query($query);
  ?>
  <div class="header">
    <div class="logo">Disaster Relief</div>
    <!-- <a href="signin.html" class="signin-register">Sign In/Register</a> -->
    </div>
</div>
<nav>
    <div class="container">
        <ul>
            <li><a href="admin_userAcc.php">User Accounts</a></li>
            <li><a href="admin_pending_posts.php">Pending Posts</a></li>
            <li><a href="admin_send_alert.php">Disaster Alert</a></li>
        </ul>
    </div>
</nav>
<div class="content">
    <h2>Admin Accounts</h2>
    <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <!-- <th>User ID</th> -->
          <th>Username</th>
          <th>Phone Number</th>
          <th>Email Address</th>
          <!-- <th>Phone Number</th> -->
          <th>Edit</th>
        </tr>
      </thead>
      <!-- check korar jonno-->
      <tbody>
      <?php
        while($row = $result->fetch_assoc()){
        {
          echo "
          <tr>
          <td>$row[user_name]</td>
          <td>$row[phone_number]</td>
          <td>$row[email_add]</td>
          <td><a class='delete' href='delete_admin.php?id=$row[admin_id]'>Delete</a></td>
          </tr>";
        }
        }
      ?>
      </tbody>
    </table>
    </div>
  </div>
    <a class="create" href="admin_register.php">Create Account</a>
</body>
</html>