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
	                        <li class="active">Update Visitor Pass</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM visitor_pass WHERE Visitor_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Visitor Pass
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class="form-control-label">Full Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Visitor Name" class="form-control" value="<?php echo $row['Name'] ?>">
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
		                    <label for="selectSm" class=" form-control-label">CNIC</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="cnic" placeholder="CNIC NUMBER" class="form-control" value="<?php echo $row['CNIC']; ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Phone No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="phone" placeholder="Number" class="form-control" value="<?php echo $row['Phone_No']; ?>">
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
		                    <label for="text-input" class=" form-control-label">No Of Members</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="members" placeholder="Members" class="form-control" value="<?php echo $row['No_of_Members']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Stay</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="stay" placeholder="Stay For Days" class="form-control" value="<?php echo $row['Stay']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Status</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="status" placeholder="Stay Status" class="form-control" value="<?php echo $row['Status']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Accompany By</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="accompany" placeholder="Stay Status" class="form-control" value="<?php echo $row['Accompany']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Vahicle_No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="vahicle" placeholder="Stay Status" class="form-control" value="<?php echo $row['Vahicle_No']; ?>">
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="visitor.php">
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
			$email=$_POST['email'];
			$address=$_POST['address'];
			$cnic=$_POST['cnic'];
			$phone=$_POST['phone'];
			$gender=$_POST['gender'];
			$members=$_POST['members'];
			$stay=$_POST['stay'];
			$status=$_POST['status'];
			$accompany=$_POST['accompany'];
			$vahicle=$_POST['vahicle'];
			$admin=$Admin_ID;

			$sql2="UPDATE visitor_pass SET Name='$name',Email='$email',Address='$address',CNIC='$cnic',Phone_No='$phone',Gender='$gender',No_of_Members='$members',Stay='$stay',Status='$status',Accompany='$accompany',Vahicle_No='$vahicle',Admin_ID='$admin' WHERE Visitor_ID='$id'";

			$row2=mysqli_query($connection,$sql2);

			if ($row2) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'visitor.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")'.mysqli_error($connection);
				echo '</script>';	
				echo("<script>location.href = 'visitor.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>