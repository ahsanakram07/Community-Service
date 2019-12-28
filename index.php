<?php include('header.php'); ?>

<!-- about -->
<section class="animated fadeIn">
	<div id="about" class="about-w3l">
		<div class="container">
			<h3 class="w3l-titles w3l-titlesmres">About Us</h3>
			<div class="col-md-6 ab-left">
				<img src="images/3d.png" alt=" " />
			</div>
			<div class="col-md-6 ab-right">
				<h3>Welcome to Our Real Estate Luxury Homes</h3>
				<p class="sets">Thank you for taking the time to visit our site! In today’s real estate market, renting is becoming a popular option
					again for a lot of people. We pride ourselves on our service to our clients.We’re sure you will find what you’re looking
					for among hundreds of our real estate listings!</p>
			</div>
		</div>
		<center>
			<a href="about.php">
				<button style="margin-top: 40px;" type="button" class="btn btn-default hovteam">VIEW MORE</button>
			</a>
		</center>
	</div>
</section>
<!-- //about -->

<!-- SEARCH -->
<section class="setsearch backimg sew" style="height: auto !important;">
	<div class="container-fluid">
		<div class="row padtop wser">
		    <div class="col-xs-4 col-sm-4 col-md-4">
			    <button type="button" class="btn setprop">SEARCH PROPERTY</button>	
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4 setwid">
			    <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
			    	<button type="button" class="btn btn-default hov">SELL</button>
			    </a>	
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4">
				<a href="properties.php">
					<button type="button" class="btn btn-default hov">PURCHASE</button>    	
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row setkey">
			<div class="col-xs-4 col-sm-4 col-md-6">
				Property Area
			</div>
			<div class="col-xs-4 col-sm-4 col-md-3 sew last">
				Catagory
			</div>
			<div class="col-xs-4 col-sm-4 col-md-3 sew last">
				Need For
			</div>
		</div>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="row">	
				<div class="col-xs-4 col-sm-4 col-md-6">
					<div class="form-group">
						<input type="text" name="search" class="form-control fmres" placeholder="I am lookin for---">
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-3">
					<div class="row form-group">
		                <div class="col-xs-12 col-sm-12 col-md-9 sew last">
		                    <select name="type" id="Select_Type" class="form-control-sm form-control hov" style="width: 160px;">
		                        <option value="No_Type">Please select</option>
		                        <option value="Residential Plot">Residential Plot</option>
		                        <option value="Commercial Plot">Commercial Plot</option>
		                        <option value="House">House</option>
		                        <option value="Appartment">Appartment</option>
		                        <option value="Office">Office</option>
		                        <option value="Plaza">Plaza</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-3">
					<div class="row form-group">
		                <div class="col-xs-12 col-sm-12 col-md-9 sew last">
		                    <select name="purpose" id="Select_Purpose" class="form-control-sm form-control hov" style="width: 160px;">
		                        <option value="None">Please select</option>
		                        <option value="Sale">Purchase</option>
		                        <option value="Rent">Rent</option>
		                        <option value="Advertisement">Visit</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 15px;">
					<input type="submit" name="Submit" class="hov" value="SEARCH" style="border-radius: 11px; padding: 17px;font-weight: bold;">
				</div>
			</div>
		</form>

		<?php

			$connection4=connectToDatabase();

			if (isset($_POST['Submit'])) 
			{
				$search= $_POST['search'];
				$catagory=$_POST['type'];
				$purpose=$_POST['purpose'];

				$sql4="SELECT * FROM property WHERE Area='$search' AND Property_Type='$catagory' AND purpose='$purpose'";

				$res4=mysqli_query($connection4,$sql4);

				$row4=mysqli_fetch_assoc($res4);

				$checkresult=mysqli_num_rows($res4);

				if ($res4) 
				{
		?>
					<script language="javascript">
					function JSalert()
					{
						swal("Search Results Are Below");
					}
					</script>

						<center>
							<h1 style="color: white">SEARCH RESULTS</h1>
						</center>

						<h3 style="color: white"><?php echo $checkresult; ?> Results Found</h3>

						<?php if($checkresult>0){ ?>

						<section class="featured-product">
							<div class="row filter-list clearfix" id="MixItUp717B05">
								<?php
								do
								{
								?>
								<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mix_all default-item all beauty others prodser vad">
					                <div class="inner-box">
					                    <div class="single-item center">
					                        <figure class="image-box">
					                        	<?php

					                        	echo "<img width='100%' height='300' src='admin/images/property/".$row4['Image']."'/>";

					                        	?>
											</figure>
											
					                        <div class="content">
					                        	<h3>
					                        		<a href="shop-single.html">
					                        			<center><?php echo $row4['Title']; ?></center>		
				                        			</a>
					                        	</h3>
					                            <div>
					                            	<?php

					                            	echo '<b>TYPE:</b>&nbsp'.$row4['Property_Type'];
					                            	echo "<br>";
				                                    echo '<b>FOR:</b>&nbsp'.$row4['purpose'];
				                                    echo "<br>";

					                            	?>
					                            </div>

					                            <?php

					                            	echo '<b>PRICE:</b>&nbsp'.$row4['Price'];

				                            	?>
					                        </div>
					                        
					                        <div class="overlay-box">
					                        	<div class="inner">
						                        	<div class="bottom-content">
						                        		<h4><a href="#">Address</a></h4>
						                        		<p><?php echo $row4['Address']; ?></p>
						                        	</div>
					                        	</div>
					                        </div>
						                </div>
					                </div>
					            </div>
					            <?php
								}while ($row4=mysqli_fetch_assoc($res4));
								?>
				            </div>
			            </section>

				        <?php } ?>
			    <?php
				}
				else
				{
					echo "<center><h3 style='color: white; padding-bottom: 20px;'>WE ARE SORRY. &nbsp &nbsp &nbsp NO RESULTS FOUND </h3></center>";
				}	
				if ($checkresult==0) 
				{
					echo "<center><h3 style='color: white; padding-bottom: 20px;'>WE ARE SORRY. &nbsp &nbsp &nbsp NO RESULTS FOUND </h3></center>";
				}
			}

		        ?>

	</div>
