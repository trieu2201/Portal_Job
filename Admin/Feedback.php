<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION['$UserName'])){

} 
else{
		header('location:../index.php');
}
?>

<div id="main" class="box">
   

                    <table width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                            <th height="32" bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Id</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "job");
                        // Specify the query to execute
                        $sql = "select FeedbackId,Feedback,FeedbakDate,JobSeekerName from Feedback,JobSeeker_Reg where Feedback.JobSeekId=JobSeeker_Reg.JobSeekId";
                        // Execute query
                        $result = mysqli_query($con,$sql);
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
                            $Id = $row['FeedbackId'];
                            $Name = $row['JobSeekerName'];
                            $Feedback = $row['Feedback'];
                            $FeedbakDate = $row['FeedbakDate'];

                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Id; ?></strong></div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Name; ?></strong></div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Feedback; ?></strong>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $FeedbakDate; ?></strong>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        // Retrieve Number of records returned
                        $records = mysqli_num_rows($result);
                        ?>
                        <tr>
                            <td colspan="4" class="style3">
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                            </td>
                        </tr>
                        <?php
                        // Close the connection
                        mysqli_close($con);
                        ?>
                    </table>
                
            </div> <!-- /content -->

            