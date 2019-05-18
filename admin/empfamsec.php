<?php include("header.php"); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include("panel.php"); ?>

	    <div class="breadcrumbs">
	    	<div class="col-sm-4">
	            <div class="page-header float-left">
	                <div class="page-title">
	                    <h1>Dashboard</h1>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-8">
	            <div class="page-header float-right">
	                <div class="page-title">
	                    <ol class="breadcrumb text-right">
	                        <li><a href="#">Dashboard</a></li>
	                        <li><a href="#">Employee</a></li>
	                        <li class="active">Family Security</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

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
		                        <strong class="card-title">Employee Family Security Listings</strong>
		                    </div>
		                    <div class="card-body">
			                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
		                            <a href='addempfam.php' style="margin-left: 800px;">
		                                <button type='button' class='btn btn-danger'>ADD EMPLOYEE FAMILY</button>
		                            </a>
				                    <thead>
				                        <tr>
					                        <th><center>Family Name</center></th>
					                        <th><center>Location</center></th>
					                        <th><center>Phone_No</center></th>
		                                    <th><center>Email</center></th>
					                        <th><center>Joining Date</center></th>
					                        <th><center>Exit Date</center></th>
					                        <th><center>Action</center></th>
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
					                        echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';
					                        echo '<td style="padding-top: 70px;">'.$row['Fam_Entrance']. '</td>';
					                        echo '<td style="padding-top: 70px;">'.$row['Fam_Exit']. '</td>';

		                                	echo "<td style='padding-top: 30px;'>
					                        	<a href='updateempfam.php?id=$row[FM_ID]'>
						                        	<button type='button' class='btn btn-info'>UPDATE</button>
						                        </a>

		                                        <br><br>

		                                        <a href='deleteempfam.php?id=$row[FM_ID]'>
		                                    		<button type='button' class='btn btn-warning'>DELETE</button>
		                                        </a>
		                                		
		                                	</td>";
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

	</div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>