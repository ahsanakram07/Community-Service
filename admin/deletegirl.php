<?php

include ('../database/connection.php');

$connection=connectToDatabase();

$id=$_GET['id'];

$sql="DELETE FROM girls_school WHERE GS_ID = '$id'";

$res=mysqli_query($connection,$sql);

if ($res) 
{
	echo '<script language="javascript">';
	echo 'alert("Record Deleted Successfully")';
	echo '</script>';
	echo("<script>location.href = 'girlsec.php';</script>");
}

else
{
	echo '<script language="javascript">';
	echo 'alert("Record not Deleted Successfully")';
	echo '</script>';
	echo("<script>location.href = 'girlsec.php';</script>");
}


?>