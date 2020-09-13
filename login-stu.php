<!DOCTYPE HTML>
<html>
<head>
	<title>LOGIN FORM</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Styleproject.css">
</head>
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h2>LOGIN HERE</h2>
		<form action="login1.php" method="post">
			<label>EMAIL</label><br>
			<input type="email" name="EMAIL" placeholder="Enter your email" required><br><br>
			<label>PASSWORD</label><br>
			<input type="password" name="PASSWORD" placeholder="Enter your password" required><br><br>
			<input type="submit" name="" value="LOGIN"><br><br><br>
			<a href="register_stu.php">Don't have an account?? click here!!</a><br>
			<a href="index.php">Back to Home</a>
		</form>
	</div>
</body>
</html>

