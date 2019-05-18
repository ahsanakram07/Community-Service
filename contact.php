<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Contact Us</li>
		</ul>
	</div>
</div>
<!--//short-->

<section id="contact" class="animated fadeIn bcimg">
	<div id="about" class="about-w3l">
		<div class="container">
			<h3 class="w3l-titles w3l-titleconr" style="color: white;">Contact Us</h3>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
						<div class="form-style-5c setwidths fmres">
							<form method="post" action="database/contactus.php">
								<fieldset>
									<legend>
										<h1 class="subsets">
											<center>SEND US EMAIL</center>
										</h1>
									</legend>
									<input type="text" name="name" placeholder="Your Name *" required="">
									<input type="email" name="email" placeholder="Your Email" required="">
									<input type="text" name="mobile" placeholder="Mobile no *" required="">
									<textarea name="message" placeholder="Message *" required=""></textarea>

									<label for="country">
											Select Country
									</label>
									<select id="country" name="country" required="">
									    <option value="">SELECT</option>
										<option value="Pakistan">Pakistan</option>
										<option value="India">India</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="South Africa">South Africa</option>
										<option value="Japan">Japan</option>
									</select>
									<input type="submit" name="SUBMIT" class="btn btn-default btn-lg hov">
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" style="padding-top: 25px;">
						<div class="row contact-icon setloc">
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
								<center>
									<span class="fa fa-home fa-4x clrseta" aria-hidden="true"></span>
								</center>
							</div>
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding-top: 20px; text-align: center;">
								<p class="pclr">SM-Office-E1-26C007 Ajman Free Zone, Amber Gem Tower 2, Sheikh Khalifa Bin Zayed Road, Ajman, UAE</p>
							</div>
						</div>
						<div class="row contact-icon setloc">
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
								<center>
									<span class="fa fa-envelope fa-4x clrseta" aria-hidden="true"></span>
								</center>
							</div>
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding-top: 20px; text-align: center;">
								<p class="pclr">
									<a href="mailto:info@example.com" style="text-decoration: none;">Contact@Community.com</a>
								</p>
							</div>
						</div>
						<div class="row contact-icon setloc">
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
								<center>
									<i class="fa fa-phone fa-4x clrseta"></i>
								</center>
							</div>
							<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 pclr" style="padding-top: 20px; text-align: center;">
								+923015478451 <br>
								+923214845412 <br>
								+923075414962
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 toppdset mres">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3604.3209969300433!2d55.42848971459936!3d25.394063583804993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSM-Office-E1-26C007+Ajman+Free+Zone%2C+Amber+Gem+Tower+2%2C+Sheikh+Khalifa+Bin+Zayed+Road%2C+Ajman%2C+UAE!5e0!3m2!1sen!2sus!4v1532548090179" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>