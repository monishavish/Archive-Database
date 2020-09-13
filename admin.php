<?php
	$EMAIL=$_POST['EMAIL'];
	$PASSWORD=$_POST['PASSWORD'];
	session_start();
	include_once("db_connection.php");
    $conn=OpenCon();

	$_SESSION['EMAIL']=$_POST['EMAIL'];
	$query="SELECT * FROM login WHERE EMAIL= '$EMAIL' AND PASSWORD= '$PASSWORD'";
	$result = mysqli_query($conn,$query);
    
	$row = mysqli_fetch_array($result);

	if($row['email'] == $EMAIL  && $row['password'] == $PASSWORD && isset($_SESSION['EMAIL']))
	{
		header('location:http://localhost/project/admin modify.php');
	}
	else
	{
		echo "email/password incorrect";
	}
?>