</section>
<!-- Search -->

<!--feature Properties Section-->
<section id="properties" class="featured-product">
    <div class="container">

        <div class="theme_title center">
            <h3 class="w3l-titless w3l-titlesmresfe">Featured Properties</h3>
        </div>

        <div class="row filter-list clearfix" id="MixItUp717B05">

            <div id="carouselprod" class="owl-carousel owl-theme">

            	<?php

					$connection=connectToDatabase();

					$sql="SELECT * FROM property LIMIT 8";

					$res=mysqli_query($connection,$sql);

					$row=mysqli_fetch_assoc($res);

				?>

				<?php

            	do
            	{

    			?>
	            
	            <!--Default Item-->
	            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix_all default-item all beauty others" style="display: inline-block;">
	                <div class="inner-box">
	                    <div class="single-item center">
	                        <figure class="image-box">
	                        	<?php

	                        	echo "<img height='300' src='admin/images/property/".$row['Image']."'/>";

	                        	?>
							</figure>
							
	                        <div class="content">
	                        	<h3>
	                        		<a href="properties.php">
	                        			<center><?php echo $row['Title']; ?></center>		
                        			</a>
	                        	</h3>
	                            <div>
	                            	<?php

	                            	echo '<b>TYPE:</b>&nbsp'.$row['Property_Type'];
	                            	echo "<br>";
                                    echo '<b>FOR:</b>&nbsp'.$row['purpose'];
                                    echo "<br>";

	                            	?>
	                            </div>

	                            <?php

	                            	echo '<b>PRICE:</b>&nbsp'.$row['Price'];

                            	?>
	                        </div>
	                        
	                        <div class="overlay-box">
	                        	<div class="inner">
		                        	<div class="bottom-content">
		                        		<h4><a href="#">Address</a></h4>
		                        		<p><?php echo $row['Address']; ?></p>
		                        	</div>
	                        	</div>
	                        </div>
		                </div>
	                </div>
	            </div>

	            <?php

	            }while($row=mysqli_fetch_assoc($res));

    			?> 
	        </div>  
        </div>
    </div> 
    <center>
    	<a href="properties.php">
			<button type="button" class="btn btn-default hovteam">VIEW MORE</button>
		</a>
	</center> 
</section>
<!-- End of section -->

