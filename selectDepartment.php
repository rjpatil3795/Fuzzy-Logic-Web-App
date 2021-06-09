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
        
            <input type = "submit" name = "submit" value="submit" class="btn-primary w-50" style="margin-left: 25%; margin-bottom:30px; border-radius:15ox 50px 30px 5px;">

        </div>
        </center>
    </div>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $getDepartment = $_POST['Department'];
            $getSemester = $_POST['Semester'];

            if($getDepartment=="Computer" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/compSem1.php");
            }

            if($getDepartment=="Computer" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/compSem2.php");
            }
            
            if($getDepartment=="Computer" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/compSem3.php");
            }

            if($getDepartment=="Computer" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/compSem4.php");
            }

            if($getDepartment=="Computer" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/compSem5.php");
            }

            if($getDepartment=="Computer" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/compSem6.php");
            }
            
            if($getDepartment=="Computer" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/compSem7.php");
            }

            if($getDepartment=="Computer" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/compSem8.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/entcSem1.php");
            }
            
            if($getDepartment=="ENTC" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/entcSem2.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/entcSem3.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/entcSem4.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/entcSem5.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/entcSem6.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/entcSem7.php");
            }

            if($getDepartment=="ENTC" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/entcSem8.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/elecSem1.php");
            }
            
            if($getDepartment=="Electronics" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/elecSem2.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/elecSem3.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/elecSem4.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/elecSem5.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/elecSem6.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/elecSem7.php");
            }

            if($getDepartment=="Electronics" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/elecSem8.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/mechSem1.php");
            }
            
            if($getDepartment=="Mechanical" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/mechSem2.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/mechSem3.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/mechSem4.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/mechSem5.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/mechSem6.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/mechSem7.php");
            }

            if($getDepartment=="Mechanical" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/mechSem8.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/chemSem1.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/chemSem2.php");
            }
            
            if($getDepartment=="Chemical" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/chemSem3.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/chemSem4.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/chemSem5.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/chemSem6.php");
            }
            
            if($getDepartment=="Chemical" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/chemSem7.php");
            }

            if($getDepartment=="Chemical" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/chemSem8.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/civilSem1.php");
            }
            
            if($getDepartment=="Civil" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/civilSem2.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/civilSem3.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/civilSem4.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/civilSem5.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/civilSem6.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/civilSem7.php");
            }

            if($getDepartment=="Civil" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/civilSem8.php");
            }
            
            if($getDepartment=="IT" && $getSemester=="Sem 1")
            {
                header("Location: semesterPages/itSem1.php");
            }
            
            if($getDepartment=="IT" && $getSemester=="Sem 2")
            {
                header("Location: semesterPages/itSem2.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 3")
            {
                header("Location: semesterPages/itSem3.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 4")
            {
                header("Location: semesterPages/itSem4.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 5")
            {
                header("Location: semesterPages/itSem5.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 6")
            {
                header("Location: semesterPages/itSem6.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 7")
            {
                header("Location: semesterPages/itSem7.php");
            }

            if($getDepartment=="IT" && $getSemester=="Sem 8")
            {
                header("Location: semesterPages/itSem8.php");
            }
            
        }
    ?>
</body>

</html>