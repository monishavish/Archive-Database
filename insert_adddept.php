<?php 
	$DNAME=$_POST['DNAME'];
	$DEPT_ID=$_POST['DEPT_ID'];
	$FORUM_NAME=$_POST['FORUM_NAME'];
	include_once("db_connection.php");
    $conn=OpenCon();
			$SELECT= "SELECT dept_id FROM department WHERE dept_id=?";
			$INSERT= "INSERT INTO `department` (`dept_name`, `dept_id`, `forum_name`) VALUES (?,?,?)";
///// prepare statements 
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("i",$DEPT_ID);
			$stmt->execute();
			$stmt->bind_result($DEPT_ID);
			$stmt->store_result();
			$rnum=$stmt->num_rows;

///// insert record with no duplication
			if ($rnum==0) {
				$stmt->close();
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("sis",$DNAME,$DEPT_ID,$FORUM_NAME);
				$stmt->execute();
				echo "New Record inserted successfully";
				echo "<br/><a href='display_dept.php'>View Result</a>";
			$stmt->close();
			$conn->close();
	}
	else{
		echo "all field are Required";
		die();
	}
 ?>