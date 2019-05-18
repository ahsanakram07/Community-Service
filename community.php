<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Community Center</li>
		</ul>
	</div>
</div>
<!--//short-->

<div class="about-w3l">
	<h3 class="w3l-titless w3l-titlescr">COMMUNITY CENTER</h3>
</div>

<div class="container-fluid">
	<div class="row setsss padtopcs bclr">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 setcom" style="border:1px solid white;">
			<h1 class="setting">
				<div class="c">
					<p class="shadow text2 f1">WHY <br> CHOOSE <br> US <br>???</p>
				</div>
			</h1>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 setcom" style="border:1px solid white;">
			<h3 class="sethead f2">
				<p class="shadow text2">One Step Solution for Your Complete Home Maintenance</p>
			</h3>
			<div class="row paddd fset">
				<a href="about.php">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padr" style="border:1px solid white;">
						<p class="shadow text2 f3">VISION</p>
					</div>
				</a>
				<a href="about.php">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padr" style="border:1px solid white;">
						<p class="shadow text2 f3">QUALITY</p>
					</div>		
				</a>
			</div>
			<div class="row fset">
				<a href="about.php">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padbots" style="border:1px solid white;">
						<p class="shadow text2 f3">AFFORDABLE</p>
					</div>
				</a>
				<a href="about.php">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padbots" style="border:1px solid white;">
						<p class="shadow text2 f3">24*7 SUPPORT</p>
					</div>	
				</a>	
			</div>
		</div>
	</div>
</div>

<div class="about-w3l">
	<h3 class="w3l-titles w3l-titlesbr">BOOKINGS</h3>
</div>

<section id="order" class="bimg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-4 col-md-4">
				<div class="form-style-5 setwidths bkimg fmres">
					<form method="post" action="">
						<fieldset>
							<legend>
								<span class="number"></span>
									Looking for a Handyman?
								<div class="subset">
									We solve your Home repair needs!
								</div>
							</legend>
							<input type="text" name="name" placeholder="Your Name *" required="">
							<input type="email" name="email" placeholder="Your Email">
							<input type="text" name="mobile" placeholder="Mobile no *" required="">
							<textarea name="address" placeholder="Address *" required=""></textarea>

							<label for="job">
									Select Service
							</label>
							<select id="job" name="service" required="">
							    <option value="">SELECT</option>
								<option value="Electrician">Electrical Service</option>
								<option value="Plumber">Plumbing Service</option>
								<option value="Painter">Painting</option>
								<option value="Carpenter">Carpentry</option>
								<option value="Gardener">Gardening</option>
								<option value="Others">Other</option>
							</select>
							<input type="submit" name="SUBMIT" class="btn btn-default btn-lg hov">
						</fieldset>
					</form>

					<?php

					$_POST['dummy']="dummy";

					if($_POST && array_key_exists("name",$_POST))
					{

						$connection=connectToDatabase();

						$name=$_POST['name'];
						$email=$_POST['email'];
						$mobile=$_POST['mobile'];
						$address=$_POST['address'];
						$service=$_POST['service'];

						$sqlqt="SELECT * FROM serviceman WHERE Designation='$service' AND Status='Free'";

						$resqt=mysqli_query($connection,$sqlqt);

						$rowqt=mysqli_fetch_assoc($resqt);

						if ($rowqt['Status']=='Free') 
						{
							$sql="INSERT INTO bookings(Name,Email,Mobile_No,Address,Service,Admin_ID)
						      VALUES ('$name','$email','$mobile','$address','$service','46')";

							$row=mysqli_query($connection,$sql);

							if ($row) 
							{
								echo '<script language="javascript">';
								echo 'alert("Record Inserted Successfully")';
								echo '</script>';
							}
							else
							{
								echo '<script language="javascript">';
								echo 'alert("Record not Inserted Successfully")';
								echo '</script>';
							}
						}
						else
						{
							echo '<script language="javascript">';
							echo 'alert("Serviceman For This Service Is Busy... Try Again Later.")';
							echo '</script>';
						}
					}

					?>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8" style="margin-top: 26px;">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
						<div class="row setmarr">
							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 boxres mleftf">
								<div class="container seterr">
									<h2 style="text-align: center;">Maintenance</h2>
									<div style="text-align: center;">
										We provide home maintenance service.</br> Our Team Members are skilled, trained and professional, and can do any kind of maintenance job for you. <br>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 upmargin boxres mleftf">
								<div class="container seterr">
									<h2 style="text-align: center;">Repair</h2>
									<div style="text-align: center;">
										We provide home repair service.</br> Our Team Members are skilled, trained and professional,<br> and can do any kind of repair job for you.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
						<div class="row setmarr">
							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 lefmargin boxres mleftf">
								<div class="container seterr">
									<h2 style="text-align: center;">Cleaning</h2>
									<div style="text-align: center;">
										We provide home cleaning service.</br> Our Team Members are skilled, trained and professional, and can do any kind of cleaning job for you. 
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 upmargin lefmargin boxres mleftf">
								<div class="container seterr">
									<h2 style="text-align: center;">Improvement</h2>
									<div style="text-align: center;">
										We provide home improvement service.</br> Our Team Members are skilled, trained and professional, and can do any kind of improvement job for you.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

	$connections=connectToDatabase();

	$sqls="SELECT * FROM serviceman";

	$ress=mysqli_query($connections,$sqls);

	$rows=mysqli_fetch_assoc($ress);
