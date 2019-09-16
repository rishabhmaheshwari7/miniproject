<?php
    include 'CONNECTDB.php';
    $name=$_POST["name"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$rno=$_POST["rno"];
	$sql="insert into student values('".$password."','".$name."','".$email."',".$rno.")";
	//creates a main table where login data is stored

	$sql1="create table s".$rno." (answer varchar(100000))";   
	//this creates a table so that each student has his/her own table in which answer given by them will be stored

	$result=mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);		
	if($result)
	{
		echo "registration done ";
		include'frontpage.html';
	}
	else
	{
		echo mysqli_error($conn);
		echo "NOT DONE!! press back button";
	}
	mysqli_close($conn);

?>