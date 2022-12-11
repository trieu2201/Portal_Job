<div class="mx-auto mg">
  <form name="register" action="function/register_processing.php" method="post">
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
</div>