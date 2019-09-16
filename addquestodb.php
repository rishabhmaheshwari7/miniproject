<?php
    include 'CONNECTDB.php';
    $qno=$_POST["qno"];
	$problem=$_POST["problem"];

	$sql="insert into questions values(".$qno.",'".$problem."')";
	//add the question to table name questions

	$result=mysqli_query($conn,$sql);
		
	if($result)
	{
		echo "question uploaded";
		include'admin.html';
	}
	else
	{
		echo mysqli_error($conn);
		echo "NOT DONE!! press back button";
	}
	mysqli_close($conn);

?>