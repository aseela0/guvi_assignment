<?php 
	session_start();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aseela - Guvi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/reg_main.css" rel="stylesheet" media="all">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-b-30">
                <div class="login100-form-avatar">
                    <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="AVATAR">
                </div>
                <button type="button" class="login100-form-title p-t-10 p-b-20" onClick="document.location.href='login.php'"  >Login</button>
                <button type="button" class="login100-form-title" onClick="document.location.href='register.php'">Register</button>
			</div>
		</div>
	</div>

</body>
</html>