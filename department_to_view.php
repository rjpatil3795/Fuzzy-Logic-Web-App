<?php require 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
    <div class = "container text-center mt-4">
        
            <h1>Student Performance System</h1><hr>

            <center>
            <div class="card" style="width: 25rem; margin-top:5%">
            <label for="department" style="margin-top: 15px;">Select Department:</label>

            <select style="margin-left: 15px; margin-right: 15px" name="Department" class = "department" id="department">
                <option value="select">Select a department</option>
                <option value="Computer">Computer</option>
                <option value="ENTC">ENTC</option>
                <option value="IT">IT</option>
                <option value="Electronics">Electronics</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Chemical">Chemical</option>
                <option value="Civil">Civil</option>
            </select>


            <label for="semester" style ="margin: 10px">Select Semester:</label>

            
            <select style="margin-left: 15px; margin-right: 15px" name="Semester" id="Semester">
                <option value="select">Select a semester</option>
                <option value="Sem 1">Sem 1</option>
                <option value="Sem 2">Sem 2</option>
                <option value="Sem 3">Sem 3</option>
                <option value="Sem 4">Sem 4</option>
                <option value="Sem 5">Sem 5</option>
                <option value="Sem 6">Sem 6</option>
                <option value="Sem 7">Sem 7</option>
                <option value="Sem 8">Sem 8</option>
            </select>
            
            <br>
            
            <input type = "submit" name = "submit_try" value="submit" class="btn-primary w-50" style="margin-left: 25%; margin-bottom:30px; border-radius:15ox 50px 30px 5px;">
        </div>
        </center>
    </div>
    </form>
    <?php
        session_start();
        if (isset($_POST['submit_try']))
        {
            $getDepartment = $_POST['Department'];
            $_SESSION['Department'] = $getDepartment;
            $getSemester = $_POST['Semester'];
            $_SESSION['Semester'] = $getSemester;
            $department_config = $getDepartment;
            $semester_config = $getSemester;
           
            echo $department_config;
            echo $semester_config;
            header("Location: view_teacher.php"); 
        }
    ?>
</body>

</html>