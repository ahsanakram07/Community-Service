<?php

    include ('connection.php');

	$namec = $_POST['name'];
	$emailc = $_POST['email'];
	$mobilec = $_POST['mobile'];
	$countryc = $_POST['country'];
	$messagec = $_POST['message'];
	$fromc = 'From:'.$emailc; 
	$toc = 'ahsanachi321@gmail.com'; // send to this address
	$subjectc = 'Community Service Contact Form'; //subject line in email

	$bodyc = "From: $namec\n
			 Email: $emailc\n
			 Mobile_No: $mobilec\n
			 Country: $countryc\n 
			 Message:\n $messagec";

	mail($toc, $subjectc, $bodyc, $fromc);
	
	if (mail($toc, $subjectc, $bodyc, $fromc)) 
	{
		echo '<script language="javascript">';
		echo 'alert("Thanks To Give Us Feedback")';
		echo '</script>';
		echo("<script>location.href = '../contact.php';</script>");
	}
	
	exit();
?>