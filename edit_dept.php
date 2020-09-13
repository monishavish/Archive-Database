<?php
///////including the database connection file
include_once("db_connection.php");
$conn=OpenCon();
			if(isset($_POST['update']))
				{	
					$DNAME =$_POST['DNAME1'];
					$DEPT_ID =$_POST['DEPT_ID1'];
					$FORUM_NAME = mysqli_real_escape_string($conn, $_POST['FORUM_NAME1']);
					// checking empty fields
					if (empty($DNAME)|| empty($DEPT_ID)|| empty($FORUM_NAME)) {

						if(empty($DNAME)) {
							echo "<font color='red'>DNAME field is empty.</font><br/>";
						}
						if(empty($DEPT_ID)) {
							echo "<font color='red'>DEPT_ID field is empty.</font><br/>";
						}

					} else {	
						//updating the table
						$result = mysqli_query($conn, "UPDATE `department` SET `dept_id`='$DEPT_ID',`dept_name`='$DNAME',`forum_name`='$FORUM_NAME' WHERE `dept_id`=$DEPT_ID");
					
						//redirectig to the display page. In our case, it is displaypl.php
						header("Location: http://localhost/project/display_dept.php");
						}
				}

		 $DEPT_ID = $_GET['ID'];
		

		//selecting data associated with this particular id
		$result = mysqli_query($conn, "SELECT * FROM department WHERE dept_id='$DEPT_ID'");

		while($res = mysqli_fetch_array($result))
		{	$DNAME=$res['dept_name'];
			$DEPT_ID=$res['dept_id'];
			$FORUM_NAME = $res['forum_name'];
		}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="edit_dept.css">
</head>

<body>
	<a href="display_dept.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_dept.php">
		<table border="0">
			<tr> 
				<td>DNAME</td>
				<td><input type="text" name="DNAME1" value="<?php echo $DNAME;?>"></td>
			</tr>
			<tr> 
				<td>DEPT_ID</td>
				<td><input type="number" name="DEPT_ID1" value="<?php echo $DEPT_ID;?>"></td>
			</tr>
			<tr> 
				<td>FPRUM_NAME</td>
				<td><input type="text" name="FORUM_NAME1" value="<?php echo $FORUM_NAME;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="DEPT_ID" value=<?php echo $_GET['ID'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
