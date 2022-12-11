<header>
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</header>

<div class="contact_box">
    <div class="contact_us" align="center" style="font-size: 3rem">
        Login
    </div>
   

    <div class="mx-auto mg" >
      <form name="form1" method="post" action="login.php">

            <div style="padding: 5px 10px;">
              <input name="txtUser" id="txtUser" class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example">
              

              <br>
              <input name="txtPass" id="txtPass" class="form-control form-control-lg" type="password" placeholder="Password" aria-label=".form-control-lg example">
              
              <br>

              <label for="cmbUser"  style="font-size: 20px; padding:5px"> User type</label>
              <select class ="form-select form-select-lg mb-3" name="cmbUser" id="cmbUser" style="width: 100%;">
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
            <br>
            <div class="row">
              <div  class="col-6" align="center">
                <a class="btn" style="width: 95%; height:100%;" href="index.php?page=JobSeekerReg">Register as an Job Seeker</a>
              </div>
              <br>
              <div  class="col-6" align="center">
                <a class="btn"  style="width: 95%; height:100%;" href="index.php?page=EmployerReg">Register as an Employer</a>
              </div>
            </div>
            
            
        
      </form>

    </div>
    <br>
    <br>
</div>
