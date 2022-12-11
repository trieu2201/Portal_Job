

<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to Update Record
$sql = "UPDATE User_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Admin Updated");window.location=\'index.php?page=User\';</script>';
?>
