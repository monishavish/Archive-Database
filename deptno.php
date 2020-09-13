<!DOCTYPE html>
<html>
<head>
	<title>Department id's</title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
	<style>
	body{
		background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
	}
	.divi{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%, -50%);
        width:350px;
        height:50%;
        background-image:#000;
        box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); 
        text-align:center;
        font-family: 'Poiret One', cursive;
        font-weight:bolder;
	}
	h2{
		font-family: 'Poiret One', cursive;
	}
</style>
</head>
<body>
	<h2>Know your department ID's</h2>
	<br><br>
<div class="divi">
	<br><br>
<?php 
            		require_once('db_connection.php');
            		$conn=OpenCon();

            		$sql1= "SELECT dept_name,dept_id FROM department";
            		$result= mysqli_query($conn,$sql1);
            		while($row = mysqli_fetch_assoc($result)){

            			echo "<br>";
            			foreach($row as $key){
            				echo  "<b> " .$key. "</b><br><br>";
            			}
            			echo "<hr>";
            		}
?>
</div>
</body>
</html>