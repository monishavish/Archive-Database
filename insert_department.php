<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<style>
	body,html{
	background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
}
.head1 {
	font-size: 25px;
	color: blue;
	position: absolute;
    top: 2em;
    right:50%;
    font-family: sans-serif;
}	

.inputs1{
	position: absolute;
	margin: 5% 98% 85% 02%;
	font-family: sans-serif;
}

.inputs2{
	position: absolute;
	margin: 15% 50% 85% 50%;
}
.input3{
	position: absolute;
	margin: 28% 50% 40% 28%;
}
.input4{
	position: absolute;
	margin: 28% 60% 60% 40%;
}
input[type=text]{
	font-size: 20px;
	padding: 10px 20px;
	margin: 4px 0;
	border: 1px solid #000;
	border-radius: 4px;
	box-sizing: border-box;
}
input[type=number]{
	font-size: 20px;
	padding: 10px 20px;
	margin: 4px 0;
	border: 1px solid #000;
	border-radius: 4px;
	box-sizing: border-box;
}
input[type=submit]{
	font-size: 20px;
	color: white;
	background-color: rgba(50,60,255,0.8);
	padding: 10px 15px;
	margin: 4px 0;
	border: 1px solid #000;
	border-radius: 4px;
	box-sizing: border-box;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: red;
}

input[type=reset]{
	font-size: 20px;
	color: white;
	background-color: rgba(50,60,255,0.8);
	padding: 10px 15px;
	margin: 4px 0;
	border: 1px solid #000;
	border-radius: 4px;
	box-sizing: border-box;
	cursor: pointer;
}

input[type=reset]:hover {
	background-color: red;
}
h2{
	font-family: sans-serif;
}
</style>
</head>
<body>
	<div class="text1">
			<h2>ACHARYA ACHIEVEMENT ARCHIEVE</h2>
	</div>
	<!--THIS IS FOR INSERTING THE TEAM DETAILS-->	
	<form action="insert_adddept.php" method="post">
		<div class="head1">
			<p>ENTER THE DETAILS TO BE INSERTED FOR DEPARTMENT</p>
		</div>
		<div class="inputs1">
				<p>Enter Name </p>
					<input type="text" name="DNAME" placeholder="ENTER DEPARTMENT NAME" required>
				<p>Enter DEPARTMENT ID</p>
					<input type="number" name="DEPT_ID" placeholder="ENTER DEPARTMENT ID" required>
				<p>Enter FORUM NAME</p>
					<input type="text" name="FORUM_NAME" placeholder="ENTER FORUM NAME" required>
			</div>
			
			<div class="input3">
				<input type="submit" name="submit" value="Submit">
			</div>
			<div class="input4">
				<input type="reset" name="reset" value="Clear">
			</div>
		</div>


	</form>

</body>
</html>