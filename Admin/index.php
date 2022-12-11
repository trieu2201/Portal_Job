<?php
session_start();
if(isset($_SESSION['$UserName'])){
} 
else{
   	header('Location:http://localhost/JobPortal/index.php');
}
?>
<?php
$val = isset($_GET["page"]) ? $_GET["page"] :null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Staatliches">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="css/aural.css" />
    <style type="text/css">

    </style>
</head>

<body id="www-url-cz">
<!-- Main -->

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
else if ($val  =="User"){
    include "User.php";
}
else if ($val =="ManageJob"){
     include "ManageJob.php";
}
else if ($val =="ManageEmployer"){
     include "ManageEmployer.php";
}
else if ($val =="News"){
     include "News.php";
}
else if ($val =="Feedback"){
     include "Feedback.php";
}
else if ($val =="EditUser"){
     include "EditUser.php";
}
else if ($val =="DeleteUser"){
     include "DeleteUser.php";
}
else if ($val =="UpdateUser"){
     include "UpdateUser.php";
}
else if ($val =="DetailJob"){
     include "DetailJob.php";
}
else if ($val =="DetailEmp"){
     include "DetailEmp.php";
}
else if ($val =="EditNews"){
     include "EditNews.php";
}
else if ($val =="DeleteNews"){
     include "DeleteNews.php";
}
else if ($val =="logout"){
     include "session_destroy.php";
}
?>

</body>
<?php
include "footer.php"
?>

</html>
