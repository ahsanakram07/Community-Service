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
	                        <li class="active">Update Property</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM property WHERE Property_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Property
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Title</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="title" placeholder="Property Title" class="form-control" value="<?php echo $row['Title'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Type</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="type" id="SelectLm" class="form-control-sm form-control">
		                        <option value="<?php echo $row['Property_Type']; ?>"><?php echo $row['Property_Type']; ?></option>
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
		                    <select name="area" id="SelectLm" class="form-control-sm form-control">
		                        <option value="<?php echo $row['Area']; ?>"><?php echo $row['Area']; ?></option>
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
		                    <input type="text" id="text-input" name="price" placeholder="Property Title" class="form-control" value="<?php echo $row['Price']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">No Of Floors</label>
		                </div>
		                <div class="col col-md-9">
		                	<?php $floor=$row['Total_Floor']; ?>
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="floor" value="one" class="form-check-input" 
			                            <?php if ($floor=='one') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 	} 
			                    		?>
		                    		>One &nbsp
		                        </label>
		                    	
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="floor" value="two" class="form-check-input"
		                            <?php if ($floor=='two') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 	} 
			                    		?>
			                    	>Two &nbsp
		                        </label>
		                        <label for="inline-radio3" class="form-check-label ">
		                            <input type="radio" id="inline-radio3" name="floor" value="three" class="form-check-input"
		                            <?php if ($floor=='three') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 	} 
			                    		?>
		                    		>Three &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Construction Age</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="age" placeholder="YEARS" class="form-control" value="<?php echo $row['Construction_Age']; ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">Furnished</label>
		                </div>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                    	<?php $furnish=$row['Furnish']; ?>
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="furnish" value="Yes" class="form-check-input"
		                            <?php if ($furnish=='Yes') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 	} 
			                    		?>
			                    	>Yes &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="furnish" value="No" class="form-check-input"
		                            <?php if ($furnish=='No') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 	} 
			                    		?>
			                    	>No &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="file-input" class=" form-control-label">Registration Date</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="date" id="regdate" name="regdate" class="form-control-file" value="<?php echo $row['Reg_Date']; ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Address</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="address" id="textarea-input" rows="5" placeholder="Property Address..." class="form-control"><?php echo $row['Address']; ?></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Purpose</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <select name="purpose" id="SelectLm" class="form-control-sm form-control">
		                        <option value="<?php echo $row['purpose']; ?>"><?php echo $row['purpose']; ?></option>
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
		                    <textarea name="description" id="textarea-input" rows="9" class="form-control"><?php echo $row['description']; ?></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="file-input" class=" form-control-label">Upload Image</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="file" id="file-input" value="<?php echo $row['Image']; ?>" name="pic" class="form-control-file">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Agent_ID</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="ID" placeholder="Agent ID"  required="" class="form-control" value="<?php echo $row['Agent_ID']; ?>">
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="property_listings.php">
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

		if(isset($_POST['update']) && array_key_exists("title",$_POST))
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

			if($_FILES['pic']['name'] != "")
			{

				$connection2=connectToDatabase();

				$sql4="UPDATE property SET Title='$title',Area='$area',Price='$price',Construction_Age='$age',Furnish='$furnish',Property_Type='$type',Reg_Date='$regdate',Address='$address',Total_Floor='$floor',Image='$image',purpose='$purpose',description='$description',Agent_ID='$agent',Admin_ID='$admin' WHERE Property_ID='$id'";

				$row4=mysqli_query($connection2,$sql4);

				$target2="images/property/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target2);
			}
			else
			{
				$sql2="UPDATE property SET Title='$title',Area='$area',Price='$price',Construction_Age='$age',Furnish='$furnish',Property_Type='$type',Reg_Date='$regdate',Address='$address',Total_Floor='$floor',purpose='$purpose',description='$description',Agent_ID='$agent',Admin_ID='$admin' WHERE Property_ID='$id'";

				$row2=mysqli_query($connection,$sql2);
			}

			if ($row2 or $row4) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'property_listings.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';	
				echo("<script>location.href = 'property_listings.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>