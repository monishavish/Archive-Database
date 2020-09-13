<?php 
	$stu_name=$_POST['stu_name'];
	$stu_id=$_POST['stu_id'];
	$dept_id=$_POST['dept_id'];
	$achievement=$_POST['achievement'];
		if(empty($stu_id) || empty($stu_name) || empty($dept_id) || empty($achievement))
	{
		echo "all field are Required";
		die();
	}
	include_once("db_connection.php");
    $conn=OpenCon();
			$SELECT= "SELECT stu_id FROM stu_achieve WHERE stu_id=? limit 1";
			 $sql = "INSERT INTO `stu_achieve` (`stu_name`, `dept_id`, `achievement`, `stu_id`) VALUES (?,?,?,?)";
			 $INSERT="INSERT INTO `badges` (`dept_id`) VALUES (?)";
///// prepare statements 
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("i",$stu_id);
			$stmt->execute();
			$stmt->bind_result($stu_id);
		
				$stmt->close();
				$stmt=$conn->prepare($sql);
				$stmt->bind_param("siss",$stu_name,$dept_id,$achievement,$stu_id);
				$stmt->execute();
				$stmt1=$conn->prepare($INSERT);
				$stmt1->bind_param("i",$dept_id);
				$stmt1->execute();
				echo "New Record inserted successfully";
				echo "<br/><a href='display_stu.php'>View Result</a>";
			$stmt->close();
			$conn->close();

 ?>