<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
else{
	header('Location:../index.php');
}
$val = isset($_GET["page"]) ? $_GET["page"] :null;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    
    <title>JOB PORTAL BY JITESH</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<?php 
if(is_null($val)) {
    include "Home.php";
}
else if ($val =="Home"){
     include "Home.php";
}
else if ($val =="Profile"){
     include "Profile.php";
}
else if ($val =="Education"){
     include "Education.php";
}
else if ($val =="SearchJob"){
     include "SearchJob.php";
}
else if ($val =="Walkin"){
     include "Walkin.php";
}
else if ($val =="Feedback"){
     include "Feedback.php";
}
else if ($val =="logout"){
     include "session_destroy.php";
}
?>
</div> <!-- /page-in -->
</div> <!-- /page -->
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
