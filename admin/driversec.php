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
	                        <li><a href="#">Vahicle</a></li>
	                        <li class="active">Driver Security</li>
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

						$sql="SELECT * FROM driver";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

						?>

		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Driver Listings</strong>
		                        </div>
		                        <div class="card-body">
				                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
		                                <a href='adddriver.php' style="margin-left: 800px;">
		                                    <button type='button' class='btn btn-danger'>ADD Driver</button>
		                                </a>
					                    <thead>
					                        <tr>
						                        <th><center>Name</center></th>
						                        <th><center>Image</center></th>
						                        <th><center>Mobile No</center></th>
						                        <th><center>Email</center></th>
						                        <th><center>Address</center></th>
		                                        <th><center>Gender</center></th>                      
						                        <th><center>Action</center></th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	<?php

					                    	do
					                    	{

		                                        $id=$row['Driver_ID'];

					                        echo '<tr>';
						                        echo '<td style="padding-top: 70px;">'.$row['Full_Name']. '</td>';
						                        echo "<td><img src='images/driver/".$row['Image']."' height='150' width='150'/></td>";
						                        echo '<td style="padding-top: 70px;">'.$row['Mobile_No']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Address']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Gender']. '</td>';
		                                        

		                                    	echo "<td style='padding-top: 30px;'>
						                        	<a href='updatedriver.php?id=$row[Driver_ID]'>
							                        	<button type='button' class='btn btn-info'>UPDATE</button>
							                        </a>

		                                            <br><br>

		                                            <a href='deletedriver.php?id=$row[Driver_ID]'>
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