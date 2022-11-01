<?php 

include 'db_conn.php';

error_reporting(0);

session_start();


// if (isset($_SESSION['username'])) {
//     header("Location: landing/index.php");
// }

if (isset($_POST['submit'])) {

	$fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
	$email = $_POST['email'];
	$password =$_POST['password'];
	$phno = $_POST['phone'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];

    $sql = "create table if not exists user(fname varchar(100),
    lname varchar(100),
    password varchar(18),
    gender varchar(20),
    email varchar(100),
    phno varchar(15),
    country varchar(50))";
    $result = mysqli_query($conn, $sql);

	
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "insert into user values('$fname','$lname','$password','$gender','$email','$phno','$country')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['username'] = $email;
            header("Location: landing/index.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration-Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/reg_main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body >
<!-- style="background-image: url('https://source.unsplash.com/random/1920x1080?sig=1');" -->
    <div class="container-login100" > 
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                   <center> <h2 class="title">Registration Form</h2></center>
                    <form method="POST"  action="register.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required> 
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Country</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="country" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>India</option>
                                    <option>Germany</option>
                                    <option>China</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <center><button class="btn btn--radius-2 btn--blue" name="submit">Submit</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>