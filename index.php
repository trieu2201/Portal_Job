<?php
session_start();
if(isset($_SESSION['$UserName'])){
	// header('location:Admin/index.php');
	header('Location:http://localhost/JobPortal/Admin/index.php?role=Admin');

} 
if(isset($_SESSION['$UserName_job'])){
	// header('location:JobSeeker/index.php');
   	header('Location:http://localhost/JobPortal/JobSeeker/index.php?role=JobSeeker');

} 
if(isset($_SESSION['$UserName_emp'])){
	// header('location:Employer/index.php');
   	header('Location:http://localhost/JobPortal/Employer/index.php?role=Employer');

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
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper --><!-- CSS only -->
   
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
}else if ($val =="EmployerReg"){
    include "EmployerReg.php";
}
?>

</div> <!-- /main -->
<?php 
include "footer.php"
?>   
</body>
</html>
