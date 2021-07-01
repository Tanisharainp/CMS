<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit complaints</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav>
        <h1 class="logo">CMS</h1>
        <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="complaints.php" class="active">Complaints</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div style="margin: 20px 150px;">
    <h2 style="color: black; font-size:25px; text-align:left; text-shadow:0px 0px;">Welcome, <?php echo $_SESSION['email']; ?> </h2>
        <h4>
            Enter your complaint here:
        </h4><br><br>
        <div style="font-size: 20px;">
            Sub: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" ><br><br>
            Complaint: <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <input type="submit" value="Post" style="height: 40px;width: 70px; margin-left: 100px;">
    </div>
</body>

</html>