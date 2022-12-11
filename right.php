<div class="contact_box">
  <div style= "background-color:  #FCA317;" >
    <div class="contact_us" align="center">
        Contact Us
    </div>
  </div>

  <div class = "mx-auto" align ="center">

    <p><strong>JOBIFIND</strong></p>
    <P>0909495312</P>
    <p>jobifind.com<br />
    </p>
    <p><b>Ho Chi Minh City, Vietnam</b></p>

  </div> 



  <!-- Category -->
  <div style= "background-color:  #FCA317;" >
    <div class="contact_us" align="center">
        Login
    </div>
  </div>

  <div class="mx-auto mg" >
    <form name="form1" method="post" action="login.php">

          <div style="padding: 5px 10px;"> 
            <label for="txtUser"  style="font-size: 20px"> Username</label> <br>
            <input type="text" name="txtUser" id="txtUser" style="width: 90%;">
            <span class="textfieldRequiredMsg">*</span>

            <br>
            <label for="txtPass"  style="font-size: 20px"> Password</label> <br>
            <input type="password" name="txtPass" id="txtPass" style="width: 90%;">
            <span class="textfieldRequiredMsg">*</span>
            <br>

            <label for="cmbUser"  style="font-size: 20px"> User type</label>
            <select class ="form-select" name="cmbUser" id="cmbUser" style="width: 90%;">
              <option value="JobSeeker">JobSeeker</option>
              <option value="Employer" selected="selected">Employer</option>
              <option value="Administrator">Administrator</option>
            </select>
            <br>
          </div>
         
          
         
          <div align ="center"> 
            <button  type="submit" class="btn " id="button" name = "button" value="Login">LOGIN</button>
  
          </div>
          <br>
          <div align="center"><a href="index.php?page=Forget">Forgot Password?</a></div>
          
      
    </form>
  </div>
  <br />
