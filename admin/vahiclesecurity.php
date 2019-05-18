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
                        <li><a href="#">Sucurity</a></li>
                        <li class="active">Vahicle Security</li>
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

				$sql="SELECT * FROM officail_vehicle";

				$res=mysqli_query($connection,$sql);

				$row=mysqli_fetch_assoc($res);

				?>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Official Vahicle Listings</strong>
                        </div>
                        <div class="card-body">
		                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <a href='addvahicle.php' style="margin-left: 800px;">
                                    <button type='button' class='btn btn-danger'>ADD VAHICLE</button>
                                </a>
			                    <thead>
			                        <tr>
				                        <th><center>CAR_Name</center></th>
				                        <th><center>Model</center></th>
				                        <th><center>Manufecturer</center></th>
                                        <th><center>Engine_Size</center></th>
                                        <th><center>No_of_Seats</center></th>
                                        <th><center>Price</center></th>
				                        <th><center>Vahicle_No</center></th>
				                        <th><center>Action</center></th>
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
                                        echo '<td style="padding-top: 70px;">'.$row['No_of_Seats']. '</td>';
				                        echo '<td style="padding-top: 70px;">'.$row['Price']. '</td>';
				                        echo '<td style="padding-top: 70px;">'.$row['Vehicle_No']. '</td>';

                                    	echo "<td style='padding-top: 30px;'>
				                        	<a href='updatevahicle.php?id=$row[OFF_VEH_ID]'>
					                        	<button type='button' class='btn btn-info'>UPDATE</button>
					                        </a>

                                            <br><br>

                                            <a href='deletevahicle.php?id=$row[OFF_VEH_ID]'>
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