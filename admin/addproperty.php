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
	                        <li class="active">Add Property</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

		<div class="card">
		    <div class="card-header">
		        <strong>Add</strong> Property
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Title</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="title" placeholder="Property Title"  required="" class="form-control">
		                </div>
		            </div>
		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Type</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="type" id="SelectLm" class="form-control-sm form-control"  required="">
		                        <option value="">Please select</option>
		                        <option value="Residential Plot">Residential Plot</option>
		                        <option value="Commercial Plot">Commercial Plot</option>
		                        <option value="House">House</option>
		                        <option value="Appartment">Appartment</option>
		                        <option value="Office">Office</option>
		                        <option value="Plaza">Plaza</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Area</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="area" id="SelectLm" class="form-control-sm form-control"  required="">
		                        <option value="">Please select</option>
		                        <option value="2 Marla">2 Marla</option>
		                        <option value="3 Marla">3 Marla</option>
		                        <option value="5 Marla">5 Marla</option>
		                        <option value="10 Marla">10 Marla</option>
		                        <option value="15 Marla">15 Marla</option>
		                        <option value="20 Marla">20 Marla</option>
		                        <option value="1 Kanal">1 Kanal</option>
		                        <option value="2 Kanal">2 Kanal</option>
		                        <option value="3 Kanal">3 Kanal</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Price</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="price" placeholder="Property Title" class="form-control" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">No Of Floors</label>
		                </div>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="floor" value="one" class="form-check-input" required="">One &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="floor" value="two" class="form-check-input" required="">Two &nbsp
		                        </label>
		                        <label for="inline-radio3" class="form-check-label ">
		                            <input type="radio" id="inline-radio3" name="floor" value="three" class="form-check-input" required="">Three &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Construction Age</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="age" placeholder="YEARS" class="form-control"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">Furnished</label>
		                </div>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="furnish" value="Yes" class="form-check-input" required="">Yes &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="furnish" value="No" class="form-check-input" required="">No &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="file-input" class=" form-control-label">Registration Date</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="date" id="regdate" name="regdate" class="form-control-file" required="">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Address</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="address" id="textarea-input" rows="5" placeholder="Property Address..." class="form-control" required=""></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Purpose</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="purpose" id="SelectLm" class="form-control-sm form-control" required="">
		                        <option value="">Please select</option>
		                        <option value="Sale">Sale</option>
		                        <option value="Rent">Rent</option>
		                        <option value="Advertisement">Advertisement</option>
		                        <option value="Others">Others</option>
		                    </select>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Description</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="description" id="textarea-input" rows="9" placeholder="Describe Your Property..." class="form-control" required=""></textarea>
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

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Agent_ID</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="ID" placeholder="Agent ID"  required="" class="form-control">
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

			if(isset($_POST['add']) && array_key_exists("title",$_POST))
			{

				$connection=connectToDatabase();

				$title=$_POST['title'];
				$type=$_POST['type'];
				$area=$_POST['area'];
				$price=$_POST['price'];
				$floor=$_POST['floor'];
				$age=$_POST['age'];
				$furnish=$_POST['furnish'];
				$regdate=$_POST['regdate'];
				$address=$_POST['address'];
				$purpose=$_POST['purpose'];
				$description=$_POST['description'];
				$image=$_FILES['pic']['name'];
				$agent=$_POST['ID'];
				$admin=$Admin_ID;

				$sql="INSERT INTO property(Title,Area,Price,Construction_Age,Furnish,Property_Type,Reg_Date,Address,Total_Floor,Image,purpose,description,Agent_ID,Admin_ID) VALUES ('$title','$area','$price','$age','$furnish','$type','$regdate','$address','$floor','$image','$purpose','$description','$agent','$admin')";

				$row=mysqli_query($connection,$sql);

				$target="images/property/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target);

				if ($row) 
				{
					echo '<script language="javascript">';
					echo 'alert("Record Inserted Successfully")';
					echo '</script>';
					echo("<script>location.href = 'property_listings.php';</script>");
				}
				else
				{
					echo "Record not Inserted Successfully".mysqli_error($connection);	
				}

			}

		?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>