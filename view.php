<?php require 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <?php
    $result = mysqli_query($con,"Select * from userdata"); 
    ?> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Student Details</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th>Name</th>
                <th>Class</th>
                <th>OS</th>
                <th>DBMS</th>
                <th>DFS</th>
                <th>CN</th>
                <th>DS</th>
                <th>Total Marks</th>
                <th>Fuzzy Result</th>
                <th>Grade</th>
                <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
            <?php  
                $query = " SELECT * from userdata";
                $fire = mysqli_query($con, $query) or die("data not found");

                if(mysqli_num_rows($fire)>0){
                    while($user = mysqli_fetch_assoc($fire)){ 
                        
            ?>
            
            <tr>
                <th scope="row"></th>
                <td> <?php echo $user['Student_Name'] ?></td>
                <td> <?php echo $user['Class'] ?></td>
                <td> <?php echo $user['OS'] ?></td>
                <td> <?php echo $user['DBMS'] ?></td>
                <td> <?php echo $user['DFS'] ?></td>
                <td> <?php echo $user['CN'] ?></td>
                <td> <?php echo $user['DS'] ?></td>
                <td> <?php echo $user['TotalMarks'] ?></td>
                <td> <?php echo $user['Fuzzy'] ?></td>
                <td> <?php echo $user['Grade'] ?></td>
                <td> <?php echo $user['Remark'] ?></td>
            </tr>     

            <?php 
                    }
                }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>