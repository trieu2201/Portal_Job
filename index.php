<?php
session_start();
if(isset($_SESSION['$UserName'])){
	// header('location:Admin/index.php');
	header('Location:Admin/index.php');

} 
if(isset($_SESSION['$UserName_job'])){
	// header('location:JobSeeker/index.php');
   	header('Location:JobSeeker/index.php');

} 
if(isset($_SESSION['$UserName_emp'])){
	// header('location:Employer/index.php');
   	header('Location:Employer/index.php');

} 
$val = isset($_GET["page"]) ? $_GET["page"] :null;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Staatliches">
    <title>JOB PORTAL BY JITESH</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    

</head>

<body >
<!-- Main -->
<div >

<?php 
include "menu.php"
?>   
<?php 
if(is_null($val)) {
    include "Home.php";
} 
else if ($val  =="AboutUs"){
    include "AboutUs.php";
}
else if ($val =="Employer"){
     include "Employer.php";
}
else if ($val =="JobSeeker"){
     include "JobSeeker.php";
}
else if ($val =="News"){
     include "News.php";
}
else if ($val =="ContactUs"){
     include "ContactUs.php";
}else if ($val =="Forget"){
    include "Forget.php";
}else if ($val =="JobSeekerReg"){
    include "JobSeekerReg.php";
}
?>

</div> <!-- /main -->
<?php 
include "footer.php"
?>   
</body>
</html>
