<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION['$UserName_emp'])){
} 
else{
		header('location:../index.php');
}
?>

<?php $con=mysqli_connect("localhost","root","","job") ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

//  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_SESSION['Name'])) {
  $colname_Recordset1 = $_SESSION['Name'];
}

$query_Recordset1 = sprintf("SELECT JobId, JobTitle FROM job_master WHERE CompanyName = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysqli_query($con,$query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);


$query_Recordset2 = "SELECT application_master.ApplicationId, application_master.Status, jobseeker_reg.JobSeekerName, jobseeker_reg.City, jobseeker_reg.Email, application_master.JobId FROM application_master, jobseeker_reg WHERE jobseeker_reg.JobSeekId=application_master.JobSeekId";
$Recordset2 = mysqli_query($con,$query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>

<div id="main" class="box">

<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

                <form id="form1" method="post" action="index.php?page=Application">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Select Job Title:</strong></td>
                      <td><label>
                        <select name="cmbTitle" id="cmbTitle">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset1['JobId']?>"><?php echo $row_Recordset1['JobTitle']?></option>
                          <?php
} while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
  $rows = mysqli_num_rows($Recordset1);

  if($rows > 0) {
      mysqli_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysqli_fetch_assoc($Recordset1);
  }
?>
                        </select>
                      </label></td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="View " />
                      </label></td>
                    </tr>
                  </table>
              </form>
           <?php 
		   if (isset($_POST['cmbTitle']))
		   {
		   $Title=$_POST['cmbTitle'];
		 
		   ?>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>View & Send</strong></div></th>
                  </tr>
                  <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "SELECT application_master.ApplicationId, application_master.Status, 

jobseeker_reg.JobSeekerName, jobseeker_reg.City, jobseeker_reg.Email, jobseeker_reg.JobSeekId,

application_master.JobId
FROM application_master, jobseeker_reg
WHERE jobseeker_reg.JobSeekId=application_master.JobSeekId and application_master.JobId='".$Title."'";

// Execute query
$result = mysqli_query($con,$sql);
$stat=1;
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['ApplicationId'];
$Status=$row['Status'];
$JobSeekerName=$row['JobSeekerName'];
$City=$row['City'];
$Email =$row['Email'];
$JobSeekId=$row['JobSeekId'];
?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobSeekerName;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                     <td class="style3"><div align="left" class="style9 style5"><strong></strong><a href="ViewBiodata.php?JobSeekId=<?php echo $JobSeekId; ?>&AppId=<?php echo $Id;?>&JobId=<?php echo $Title;?>&Status=<?php echo $Status;?>">View</a></div></td>
                  </tr>
                  <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                </table>
                <?php
			
// Close the connection
mysqli_close($con);
	}
?>
              <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->


<?php
mysqli_free_result($Recordset1);

mysqli_free_result($Recordset2);
?>
