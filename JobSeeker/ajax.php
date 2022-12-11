<?php
    $con = mysqli_connect("localhost","root","","job");
    $a = $_POST['data'];
    $sql = "select * from job_master where JobTitle like '%$a%'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        while($row = mysqli_fetch_array($result)){
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
    }
?>