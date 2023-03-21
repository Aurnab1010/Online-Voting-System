<?php 
session_start();
 ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

echo "<h1>Online Voting System</h1>";
echo"<h3>Please choose your candidate.</h3>";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, party FROM candidate";
$result = $conn->query($sql);

?>
<form action='vote.php' method='POST'>
    <table class="table">
<?php	
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><label>";
    	echo "<input type=\"radio\" name=\"chosen_candidate\" value=\"".$row['id']."\">";
        echo " ID: ". $row["id"]. " ,  Name: ". $row["name"]. " , Party: " . $row["party"] . "<br><hr>";
        echo "</label></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
<input type="submit" value="Vote Now" class="btn">
</form>
<style>
	body{
		backgroud-color:#345;
        text-align: center;
        max-width: 750px;
        margin-right: auto;
        margin-left: auto;
	} 
    h1{
        color: aqua;
    }
    .btn{
        padding:5px 15px;
        background-color: #00ffd2;
    }
</style>