<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Properties</li>
			<li> &nbsp &nbsp | &nbsp &nbsp Single Property</li>
		</ul>
	</div>
</div>
<!--//short-->

<?php

	$connection=connectToDatabase();

	$id=$_GET['id'];

	$sql="SELECT * FROM property WHERE Property_ID = '$id'";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_fetch_assoc($res);

?>

<!-- /inner_content -->
<div class="banner_bottom">
	<div class="container">
		<div class="tittle_head">
			<h3 class="w3l-titlesmp w3l-titlesspr">Single Property</h3>
		</div>
		<div class="inner_sec_info_w3ls_agile">

		<?php

		do
    	{

	    ?>
			<div class="col-md-12 blog_section">
				<div class="blog_img single">
					<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8">
						<div class="single-left1">
							<?php 
									echo "<img style='height: 500px !important; width: 100% !important;' class='img-responsive' src='admin/images/property/".$row['Image']."'";
							?>
							<div>
								<div class="bsetp">
									<h1><?php echo $row['Title'];?></h1>
								</div>
								<ul style="text-align: center;" class="blog_list single">
									<li>
										<span class="fa fa-user" aria-hidden="true"></span>
										<a href="#">
											<?php echo $row['Property_Type'];?>
										</a>
									</li>
								</ul>
								<p class="sets"><?php echo $row['description'];?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4" style="padding-top: 42px;">
						<?php
						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Property Title :  
								".$row['Title'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Property Type :  
									".$row['Property_Type'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									For :  
									".$row['purpose'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Area :  
									".$row['Area'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Price :  
									".$row['Price'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Total_Floor :  
									".$row['Total_Floor'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Furnished :  
									".$row['Furnish'].
								'</div>'.
								'<br>';

						echo "	<div style='font-size: 20px;color: #3F51B5;text-shadow: 0 0 5px #673AB7, 0 0 10px #A5F1FF, 0 0 20px #A5F1FF, 0 0 30px #A5F1FF, 0 0 40px #A5F1FF;'>
									Address :   
									".$row['Address'].
								'</div>'.
								'<br>';
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