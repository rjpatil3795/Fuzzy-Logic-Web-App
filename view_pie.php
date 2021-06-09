<?php require 'piesemselect.php';?>
<!DOCTYPE html>
<html lang="en">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<?php
    $getDepartment = $_SESSION['DepartmentPie'];
    $getSemester = $_SESSION['SemesterPie'];
    
    if ($getDepartment == 'Computer' && $getSemester =='Sem 1')
    {
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
        );
        ?>
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem2"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem3"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem4"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem5"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem6"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem7"
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
        <?php

    }

    if ($getDepartment == 'Computer' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `compsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `compsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `compsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `compsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Comp Sem8"
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
        <?php

    }

    //Entc Department

    if ($getDepartment == 'ENTC' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem1"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem2"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem3"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem4"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem5"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem6"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem7"
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
        <?php

    }

    if ($getDepartment == 'ENTC' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `entcsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `entcsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `entcsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `entcsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "ENTC Sem8"
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
        <?php

    }
    //IT Department

    if ($getDepartment == 'IT' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem1"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem2"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem3"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem4"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem5"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem6"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem7"
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
        <?php

    }

    if ($getDepartment == 'IT' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `itsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `itsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `itsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `itsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "IT Sem8"
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
        <?php

    }
    //Electronics Department
    if ($getDepartment == 'Electronics' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem1"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Elec Sem2"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem3"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem4"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem5"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem6"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem7"
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
        <?php

    }

    if ($getDepartment == 'Electronics' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `elecsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `elecsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `elecsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `elecsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Electronics Sem8"
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
        <?php

    }

    //Mechanical Department
    if ($getDepartment == 'Mechanical' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem1"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem2"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem3"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem4"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem5"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem6"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem7"
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
        <?php

    }

    if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `mechsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `mechsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `mechsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `mechsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Mechanical Sem8"
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
        <?php

    }

    //Chemical Department

    if ($getDepartment == 'Chemical' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem1"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem2"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem3"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem4"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem5"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem6"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chemical Sem7"
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
        <?php

    }

    if ($getDepartment == 'Chemical' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `chemsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `chemsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `chemsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `chemsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Chem Sem8"
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
        <?php

    }

    //Civil Department

    if ($getDepartment == 'Civil' && $getSemester =='Sem 1')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem1` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem1` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem1` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem1` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem1"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 2')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem2` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem2` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem2` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem2` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem2"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 3')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem3` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem3` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem3` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem3` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem3"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 4')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem4` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem4` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem4` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem4` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem4"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 5')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem5` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem5` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem5` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem5` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem5"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 6')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem6` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem6` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem6` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem6` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem6"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 7')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem7` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem7` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem7` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem7` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem7"
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
        <?php

    }

    if ($getDepartment == 'Civil' && $getSemester == 'Sem 8')
    {
        $student40=0;
        $student50=0;
        $student60=0;
        $student70=0;
        $query70 = "SELECT * FROM `civilsem8` WHERE CGPA >= 7";
        $result70 = mysqli_query($con,$query70) or die();
        $student70 = mysqli_num_rows($result70);

        $query60 = "SELECT * FROM `civilsem8` WHERE CGPA >= 6 AND CGPA < 7";
        $result60 = mysqli_query($con,$query60) or die();
        $student60 = mysqli_num_rows($result60);

        $query50 = "SELECT * FROM `civilsem8` WHERE CGPA >= 5 AND CGPA < 6";
        $result50 = mysqli_query($con,$query50) or die();
        $student50 = mysqli_num_rows($result50);

        $query40 = "SELECT * FROM `civilsem8` WHERE CGPA >= 4 AND CGPA < 5";
        $result40 = mysqli_query($con,$query40) or die();
        $student40 = mysqli_num_rows($result40);

        $dataPoints = array( 
        	array("label"=>"CGPA 7+", "y"=>$student70),
	        array("label"=>"CGPA 6+", "y"=>$student60),
	        array("label"=>"CGPA 5+", "y"=>$student50),
	        array("label"=>"CGPA 4+", "y"=>$student40)
        );
        ?>
            <script>
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
	            animationEnabled: true,
	            title: {
    		        text: "Students Analysis"
	            },
	            subtitles: [{
		        text: "Civil Sem8"
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
        <?php

    }
?>
</html>
