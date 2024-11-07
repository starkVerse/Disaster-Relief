<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin View Posts</title>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="/WT_Project/CSS/acc.css">
</head>
<body>
  <?php
    include("connection.php");
    $query = "select * from user_data";
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
            <li><a href="admin_Acc.php">Admin Accounts</a></li>
            <li><a href="admin_pending_posts.php">Pending Posts</a></li>
            <li><a href="admin_send_alert.php">Disaster Alert</a></li>
        </ul>
    </div>
</nav>
<div class="content">
    <h2>User Accounts</h2>
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
          echo "
          <tr>
          <td>$row[user_name]</td>
          <td>$row[phone_number]</td>
          <td>$row[email_add]</td>
          <td><a class='delete' href='delete_user.php?id=$row[user_id]'>Delete</a></td>
          </tr>";
        }
      ?>
         <!-- <tr>
          <td>1</td>
          <td>JohnDoe</td>
          <td>Yes</td>
          <td>johndoe@example.com</td>
          <td>123-456-7890</td>
          <td><button>Delete</button></td>
        </tr> 
        <tr>
          <td>2</td>
          <td>JaneSmith</td>
          <td>No</td>
          <td>janesmith@example.com</td>
          <td>987-654-3210</td>
          <td> <button>Delete</button></td>
        </tr> -->
       <!---  <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr>
          <tr>
            <td>2</td>
            <td>JaneSmith</td>
            <td>No</td>
            <td>janesmith@example.com</td>
            <td>987-654-3210</td>
            <td>May 10, 2024</td>
          </tr> ---> 
      </tbody>
    
    </table>
    </div>
    
  </div>
</body>
</html>