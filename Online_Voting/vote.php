<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "","voting") or die(mysqli_error($conn));
echo '<br><h1><center>Online Voting System</center></h1>';
echo "<div class='c1'>";
ECHO "Your vote was successfully recorded.<br>";
$cand_id=$_POST['chosen_candidate'];
echo "voted to candidate with id= ".$cand_id;

echo "</div>";


$sql1 = "update candidate set voteCount = voteCount+1 where id='$cand_id' ";
$query1_result = mysqli_query( $conn, $sql1) or die(mysqli_error($conn));
 ?>
 <h3><a href="logout.php">LOGOUT</a></h3>

