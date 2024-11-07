
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Post Form</title>
<link rel="stylesheet" href="/WT_Project/CSS/adminPost.css">
</head>
<body>
<div class="header">
        <div class="logo">Disaster Relief</div>
        <!-- <div class="signin-register"><a href="signin.html">Sign In/Register</a></div> -->
    </div>
    <nav>
        <div class="container">
        <ul>
            <li><a href="admin_userAcc.php">User Accounts</a></li>
            <li><a href="admin_pending_posts.php">Pending Posts</a></li>
            <li><a href="admin_Acc.php">Admin Accounts</a></li>
        </ul>
        </div>
    </nav>
<h2>Submit Your Needs</h2>
<form action="submit_post.php" method="post">
  <label for="post_content">Post Content:</label><br>
  <textarea id="post_content" name="post_content" rows="4" cols="50"></textarea><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
