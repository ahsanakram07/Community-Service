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
	                        <li class="active">Update Serviceman</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM serviceman WHERE Serviceman_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Serviceman
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		        	<div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Full Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Serviceman Name" class="form-control" value="<?php echo $row['Full_Name'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Designation</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="designation" id="SelectLm" class="form-control-sm form-control">
		                        <option value="<?php echo $row['Designation']; ?>"><?php echo $row['Designation']; ?></option>
		                        <option value="Electrician">Electrician</option>
		                        <option value="Plumber">Plumber</option>
		                        <option value="Painter">Painter</option>
		                        <option value="Carpenter">Carpenter</option>
		                        <option value="Gardener">Gardener</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Experiance</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="experiance" placeholder="YEARS" class="form-control" value="<?php echo $row['Experiance']; ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">Gender</label>
		                </div>
		                <div class="col col-md-9">
		                	<?php $gender=$row['Gender']; ?>
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="gender" value="Male" class="form-check-input"
		                            <?php if ($gender=='Male') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		} 
			                    		?>
			                    	>Male &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="gender" value="Female" class="form-check-input"
		                            <?php if ($gender=='Female') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		} 
			                    	?>
			                    	>Female &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">CNIC Number</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="cnic" placeholder="Number" class="form-control" value="<?php echo $row['CNIC']; ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Mobile No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="mobile" placeholder="Number" class="form-control" value="<?php echo $row['Mobile_No']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Email</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="email" id="text-input" name="email" placeholder="Email Address" class="form-control" value="<?php echo $row['Email']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Address</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="address" id="textarea-input" rows="5" placeholder="Address..." class="form-control"><?php echo $row['Address']; ?></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">Status</label>
		                </div>
		                <div class="col col-md-9">
		                	<?php $Status=$row['Status']; ?>
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="status" value="Free" class="form-check-input"
		                            <?php if ($Status=='Free') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		} 
			                    		?>
			                    	>Free &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="status" value="Busy" class="form-check-input"
		                            <?php if ($Status=='Busy') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		} 
			                    	?>
			                    	>Busy &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="file-input" class=" form-control-label">Upload Image</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="file" id="file-input" name="pic" value="<?php echo $row['Image']; ?>" class="form-control-file">
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="serviceman.php">
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
			$designation=$_POST['designation'];
			$experiance=$_POST['experiance'];
			$status=$_POST['status'];
			$gender=$_POST['gender'];
			$cnic=$_POST['cnic'];
			$mobile=$_POST['mobile'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$image=$_FILES['pic']['name'];
			$admin=$Admin_ID;

			if($_FILES['pic']['name'] != "")
			{

				$connection2=connectToDatabase();

				$sql4="UPDATE serviceman SET Full_Name='$name',Designation='$designation',Experiance='$experiance',Image='$image',Status='$status',Gender='$gender',CNIC='$cnic',Mobile_No='$mobile',Email='$email',Address='$address',Admin_ID='$admin' WHERE Serviceman_ID='$id'";

				$row4=mysqli_query($connection2,$sql4);

				$target2="images/serviceman/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target2);
			}
			else
			{
				$sql2="UPDATE serviceman SET Full_Name='$name',Designation='$designation',Experiance='$experiance',Status='$status',Gender='$gender',CNIC='$cnic',Mobile_No='$mobile',Email='$email',Address='$address',Admin_ID='$admin' WHERE Serviceman_ID='$id'";

				$row2=mysqli_query($connection,$sql2);
			}

			
			if ($row2 or $row4) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'serviceman.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';
				echo mysqli_error($connection);	
				// echo("<script>location.href = 'serviceman.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>