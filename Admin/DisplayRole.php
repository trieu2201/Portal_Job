
<?php
    $conn=mysqli_connect("localhost","root","","job");
    $sqlJob = "SELECT * FROM `jobseeker_reg` ;";
    $sqlEmp = "SELECT * FROM `employer_reg` ;";

    $response1 = mysqli_query($conn, $sqlJob);
    $response2 = mysqli_query($conn, $sqlEmp);

?>
<?php
$role = $_REQUEST["role"];

$result = "";

// lookup all hints from array if $q is different from ""
if ($role== "JOBSEEKERS") {?>

<table border="1px;" align="center" class = 'table' id='all_info'>
	<thead>
		<tr>
      <th bgcolor="#E6E6FA">Id</th>
      <th bgcolor="#E6E6FA">Name</th>
      <th bgcolor="#E6E6FA">Email</th>
			<th bgcolor="#E6E6FA">Mobile</th>
 			<th bgcolor="#E6E6FA">Qualification</th>
			<th bgcolor="#E6E6FA">Gender</th>
      <th bgcolor="#E6E6FA">Birth</th>
      <th bgcolor="#E6E6FA">UserName</th>
      <th bgcolor="#E6E6FA">Password</th>
		<tr>
	</thead>
	<tbody>
	<?php 
  if(mysqli_num_rows($response1) > 0){
		while($row = mysqli_fetch_assoc($response1)) {
			//$id = $row['JobSeekId'];
  ?>
  <tr>
    	<td><?php echo $row['JobSeekId'] ?></td>
			<td><?php echo $row['JobSeekerName']; ?></td>
 			<td><?php echo $row['Email']; ?></td>
			<td><?php echo $row['Mobile']; ?></td>
      <td><?php echo $row['Qualification']; ?></td>
      <td><?php echo $row['Gender']; ?></td>
      <td><?php echo $row['BirthDate']; ?></td>
      <td><?php echo $row['UserName']; ?></td>
      <td><?php echo $row['Password']; ?></td>
      
	</tr>
   <?php  
    }
  }
	?>
	
	</tbody>
</table>
<?php }
else if ( $role == "EMPLOYERS"){ ?>
<table border="1px;" align="center" class = 'table' id='all_info'>
	<thead>
		<tr>
      <th bgcolor="#E6E6FA">Id</th>
      <th bgcolor="#E6E6FA">CompanyName</th>
      <th bgcolor="#E6E6FA">ContactPerson</th>
			<th bgcolor="#E6E6FA">Email</th>
 			<th bgcolor="#E6E6FA">Mobile</th>
			<th bgcolor="#E6E6FA">Field</th>
      <th bgcolor="#E6E6FA">City</th>
      <th bgcolor="#E6E6FA">UserName</th>
      <th bgcolor="#E6E6FA">Password</th>
		<tr>
	</thead>
	<tbody>
	<?php 
  if(mysqli_num_rows($response2) > 0){
		while($row = mysqli_fetch_assoc($response2)) {
  ?>
  <tr>
    	<td><?php echo $row['EmployerId'] ?></td>
			<td><?php echo $row['CompanyName']; ?></td>
 			<td><?php echo $row['ContactPerson']; ?></td>
			<td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Mobile']; ?></td>
      <td><?php echo $row['Area_Work']; ?></td>
      <td><?php echo $row['City']; ?></td>
      <td><?php echo $row['UserName']; ?></td>
      <td><?php echo $row['Password']; ?></td>
  
	</tr>
   <?php  
    }
  }
	?>
	
	</tbody>
</table>

<?php }
else
  {
    echo "<h5 class ='text-danger text-center mt-3'>No data found</h5>";
  }
?>
