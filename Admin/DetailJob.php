

<!-- Main -->
<div id="main" class="box">
                <div class="article">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <?php
                                $ID = $_GET['JobId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from JobSeeker_Reg where JobSeekId='" . $ID . "'  ";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                $row = mysqli_fetch_array($result)
                                ?>
                                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td>Id:</td>
                                        <td><?php echo $row['JobSeekId']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $row['JobSeekerName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td><?php echo $row['Mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Highest Qualification:</td>
                                        <td><?php echo $row['Qualification']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $row['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birth Date:</td>
                                        <td><?php echo $row['BirthDate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Resume:</td>
                                        <td><a href="../upload/<?php echo $row['Resume']; ?>" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId']; ?>">Approv
                                                    Job Seeker</a></strong></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                   

        </div> <!-- /page-in -->
    </div> <!-- /page -->


    <?php
    mysqli_close($con);
    ?>
