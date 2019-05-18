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
                            <li class="active">Profile</li>
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

					$sql="SELECT * FROM admin";

					$res=mysqli_query($connection,$sql);

					$row=mysqli_fetch_assoc($res);

					?>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Profile Details</strong>
                        </div>
                        <div class="card-body">
		                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
			                    <thead>
			                        <tr>
				                        <th>Name</th>
				                        <th>Image</th>
				                        <th>Email</th>
				                        <th>Gender</th>
				                        <th>Action</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                    	<?php

			                    	do
			                    	{

			                        echo '<tr>';
				                        echo '<td>'.$row['firstname']. '&nbsp' .$row['lastname']. '</td>';
				                        echo "<td><img src='images/profile/".$row['image']."' height='150' width='150'/></td>";
				                        echo '<td>'.$row['Email'].'</td>';
				                        echo '<td>'.$row['gender'].'</td>';
				                        echo "<td>
                                            <a href='updateprofile.php?id=$row[admin_ID]'>
    				                        	<button type='button' class='btn btn-info'>UPDATE</button>
                                            </a>
                                    		<a href='deleteprofile.php?id=$row[admin_ID]'>
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