?>

<section id="serviceman" class="about-w3l">
	<h3 class="w3l-titlesc w3l-titlessrr">SERVICEMAN</h3>
	<div class="container-fluid">
		<div class="row">

			<?php

	    	do
	    	{

			?>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
			    <div class="single-team-member">
			    	<div class="team-img">
				    	<?php
				    	echo "<a data-fancybox='gallery' href='admin/images/serviceman/".$rows['Image']."' class='hovs' data-width='2000' data-height='1600'>";
 	
				    				echo "<img id='myImg' src='admin/images/serviceman/".$rows['Image']."' style='width:100%; height: 300px;'/>";
						    
					    echo "</a>";

					    ?>
					    <div class="team-social-icon text-center">
		                    <ul style="padding-left: 0px !important;">
			                    <li>
			                        <a href="#">
										<i class="fa fa-facebook"></i>
									</a>
			                    </li>
			                    <li>
			                        <a href="#">
										<i class="fa fa-twitter"></i>
									</a>
			                    </li>
			                    <li>
			                        <a href="#">
										<i class="fa fa-instagram"></i>
									</a>
			                    </li>
		                    </ul>
		                </div>
		            </div>
				    <div class="containerr">
				        <h2><?php echo $rows['Full_Name']; ?></h2>
				        <p class="title" style="font-size: 20px;">
				        	<b><?php echo $rows['Designation']; ?></b>
				        </p>
				        <p>
				        	<?php

			        		echo '<span class="fsetssss">Experience: &nbsp</span>'.$rows['Experiance'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">Gender:&nbsp</span>'.$rows['Gender'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">CNIC:&nbsp</span>'.$rows['CNIC'];
			        		echo '<br>';
			        		
				        	?>

				        </p>
				        <p>
				        	<?php 

					        echo '<span class="fsetssss">Address:&nbsp</span>'.$rows['Address'];

					        ?>
					        	
				        </p> 
				        <button class="button">Contact : 
					        <?php 

					        echo $rows['Mobile_No'];

					        ?>
				        </button>
			        </div>
			    </div>
			</div>

			<?php

	        }while($rows=mysqli_fetch_assoc($ress));

			?>

		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<?php

	$connectionsss=connectToDatabase();

	if (isset($_POST['SUBMIT'])) 
	{
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$service = $_POST['service'];

		$sqlsss="SELECT * FROM serviceman WHERE Designation='$service' AND Status='Free' LIMIT 1";

		$ressss=mysqli_query($connectionsss,$sqlsss);

		$rowsss=mysqli_fetch_assoc($ressss);

		$Full_Name=$rowsss['Full_Name'];
		$CNIC=$rowsss['CNIC'];
		$Mobile_No=$rowsss['Mobile_No'];

		if ($rowsss['Status']=='Free') 
		{
			$from = 'From:'.$email; 
			$to = $email; // send to this address
			$subject = 'Community Service At Your Palm'; //subject line in email
			$body = "Thank You Very Much For your cooperation and contacting our team for the Home Services.Available Serviceman for $service is: \n\n

                    Name: $Full_Name \n

                    CNIC: $CNIC \n

                    Mobile_No: $Mobile_No \n\n

                    Our Serviceman Will Reach within 10 Minutes at your location.

                    \n\n\n\n

					Regards,\n
					Customer Services Team,\n
					Community Service At Your Palm.

                    "; 

			mail($to, $subject, $body, $from);  
			exit();
		}

		$sqlb="SELECT * FROM serviceman WHERE Designation='$service' AND Status='Busy'";

		$resb=mysqli_query($connectionsss,$sqlb);

		$rowb=mysqli_fetch_assoc($resb);
			
		$from = 'From:'.$email; 
		$to = $email; // send to this address
		$subject = 'Community Service At Your Palm'; //subject line in email
		$body = "SORRY WE HAVE NO SERVICEMAN AVAILABLE FOR $service Service
			\n\n\n\n
			Regards,\n
			Customer Services Team,\n
			Community Service At Your Palm.";
		mail($to, $subject, $body, $from);  
		exit();

	}
?>