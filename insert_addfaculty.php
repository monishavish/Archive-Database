<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT_FACULTY</title>
<style>
body,html{
	background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 );
}
.head1 {
	font-size: 25px;
	color: blue;
	position: absolute;
    top: 3em;
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
	<h2>Acharya acievement archive</h2>
	<!--THIS IS FOR INSERTING THE TEAM DETAILS-->	
	<form action="insert_addfac.php" method="post">
		<div class="head1">
			ENTER THE DETAILS TO BE INSERTED FOR FACULTY ACHIEVEMENTS
		</div>
		<div class="inputs1">
				<p>Enter name</p>
					<input type="text" name="fac_name" placeholder="Enter Name" required>
				<p>Enter Faculty ID</p>
					<input type="text" name="fac_id" placeholder="Enter the ID" required>
				<p>Enter the department id</p>
					<input type="number" name="dept_id" placeholder="Department ID" required>
				<p>Enter the achievement</p>
					<input type="text" name="achievement" placeholder="Achievement" required>
				<p>Enter recognitions</p>
					<input type="text" name="recognition" placeholder="Recognitions" required>
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