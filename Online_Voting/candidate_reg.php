<?php
if(!isset($_SESSION)) {
    session_start();
}
include "connection.php";
include "header_voter.php";
?>
<html><head>

</head><body bgcolor="#e6e6e6";>
   
<center><b><font color = "red" size="6">Simple Online Voting</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Candidate Registration </h1>
<div class="news"><marquee behavior="right"><font color = "blue" size="3">This is a simple voting system for CSE480 mini project. ID:2017-2-60-095</marquee></div>
</div>


<div id="container">
<?php
require('connection.php');
if (isset($_POST['submit']))
{

	$myName = addslashes( $_POST['name'] ); 
	$myParty = ( $_POST['party'] ); 


	$sql = mysqli_query($con, "INSERT INTO candidate(name, party) 
	VALUES ('$myName', '$myParty') ");


	}

echo "<center><h3>Please fill in the form below to register a candidate</h3></center><br><br>";
echo '<form action="candidate_reg.php" method="post" >';
echo '<table align="center"><tr><td>';
echo "<tr><td>Name:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='name' maxlength='15' value=''></td></tr>";
echo "<tr><td>Party:</td><td><input type='text' style='background-color:#999999; font-weight:bold;' name='party' maxlength='15' value=''></td></tr>";
echo "<tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register'/></td></tr>";
echo "</tr></td></table>";
echo "</form>";
?>
</div>
</div>
</body>