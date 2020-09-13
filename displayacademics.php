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

$result = mysqli_query($conn, "SELECT * FROM academics ORDER BY dept_id "); 
?>

<html>
<head>
	

</head>

<body>
<a href="insert_addacademics.php">Add New Details</a><br/><br/>
	<table width='50%'height='15%' border='0'>

	<tr bgcolor='yellow'>
                
		<td>Department ID</td>
        <td>Top student</td>
		<td>Marks</td>
		<td>Position</td>
		<td>USN</td>
	</tr>

	<?php 
	 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			echo "<td>".$res['dept_id']."</td>";
            echo "<td>".$res['top10name']."</td>";
			echo "<td bgcolor=''>".$res['marks']."</td>";
			echo "<td>".$res['position']."</td>";
			echo "<td>".$res['stu_id']."</td>";
			echo "<td bgcolor='green'><a href=\"edit_academics.php?ID=$res[stu_id]\"><font color='white'>Edit</a>";
			echo"<td bgcolor='red'> <a href=\"delete_academics.php?ID=$res[stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td></tr>";        
	}
	?>
	<a href="admin modify.php">Back to admin home!!</a>
</body>
</html>
