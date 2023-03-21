<html>
<head>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />

</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand"><img src="img/9.jpg"style="width:46px;height:42px;"></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="page">
<div id="header">
<h1><font color = "black" size="6">Admin Login </h1>
<div class="news"><marquee behavior="right"><font color = "blue" size="3">This is a simple voting system for CSE480 mini project. ID:2017-2-60-095</marquee></div>
</div>

<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor=black>
<tr>
<form name="form1" method="post" action="adlogin_validation.php" >
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="skyblue">
<tr>
<td width="78">Email</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</div>
</body></html>

