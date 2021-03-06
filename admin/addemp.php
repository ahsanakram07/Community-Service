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
	                        <li class="active">Add Employee</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

		<div class="card">
		    <div class="card-header">
		        <strong>Add</strong> Employee
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Full Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Employee Name" class="form-control" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">Gender</label>
		                </div>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="gender" value="Male" class="form-check-input" required="">Male &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="gender" value="Female" class="form-check-input" required="">Female &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Address</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="address" id="textarea-input" rows="5" placeholder="Employee Address..." class="form-control" required=""></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Mobile No</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="mobile" placeholder="Number" class="form-control" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Email</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="email" id="text-input" name="email" placeholder="Email Address" class="form-control" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Joining Date</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="date" id="text-input" name="entrance" class="form-control" required=""> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Exit Date</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="date" id="text-input" name="exit" class="form-control" required=""> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="file-input" class=" form-control-label">Upload Image</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="file" id="file-input" value="Image" name="pic" class="form-control-file" required="">
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
				$gender=$_POST['gender'];
				$address=$_POST['address'];
				$mobile=$_POST['mobile'];
				$email=$_POST['email'];
				$entrance=$_POST['entrance'];
				$exit=$_POST['exit'];				
				$image=$_FILES['pic']['name'];
				$admin=$Admin_ID;

				$sql="INSERT INTO employee(Full_Name,Image,Gender,Address,Mobile_No,Email,Emp_Entrance,Emp_Exit,Admin_ID) VALUES ('$name','$image','$gender','$address','$mobile','$email','$entrance','$exit','$admin')";

				$row=mysqli_query($connection,$sql);

				$target="images/employee/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target);

				if ($row) 
				{
					echo '<script language="javascript">';
					echo 'alert("Record Inserted Successfully")';
					echo '</script>';
					echo("<script>location.href = 'empsecurity.php';</script>");
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