<?php
include_once("db_connection.php");
$conn=OpenCon();
			//getting id of the data from url
				$ID = $_GET['ID'];

				//deleting the row from table
				$result1=mysqli_query($conn,"DELETE FROM `badges` where `dept_id`='$ID' ");
				$result2=mysqli_query($conn,"DELETE FROM `badges` where `dept_id`='$ID' ");

?>

