<?php require '../config/config.php'; ?>
<?php

if(isset($_POST['submit'])){
	$Name = strip_tags(trim($_POST['Name']));
	// $Class = strip_tags(trim($_POST['Class']));
	$PHYSICS = strip_tags(trim($_POST['PHYSICS']));
	$CHEMISTRY = strip_tags(trim($_POST['CHEMISTRY']));
	$M1 = strip_tags(trim($_POST['M1']));
	$CP = strip_tags(trim($_POST['CP']));
	$EGR = strip_tags(trim($_POST['EGR']));
	// $ETT = strip_tags(trim($_POST['ETT']));
	// $CSS = strip_tags(trim($_POST['CSS']));
	$TotalMarks = strip_tags(trim($_POST['TotalMarks']));
	$Fuzzy = strip_tags(trim($_POST['Fuzzy']));
	$Grade = strip_tags(trim($_POST['Grade']));
	$Remark = strip_tags(trim($_POST['Remark']));
	$CGPA = strip_tags(trim($_POST['CGPA']));

	$query = "INSERT INTO `compsem8`(`Name`, `HCI`, `PROJECT2`, `CV`, `SOCIOLOGY`, `DF`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES ('$Name','$PHYSICS','$CHEMISTRY','$M1','$CP','$EGR','$TotalMarks','$Fuzzy','$Grade','$Remark','$CGPA')";
	$fire = mysqli_query($con,$query) or die();
	if($fire) echo '<script>alert("Data Inserted Successfully")</script>';
}
?>

