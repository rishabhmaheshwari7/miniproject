
<!DOCTYPE html>
<html> 
<head>
	<title>usercheck</title>
</head>
<body>
<div style="background-color: dodgerblue;">	
<?php
    include 'CONNECTDB.php';
	$sql="select *from student";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			//output data of each row
			while ($row = mysqli_fetch_assoc($result)) 
			{

				echo "<br>";         //THIS IS A TEST PAGE IT IS NOT USED ANYWHERE IN THE PROGRAM
				echo "<b>password</b> ".$row["pwd"]." <b>name:</b> " . $row["name"]."<b> email: </b>".$row["email"] ;
						
			}
		}
		else
		{
			echo "table is empty";
		}
	mysqli_close($conn);
?>
</div>
</body>
</html>


