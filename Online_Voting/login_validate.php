<!DOCTYPE html >
<html>
<head>
    <title>Online Voting System</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body bgcolor="#EBE9E9">
<marquee>Welcome To Online Voting System</marquee>
<center>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="home.php#mainSlider" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="register.php" class="nav-link">Registration</a></li>

                    <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav></center>
<br>
<br>
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('connection.php');

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$encrypted_mypassword=md5($mypassword);
$myusername = stripslashes($myusername);
echo $mypassword = stripslashes($mypassword);

$sql=mysqli_query($con, "SELECT * FROM voters WHERE email='$myusername' and password='$encrypted_mypassword'");

$count=mysqli_num_rows($sql);

if($count==1){
	$user = mysqli_fetch_assoc($sql);
	$_SESSION['member_id'] = $user['member_id'];
	header("location:submit_vote.php");
	}

else {
	echo "Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a>";
	}

ob_end_flush();

?>

</body>
</html>