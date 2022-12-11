<?php 
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "job"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
if(isset($_POST['input']) && isset($_POST['select'])){
  
  $input = $_POST['input'];
  $role = $_POST['select'];
  if($role =='JOBSEEKERS'){
    $query1 = "SELECT * FROM jobseeker_reg WHERE JobSeekerName LIKE '{$input}%' ";
    $result = mysqli_query($con,$query1);
    if(mysqli_num_rows($result) >0){ ?>
    <table  border="1px;" align="center" class = 'table'>
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
      while($row = mysqli_fetch_assoc($result)){?>
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
      <?php  }?>
      	</tbody>
    </table>
<?php
}
  }
  else if($role =='EMPLOYERS'){
    $query2 = "SELECT * FROM employer_reg WHERE CompanyName LIKE '{$input}%' ";
    $result2 = mysqli_query($con,$query2);
    if(mysqli_num_rows($result2) >0){ ?>
    <table  border="1px;" align="center" class = 'table'>
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
      while($row = mysqli_fetch_assoc($result2)){?>
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
      <?php  }?>
      	</tbody>
    </table>
 <?php }
}
}
?>