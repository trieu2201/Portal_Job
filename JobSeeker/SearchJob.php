<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>

<script type="text/javascript">
  $(document).ready(function(){
    $('.find').keyup(function(){
      var txt = $('.find').val();
      $.post(
        'ajax.php', 
        {data: txt}, 
        function(data){
          $('.searchlist').html(data);
      })
    })
  })
</script>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <input type="text" class="find form-control" name="find">
  </div>
</div>

<div class="row">
  
  <?php 
  // Establish Connection with Database
  $con = mysqli_connect("localhost","root","","job");
  // Select Database
  //mysqli_select_db("job", $con);
  // Specify the query to execute
  $sql = "select * from job_master where Vacancy > 0";
  // Execute query



  $result = mysqli_query($con,$sql);


  //var_dump($result);
  $numbering = 0;
  // Loop through each records
  ?>  
  <div class="col-4">
  <div class="list-group searchlist" id="list-tab" role="tablist">
  <?php
  while($row = mysqli_fetch_array($result))
  {
  $Name=$row['CompanyName'];
  $Title=$row['JobTitle'];
  $Vacany=$row['Vacancy'];
  $Description=$row['Description'];
  $Qualification=$row['MinQualification'];
  $id = $row['JobId'];

  ?>  
  <a 
  class="list-group-item list-group-item-action"  
  role="tab" 
  data-toggle="list" 
  href="#<?php echo 'job'.$id;?>" 
  >
  <?php echo $Title?>
  </a>
  <?php
  }
  ?>
  </div>
  </div>
  <?php
  // Retrieve Number of records returned
  $records = mysqli_num_rows($result);
  ?>
  <div class="col-8">
  <div class="tab-content list" id="nav-tabContent">
  <?php
  foreach ($result as $value) 
  {
  $Name=$value['CompanyName'];
  $id = $value['JobId'];
  $Title=$value['JobTitle'];
  $Vacany=$value['Vacancy'];
  $Description=$value['Description'];
  $Qualification=$value['MinQualification'];
  ?>

  <div class="tab-pane fade"  id="<?php echo 'job'.$id?>" role="tabpanel">
  <h2 class="mb-1"><?php echo $Name?></h2>
  <br>
  <br>
  <h4><?php echo $Title?> </h4>
  <p>Required: <?php echo $Qualification?></p>
  <br>
  <button  type="submit" class="btn-primary btn-sm " id="button" name = "button" size>Apply now</button>
  <br>
  <h3>Description</h3>
  <p><?php echo $Description?></p>

  </div>
  <?php

  }
  ?>
  </div>
  </div>


  <?php
  // Close the connection
  mysqli_close($con);
  ?>

</div>


