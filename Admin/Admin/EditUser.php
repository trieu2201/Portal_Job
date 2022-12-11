
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
    <div class ='container'>
                    <?php
                                $Id = $_GET['UserId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from User_Master where UserId=" . $Id . "";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                while ($row = mysqli_fetch_array($result)) {
                                    $Id = $row['UserId'];
                                    $Name = $row['UserName'];
                                    $Password = $row['Password'];
                                }
                                ?>
                                <form method="post" action="index.php?page=UpdateUser">
                                    <table width="100%" border="0">
                                        <tr>
                                            <td height="32"><span class="style8">User Id</span></td>
                                            <td><span id="sprytextfield1">
                                <label>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td height="36"><span class="style8">User Name:</span></td>
                                            <td><span id="sprytextfield2">
                                <label>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td height="36"><span class="style8">Password:</span></td>
                                            <td><span id="sprytextfield3">
                                <label>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Update Record"/></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                                // Close the connection
                                mysqli_close($con);
                                ?>
                                
</div>