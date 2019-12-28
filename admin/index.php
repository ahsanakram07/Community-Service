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
                        <div id="record1" class="progress progress-xs mt-3 mb-0 bg-light" style="height: 5px;"></div>
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

            <?php

                $booking_sql = "SELECT Booking_Date FROM bookings";

                $result=mysqli_query($connection,$booking_sql);
                $row=mysqli_fetch_assoc($result);

                $bookings = array();

                do
                {
                    $bookings[] = $row['Booking_Date'];
                }while($row=mysqli_fetch_assoc($result));

                foreach ($bookings as $value) 
                {
                    $bookings_dates[] = date('F-Y',$value++);
                }

                $monthly_bookings = array_count_values($bookings_dates);
                $header['Month'] = 'Bookings'; 

                $chart_date = $header + $monthly_bookings;

                $json_data = json_encode($chart_date);

            ?>

            <div id="phpJS"><?php echo $json_data ?></div>

            <script type="text/javascript">

                var chart_data = document.getElementById('phpJS').innerHTML;
                var correct_format = JSON.parse(chart_data);
                var correct_json_string = JSON.stringify(correct_format);
                var correct_json_object = JSON.parse(correct_json_string);

                var correct_json_array = Object.entries(correct_json_object);

                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() 
                {
                    var data = google.visualization.arrayToDataTable(correct_json_array);

                    var view = new google.visualization.DataView(data);

                    var options = 
                    {
                        title: "Monthly Bookings",
                        width: 1090,
                        height: 400,
                        chartArea: {
                            left: 40,
                            top: 10,
                            width: 1080,
                            height: 350
                        },
                        colors: ['#117a8b']
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("bookings_chart"));
                    chart.draw(view, options);
                }
            </script>

            <div class="container" style="padding: 20px; color: #00000087">
                <h1>Monthly Bookings</h1>
            </div>
            <div id="bookings_chart" style="width: 100%; height: 300px;"></div>

        </div>
        

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>