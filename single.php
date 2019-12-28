<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li><a href="blog.php">Blog</a></li>
			<li> &nbsp &nbsp | &nbsp &nbsp Single Post</li>
		</ul>
	</div>
</div>
<!--//short-->

<?php

	$connection=connectToDatabase();

	$id=$_GET['id'];

	$sql="SELECT * FROM blog WHERE Blog_ID = '$id'";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_fetch_assoc($res);

?>

<!-- /inner_content -->
<div class="banner_bottom">
	<div class="container">
		<div class="tittle_head">
			<h3 class="w3l-titles w3l-titlespr">Single Post</h3>
		</div>
		<div class="inner_sec_info_w3ls_agile">

		<?php

		do
    	{

	    ?>
			<div class="col-md-12 blog_section">
				<div class="blog_img single">
					<div class="single-left1">
						<?php 
								echo "<img style='height: 500px !important; width: 100% !important;' class='img-responsive' src='admin/images/blog/".$row['Image']."'";
						?>
						<div class="bsetp">
							<h1><?php echo $row['Title'];?></h1>
						</div>
						<ul class="blog_list single">
							<li>
								<span class="fa fa-user" aria-hidden="true"></span>
								<a href="#">
									<?php echo $row['Admin'];?>
								</a>
							</li>
						</ul>
						<p><?php echo $row['Long_Description'];?></p>
					</div>

					<?php

						$connection3=connectToDatabase();

						$sql3="SELECT * FROM comments WHERE Blog_ID = '$id'";

						$res3=mysqli_query($connection3,$sql3);

						$row3=mysqli_fetch_assoc($res3);

					?>

					<div class="comments">
						<h3>Our Recent <span>Comments</span></h3>

						<div class="comments-grids">
							<?php
								do
								{
							?>
							<div class="comments-grid">
								<div class="comments-grid-left">
									<?php
										echo "<img style='height: 135px;width: 125px;' class='img-responsive' src='admin/images/comments/".$row3['Image']."'/>";
									?>
								</div>
								<div class="comments-grid-right">
									<h4><a href="#"><?php echo $row3['Name']; ?></a></h4>
									<ul>
										<li><?php echo $row3['CM_Date']; ?> <i>|</i></li>
										<li><a href="#"><?php echo $row3['Email']; ?></a></li>
									</ul>
									<p><?php echo $row3['Message']; ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php
								}while($row3=mysqli_fetch_assoc($res3));
							?>
						</div>

					</div>
					<div class="contact-form left_bar">
						<h3>Leave a <span>Comment</span></h3>
						<form method="post" action="" enctype="multipart/form-data">
							<div class="left_form">
								<div>
									<span><label>Name</label></span>
									<span><input name="userName" type="text" class="textbox" required=""></span>
								</div>
								<div>
									<span><label>E-mail</label></span>
									<span><input name="userEmail" type="text" class="textbox" required=""></span>
								</div>
								<div style="margin-top: 38px; margin-left: 15px;">
									<span><label>Upload Image</label></span>
									<span><input name="pic" type="file" class="textbox" required=""></span>
								</div>
							</div>
							<div class="right_form">
								<div>
									<span><label>Message</label></span>
									<span><textarea name="Message" required=""> </textarea></span>
								</div>
								<div>
									<span>
										<input name="add" type="submit" value="Submit" class="myButton">
									</span>
								</div>
							</div>
							<div class="clearfix"></div>
						</form>

						<?php

							$_POST['dummy']="dummy";

							if(isset($_POST['add']) && array_key_exists("userName",$_POST))
							{

								$connection2=connectToDatabase();

								$userName=$_POST['userName'];
								$userEmail=$_POST['userEmail'];
								$image=$_FILES['pic']['name'];
								$Message=$_POST['Message'];

								$sql2="INSERT INTO comments(Name,Email,Image,CM_Date,Message,Blog_ID) VALUES ('$userName','$userEmail','$image',NOW(),'$Message','$id')";

								$row2=mysqli_query($connection2,$sql2);

								$target="admin/images/comments/".basename($_FILES['pic']['name']);

								move_uploaded_file($_FILES['pic']['tmp_name'], $target);

								if ($row2) 
								{
									echo '<script language="javascript">';
									echo 'alert("Comment Posted Successfully")';
									echo '</script>';
									echo("<script>location.href = 'single.php?id=$row[Blog_ID]';</script>");
								}
								else
								{
									echo '<script language="javascript">';
									echo 'alert("Comment not Posted Successfully")';
									echo '</script>';
									echo("<script>location.href = 'single.php?id=$row[Blog_ID]';</script>");	
								}
							}
						?>

					</div>
				</div>

			</div>

		<?php

		}while($row=mysqli_fetch_assoc($res));

		?>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>