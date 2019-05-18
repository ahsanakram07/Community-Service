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
	                        <li><a href="#">Visitor</a></li>
	                        <li class="active">Pass</li>
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

						$sql="SELECT * FROM visitor_pass";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

						?>

		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Visitor Pass</strong>
		                        </div>
		                        <div class="card-body">
				                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
					                    <thead>
					                        <tr>
						                        <th><center>Name</center></th>
						                        <!-- <th><center>Email</center></th>
						                        <th><center>Address</center></th> -->
		                                        <th><center>Cnic</center></th>
		                                        <th><center>Phone_No</center></th>
		                                        <th><center>Gender</center></th>
						                        <th><center>No_Of_Members</center></th>
						                        <th><center>Stay</center></th>
						                        <th><center>Status</center></th>
						                        <th><center>Accompany By</center></th>
						                        <th><center>Vahicle_No</center></th>
						                        <th><center>Action</center></th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	<?php

					                    	do
					                    	{

		                                        $id=$row['Visitor_ID'];

					                        echo '<tr>';
						                        echo '<td style="padding-top: 70px;">'.$row['Name']. '</td>';
						                        // echo '<td style="padding-top: 70px;">'.$row['Email']. '</td>';
		                            //             echo '<td style="padding-top: 70px;">'.$row['Address']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['CNIC']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Phone_No']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Gender']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['No_of_Members']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Stay']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Status']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Accompany']. '</td>';
						                        echo '<td style="padding-top: 70px;">'.$row['Vahicle_No']. '</td>';

		                                    	echo "<td style='padding-top: 30px;'>
						                        	<a href='updatevisitor.php?id=$row[Visitor_ID]'>
							                        	<button type='button' class='btn btn-info'>UPDATE</button>
							                        </a>

		                                            <br><br>

		                                            <a href='deletevisitor.php?id=$row[Visitor_ID]'>
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