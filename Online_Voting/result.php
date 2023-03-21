<?php
if(!isset($_SESSION)) { 
session_start();
}
include "connection.php";
include "header_voter.php";
?>
<center><h3> Total Votes of Candidates  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidate' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table><tr bgcolor="yellow">
<td width="30px">ID</td>		
<td width="100px">Name</td>
<td width="100px">Party</td>
<td width="30px">VOTE Count</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->id;
			$name=$mb->name;
			$party=$mb->party;
			$vote=$mb->voteCount;
			echo '<tr bgcolor="skyblue">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$party.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>