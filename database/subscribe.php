<?php

	$emails = $_POST['email'];

	$froms = 'From:'.$emails; 
	$tos = 'ahsanachi321@gmail.com'; // send to this address
	$subjects = 'Community Service Subscription'; //subject line in email

	$bodys = "$emails Subscribed Your Newsletter";

	mail($tos, $subjects, $bodys, $froms);  

	if (mail($tos, $subjects, $bodys, $froms)) 
	{
		echo '<script language="javascript">';
		echo 'alert("Thanks To Subscribe Our Newsletter")';
		echo '</script>';
		echo("<script>location.href = '../index.php';</script>");
	}
	else
	{
	 	echo '<script language="javascript">';
		echo 'alert("Newsletter cannot be subscribed")';
		echo '</script>';
		echo("<script>location.href = '../index.php';</script>");   
	}

	exit();
?>