<!-- Team -->
<section class="teamclr" style="background-image: url(images/slider1.jpg);background-position: center center;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    position: relative;">
    <div style="background: none 0px 0px repeat scroll rgba(0, 0, 0, 0.7) !important;">
		<!-- Start team Area -->
		<div id="team" class="our-team-area area-padding about-w3l">
			<h3 class="w3l-titles w3l-titlesmrestm" style="color: white">Our Team</h3>
		    <div class="container">
		        <div class="row">

		        	<?php

						$connectiona=connectToDatabase();

						$sqla="SELECT * FROM agent LIMIT 4";

						$resa=mysqli_query($connectiona,$sqla);

						$rowa=mysqli_fetch_assoc($resa);

					?>

					<?php

	            	do
	            	{

					?>

			        <div class="team-top">
			            <div class="col-md-3 col-sm-3 col-xs-12 mbotteam">
				            <div class="single-team-member">
				                <div class="team-img">
					                <a href="agents.php">
					                	<?php 

											echo "<img height='300' width='100%' src='admin/images/team/".$rowa['Image']."'/>";

										?>
									</a>
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
				                <div class="team-content text-center">
				                	<h4><?php echo $rowa['F_Name']; ?></h4>
				                	<p><?php echo $rowa['Designation'];?></p>
				              	</div>
				            </div>
			            </div>
			            <!-- End column -->
			        </div>

			        <?php

					}while($rowa=mysqli_fetch_assoc($resa));

	        		?>

		        </div>
		    </div>
		</div>
		<!-- End Team Area -->
		<center>
			<a href="agents.php">
				<button type="button" class="btn btn-default hovteam">VIEW MORE</button>
			</a>
		</center>
	</div>
</section>
<!-- //team -->

<!-- Community Service -->
<section id="community" class="rescenter">

	<div class="theme_title center padtoppp">
        <h3 class="w3l-titless w3l-titlesmresc">Community Service</h3>
    </div>

	<div class="row bcset a4 lapwidth">
		<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 setlpads">
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

						$connection321=connectToDatabase();

						$name=$_POST['name'];
						$email=$_POST['email'];
						$mobile=$_POST['mobile'];
						$address=$_POST['address'];
						$service=$_POST['service'];

						$sqlqt="SELECT * FROM serviceman WHERE Designation='$service' AND Status='Free'";

						$resqt=mysqli_query($connection321,$sqlqt);

						$rowqt=mysqli_fetch_assoc($resqt);

						if ($rowqt['Status']=='Free') 
						{
							$sql321="INSERT INTO bookings(Name,Email,Mobile_No,Address,Service,Booking_Date,Admin_ID)
						      VALUES ('$name','$email','$mobile','$address','$service',time(),'46')";

							$row321=mysqli_query($connection321,$sql321);

							if ($row321) 
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
		<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8" style="margin-top: 35px;">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
					<div class="row setmarr">
						<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 boxres mleftf">
							<div class="container seterr">
								<h2 style="text-align: center;">Maintenance</h2>
								<div style="text-align: center;">
									We provide home maintenance service.</br> Our Team Members are skilled, trained and professional, and can do any kind of maintenance job for you.
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 box hov1 upmargin boxres mleftf">
							<div class="container seterr">
								<h2 style="text-align: center;">Repair</h2>
								<div style="text-align: center;">
									We provide home repair service.</br> Our Team Members are skilled, trained and professional,</br> and can do any kind of repair job for you.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 pdres">
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
		<a href="community.php" >
			<button type="button" class="btn btn-default fyp hovteam fypsec">
				VIEW MORE
			</button>
		</a>
	</div>
</section>
<!-- //Community Service -->

<!-- Security -->
<section id="security" class="teamclr">
	<div class="about-w3l">
		<div class="container">
			<h3 class="w3l-titles w3l-titlesmresec">Security</h3>
			<div class="col-md-6 ab-left pdd">
				<img src="images/security.png" alt=" " />
			</div>
			<div class="col-md-6 ab-rights">
				<h3>Welcome to Security Department</h3>
				<p class="sets">
					The organization provides facility, security to the residents of the colony. Strict rules are being followed to provide maximum security to the residents. Nobody can enter or exit the colony without intimating the security staff. Security staff issues ID cards to Staff and their family members. Security staff keeps record about entrance or exist of employees and their family members from the colony.
                </p>
			</div>
			<center>
				<a href="security.php">
					<button type="button" class="btn btn-default hovsec pad20">VIEW MORE</button>
				</a>
			</center>
		</div>
	</div>
</section>
<!-- //Security -->

<?php include('footer.php'); ?>

<?php

	$connectionsss123=connectToDatabase();

	if (isset($_POST['SUBMIT'])) 
	{
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$service = $_POST['service'];

		$sqlsss123="SELECT * FROM serviceman WHERE Designation='$service' AND Status='Free' LIMIT 1";

		$ressss123=mysqli_query($connectionsss123,$sqlsss123);

		$rowsss123=mysqli_fetch_assoc($ressss123);

		$Full_Name=$rowsss123['Full_Name'];
		$CNIC=$rowsss123['CNIC'];
		$Mobile_No=$rowsss123['Mobile_No'];

		if ($rowsss123['Status']=='Free') 
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

		$resb=mysqli_query($connectionsss123,$sqlb);

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