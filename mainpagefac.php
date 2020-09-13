	<!DOCTYPE html>
	<?php
	session_start();
	?>
	<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
		<title>Main page.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		html{
			background-image: linear-gradient(to top, #fddb92 0%, #d1fdff 100%); 
			background-size:cover; 
			background-repeat:no-repeat;
			
		}
		h1{
				font-family: 'Montserrat', sans-serif;
				color:#737CA1;
				position:absolute;
				left:2%;
				font-size: 40px;
		}
		.myBtn{
				position:absolute;
	        	top:50%;
	        	left:8%;
	        	transform:translate(-50%, -50%);
	        	padding: 12px 28px;
	        	background-color: inherit;
	  			color: black;
		}
		.modal {
			  	display: none; 
	 			position: absolute; 
	  			z-index: 1; 
	  			padding-top: 100px; 
	  			left: 0;
	  			top: 10%;
	  			width: 100%;
	  			height: 100%; 
	  			overflow: auto; 
	  			background-color: rgb(0,0,0); 
		  		background-color: rgba(0,0,0,0.4); 
	  			font-family: 'Muli', sans-serif;
	}
	/* Modal Content */
	.modal-content {
	  background-color: #fefefe;
	  margin: auto;
	  padding: 20px;
	  border: 1px solid #888;
	  width: 80%;
	  text-align:center;
	}

	/* The Close Button */
	.close {
	  color: #aaaaaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

	.close:hover,
	.close:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}
	.close1 {
	  color: #aaaaaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

	.close1:hover,
	.close1:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}
	.close2 {
	  color: #aaaaaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

	.close2:hover,
	.close2:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}

	.image{
		width:100%;
		height:20em;
		position:absolute;
		top:0;
		left:0;
	}
	.myBtn1{
			position:absolute;
	        top:60%;
	        left:8%;
	        transform:translate(-50%, -50%);
	        padding: 12px 28px;
	        background-color: inherit;
	  		color: black;

	}
	.myBtn2{
			position:absolute;
	        top:70%;
	        left:8%;
	        transform:translate(-50%, -50%);
	        padding: 12px 28px;
	        background-color: inherit;
	  		color: black;

	}
	.copy{
			position:absolute;
			top:195%;
			font-family: 'Muli', sans-serif;
			left:50%;

		}
	  a{
	    position:absolute;
	    top:45%;
	    left:90%;
	  }
	  .btn{
	    	padding: 12px 28px;
	        background-color: inherit;
	      	color: black;
	  }
	</style>
</head>
<body>
		<img src="http://localhost/project-DBMS/banner.jpg" class="image">
		<h1>Welcome Professor.</h1>
		<a href="logout.php"><button class="btn">Logout</button></a>
		<h2 style="position:absolute;top:47%;left:25%;font-family: 'Muli', sans-serif;"><b>Achivements.</b></h2>

		<div style="overflow:auto;width:55%;height:20em;background:#eee;float:left;position:absolute;left:25%;top:60%;padding:3px;text-align: center;">
			<?php 
	            require_once('db_connection.php');
	            $conn=OpenCon();

	            $sql1= "SELECT fac_name,achievement,dept_name from fac_achieve f ,department d where f.dept_id=d.dept_id";
	            $result= mysqli_query($conn,$sql1);
	            while($row = mysqli_fetch_assoc($result)){

	            	foreach($row as $field => $value){
	            		echo "<br>";
	            		echo " " .$value. " ";
	            		echo "<br>";
	            	}
	            	echo "<br><br>";
	            	echo "<hr>";
	            	
	            }
			?>
		</div>
	<h2 style="position:absolute;top:135%;left:25%;font-family: 'Muli', sans-serif;"><b>Recognitions.</b></h2>

	<div style="overflow:auto;width:55%;height:20em;background:#eee;float:left;position:absolute;left:25%;top:145%;padding:3px;text-align: center;">
			<?php 
	            require_once('db_connection.php');
	            $conn=OpenCon();

	            $sql1= "SELECT fac_name,dept_name,recognition from fac_achieve f ,department d where f.dept_id=d.dept_id";
	            $result= mysqli_query($conn,$sql1);
	            while($row = mysqli_fetch_assoc($result)){

	            	foreach($row as $field => $value){
	            		echo "<br>";
	            		echo " " .$value. " ";
	            		echo "<br>";
	            	}
	            	echo "<br><br>";
	            	echo "<hr>";
	            	
	            }
	        ?>
	</div>
		<div class="copy">
			COPYRIGHT &copy;
		</div>	
	<button id="myBtn" class="myBtn">Department info</button>
	<div id="myModal" class="modal">
	   <div class="modal-content">
	    <span class="close">&times;</span>
	   <?php
				require_once('db_connection.php');
	            $conn=OpenCon();
	            $sql="SELECT * from department";
	            $result1= mysqli_query($conn,$sql);
	            while($row1 = mysqli_fetch_assoc($result1)){

	            	foreach($row1 as $field1 => $value1){
	            		echo " " .$value1. " ";
	            		echo "<br>";
	            	}
	                  echo"<hr>";
	                  echo"<br>";
	            }
		?>
	  </div>
	</div>
	</div>
	<button id="myBtn1" class="myBtn1">General Info.</button>

	<!-- The Modal -->
	<div id="myModal1" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
	    <span class="close1">&times;</span>
	    <b>General Info.</b><br>
			CSE industrial vist to <b>ICTS</b><br>
			
			<b>Upcoming :</b><br>
			Kannada rajyotsava on November 1.<br>
			
	  </div>

	</div>
		<button id="myBtn2" class="myBtn2">Badges.</button>

		<!-- The Modal -->
		<div id="myModal2" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close2">&times;</span>
		    <p>Badges</p>
				    <?php
		require_once('db_connection.php');
		$conn=OpenCon();
		$value="CALL `badgesfac`()";
		$num=mysqli_query($conn,$value)or die('error getting data');
		echo"<table border=1 align=center>";
		echo"<th>Department ID</th>";
		echo"<th>Count of achievements</th>";
		echo"<th>Badge awarded</th>";
		while($row=mysqli_fetch_array($num,MYSQLI_ASSOC)){
		  echo"<tr>";
		  echo"<td>";
		  echo $row['dept_id'];
		  echo"</td>";
		  echo"<td>";
		  echo $row['count(*)'];
		  echo"</td>";
		  echo"<td>";
		  if($row['count(*)']>2){
		        echo"<b><i><p style=color:gold;>Badge GOLD</i> &#127775</p></b> ";
		  }
		  elseif($row['count(*)']<3){
		        echo"<i><b><p style=color:silver;>Badge SILVER</i>&#11088</p></b> ";
		  }
		  echo"</td>";
		  echo"</tr>";
		}
		echo "</table>";
		echo "<br><br>"
		?>
		<?php
			echo "Know the department name's for which the badges are awarded";
			echo "<br><br>";
			require_once('db_connection.php');
			$conn=OpenCon();
			$sql="SELECT dept_name,dept_id from department";
			$result1= mysqli_query($conn,$sql);
			echo"<table border=1 align=center>";
			echo"<th>Department ID</th>";
			echo"<th>Department name</th>";
			while($row1 = mysqli_fetch_assoc($result1)){
				  echo"<tr>";
				  echo"<td>";
				  echo $row1['dept_id'];
				  echo"</td>";
				  echo"<td>";
				  echo $row1['dept_name'];
				  echo"</td>";
				  echo"</tr>";
			 }
			echo "</table>";
		?>
		  </div>
		</div>
	<script>

	var modal1 = document.getElementById("myModal1");
	var btn = document.getElementById("myBtn1");
	var span = document.getElementsByClassName("close1")[0];
	btn.onclick = function() {
	  modal1.style.display = "block";
	}

	span.onclick = function() {
	  modal1.style.display = "none";
	}

	window.onclick = function(event) {
	  if (event.target == modal1) {
	    modal1.style.display = "none";
	  }
	}
	</script>

	<script>

	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
	  modal.style.display = "block";
	}

	span.onclick = function() {
	  modal.style.display = "none";
	}

	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	</script>
	<script>

	var modal2 = document.getElementById("myModal2");
	var btn = document.getElementById("myBtn2");
	var span = document.getElementsByClassName("close2")[0];
	
	btn.onclick = function() {
	  modal2.style.display = "block";
	}

	span.onclick = function() {
	  modal2.style.display = "none";
	}

	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal2.style.display = "none";
	  }
	}
	</script>

	</div>
</body>
</html>