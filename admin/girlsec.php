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
	                        <li><a href="#">Girls School</a></li>
	                        <li class="active">Security</li>
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

						$sql="SELECT * FROM girls_school";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

						?>

		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Girls School Security</strong>
		                        </div>
		                        <div class="card-body">
				                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
		                                <a href='addgirl.php' style="margin-left: 800px;">
		                                    <button type='button' class='btn btn-danger'>ADD SCHOOL</button>
		                                </a>
					                    <thead>
					                        <tr>
						                        <th><center>SCHOOL Name</center></th>
						                        <th><center>People_Catagory</center></th>
						                        <th><center>Entry_Time</center></th>
		                                        <th><center>Exit_Time</center></th>
						                        <th style="padding-left: 20px;"><center>Action</center></th>
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

		                                    	echo "<td style='padding-top: 30px;'>
						                        	<a href='updategirl.php?id=$row[GS_ID]'>
							                        	<button type='button' class='btn btn-info'>UPDATE</button>
							                        </a>

		                                            <br><br>

		                                            <a href='deletegirl.php?id=$row[GS_ID]'>
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