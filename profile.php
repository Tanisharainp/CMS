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
            <li><a href="profile.php" class="active">Profile</a></li>
            <li><a href="complaints.php">Complaints</a></li>
            <li><a href="logout.php">Logout</a></li>
		</ul>
    </nav>
    <div style="font-size: 20px;">
    <h2 style="color: black; font-size:25px; text-align:left; text-shadow:0px 0px;">Welcome, <?php echo $_SESSION['email']; ?> </h2>

    <form action="" method="post"> 
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Email Id:</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="number" id=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" style="height:40px; width: 70px;"></td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>