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
	                        <li class="active">Update Girls School</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM girls_school WHERE GS_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Girls School
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		        	<div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Full Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Girl School Name" class="form-control" value="<?php echo $row['Full_Name'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label class=" form-control-label">People_Catagory</label>
		                </div>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                    	<?php $catagory=$row['People_Catagory']; ?>
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" id="inline-radio1" name="catagory" value="Student" class="form-check-input"
		                            <?php if ($catagory=='Student') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 } 
			                    		?>
			                    	>Student &nbsp
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="catagory" value="Staff" class="form-check-input"
		                            <?php if ($catagory=='Staff') 
			                    	   	{
			                    		?>
			                    			checked="checked"
			                    		<?php
			                    		 } 
			                    		?>
			                    	>Staff &nbsp
		                        </label>
		                    </div>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Entry_Time</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="datetime-local" id="text-input" name="entry" placeholder="Time" class="form-control" value="<?php echo $row['Entry_Time'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Exit_Time</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="datetime-local" id="text-input" name="exit" placeholder="Time" class="form-control" value="<?php echo $row['Exit_Time'] ?>"> 
		                </div>
		            </div>

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="girlsec.php">
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
			$catagory=$_POST['catagory'];
			$entry=$_POST['entry'];
			$exit=$_POST['exit'];
			$admin=$Admin_ID;

			$sql2="UPDATE girls_school SET Full_Name='$name',People_Catagory='$catagory',Entry_Time='$entry',Exit_Time='$exit',Admin_ID='$admin' WHERE GS_ID='$id'";

			$row2=mysqli_query($connection,$sql2);

			if ($row2) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'girlsec.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';	
				echo("<script>location.href = 'girlsec.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>