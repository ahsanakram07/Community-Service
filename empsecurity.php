<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Security</li>
			<li> &nbsp &nbsp | &nbsp &nbsp EMPLOYEE SECURITY</li>
		</ul>
	</div>
</div>
<!--//short-->

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
	</section>
</section>

<section class="about-w3l backclr">
	<h3 class="w3l-titlesz clrr w3l-titleesecrl ">SECURITY LISTINGS</h3>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
				<div class="content mt-3">
				    <div class="animated fadeIn">
				        <div class="row">

				        	<?php

							$connection=connectToDatabase();

							$sql="SELECT * FROM employee";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

				            <div class="col-md-12">
				                <div class="card">
				                    <div class="card-header">
				                        <center>
				                        	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
				                        		Employee Security Listings
				                        	</strong>
				                        </center>
				                    </div>
				                    <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>Name</center></th>
							                        <th><center>Image</center></th>
							                        <th><center>Gender</center></th>
							                        <th><center>Address</center></th>
				                                    <th><center>Mobile No</center></th>
				                                    <!-- <th><center>Email</center></th> -->
							                        <th><center>Joining Date</center></th>
							                        <th><center>Exit Date</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

				                                    $id=$row['Emp_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Full_Name']. '</td>';
							                        echo "<td><center><img src='admin/images/employee/".$row['Image']."' height='100' width='50' style='padding-top: 10px;'/></center></td>";
							                        echo '<td style="padding-top: 70px;">'.$row['Gender']. '</td>';
				                                    echo '<td style="padding-top: 70px;">'.$row['Address']. '</td>';
				                                    
				                                    echo '<td style="padding-top: 70px;">'.$row['Mobile_No']. '</td>';
							                        // echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Emp_Entrance']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Emp_Exit']. '</td>';

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

							$sql="SELECT * FROM employee_family";

							$res=mysqli_query($connection,$sql);

							$row=mysqli_fetch_assoc($res);

							?>

				            <div class="col-md-12">
				                <div class="card">
				                    <div class="card-header">
				                        <center>
				                        	<strong class="card-title" style="font-size: 22px; color: #607d8b;">
				                        		Employee Family Security Listings
				                        	</strong>
				                        </center>
				                    </div>
				                    <div class="card-body">
					                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
						                    <thead>
						                        <tr>
							                        <th><center>Family Name</center></th>
							                        <th><center>Location</center></th>
							                        <th><center>Phone_No</center></th>
				                                    <th class="reset"><center>Email</center></th>
							                        <th><center>Joining Date</center></th>
							                        <th><center>Exit Date</center></th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                    	<?php

						                    	do
						                    	{

				                                    $id=$row['FM_ID'];

						                        echo '<tr>';
							                        echo '<td style="padding-top: 70px;">'.$row['Family_Name']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Location']. '</td>';
				                                    echo '<td style="padding-top: 70px;">'.$row['Phone_No']. '</td>';
							                        echo '<td class="reset" style="padding-top: 70px;">'.$row['Email']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Fam_Entrance']. '</td>';
							                        echo '<td style="padding-top: 70px;">'.$row['Fam_Exit']. '</td>';

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