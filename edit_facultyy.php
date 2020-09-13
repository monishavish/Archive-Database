<?php
///////including the database connection file
include_once("db_connection.php");
$conn=OpenCon();
			if(isset($_POST['update']))
				{	
					$NAME =mysqli_real_escape_string($conn, $_POST['name']);
					$ID =$_POST['id'];
					$DEPT_ID = $_POST['dept_id'];
					$Achievement = mysqli_real_escape_string($conn, $_POST['achieve']);
					$Recognition = mysqli_real_escape_string($conn, $_POST['recog']);
					// checking empty fields
					if (empty($ID)|| empty($DEPT_ID)|| empty($NAME)) {

						if(empty($ID)) {
							echo "<font color='red'>Faculty id field is empty.</font><br/>";
						}
						if(empty($DEPT_ID)) {
							echo "<font color='red'>Department id field is empty.</font><br/>";
						}
				
						if(empty($NAME)) {
						echo "<font color='red'>Name field is empty</font><br/>";
						}

					} else {	
						//updating the table
						$result = mysqli_query($conn, "UPDATE fac_achieve SET fac_name='$NAME',fac_id='$ID',dept_id='$DEPT_ID',achievement='$Achievement',recognition='$Recognition' WHERE fac_id=$ID");
					
						//redirectig to the display page. In our case, it is displaypl.php
						header("Location: http://localhost/project/displayfac.php");
						}
				}

		 $ID = $_GET['ID'];
		

		//selecting data associated with this particular id
		$result = mysqli_query($conn, "SELECT * FROM fac_achieve WHERE fac_id='$ID'");

		while($res = mysqli_fetch_array($result))
		{	$NAME=$res['fac_name'];
			$ID=$res['fac_id'];
			$DEPT_ID = $res['dept_id'];
			$Achievement= $res['achievement'];
			$Recognition = $res['recognition'];
		}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="edit_faculty.css">
</head>

<body>
	<a href="displaytm.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_facultyy.php">
		<table border="0">
			<tr> 
				<td>NAME</td>
				<td><input type="text" name="name" value="<?php echo $NAME;?>"></td>
			</tr>
			<tr> 
				<td>ID</td>
				<td><input type="number" name="id" value="<?php echo $ID;?>"></td>
			</tr>
			<tr> 
				<td>Department ID</td>
				<td><input type="number" name="dept_id" value="<?php echo $DEPT_ID;?>"></td>
			</tr>
			<tr> 
				<td>Achievement</td>
				<td><input type="text" name="achieve" value="<?php echo $Achievement;?>"></td>
			</tr>
			<tr> 
				<td>Recognition</td>
				<td><input type="text" name="recog" value="<?php echo $Recognition;?>" Required></td>
			</tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['ID'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
