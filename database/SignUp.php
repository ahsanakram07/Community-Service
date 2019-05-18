<?php

include ('connection.php');

$_POST['dummy']="dummy";

if($_POST && array_key_exists("pwd",$_POST))
{

	$connection=connectToDatabase();

	$test=false;

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
	$gender=$_POST['Gender'];
	$image=$_FILES['pic']['name'];

	$sql1="SELECT * FROM admin";

	$row1=mysqli_query($connection,$sql1);

	$result=mysqli_fetch_assoc($row1);

	do
	{
		if ($firstname==$result['firstname']) 
		{
			$test=true;
		}
	}while ($result=mysqli_fetch_assoc($row1));

	if ($test==false) 
	{
		$sql="INSERT INTO admin(firstname,lastname,Password,Email,gender,image)
  		VALUES ('$firstname','$lastname','$password','$email','$gender','$image')";

		$row=mysqli_query($connection,$sql);

		$target="../admin/images/profile/".basename($_FILES['pic']['name']);

		move_uploaded_file($_FILES['pic']['tmp_name'], $target);

		if ($row) 
		{
			echo '<script language="javascript">';
			echo 'alert("User Created Successfully")';
			echo '</script>';
			echo("<script>location.href = '../index.php';</script>");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("User Not Created Successfully")';
			echo '</script>';
			echo("<script>location.href = '../index.php';</script>");
		}
	}

	else
	{
		echo '<script language="javascript">';
		echo 'alert("User Already Listed... Try Again")';
		echo '</script>';
		echo("<script>location.href = '../index.php';</script>");
	}

	
}

?>