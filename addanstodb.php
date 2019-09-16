<?php
    include 'CONNECTDB.php';
    $rno=$_POST["rno"];
	$answer=$_POST["answer"];

	$sql="insert into s".$rno." values('".$answer."')";
	//add the question to table name questions

	$result=mysqli_query($conn,$sql);
		
	if($result)
	{
		echo "answer uploaded";
		header("Location: userpage.php"); 
	}
	else
	{
		echo mysqli_error($conn);
		echo "NOT DONE!! press back button";
	}
	mysqli_close($conn);

?>