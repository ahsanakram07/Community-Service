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
	                        <li><a href="#">Team Member</a></li>
	                        <li class="active">Listings</li>
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

						$sql="SELECT * FROM agent";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

						?>

		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Team Member Listings</strong>
		                        </div>
		                        <div class="card-body">
				                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
		                                <a href='addagent.php' style="margin-left: 800px;">
		                                    <button type='button' class='btn btn-danger'>ADD TEAM MEMBER</button>
		                                </a>
					                    <thead>
					                        <tr>
						                        <th><center>Name</center></th>
						                        <th><center>Image</center></th>
						                        <th><center>Designation</center></th>
		                                        <th><center>Experiance</center></th>
		                                        <th><center>Gender</center></th>
		                                        <th><center>Mobile No</center></th>
						                        <!-- <th><center>Email</center></th> -->
						                        <th><center>Action</center></th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	<?php

					                    	do
					                    	{

		                                        $id=$row['Agent_ID'];

					                        echo '<tr>';
						                        echo '<td style="padding-top: 70px;">'.$row['F_Name']. '</td>';
						                        echo "<td><img src='images/team/".$row['Image']."' height='150' width='150'/></td>";
						                        echo '<td style="padding-top: 70px;">'.$row['Designation']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Experience']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Gender']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Mobile_No']. '</td>';
						                        // echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';

		                                    	echo "<td style='padding-top: 30px;'>
						                        	<a href='updateagent.php?id=$row[Agent_ID]'>
							                        	<button type='button' class='btn btn-info'>UPDATE</button>
							                        </a>

		                                            <br><br>

		                                            <a href='deleteagent.php?id=$row[Agent_ID]'>
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