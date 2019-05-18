<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Blog</li>
		</ul>
	</div>
</div>
<!--//short-->

<?php

	$connection=connectToDatabase();

	$sql="SELECT * FROM blog";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_fetch_assoc($res);

?>

<!-- /inner_content -->
<div class="banner_bottom">
	<div class="container">
		<div>
			<h3 class="w3l-titlese w3l-titleblr">BLOG</h3>
		</div>
		<div class="inner_sec_info_w3ls_agile">
			<div class="col-md-12 blog_section">

				<?php

            	do
            	{

            		$id=$row['Blog_ID'];

        		?>

				<div class="col-md-4 blog_img" style="margin-top: 20px;">
					<div class="blog_con">
						
							<?php 
								echo "<a href='single.php?id=$row[Blog_ID]'>";
								echo "<img style='height: 300px !important; width: 100% !important;' class='img-responsive' src='admin/images/blog/".$row['Image']."'";
								echo '</a>';
							?>
						
						<div class="blog_info">
							<h4><?php echo $row['Post_Date'];?></h4>
							<h5><a href="single.php"><?php echo $row['Title'];?></a></h5>
							<ul class="blog_list">
								<li>
									<span class="fa fa-user" aria-hidden="true"></span>
									<a href="#">
										<?php echo $row['Admin'];?>
									</a>
								</li>

							</ul>
							<p><?php echo $row['Description'];?></p>
						</div>
					</div>
				</div>

				<?php

				}while($row=mysqli_fetch_assoc($res));

        		?>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>

