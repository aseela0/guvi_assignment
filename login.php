<?php 

include 'db_conn.php';

session_start();

if (isset($_POST['submit'])) {
	$email = $_POST['username'];
	$password = $_POST['pass'];

	
    $sql = "create table if not exists user(fname varchar(100),
    lname varchar(100),
    password varchar(18),
    gender varchar(20),
    email varchar(100),
    phno varchar(15),
    country varchar(50))";
    $result = mysqli_query($conn, $sql);

	// echo "<script>alert('$email,$password')</script>";

	$sql = "SELECT email FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		if($result){
		header("Location: landing/index.php");}
	} else {
		echo "<script>alert('Invalid Credentials')</script>";
	}
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login-form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-b-30">
				<form class="login100-form validate-form"  action="login.php" method="POST">
					<div class="login100-form-avatar">
						<img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>