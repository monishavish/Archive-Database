<?php
	$EMAIL=$_POST['EMAIL'];
	$PASSWORD=$_POST['PASSWORD'];
	session_start();
	include_once("db_connection.php");
    $conn=OpenCon();
    
	$EMAIL = mysqli_real_escape_string($conn,$_POST['EMAIL']);
	$PASSWORD = mysqli_real_escape_string($conn,$_POST['PASSWORD']);
	$_SESSION['email']=$_POST['EMAIL'];
	$result = mysqli_query($conn,"SELECT * FROM fac_register WHERE email= '$EMAIL' AND password= '$PASSWORD'");

	$row = mysqli_fetch_array($result);

	if($row['email'] == $EMAIL  && $row['password'] == $PASSWORD&&isset($_SESSION['email']))
	{
		header('location:http://localhost/project/mainpagefac.php');
	}
	else
	{
		echo "email/password incorrect";
	}

?>