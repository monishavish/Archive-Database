
<?php 
	$DEPT_ID=$_POST['dept_id'];
	$TOP_STUD=$_POST['top10name'];
	$MARKS=$_POST['marks'];
	$POSITION=$_POST['position'];
	$STU_ID=$_POST['stu_id'];
	if(empty($DEPT_ID) || empty($TOP_STUD) || empty($MARKS) || empty($POSITION) || empty($STU_ID))
	{
		echo "all field are Required";
		die();
	}
	else{
	include_once("db_connection.php");
    $conn=OpenCon();
			$SELECT= "SELECT dept_id FROM academics WHERE dept_id=?";
			$INSERT=" INSERT INTO `academics`(`dept_id`, `top10name`, `marks`, `position`,`stu_id`) VALUES (?,?,?,?,?)";
///// prepare statements 
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("i",$DEPT_ID);
			$stmt->execute();
			$stmt->bind_result($DEPT_ID);
				$stmt->close();
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("isiis",$DEPT_ID,$TOP_STUD,$MARKS,$POSITION,$STU_ID);
				$stmt->execute();
				echo "New Record inserted successfully";
				echo "<br/><a href='displayacademics.php'>View Result</a>";
			
			$stmt->close();
			$conn->close();
	}
 ?>