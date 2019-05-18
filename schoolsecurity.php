<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Security</li>
			<li> &nbsp &nbsp | &nbsp &nbsp SCHOOL SECURITY</li>
		</ul>
	</div>
</div>
<!--//short-->

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
</section>

<section class="about-w3l backclr">
	<h3 class="w3l-titlesz clrr w3l-titleesecrl">SECURITY LISTINGS</h3>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
				<div class="content mt-3">
		            <div class="animated fadeIn">
		                <div class="row">

		                	<?php

							$connection=connectToDatabase();

							$sql="SELECT * FROM boys_school";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

			                <div class="col-md-12">
			                    <div class="card">
			                        <div class="card-header">
			                        	<center>
			                            	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
			                            	Boys School Security
			                            	</strong>
			                            </center>
			                        </div>
			                        <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>SCHOOL Name</center></th>
							                        <th><center>People_Catagory</center></th>
							                        <th><center>Entry_Time</center></th>
			                                        <th><center>Exit_Time</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

			                                        $id=$row['BS_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Full_Name']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['People_Catagory']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Entry_Time']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Exit_Time']. '</td>';
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
			<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
				<div class="content mt-3">
		            <div class="animated fadeIn">
		                <div class="row">

		                	<?php

							$connection=connectToDatabase();

							$sql="SELECT * FROM girls_school";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

			                <div class="col-md-12">
			                    <div class="card">
			                        <div class="card-header">
			                        	<center>
			                            	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
			                            	Girls School Security
			                            	</strong>
			                            </center>
			                        </div>
			                        <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>SCHOOL Name</center></th>
							                        <th><center>People_Catagory</center></th>
							                        <th><center>Entry_Time</center></th>
			                                        <th><center>Exit_Time</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

			                                        $id=$row['GS_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Full_Name']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['People_Catagory']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Entry_Time']. '</td>';
			                                        echo '<td style="padding-top: 70px;">'.$row['Exit_Time']. '</td>';
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