<!DOCTYPE html>
<html>
<head>
	<title>Register faculty.</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet"> 
	<style>
	body,html{
		background-image:url("http://localhost/project/22.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		height:47em;
		width:96em;
	}
	input[type="text"]
		{
  			background: transparent;
  			border: none;
  			border-bottom: 1px solid #000000;
  			-webkit-box-shadow: none;
  			box-shadow: none;
  			border-radius: 0;
  			width:30em;
		}
		input[type="email"]
		{
  			background: transparent;
  			border: none;
  			border-bottom: 1px solid #000000;
  			-webkit-box-shadow: none;
  			box-shadow: none;
  			border-radius: 0;
  			width:30em;
		}
		input[type="password"]
		{
  			background: transparent;
  			border: none;
  			border-bottom: 1px solid #000000;
  			-webkit-box-shadow: none;
  			box-shadow: none;
  			border-radius: 0;
  			width:30em;
		}
		input[type="submit"]{
  			background:transparent; 
  			border: none;
  			color: white;
  			padding: 10px 30px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 20px;
  			font-family: 'Dancing Script', cursive;
  			width:30em;
		}
        button{
  			background:transparent; 
  			border: none;
  			color: white;
  			padding: 10px 30px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 20px;
  			font-family: 'Dancing Script', cursive;
		}
		h2{
			text-align:center;
			color:white;
			font-family: 'Dancing Script', cursive;
		}
		.container{
			text-align:center;
			position:absolute;
			left:35%;
			width:50em;
		}
		.container .row{
			text-align:center;
			position:absolute;
			left:-10%;
		}
		a{
			text-align: center;
			position:absolute;
			left:8%;
		}
		.line{
			position: absolute;
			left:-10%;
		}
		.ssubmit{
			position: absolute;
			left:-10%;
		}
		a{
			position: absolute;
			left:18%;
		}
		.idd{
			position:absolute;
			left:0;
			
		}
		.buttonn{
			font-family:sans-serif;
			font-size:10px;
		}
		
	</style>
</head>
<body>

	<b><br><h2>Register-Faculty.</h2></b><br>
	<hr style="height:1px;border:none;color:#333;background-color:#333;" width="60%">
	<form method="post" action="register-fac1.php">
		<div class="container">
			<input type="text" class="form-control" name="FNAME" placeholder="Enter name" size="40"/><br>
			<input type="text" class="form-control" name="FID" placeholder="Enter id" size="40"/><br>
			<input type="email" class="form-control" name="EMAIL" placeholder="Enter E-mail" size="40"/><br>
			<input type="text" class="form-control" name="DEPT_ID" placeholder="Enter department id" size="40"/><br>
			<a class="idd" href="deptno.php"><button type="button" class="buttonn">( Know Your Department ID. )</button></a>
			<br><br>
			<input type="text" class="form-control" name="PHONE_NO" placeholder="Enter contact" size="40"/><br>
			<input type="password" class="form-control" name="PASSWORD" placeholder="Enter password" size="40"/>
            <hr class="line" style="height:1px;border:none;color:#333;background-color:#333;" width="80%"><br><br>
            <input type="submit" class="ssubmit" name="submit" value="Register"><br><br><br><br>
            <a  href="index.php"><button type="button"><b>Back to Home</b></button></a>
        </div>
    </form>
</body>
</html>