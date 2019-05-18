<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">

		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Agents</li>
		</ul>
	</div>
</div>
<!--//short-->

<?php

	$connection=connectToDatabase();

	$sql="SELECT * FROM agent";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_fetch_assoc($res);
?>

<section id="team" class="about-w3l">
	<h3 class="w3l-titlesc w3l-titlestr">OUR TEAM</h3>
	<div class="container-fluid">
		<div class="row">

			<?php

	    	do
	    	{

			?>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
			    <div class="single-team-member">
			    	<div class="team-img">
				    	<?php
					    	echo "<a data-fancybox='gallery' href='admin/images/team/".$row['Image']."' class='hovs' data-width='2000' data-height='1600'>";
					    		 	
			    				echo "<img id='myImg' src='admin/images/team/".$row['Image']."' style='width:100%; height: 300px;'/>";
							    
						    echo '</a>';
					    ?>
					    <div class="team-social-icon text-center">
			                    <ul style="padding-left: 0px !important;">
				                    <li>
				                        <a href="#">
											<i class="fa fa-facebook"></i>
										</a>
				                    </li>
				                    <li>
				                        <a href="#">
											<i class="fa fa-twitter"></i>
										</a>
				                    </li>
				                    <li>
				                        <a href="#">
											<i class="fa fa-instagram"></i>
										</a>
				                    </li>
			                    </ul>
		                </div>
		            </div>
				    <div class="containerr">
				        <h2><?php echo $row['F_Name']; ?></h2>
				        <p class="title" style="font-size: 20px;">
				        	<b><?php echo $row['Designation']; ?></b>
			        	</p>
				        <p>
				        	<?php

			        		echo '<span class="fsetssss">Experience: &nbsp</span>'.$row['Experience'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">Gender:&nbsp</span>'.$row['Gender'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">Email:&nbsp</span>'.$row['Email'];
			        		echo '<br>';
			        		
				        	?>
			        		
			        	</p>
				        <p>
				        	<?php 

					        echo '<span class="fsetssss">Address:&nbsp</span>'.$row['Address'];

					        ?>
				        	
				        </p> 
				        <button class="button">Contact : 
					        <?php 

					        echo $row['Mobile_No'];

					        ?>
				        </button>
			        </div>
			    </div>
			</div>

			<?php

	        }while($row=mysqli_fetch_assoc($res));

			?>

			
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

