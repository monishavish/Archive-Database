<?php
	$NAME=$_POST['NAME'];
	$USN=$_POST['USN'];
	$DEPT_ID=$_POST['DEPT_ID'];
	$PHONE_NO=$_POST['PHONE_NO'];
	$EMAIL=$_POST['EMAIL'];
	$PASSWORD=$_POST['PASSWORD'];
//CHECK WHETHER INPUT IS EMPTY OR NOT
	if(!empty($NAME) || !empty($USN) || !empty($DEPT_ID) || !empty($PHONE_NO) || !empty($EMAIL) || !empty($PASSWORD))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="project";

		$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

		if(mysqli_connect_error()){
			die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else{
			$SELECT="SELECT usn FROM stu_register WHERE usn=? limit 1";
			$INSERT="INSERT INTO stu_register(name,usn,dept_id,contact,password,email) VALUES(?,?,?,?,?,?)";

			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("s",$USN);
			$stmt->execute();
			$stmt->bind_result($USN);
			$stmt->store_result();
			$rnum=$stmt->num_row;

			if($rnum==0){
				$stmt->close();
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssiiss",$NAME,$USN,$DEPT_ID,$PHONE_NO,$PASSWORD,$EMAIL);
				$stmt->execute();
				header('location: http://localhost/project/main-pagestu.php');
			}
			else{
				echo "already registered";
			}
			$stmt->close();
			$conn->close();
		}
	}
	else{
		echo "all fields are required";
		die();
	}
?>