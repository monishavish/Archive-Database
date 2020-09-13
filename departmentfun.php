<?php 
            require_once('db_connection2.php');
            $conn=OpenCon();
            $sql="SELECT * from department";
            $result1= mysqli_query($conn,$sql);
            while($row1 = mysqli_fetch_assoc($result1)){

            	foreach($row1 as $field1 => $value1){
            		echo " " .$value1. " ";
            		echo "<br>";
            	}
                  echo"<br>";
            }
?>