<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];
$txtGender=$_POST['txtGender'];
$txtDate=$_POST['txtDate'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtQual=$_POST['txtQual'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];

// Save resume

$uploadOk = 1;
$docFileType = strtolower(pathinfo($_FILES["txtResume"]["name"],PATHINFO_EXTENSION));
$newname = $txtId."_".$txtName.".".$docFileType;
$target_dir = "../upload/".$newname;

if($docFileType != "pdf" && $docFileType != "docx" && $docFileType != "doc") {
  echo '<script type="text/javascript">alert("Sorry, only PDF, DOCX and DOC files are allowed.");window.location.href="index.php?page=EditProf"</script>';
  $uploadOk = 0;
}

if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  move_uploaded_file($_FILES["txtResume"]["tmp_name"], $target_dir);
}

// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database

// Specify the query to Update Record
$sql = "Update jobseeker_reg  set Resume='".$newname."',JobSeekerName='".$txtName."',BirthDate='".$txtDate."',Gender='".$txtGender."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Qualification='".$txtQual."',UserName='".$txtUser."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location.href="index.php?page=Profile";</script>';
?>
</body>
</html>