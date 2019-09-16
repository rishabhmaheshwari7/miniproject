<?php
    //include 'CONNECTDB.php';  //commented for safety!! :)    
    $name=$_POST["name"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$sql="create table ".$name." (rno int(10),answer varchar(500))";
	$result=mysqli_query($conn,$sql);		
	if($result)
	{
		echo "table created!!";
	}
	else
	{
		echo mysqli_error($conn);
		echo "NOT DONE!! press back button";
	}
	mysqli_close($conn);

?>

