<?php

session_start();

include 'config.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;

//     $password = $_POST['password'];
    // $pass = password_hash($password, PASSWORD_BCRYPT);

//     $stmt = $conn->prepare("insert into us_log(email, password) values (?, ?)");
//     $stmt-> bind_param("ss", $email, $pass);
//     $stmt-> execute();
//     echo "<script>alert('Logged In Successfully!'); window.location = 'complaints.html'; </script>";
//     $stmt->close();
//     $con->close();
// }

    $sql = "select * from us_reg where email = '$email' ";
    $query = mysqli_query($conn, $sql);
    $emailCount = mysqli_num_rows($query);

    if($emailCount){
        echo "<script>alert('Logged In Successfully!'); window.location = 'profile.php' </script>";
    }else{
        echo "<script>alert('Invalid Email Id or password');  </script>";
        echo "$pass, $password";     ////**************************************************    Password Valdation not done
}    
}

    //     $email_pass = mysqli_fetch_assoc($query);             //position of email entered
    //     // $db_pass = $email_pass['password'];                   //password against the email entered i.e $email_pass
    //     // echo "$db_pass";
    //     $pass_check = password_verify($password, $db_pass = $email_pass['password']);    
    
    //     if($pass_check){
    //         echo "<script>alert('Logged In Successfully!');</script>";
            // header('location: complaints.html');
    //     }else{
    //         echo "<script>alert('Password Incorrect'); </script>";

    //     }
    // }else{
        // echo "<script>alert('Invalid Email Id');  </script>";

//     }
// }

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
			<li><a href="ad_log.php">Admin</a></li>
            <li><a href="us_log.php" class="active">User</a></li>
        </ul>
    </nav>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="register" name="myform" onsubmit="return validateForm()">
        <h2>User Login</h2>
        <p>Email Id</p><input type="email" name="email" placeholder="eg: john123@gmail.com">
        <p>Password</p><input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="submit" id="submit" name="submit">
        <a href="us_reg.php">New User?</a>
    </form>
    
</body>
</html>