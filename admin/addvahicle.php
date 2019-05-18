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
	                        <li><a href="#">Vahicle Security</a></li>
	                        <li class="active">Add Vahicle</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

		<div class="card">
		    <div class="card-header">
		        <strong>Add</strong> Vahicle
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Car Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Enter Name" class="form-control" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Car Model</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="model" placeholder="Modal No" class="form-control" required=""> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Manufecturer</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="manufecturer" placeholder="Enter Company Name" class="form-control"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Engine_Size</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="size" placeholder="Enter Size" class="form-control"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">No_of_Seats</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="seats" placeholder="Enter Seats" class="form-control"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Price</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="price" placeholder="Enter Price" class="form-control" required=""> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Vahicle_No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="no" placeholder="Enter Vahicle No" class="form-control" required=""> 
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="add">
				            <i class="fa fa-dot-circle-o"></i> Submit
				        </button>
				        <button type="reset" class="btn btn-danger btn-sm">
				            <i class="fa fa-ban"></i> Reset
				        </button>
				    </div>

		        </form>    
		    </div>
		</div>

		<?php

			$connection1=connectToDatabase();

			$fname=$_SESSION['uname'];
			$pwd=$_SESSION['pwd'];

			$sql1="SELECT * FROM admin WHERE firstname='$fname' AND Password='$pwd'";

			$res1=mysqli_query($connection1,$sql1);

			$row1=mysqli_fetch_assoc($res1);

			$Admin_ID=$row1['admin_ID'];

		?>

		<?php

			$_POST['dummy']="dummy";

			if(isset($_POST['add']) && array_key_exists("name",$_POST))
			{

				$connection=connectToDatabase();

				$name=$_POST['name'];
				$model=$_POST['model'];
				$manufecturer=$_POST['manufecturer'];
				$size=$_POST['size'];
				$seats=$_POST['seats'];
				$price=$_POST['price'];
				$no=$_POST['no'];
				$admin=$Admin_ID;

				$sql="INSERT INTO officail_vehicle(Car_Name,Model,Manufecturer,Engine_Size,No_of_Seats,Price,Vehicle_No,Admin_ID) VALUES ('$name','$model','$manufecturer','$size','$seats','$price','$no','$admin')";

				$row=mysqli_query($connection,$sql);

				if ($row) 
				{
					echo '<script language="javascript">';
					echo 'alert("Record Inserted Successfully")';
					echo '</script>';
					echo("<script>location.href = 'vahiclesecurity.php';</script>");
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Record not Inserted Successfully")';
					echo '</script>';
					echo "Record not Inserted Successfully".mysqli_error($connection);	
				}

			}

		?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>