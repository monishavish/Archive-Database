<?php 
	$fac_name=$_POST['fac_name'];
	$fac_id=$_POST['fac_id'];
	$dept_id=$_POST['dept_id'];
	$achievement=$_POST['achievement'];
	$recognition=$_POST['recognition'];
	if(empty($fac_id) || empty($fac_name) || empty($dept_id) || empty($achievement))
	{
		echo "all field are Required";
		die();
	}
	else{
	include_once("db_connection.php");
    $conn=OpenCon();
				$SELECT= "SELECT fac_id FROM fac_achieve WHERE fac_id=?  ";
			 	$sql = "INSERT INTO `fac_achieve` (`fac_name`, `dept_id`, `achievement`, `recognition`, `fac_id`) VALUES (?,?,?,?,?)";
			 	$INSERT="INSERT INTO `badges_fac` (`dept_id`) VALUES (?)";

			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("i",$fac_id);
			$stmt->execute();
			$stmt->bind_result($fac_id);
				$stmt->close();
				$stmt=$conn->prepare($sql);
				$stmt->bind_param("sissi",$fac_name,$dept_id,$achievement,$recognition,$fac_id);
				$stmt->execute();
				$stmt1=$conn->prepare($INSERT);
				$stmt1->bind_param("i",$dept_id);
				$stmt1->execute();
				echo "New Record inserted successfully";
				echo "<br/><a href='displayfac.php'>View Result</a>";
			
			$stmt->close();
			$conn->close();
	}
 ?>