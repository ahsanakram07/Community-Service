<?php

session_start();

include ('connection.php');

$_POST['dummy']="dummy";

if ($_POST && array_key_exists('lpwd', $_POST)) 
{
	$connection=connectToDatabase();

	$uname=$_POST['lusername'];
	$pwd=$_POST['lpwd'];

	$sql="SELECT * FROM admin WHERE firstname='$uname' AND Password='$pwd'";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_num_rows($res);

	if ($row==1) 
	{
		$_SESSION['uname']=$uname;
		$_SESSION['pwd']=$pwd;

		echo("<script>location.href = '../admin/index.php';</script>");
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Incorrect Username Password")';
		echo '</script>';
		echo("<script>location.href = '../index.php';</script>");
	}
}

?>