<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT_ACADEMICS</title>
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
	margin: 40% 72% 60% 28%;
}
.input4{
	position: absolute;
	margin: 40% 60% 60% 40%;
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
	<form action="insert_academics.php" method="post">
		<div class="head1">
			<p>ENTER THE DETAILS TO BE INSERTED FOR ACADEMIC POSITIONS</p>
		</div>
		<div class="inputs1">
				<p>Enter name of top 10 student name</p>
					<input type="text" name="top10name" placeholder="Enter Name" required>
				<p>Enter the Marks obtained</p>
					<input type="text" name="marks" placeholder="Enter the marks" required>
				<p>Enter the department id</p>
					<input type="number" name="dept_id" placeholder="Enter the department id" required>
				<p>Enter the position secured</p>
					<input type="text" name="position" placeholder="Enter the position" required>
				<p>Enter the student id</p>
					<input type="text" name="stu_id" placeholder="Enter the id" required>
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