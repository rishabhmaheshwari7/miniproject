<?php
    include 'CONNECTDB.php';
    $email=$_POST["email"];
	$password=$_POST["password"];
	$flag=0;
	$adminemail="admin@gmail.com";
	$adminpassword="#QWerty123";
	$sql="select * from student where email='".$email."'AND pwd='".$password."'";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			//checks data of each row
			
			while ($row = mysqli_fetch_assoc($result)) 
			{
				if($adminemail==$row["email"] && $adminpassword==$row["pwd"])
					{
						$flag=2;
					}
				else if($email==$row["email"] && $password==$row["pwd"])
					{
						$flag=1;
					}
				else {
					$flag=0;
				}	
			}
			if($flag=='1')
				{
				include'userpage.php';
				}
			else if($flag=='2')
				{
				include'admin.html';
				}

			else if($flag=='0')
				{
				include'errorpage.html';
				}	
		}
		else
		{
		include'errorpage.html';
		}
	mysqli_close($conn);
?>
