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
	                        <li class="active">Update Vahicle</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM officail_vehicle WHERE OFF_VEH_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Vahicle
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		        	<div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Car Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $row['Car_Name'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Car Model</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="model" placeholder="Modal No" class="form-control" value="<?php echo $row['Model'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Manufecturer</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="manufecturer" placeholder="Enter Company Name" class="form-control" value="<?php echo $row['Manufecturer'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Engine_Size</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="size" placeholder="Enter Size" class="form-control" value="<?php echo $row['Engine_Size'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">No_of_Seats</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="seats" placeholder="Enter Seats" class="form-control" value="<?php echo $row['No_of_Seats'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Price</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="price" placeholder="Enter Price" class="form-control" value="<?php echo $row['Price'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Vahicle_No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="no" placeholder="Enter Vahicle No" class="form-control" value="<?php echo $row['Vehicle_No'] ?>"> 
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="vahiclesecurity.php">
					        <div class="btn btn-danger btn-sm">
					            <i class="fa fa-ban"></i> Cancel
					        </div>
				        </a>
				    </div>
		        </form>    
		    </div>
		</div>

		<?php

		}while($row=mysqli_fetch_assoc($res));

		?>

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

		if(isset($_POST['update']) && array_key_exists("name",$_POST))
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

			$sql2="UPDATE officail_vehicle SET Car_Name='$name',Model='$model',Manufecturer='$manufecturer',Engine_Size='$size',No_of_Seats='$seats',Price='$price',Vehicle_No='$no',Admin_ID='$admin' WHERE OFF_VEH_ID='$id'";

			$row2=mysqli_query($connection,$sql2);

			if ($row2) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'vahiclesecurity.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';	
				echo("<script>location.href = 'vahiclesecurity.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>