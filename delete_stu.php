<?php
include_once("db_connection.php");
$conn=OpenCon();
			//getting id of the data from url
				$ID = $_GET['ID'];

				//deleting the row from table
				$result = mysqli_query($conn,"DELETE FROM `stu_achieve` WHERE `stu_id`='$ID'");
				//redirecting to the display page (displaypl.php in our case)
				header("Location:display_stu.php");
?>

