<?php

// session_start()
include 'config.php';

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'admin@gmail.com' and $password == 'Admin@123'){
        echo "<script>  alert('Logged In Successfully!'); window.location = 'admin.php'; </script>";
    }else{
        echo "<script>  alert('Incorrect Email ID or password'); </script>";
    }




    // $password = $_POST['password'];
    // $pass = password_hash($password, PASSWORD_BCRYPT);

    // $stmt = $conn->prepare("insert into ad_reg(email, password) values (?, ?)");
    // $stmt-> bind_param("ss", $email, $pass);
    // $stmt->execute();
    // echo "<script>alert('Logged In Successfully!'); window.location = 'admin.html'; </script>";
    // $stmt->close();
    // $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Form</title>
    <link rel="stylesheet" href="index.css">
    <script>
        function validateForm(){
            var email = document.forms["myform"]["email"].value;
            var password = document.forms["myform"]["password"].value;
            var pattern = new RegExp("^(?=.*[a-z])(?=.*\\d)(?=.*[-+!@#$%^&*.,?]).+$");
            if (email == null || email == ""){
                alert("Email cant be blank!");
                return false;
            }else if(email.endsWith("@gmail.com") == false && email.length < 12){
                alert("Enter valid email address");
                return false;
            }
            else if (password.length < 6 || password.length > 15){
            alert("Password must be atleast 8 characters long and must not exceed 15 characters");
            return false;
        }else if(password.charAt(0) != password.charAt(0).toUpperCase()  || pattern.test(password) == false){
            alert("Password must contain atleast 1 lowercase letter, alteast 1 special character, atleast 1 numeric character and must start with an uppercase letter");
            return false;
        }
        }
        

    </script>
</head>

<body id="register">
    <nav>
        <h1 class="logo">CMS</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="howToComplain.html">Complain Procedure</a></li>
			<li><a href="ad_log.php" class="active">Admin</a></li>
            <li><a href="us_log.php">User</a></li>
        </ul>
    </nav>
	<form name="myform" action="" class="register" method="POST" onsubmit="return validateForm()">
        <h2>Admin Login</h2>
        <p>Email Id</p><input type="email" name="email"  placeholder="eg: john123@gmail.com" />
        <p>Password</p><input type="password" name="password"  placeholder="Enter your password" />
        <input type="submit" value="Submit" name="submit" id="submit">
    </form>
</body>
</html>