


<?php

	$Id=$_GET['UserId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
	// Specify the query to Insert Record
	$sql = "delete from User_Master where UserId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'index.php?page=User\';</script>';

?>
