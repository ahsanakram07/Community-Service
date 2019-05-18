<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">
		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Security</li>
		</ul>
	</div>
</div>
<!--//short-->

<!-- Main Content -->
<section class="about-w3l">
	<h3 class="w3l-titles clrr w3l-titlesecr">SECURITY</h3>
	<section id="introduction" class="animated fadeIn">
		<div id="about">
			<div class="container">
				<div class="col-md-6 ab-left pd">
					<p class="sets">
						The organization provides facility, security to the residents of the colony. Strict rules are being followed to provide maximum security to the residents. Nobody can enter or exit the colony without intimating the security staff. Security staff issues ID cards to Staff and their family members. Security staff keeps record about entrance or exist of employees and their family members from the colony.
					</p>
				</div>
				<div class="col-md-6 ab-right pdlf">
					<img src="images/sec.png" height="300px" width="400px">
				</div>
			</div>
		</div>
	</section>
</section>

<section class="setimgbc mrg">
	<div id="page-wrapper">
		<div class="main-page signup-page">
			<h2 class="title1">VISITOR PASS REGISTRATION</h2>
			<div class="sign-up-row widget-shadow">
				<div class="row">
					<form action="" method="post">
						<div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
							<h5>Personal Information :</h5>
							<div class="sign-u">
								<input type="text" name="fname" placeholder="Full Name" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="email" name="email" placeholder="Email Address" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
									<textarea rows="5" cols="80" name="address" placeholder="Address" required=""></textarea>
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="cnic" placeholder="CNIC" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="phone" placeholder="Phone Number" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<div class="sign-up1">
									<h4>Gender* :</h4>
								</div>
								<div class="sign-up2">
									<label>
										<input type="radio" name="Gender" value="Male" required="">
										Male
									</label>
									<label>
										<input type="radio" name="Gender" value="Female" required="">
										Female
									</label>
								</div>
								<div class="clearfix"> </div>
							</div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
							<h6>Office Record :</h6>
							<div class="sign-u">
								<input type="text" name="members" placeholder="No Of Members" id="members" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="stay" placeholder="Stay For Days" id="stay" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="status" placeholder="Status(Staying/Leave)" id="status" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="accompany" placeholder="Accompany By Employee" id="status" required="">
								<div class="clearfix"> </div>
							</div>
							<div class="sign-u">
								<input type="text" name="vahicle" placeholder="Vahicle No" id="status" required="">
								<div class="clearfix"> </div>
							</div>		
						</div>
						<div class="row">
							<div class="sub_home">
									<input type="submit" value="Submit">
								<div class="clearfix"> </div>
							</div>
						</div>
					</form>

					<?php

					$_POST['dummy']="dummy";

					if($_POST && array_key_exists("fname",$_POST))
					{

						$connection=connectToDatabase();

						$fname=$_POST['fname'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$cnic=$_POST['cnic'];
						$phone=$_POST['phone'];
						$Gender=$_POST['Gender'];
						$members=$_POST['members'];
						$stay=$_POST['stay'];
						$status=$_POST['status'];
						$accompany=$_POST['accompany'];
						$vahicle=$_POST['vahicle'];

						$sql="INSERT INTO visitor_pass(Name,Email,Address,CNIC,Phone_No,Gender,No_of_Members,Stay,Status,Accompany,Vahicle_No,Admin_ID)
						      VALUES ('$fname','$email','$address','$cnic','$phone','$Gender','$members','$stay','$status','$accompany','$vahicle','46')";

						$row=mysqli_query($connection,$sql);

						if ($row) 
						{
							echo '<script language="javascript">';
							echo 'alert("Record Inserted Successfully")';
							echo '</script>';
							echo("<script>location.href = 'security.php';</script>");
						}
						else
						{
							echo '<script language="javascript">';
							echo 'alert("Record not Inserted Successfully")';
							echo '</script>';
							echo "Record not Inserted Successfully".mysqli_error($connection);
						}

					}

					?>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-w3l">
	<h3 class="w3l-titlesz clrr w3l-titleesecr">EMPLOYEE SECURITY</h3>
	<section id="employee" class="animated fadeIn">
		<div id="about">
			<div class="container">
				<div class="col-md-6 ab-left pd">
					<p class="sets">
						The organization provides facility, security to the employees of the colony and their family members. Strict rules are being followed to provide maximum security to the employees.Security staff issues ID cards to employees and their family members. Security staff keeps record about entrance or exist of employees and their family members from the colony.
					</p>
				</div>
				<div class="col-md-6 ab-right pdlf">
					<img src="images/em.jpg" height="300px" width="400px">
				</div>
			</div>
		</div>
		<center>
			<a href="empsecurity.php">
				<button type="button" class="btn btn-default hovteam">VIEW MORE</button>
			</a>
		</center>
	</section>
</section>

<section id="vehicle" class="animated fadeIn backclr">
		<div id="about" class="about-w3l">
			<div class="container" style="padding-bottom: 50px;">
				<h3 class="w3l-titlesv clrr w3l-titleesecrl">VEHICLE SECURITY</h3>
				<div class="col-md-6 ab-left">
					<img src="images/vs.jpg" height="300px" width="200px" alt=" " />
				</div>
				<div class="col-md-6 ab-right">
					<p class="sets">
						The organization provides facility, security to the vehicles enter in the colony. Strict rules are being followed to provide maximum security to the vehicles.Official vehicles of the organization are also be parked in the colony. Proper entry/exit record of those vehicles along with the driver info is being maintained.
					</p>
				</div>
			</div>
			<center>
				<a href="vahiclesecurity.php">
					<button type="button" class="btn btn-default hovteam">VIEW MORE</button>
				</a>
			</center>
		</div>
</section>

<section id="services_details" class="animated fadeIn about-w3l">
	<h3 class="w3l-titlesh clrr w3l-titleesecrls">SCHOOL SECURITY</h3>
	<div class="container" style="padding-bottom: 50px;">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<p class="sets" style="padding-top: 50px;">
					The organization provides facility, security to the Schools of the colony. Strict rules are being followed to provide maximum security to the Schools.There are separate schools for girls and boys. Children from outside the colony also come to study in those schools. Entry/exit record of children and school staff is maintained on daily basis.
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ps" style="padding-left: 230px;">
				<img src="images/School.jpg" height="300px" width="300px" alt=" " /">
			</div>
		</div>
	</div>
	<center>
		<a href="schoolsecurity.php">
			<button type="button" class="btn btn-default hovteam">VIEW MORE</button>
		</a>
	</center>
</section>
<!-- //Main Content -->

<?php include('footer.php'); ?>