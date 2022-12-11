<body >
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ] 
					
                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ] 
						  
                   ],
                   [//Country
						 
						 
					  
						  				
                   ],
				   [//State
						  
						  
                   ],
				   [//City
						  
						  
                   ],
				   [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
						 
						 
						  
                   ],
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				   [//ID
						  
						  
                   ],
				   [//TDType
						  
						  ["minlen=1",
		"Please Select File "
						  ]
						  
                   ],
				   [//UserName
						  
					 ["minlen=1",
		"Please Enter UserName "
						  ]	
                   ],
				   [//Password
						  
						 ["minlen=1",
		"Please Enter Password "
						  ] 
						  
                   ],
				   [//Confirm
						  
						   ["minlen=1",
		"Please Enter Confirm Password "
						  ]
						  
                   ]
            ];
</SCRIPT>
<!-- Main -->
<div>

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
            <div class="container-fluid">
                <h2>Our Job Description</h2>
               
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
                      <div class="list-group" id="list-tab" role="tablist">
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
                      <div class="tab-content" id="nav-tabContent">
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
   

                </p>

                <div align="center"><a href="index.php?page=JobSeekerReg"><strong>New Job Seeker? Register Here</strong></a>                  </div>
                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->


</div> <!-- /main -->
