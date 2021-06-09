<?php require 'config/config.php'; ?>
<?php
$student40=0;
$student50=0;
$student60=0;
$student70=0;
$query70 = "SELECT * FROM `compsem1` WHERE CGPA >= 7";
$result70 = mysqli_query($con,$query70) or die();
$student70 = mysqli_num_rows($result70);

$query60 = "SELECT * FROM `compsem1` WHERE CGPA >= 6 AND CGPA < 7";
$result60 = mysqli_query($con,$query60) or die();
$student60 = mysqli_num_rows($result60);

$query50 = "SELECT * FROM `compsem1` WHERE CGPA >= 5 AND CGPA < 6";
$result50 = mysqli_query($con,$query50) or die();
$student50 = mysqli_num_rows($result50);

$query40 = "SELECT * FROM `compsem1` WHERE CGPA >= 4 AND CGPA < 5";
$result40 = mysqli_query($con,$query40) or die();
$student40 = mysqli_num_rows($result40);




$dataPoints = array( 
	array("label"=>"CGPA 7+", "y"=>$student70),
	array("label"=>"CGPA 6+", "y"=>$student60),
	array("label"=>"CGPA 5+", "y"=>$student50),
	array("label"=>"CGPA 4+", "y"=>$student40)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Students Analysis"
	},
	subtitles: [{
		text: "Comp Sem1"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>