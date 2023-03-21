<html >
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
            <a href="" class="navbar-brand"><img src="img/9.jpg"style="width:46px;height:42px;"></a>
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
require('connection.php');
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] );
$myLastName = addslashes( $_POST['lastname'] );
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword);

$sql = mysqli_query($con, "INSERT INTO voters(first_name, last_name, email,password) 
VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass') ");

die( "You have registered for an account.<br><br>Go to <a href=\"index.php\">Login</a>" );
}

echo "<center><h3>Register an account by filling in the needed information below:</h3></center><br><br>";
echo '<form action="register.php" method="post" >';
echo '<table align="center"><tr><td>';
echo "<tr><td>First Name:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Last Name:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>";
echo "<tr><td>Email Address:</td><td><input type='email' style='background-color:#999999; font-weight:bold;' name='email' maxlength='100' id='email'value=''></td><td><span id='result' style='color:red;'></span></td></tr>";
echo "<tr><td>Password:</td><td><input type='password' style='background-color:#999999; font-weight:bold;' name='password' maxlength='15' value=''></td></tr>";
echo "<tr><td>Confirm Password:</td><td><input type='password' style='background-color:#999999; font-weight:bold;' name='ConfirmPassword' maxlength='15' value=''></td></tr>";
echo "<tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register'/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an account? <a href='index.php'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form>";
?>

</body>