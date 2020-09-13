<?php
//variables for the database connection 
		$host="localhost";
		$dbUsername="root";
		$dbpassword="";
		$dbname="project";
/// Create a connection
		$conn= mysqli_connect($host,$dbUsername,$dbpassword,$dbname);
/// for error accurs in connection
		
		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else{
			//getting id of the data from url
				$DEPT_ID = $_GET['ID'];

				//deleting the row from table
				$result = mysqli_query($conn, "DELETE FROM department WHERE dept_id=$DEPT_ID");

				//redirecting to the display page (displaypl.php in our case)
				header("Location:display_dept.php");
		}
?>

