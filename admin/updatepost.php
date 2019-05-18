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
	                        <li class="active">Update Post</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM blog WHERE Blog_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Post
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		        	<div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Title</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="title" placeholder="Post Title" class="form-control" value="<?php echo $row['Title'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Post Date</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="date" id="text-input" name="date" placeholder="Time" class="form-control" value="<?php echo $row['Post_Date'] ?>"> 
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Admin Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="admin" placeholder="Name" class="form-control" value="<?php echo $row['Admin'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Description</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="description" id="textarea-input" rows="5" placeholder="Description..." class="form-control"><?php echo $row['Description'] ?></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="textarea-input" class=" form-control-label">Long_Description</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="long_description" id="textarea-input" rows="10" placeholder="Long_Description..." class="form-control"><?php echo $row['Long_Description'] ?></textarea>
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

		            <div class="card-footer">
				        <button type="submit" class="btn btn-primary btn-sm" name="update">
				            <i class="fa fa-dot-circle-o"></i> Update
				        </button>
				        <a href="blog_list.php">
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
			$date=$_POST['date'];
			$admin=$_POST['admin'];
			$description=$_POST['description'];
			$long_description=$_POST['long_description'];				
			$image=$_FILES['pic']['name'];
			$adminpro=$Admin_ID;

			if($_FILES['pic']['name'] != "")
			{

				$connection2=connectToDatabase();

				$sql4="UPDATE blog SET Title='$title',Image='$image',Post_Date='$date',Admin='$admin',Description='$description',Long_Description='$long_description',Admin_ID='$adminpro' WHERE Blog_ID='$id'";

				$row4=mysqli_query($connection2,$sql4);

				$target2="images/blog/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target2);

			}
			else
			{
				$sql2="UPDATE blog SET Title='$title',Post_Date='$date',Admin='$admin',Description='$description',Long_Description='$long_description',Admin_ID='$adminpro' WHERE Blog_ID='$id'";

				$row2=mysqli_query($connection,$sql2);
			}

			if ($row2 or $row4) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'blog_list.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';	
				echo("<script>location.href = 'blog_list.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>