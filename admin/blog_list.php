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
	                        <li><a href="#">POST</a></li>
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

						$sql="SELECT * FROM blog";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

						?>

		                <div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">POST Listings</strong>
		                        </div>
		                        <div class="card-body">
				                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
		                                <a href='addpost.php' style="margin-left: 800px;">
		                                    <button type='button' class='btn btn-danger'>ADD POST</button>
		                                </a>
					                    <thead>
					                        <tr>
						                        <th><center>Title</center></th>
						                        <th><center>Image</center></th>
						                        <th><center>Date</center></th>
		                                        <th><center>Admin</center></th>
		                                        <th><center>Description</center></th>
		                                        <!-- <th><center>Long_Description</center></th> -->
						                        <th><center>Action</center></th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	<?php

					                    	do
					                    	{

		                                        $id=$row['Blog_ID'];

					                        echo '<tr>';
						                        echo '<td style="padding-top: 70px;">'.$row['Title']. '</td>';
						                        echo "<td><img src='images/blog/".$row['Image']."' height='150' width='300'/></td>";
						                        echo '<td style="padding-top: 70px;">'.$row['Post_Date']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Admin']. '</td>';
		                                        echo '<td style="padding-top: 70px;">'.$row['Description']. '</td>';
		                                        // echo '<td style="padding-top: 70px;">'.$row['Long_Description']. '</td>';

		                                    	echo "<td style='padding-top: 30px;'>
						                        	<a href='updatepost.php?id=$row[Blog_ID]'>
							                        	<button type='button' class='btn btn-info'>UPDATE</button>
							                        </a>

		                                            <br><br>

		                                            <a href='deletepost.php?id=$row[Blog_ID]'>
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