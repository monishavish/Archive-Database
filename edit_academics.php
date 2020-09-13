<?php
///////including the database connection file
include_once("db_connection.php");
$conn=OpenCon();
			if(isset($_POST['update']))
				{	
					$NAME =mysqli_real_escape_string($conn, $_POST['name']);
					$DEPT_ID = $_POST['dept_id'];
					$marks = mysqli_real_escape_string($conn, $_POST['marks']);
					$position = mysqli_real_escape_string($conn, $_POST['position']);
					$stu_id=mysqli_real_escape_string($conn, $_POST['stu_id']);
					// checking empty fields
					if (empty($DEPT_ID)|| empty($marks)|| empty($NAME)) {

						if(empty($DEPT_ID)) {
							echo "<font color='red'>department id field is empty.</font><br/>";
						}
						if(empty($marks)) {
							echo "<font color='red'>Marks field is empty.</font><br/>";
						}
				
						if(empty($NAME)) {
						echo "<font color='red'>Name field is empty</font><br/>";
						}

					} else {	
						//updating the table
						$result = mysqli_query($conn, "UPDATE `academics` SET `top10name`='$NAME',`marks`='$marks',`position`='$position',`dept_id`='$DEPT_ID' WHERE `stu_id`=$stu_id");
					
						//redirectig to the display page. In our case, it is displaypl.php
						header("Location: http://localhost/project/displayacademics.php");
						}
				}

		 $ID = $_GET['ID'];
		

		//selecting data associated with this particular id
		$result = mysqli_query($conn, "SELECT * FROM academics WHERE stu_id='$ID'");

		while($res = mysqli_fetch_array($result))
		{	$NAME=$res['top10name'];
			$ID=$res['dept_id'];
			$marks = $res['marks'];
			$position= $res['position'];
			$stu_id=$res['stu_id'];
		}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="edit_academics.css">
</head>

<body>
	<a href="displayacademics.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_academics.php">
		<table border="0">
			<tr> 
				<td>NAME</td>
				<td><input type="text" name="name" value="<?php echo $NAME;?>"></td>
			</tr>
			<tr> 
				<td>DEPARTMENT ID</td>
				<td><input type="number" name="dept_id" value="<?php echo $ID;?>"></td>
			</tr>
			<tr> 
				<td>MARKS</td>
				<td><input type="text" name="marks" value="<?php echo $marks;?>"></td>
			</tr>
			<tr> 
				<td>POSITION</td>
				<td><input type="text" name="position" value="<?php echo $position;?>" Required></td>
			</tr>
			<tr> 
				<td>USN</td>
				<td><input type="text" name="stu_id" value="<?php echo $stu_id;?>" Required></td>
			</tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['ID'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
