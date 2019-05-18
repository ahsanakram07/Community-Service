<?php include("header.php"); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include("panel.php"); ?>

        <?php

        $connection=connectToDatabase();

		$sql1="SELECT * FROM agent";

		$sql2="SELECT * FROM blog";

		$sql3="SELECT * FROM bookings";

		$sql4="SELECT * FROM admin";

		$sql5="SELECT * FROM property";

		$sql6="SELECT * FROM serviceman";

		$res1=mysqli_query($connection,$sql1);

		$res2=mysqli_query($connection,$sql2);

		$res3=mysqli_query($connection,$sql3);

		$res4=mysqli_query($connection,$sql4);

		$res5=mysqli_query($connection,$sql5);

		$res6=mysqli_query($connection,$sql6);

		$row1=mysqli_num_rows($res1);

		$row2=mysqli_num_rows($res2);

		$row3=mysqli_num_rows($res3);

		$row4=mysqli_num_rows($res4);

		$row5=mysqli_num_rows($res5);

		$row6=mysqli_num_rows($res6);

        ?>



        <div class="col-sm-12 mb-4">
            <div class="card-group">
                <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-users text-light"></i>
                        </div>

                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo $row1 ?></span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">MEMBERS</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                    <div class="card-body bg-flat-color-2">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-user-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo $row4 ?></span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">ADMINS</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                    <div class="card-body bg-flat-color-3">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-cart-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo $row5 ?></span>
                        </div>
                        <small class="text-light text-uppercase font-weight-bold">PROPERTIES</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                    <div class="card-body bg-flat-color-5">
                        <div class="h1 text-right text-light mb-4">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo $row6 ?></span>
                        </div>
                        <small class="text-uppercase font-weight-bold text-light">SERVICEMEN</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;">
                        	
                        </div>
                    </div>
                </div>
                <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-light text-right mb-4">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="h4 mb-0 text-light"><?php echo $row3 ?></div>
                        <small class="text-light text-uppercase font-weight-bold">BOOKINGS</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                    <div class="card-body bg-flat-color-1">
                        <div class="h1 text-light text-right mb-4">
                            <i class="fa fa-comments-o"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo $row2 ?></span>
                        </div>
                        <small class="text-light text-uppercase font-weight-bold">BLOGS</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
            </div>
	        <div style="padding-top: 15px;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				    <div class="carousel-item active">
				      	<img class="d-block w-100" height="500" src="images/property/1.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" height="500" src="images/property/2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" height="500" src="images/property/6.jpg" alt="Third slide">
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
        </div>
        

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>