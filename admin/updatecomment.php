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
	                        <li class="active">Update Comments</li>
	                    </ol>
	                </div>
	            </div>
	        </div>
	    </div>

	    <?php

		$connection=connectToDatabase();

		$id=$_GET['id'];

		$sql="SELECT * FROM comments WHERE CM_ID = '$id'";

		$res=mysqli_query($connection,$sql);

		$row=mysqli_fetch_assoc($res);

		do
    	{

	    ?>

		<div class="card">
		    <div class="card-header">
		        <strong>Update</strong> Comments
		    </div>
		    <div class="card-body card-block">
		        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

		        	<div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Name</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="name" placeholder="Admin Name" class="form-control" value="<?php echo $row['Name'] ?>">
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="selectSm" class=" form-control-label">Comment Time</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="datetime-local" id="text-input" name="time" placeholder="Time" class="form-control" value="<?php echo $row['CM_Date'] ?>"> 
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
		                    <label for="textarea-input" class=" form-control-label">Message</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <textarea name="message" id="textarea-input" rows="5" placeholder="Message..." class="form-control"><?php echo $row['Message']; ?></textarea>
		                </div>
		            </div>

		            <div class="row form-group">
		                <div class="col col-md-3">
		                    <label for="text-input" class=" form-control-label">Blog ID</label>
		                </div>
		                <div class="col-12 col-md-9">
		                    <input type="text" id="text-input" name="blog_id" placeholder="Blog ID" class="form-control" value="<?php echo $row['Blog_ID'] ?>">
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
				        <a href="comment.php">
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

		if(isset($_POST['update']) && array_key_exists("name",$_POST))
		{

			$connection=connectToDatabase();

			$name=$_POST['name'];
			$time=$_POST['time'];
			$email=$_POST['email'];
			$message=$_POST['message'];
			$blog_id=$_POST['blog_id'];
			$image=$_FILES['pic']['name'];

			if($_FILES['pic']['name'] != "")
			{

				$connection2=connectToDatabase();

				$sql4="UPDATE comments SET Name='$name',Image='$image',CM_Date='$time',Email='$email',Message='$message',Blog_ID='$blog_id' WHERE CM_ID='$id'";

				$row4=mysqli_query($connection2,$sql4);

				$target2="images/comments/".basename($_FILES['pic']['name']);

				move_uploaded_file($_FILES['pic']['tmp_name'], $target2);

			}
			else
			{
				$sql2="UPDATE comments SET Name='$name',CM_Date='$time',Email='$email',Message='$message',Blog_ID='$blog_id' WHERE CM_ID='$id'";

				$row2=mysqli_query($connection,$sql2);
			}

			if ($row2 or $row4) 
			{
				echo '<script language="javascript">';
				echo 'alert("Record Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'comment.php';</script>");
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Record not Updated Successfully")';
				echo '</script>';
				echo("<script>location.href = 'comment.php';</script>");
			}

		}

	?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>