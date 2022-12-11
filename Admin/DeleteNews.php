
<?php

	$Id=$_GET['NewsId'];
	// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "delete from News_Master where NewsId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'index.php?page=News\';</script>';

?>

