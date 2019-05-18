<?php

include ('connection.php');

$_POST['dummy']="dummy";

if($_POST && array_key_exists("pwd",$_POST))
{

	$connection=connectToDatabase();

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];

	$sql="INSERT INTO admin(Username,Password,Email) VALUES ('$username','$password','$email')";

	mysqli_query($connection,$sql);

	$sql2="SELECT * FROM admin";

	$res=mysqli_query($connection,$sql2);

	$row=mysqli_fetch_assoc($res);

	?>

	<table width="60%" height="10px" border="1px">
		<tr>
			<th>
				ADMIN ID
			</th>
			<th>
				USERNAME
			</th>
			<th>
				PASSWORD
			</th>
			<th>
				EMAIL
			</th>
		</tr>
	</table>
	<?php

	do
	{

	?>
	<table width="60%" height="30px" border="1px">
		<tr>
			<td>
				<?php echo ($row['admin_ID']); ?>
			</td>
			<td>
				<?php echo ($row['Username']); ?>
			</td>
			<td>
				<?php echo ($row['Password']); ?>
			</td>
			<td>
				<?php echo ($row['Email']); ?>
			</td>
		</tr>	
	</table>

	<?php

	}while($row=mysqli_fetch_assoc($res));

}

?>