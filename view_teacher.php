
<?php require 'department_to_view.php'; ?>
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
<?php
	//session_start();
	// $getDepartment = $_POST['getDepartment'];
	// $getSemester = $_POST['getSemester'];
	$getDepartment = $_SESSION['Department'];
	$getSemester = $_SESSION['Semester'];
	if ($getDepartment == 'Computer' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `compsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Computer' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `compsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Computer' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `compsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Computer' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `compsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Computer' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `compsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Computer' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `compsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Computer' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `compsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Computer' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `compsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	// entc department

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `entcsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `entcsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `entcsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `entcsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `entcsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `entcsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `entcsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'ENTC' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `entcsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	// IT department
	if ($getDepartment == 'IT' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `itsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'IT' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `itsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'IT' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `itsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'IT' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `itsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'IT' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `itsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'IT' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `itsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'IT' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `itsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'IT' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `itsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	//Electronics

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `elecsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `elecsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `elecsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `elecsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `elecsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `elecsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `elecsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Electronics' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `elecsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	//Mech Department

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `mechsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `mechsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `mechsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `mechsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `mechsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `mechsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `mechsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Mechanical' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `mechsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	//Chem Department

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `chemsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `chemsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `chemsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `chemsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `chemsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `chemsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `chemsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Chemical' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `chemsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	//Civil Department

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 1')
	{
			
		$query = " SELECT * from `civilsem1`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Civil' && $getSemester == 'Sem 2')
	{
			
		$query = " SELECT * from `civilsem2`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}
	if ($getDepartment == 'Civil' && $getSemester == 'Sem 3')
	{
			
		$query = " SELECT * from `civilsem3`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 4')
	{
			
		$query = " SELECT * from `civilsem4`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 5')
	{
			
		$query = " SELECT * from `civilsem5`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 6')
	{
			
		$query = " SELECT * from `civilsem6`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 7')
	{
			
		$query = " SELECT * from `civilsem7`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}

	if ($getDepartment == 'Civil' && $getSemester == 'Sem 8')
	{
			
		$query = " SELECT * from `civilsem8`";
        $result = mysqli_query($con,$query);

		if (!$result) 
		{
			$message = 'ERROR:';
			return $message;
		}
		else
		{
			$i = 0;
			echo '<html><body><div class="container"><h1 class="text-center">Student Details</h1><table class="table"><thead class="thead-dark"><tr>';
			while ($i < mysqli_num_fields($result))
			{
				$meta = mysqli_fetch_field($result);
				echo '<th>' . $meta->name . '</th>';
				$i = $i + 1;
			}
			echo '</tr></thread>';
	
			$i = 0;
			while ($row = mysqli_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			echo '</table></body></html>';
		}
	}


?>