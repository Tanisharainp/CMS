<?php


include 'config.php';
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
    $pass = password_hash($password, PASSWORD_BCRYPT);

	$email_query = "select * from us_reg where email = '$email' ";
	$query = mysqli_query($conn, $email_query);
	$emailCount = mysqli_num_rows($query);
	
	if($emailCount > 0){
		echo "<script> alert('Email already exists'); </script> ";
	}else{
		$stmt = $conn->prepare("insert into us_reg(name, email, number, password) values (?, ?, ?, ?)");
		$stmt->bind_param('ssis', $name, $email, $number, $pass);
		$stmt->execute();
		echo "<script>alert('Registered Successfully!'); window.location = 'us_log.php'; </script>";
		$stmt->close();
		$con->close();
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Page</title>
	<link rel="stylesheet" href="index.css">

<script>
	function validateForm(){
		var name = document.forms["myform"]["name"].value;
        var email = document.forms["myform"]["email"].value;
		var number = document.forms["myform"]["number"].value;
        var password = document.forms["myform"]["password"].value;
        var pattern = new RegExp("^(?=.*[a-z])(?=.*\\d)(?=.*[-+!@#$%^&*.,?]).+$");
        if(name == null || name == ""){
			alert("Name cant be blank!");
			return false;
		}else if (email == null || email == ""){
            alert("Email cant be blank!");
            return false;
        }
		else if(email.endsWith("@gmail.com") == false || email.length < 12){
            alert("Enter valid email address");
            return false;
		}else if (number == "" || isNaN(number) || number.length != 10 || number.charAt(0) == 0){
			alert("Enter valid mobile number");
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
	
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="registeruser" name="myform" onsubmit="return validateForm()">
		<h2>User Registration</h2>
		<p>Name</p><input type="text" placeholder="Enter your name" name="name"><br>
		<p>Email</p><input type="text" placeholder="eg: john123@gmail.com" name="email"><br>
		<p>Phone Number</p><input type="text" placeholder="Enter your Mobile Number" name="number"><br>
		<p>Password</p><input type="password" placeholder="Enter your password" name="password"><br>
		<button type="submit" name="submit" id="submit">Submit</button>
		<a href="#">Forgot Password?</a>
	</form>  
</body>

</html>