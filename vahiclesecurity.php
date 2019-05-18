<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Security</li>
			<li> &nbsp &nbsp | &nbsp &nbsp VEHICLE SECURITY</li>
		</ul>
	</div>
</div>
<!--//short-->

<section id="vehicle" class="animated fadeIn">
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
		</div>
</section>

<section class="about-w3l backclr">
	<h3 class="w3l-titlesz clrr w3l-titleesecrl">SECURITY LISTINGS</h3>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sx-6 col-lg-6 col-sm-6">
				<div class="content mt-3">
			        <div class="animated fadeIn">
			            <div class="row">

			            	<?php

							$connection=connectToDatabase();

							$sql="SELECT * FROM officail_vehicle";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

			                <div class="col-md-12">
			                    <div class="card">
			                        <div class="card-header">
			                            <center>
			                            	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
			                            	Official Vahicle Listings
			                            	</strong>
			                            </center>
			                        </div>
			                        <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>CAR_Name</center></th>
							                        <th><center>Model</center></th>
							                        <th><center>Manufecturer</center></th>
			                                        <th><center>Engine_Size</center></th>
			                                        <th class="reset"><center>No_of_Seats</center></th>
			                                        <th><center>Price</center></th>
							                        <th><center>Vahicle_No</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

			                                        $id=$row['OFF_VEH_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Car_Name']. '</td>';;
							                        echo '<td style="padding-top: 70px;">'.$row['Model']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Manufecturer']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Engine_Size']. '</td>';
			                                        echo '<td class="reset" style="padding-top: 70px;">'.$row['No_of_Seats']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Price']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Vehicle_No']. '</td>';

						                        echo '</tr>';

						                        }while($row=mysqli_fetch_assoc($res));

						                		?>
						                    </tbody>
					                    </table>
			                        </div>
			                    </div>
			                </div>

			            </div>
			        </div><!-- .animated -->
				</div><!-- .content -->
			</div>
			<div class="col-md-6 col-sx-6 col-lg-6 col-sm-6">
				<div class="content mt-3">
		            <div class="animated fadeIn">
		                <div class="row">

		                	<?php

							$connection=connectToDatabase();

							$sql="SELECT * FROM driver";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

			                <div class="col-md-12">
			                    <div class="card">
			                        <div class="card-header">
			                            <center>
			                            	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
			                            	Driver Listings
			                            	</strong>
			                            </center>
			                        </div>
			                        <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>Name</center></th>
							                        <th><center>Image</center></th>
							                        <th><center>Mobile No</center></th>
							                        <!-- <th><center>Email</center></th> -->
							                        <th><center>Address</center></th>
			                                        <th><center>Gender</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

			                                        $id=$row['Driver_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Full_Name']. '</td>';
							                        echo "<td><img src='admin/images/driver/".$row['Image']."' height='150' width='150'/></td>";
							                        echo '<td style="padding-top: 70px;">'.$row['Mobile_No']. '</td>';
							                        // echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Address']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Gender']. '</td>';
			                                        
						                        echo '</tr>';

						                        }while($row=mysqli_fetch_assoc($res));

						                		?>
						                    </tbody>
					                    </table>
			                        </div>
			                    </div>
			                </div>

		                </div>
		            </div><!-- .animated -->
			    </div><!-- .content -->
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>