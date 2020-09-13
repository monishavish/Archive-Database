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

$result = mysqli_query($conn, "SELECT * FROM department ORDER BY dept_id "); 
?>

<html>
<head>	
	<title>insert  Details</title>
	

</head>

<body>
<a href="insert_department.php">Add New Department Details</a><br/><br/>
	<table width='50%'height='15%' border='0'>

	<tr bgcolor='yellow'>
                
		<td>DNAME</td>
        <td>DEPT_ID</td>
		<td>FORUM_NAME</td>
	</tr>

	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			echo "<td>".$res['dept_name']."</td>";
            echo "<td>".$res['dept_id']."</td>";
			echo "<td bgcolor=''>".$res['forum_name']."</td>";
			echo "<td bgcolor='green'><a href=\"edit_dept.php?ID=$res[dept_id]\"><font color='white'>Edit</a>";
			echo"<td bgcolor='red'> <a href=\"delete_dept.php?ID=$res[dept_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td></tr>";        
	}
	?>
	<a href="admin modify.php">Back to admin home!!</a>
</body>
</html>
