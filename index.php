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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Staatliches">
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
