<!DOCTYPE html>
<html> 
<head>
	<title>answer</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<body background="formback.jpg" style="font-family: 'Montserrat', sans-serif;">
<link rel = "icon" href =  "icon.png" type = "image/x-icon">
<div>	
<?php
    include 'CONNECTDB.php';
	$sql="select rno from student;";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			//output data of each row
			while ($row = mysqli_fetch_assoc($result)) 
			{
			
				$sql1="select answer from s".$row["rno"].";";
				$result1=mysqli_query($conn,$sql1);
				//echo "<b>password</b> ".$row["pwd"]." <b>name:</b> " . $row["name"]."<b> email: </b>".$row["email"] ;
					if(mysqli_num_rows($result1)>0)
					{
						echo '<div style="background-color:rgb(255, 255, 153);box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.5);padding: 30px;text-align: center;border-radius: 5px;width:40%";padding-left: 200px;>';
						echo "ROLL NUMBER-".$row["rno"]."<br>";
						while ($row1 = mysqli_fetch_assoc($result1)) 
						{
							echo "<br>".$row1["answer"]."<br>";
						}
						echo'</div>';
						echo "<br><br>";
					}	
			}
		}
		else
		{
			echo "table is empty";
		}
	mysqli_close($conn);
?>
</div >
</body>
</html>

