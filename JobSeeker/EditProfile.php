<?php
    if (!isset($_SESSION)) {
      session_start();
    }
?>


<body id="www-url-cz">
<!-- Main -->
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
                <h2><span>Edit <?php echo $_SESSION['Name'];?> profile...</span></h2>
               <?php
                    $ID=$_SESSION['ID'];
                    // Establish Connection with Database
                    $con = mysqli_connect("localhost","root","","job");

                    // Specify the query to execute
                    $sql = "select * from jobseeker_reg where JobSeekId ='".$ID."'  ";
                    // Execute query
                    $result = mysqli_query($con,$sql);
                    // Loop through each records
                    $row = mysqli_fetch_array($result)
                ?>
                <form method="post" action="UpdateProfile.php" enctype="multipart/form-data">
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                    <tr>
                    <td><strong>ID:</strong></td>
                    <td><span id="sprytextfield0">
                      <label>
                        <input name="txtId" type="text" id="txtId" value="<?php echo $row['JobSeekId'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><span id="sprytextfield1">
                      <label>
                      <input name="txtName" type="text" id="txtName" value="<?php echo $row['JobSeekerName'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                    <td><strong>Gender:</strong></td>
                    <td><span id="sprytextfield2">
                      <label>
                          <select name="txtGender" id="txtGender">
                            <option value="male" <?php if ($row['Gender'] === 'Male') echo "selected";?>>Male</option>
                            <option value="female" <?php if ($row['Gender'] === 'Female') echo "selected";?>>Female</option>
                          </select>
                      </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                        <td><strong>Gender:</strong></td>
                        <td><span id="sprytextfield3">
                        <label>
                          <input name="txtDate" type="date" id="txtDate" value="<?php echo $row['BirthDate'];?>" />
                        </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                    <td><strong>Address:</strong></td>
                    <td><span id="sprytextarea1">
                      <label>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"><?php echo $row['Address'];?></textarea>
                      </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                    </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><span id="sprytextfield4">
                      <label>
                      <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['City'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><span id="sprytextfield5">
                      <label>
                      <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['Email'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><span id="sprytextfield6">
                      <label>
                      <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Qualification:</strong></td>
                    <td><span id="sprytextfield7">
                      <label>
                      <input name="txtQual" type="text" id="txtQual" value="<?php echo $row['Qualification'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                    <td><strong>Resume:</strong></td>
                    <td><span id="sprytextfield10">
                      <label>
                      <input name="txtResume" type="file" id="txtResume"/>
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><span id="sprytextfield8">
                      <label>
                      <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td><span id="sprytextfield9">
                      <label>
                      <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row['Password'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
                    </label></td>
                  </tr>
                </table>
</form>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->


    </div> <!-- /page-in -->
    </div> <!-- /page -->

</div> <!-- /main -->

<script type="text/javascript">

var sprytextfield0 = new Spry.Widget.ValidationTextField("sprytextfield0");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
//var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");

</script>
</body>
</html>
