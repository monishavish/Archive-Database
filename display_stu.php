<?php

//including the database connection file
		$host="localhost";
		$dbUsername="root";
		$dbpassword="";
		$dbname="project";
/// Create a connection
		$conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);
/// for error accurs in connection
		
		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}

$result = mysqli_query($conn, "SELECT * FROM stu_achieve ORDER BY dept_id "); 
?>

<html>
<head>	
	<title>insert student Details</title>
	

</head>

<body>
<a href="insert_addstudent.php">Add New Details</a><br/><br/>
	<table width='50%'height='15%' border='0'>

	<tr bgcolor='yellow'>
                
		<td>NAME</td>
        <td>ID</td>
		<td>DEPARTMENT ID</td>
		<td>ACHIEVEMENT</td>
		
	</tr>

	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			echo "<td>".$res['stu_name']."</td>";
            echo "<td>".$res['stu_id']."</td>";
			echo "<td bgcolor=''>".$res['dept_id']."</td>";
			echo "<td>".$res['achievement']."</td>";
			
			echo "<td bgcolor='green'><a href=\"edit_stu.php?ID=$res[stu_id]\"><font color='white'>Edit</a>";
			echo"<td bgcolor='red'> <a href=\"delete_stu.php?ID=$res[stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td></tr>";        
	}
	?>
	<a href="admin modify.php">Back to admin home!!</a>
</body>
</html>