<html>
	<head>
		
		<title>Student Results</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script type="text/javascript">
		
		function getReport(){

					var grade = "";	 //declare a variable for grade
					var  result="";	 //declare a variable for result

					//read the marks
					var PHYSICS_IA = document.getElementById('txtPHYSICS_IA').value;
					var PHYSICS_MSE = document.getElementById('txtPHYSICS_MSE').value;
					var PHYSICS_ESE = document.getElementById('txtPHYSICS_ESE').value;
					var PHYSICS_MARKS = PHYSICS_IA - (- PHYSICS_MSE*3/5) - (- PHYSICS_ESE/2);
					document.getElementById('txtPHYSICS').value = PHYSICS_MARKS;
					
					var CHEMISTRY_IA = document.getElementById('txtCHEMISTRY_IA').value;
					var CHEMISTRY_MSE = document.getElementById('txtCHEMISTRY_MSE').value;
					var CHEMISTRY_ESE = document.getElementById('txtCHEMISTRY_ESE').value;
					var CHEMISTRY_MARKS = CHEMISTRY_IA - (- CHEMISTRY_MSE*3/5) - (- CHEMISTRY_ESE/2);
					document.getElementById('txtCHEMISTRY').value = CHEMISTRY_MARKS;

					var M1_IA = document.getElementById('txtM1_IA').value;
					var M1_MSE = document.getElementById('txtM1_MSE').value;
					var M1_ESE = document.getElementById('txtM1_ESE').value;
					var M1_MARKS = M1_IA - (- M1_MSE*3/5) - (- M1_ESE/2);
					document.getElementById('txtM1').value = M1_MARKS;
					
					var CP_IA = document.getElementById('txtCP_IA').value;
					var CP_MSE = document.getElementById('txtCP_MSE').value;
					var CP_ESE = document.getElementById('txtCP_ESE').value;
					var CP_MARKS = CP_IA - (- CP_MSE*3/5) - (- CP_ESE/2);
					document.getElementById('txtCP').value = CP_MARKS;

					var EGR_IA = document.getElementById('txtEGR_IA').value;
					var EGR_MSE = document.getElementById('txtEGR_MSE').value;
					var EGR_ESE = document.getElementById('txtEGR_ESE').value;
					var EGR_MARKS = EGR_IA - (- EGR_MSE *3/5) - (- EGR_ESE/2) ;
					document.getElementById('txtEGR').value = EGR_MARKS;

				 	// var ETT_IA = document.getElementById('txtETT_IA').value;
					// var ETT_MSE = document.getElementById('txtETT_MSE').value;
					// var ETT_ESE = document.getElementById('txtETT_ESE').value;
					// var ETT_MARKS = ETT_IA - (- ETT_MSE*3/5) - (- ETT_ESE/2);
					// document.getElementById('txtETT').value = ETT_MARKS;

					// var CSS_IA = document.getElementById('txtCSS_IA').value;
					// var CSS_MSE = document.getElementById('txtCSS_MSE').value;
					// var CSS_ESE = document.getElementById('txtCSS_ESE').value;
					// var CSS_MARKS = CSS_IA - (- CSS_MSE*3/5) - (- CSS_ESE/2);
					// document.getElementById('txtCSS').value = CSS_MARKS;
					// //calculate the total marks (using double notation technique)
					var totalMarks = (PHYSICS_MARKS - (- CHEMISTRY_MARKS) - (- M1_MARKS) - (- CP_MARKS)- (- EGR_MARKS)).toFixed(2);
					
					//get the average marks
					var averageMarks = ((totalMarks / 5)/100).toFixed(2);					
					var cgpa = (averageMarks*10).toFixed(2);
					//find the grade and result using the ternary operator inside the switch statement					
					switch(
					
							//usage of ternary operator inside switch

							(averageMarks > 0.6 && averageMarks <= 1) ? 1 : 
							(averageMarks > 0.5 && averageMarks < 0.6) ? 2 : 
							(averageMarks > 0.4 && averageMarks < 0.5) ? 3 : 0
						  )
							
							{
								case 1 :grade = "A";result="Very Good";break;
								case 2 :grade = "B"; result="Good";break;
								case 3 :grade = "C"; result="Satisfactory";break;
								case 0 :grade = "D"; result="Fail";break;
							}
							
						
					//display the results	
					document.getElementById('txtStudentName').value = document.getElementById('txtName').value;
					// document.getElementById('txtStudentClass').value = document.getElementById('txtClass').value;
					document.getElementById('txtTotalMarks').value = totalMarks;
					document.getElementById('txtAvgMarks').value = averageMarks;
					document.getElementById('txtGrade').value = grade;
					document.getElementById('txtResult').value = result;
					document.getElementById('txtCGPA').value = cgpa;
		
		} //end of function getReport
		
		</script>
	</head>
	<body>	
	<div class="container">
		<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">	
			<fieldset style="width:600px">
			<h1 style="margin-top: 10px;">
	    		<legend><b>MIT Student Input Section:</b></legend>
			</h1>
			<div>				
				Name:<input name = "Name" type="text" id="txtName" style="margin-left: 10px; margin-bottom:30px; margin-top:20px;"> &nbsp;&nbsp;
				<!-- Class:<input name = "Class" type="text" id="txtClass"> <br/><br/> -->
				<table  class="table" border="1">
					<thead class="thead-dark">
					<tr><td>Subject</td> <td>IA (20)</td> <td>MSE (50)</td> <td>ESE(100)</td> <td> Final Marks</td></tr>
					<tr><td>HCI</td><td><input name = "PHYSICS_IA" type="text" id="txtPHYSICS_IA"></td> <td><input name = "PHYSICS_MSE" type="text" id="txtPHYSICS_MSE"></td> <td><input name = "PHYSICS_ESE" type="text" id="txtPHYSICS_ESE"></td> <td><input name = "PHYSICS"  type="text" id="txtPHYSICS" readonly></td></tr>
					<tr><td>PROJECT2</td><td><input name = "CHEMISTRY_IA" type="text" id="txtCHEMISTRY_IA"></td> <td><input name = "CHEMISTRY_MSE" type="text" id="txtCHEMISTRY_MSE"></td> <td><input name = "CHEMISTRY_ESE" type="text" id="txtCHEMISTRY_ESE"></td> <td><input  name = "CHEMISTRY" type="text" id="txtCHEMISTRY" readonly></td></tr>
					<tr><td>CV</td> <td><input name = "M1_IA" type="text" id="txtM1_IA"></td> <td><input name = "M1_MSE" type="text" id="txtM1_MSE"></td> <td><input name = "M1_ESE" type="text" id="txtM1_ESE"></td> <td><input name = "M1" type="text" id="txtM1" readonly></td></tr>
					<tr><td>SOCIOLOGY</td><td><input name = "CP_IA" type="text" id="txtCP_IA"></td> <td><input name = "CP_MSE" type="text" id="txtCP_MSE"></td> <td><input name = "CP_ESE" type="text" id="txtCP_ESE"></td> <td><input name = "CP" type="text" id="txtCP" readonly></td></tr>				
					<tr><td>DF</td><td><input name = "EGR_IA" type="text" id="txtEGR_IA"></td> <td><input name = "EGR_MSE" type="text" id="txtEGR_MSE"></td> <td><input name = "EGR_ESE" type="text" id="txtEGR_ESE"></td> <td><input name = "EGR" type="text" id="txtEGR" readonly></td></tr>
					<!-- <tr><td>EE</td><td><input name = "ETT_IA" type="text" id="txtETT_IA"></td> <td><input name = "ETT_MSE" type="text" id="txtETT_MSE"></td> <td><input name = "ETT_ESE" type="text" id="txtETT_ESE"></td> <td><input name = "ETT" type="text" id="txtETT" readonly></td></tr>				
					<tr><td>EHCL</td><td><input name = "CSS_IA" type="text" id="txtCSS_IA"></td> <td><input name = "CSS_MSE" type="text" id="txtCSS_MSE"></td> <td><input name = "CSS_ESE" type="text" id="txtCSS_ESE"></td> <td><input name = "CSS" type="text" id="txtCSS" readonly></td></tr>				 -->
					</thead>
				</table>
				<div style="margin-left: 70%; margin-bottom:10px" >
				<input type="button" value="Get Result" onClick="getReport();" class="btn btn-primary">
				</div>
				</div>

			</fieldset>
			<hr>
			
				<h2>Report Card</h2>
				
				<table class="table" border="1" style="width: 30%; margin-top:20px;">
					<tr><td>Name</td><td><input  type="text" id="txtStudentName" readonly></td></tr>
					<!-- <tr><td>Class</td><td><input  type="text" id="txtStudentClass" readonly></td></tr> -->
					<tr><td>Total Marks</td><td><input name = "TotalMarks" type="text" id="txtTotalMarks" readonly></td></tr>
					<tr><td>Fuzzy Result</td><td><input name = "Fuzzy" type="text" id="txtAvgMarks" readonly></td></tr>
					<tr><td>Grade</td><td><input name = "Grade" type="text" id="txtGrade" readonly></td></tr>
					<tr><td>Remarks</td><td><input name = "Remark" type="text" id="txtResult" readonly></td></tr>
					<tr><td>CGPA</td><td><input name = "CGPA" type="text" id="txtCGPA" readonly></td></tr>
				</table>
				<br>

				<div style="margin-left: 10%;">
				<a href="dashboard.html">
					<button type="button" class="btn btn-primary">Back </button>
				</a>
			
				<button type="submit" name = "submit" class="btn btn-success">Save </button>
				
			
				<!-- <?php 
				 	if($fire) {
				?>
				<div class="alert">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
 						 This is an alert box.
				</div>
				<?php } ?>			 -->
				</div>
		</form>
		</div>
	</body>
</html>
