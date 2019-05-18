<?php

session_start();

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="description" content="Community Service at Your Palm">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/jpg" href="../images/logo.jpg">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <!-- <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet"> -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/logo2.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> 
                            <i class="menu-icon fa fa-dashboard"></i>
                            Dashboard
                        </a>
                    </li>


                    <h3 class="menu-title">PROPERTIES</h3><!-- /.menu-title -->
                    <li>
                        <a href="property_listings.php">
                            <i class="menu-icon fa fa-laptop"></i>
                            PROPERTY LISTINGS
                        </a>
                    </li>
                    <li>
                        <a href="agents_listing.php"> 
                            <i class="menu-icon fa fa-table"></i>
                            MEMBER LISTINGS
                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>
                            BLOG
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa fa-map-o">
                                    
                                </i>
                                <a href="blog_list.php">BLOG LIST</a>
                            </li>
                            <li>
                                <i class="fa fa-pie-chart">
                                    
                                </i>
                                <a href="comment.php">COMMENTS</a>
                            </li>
                        </ul>  
                    </li>

                    <h3 class="menu-title">SECURITY</h3><!-- /.menu-title -->

                    <li>
                        <a href="visitor.php">
                            <i class="menu-icon fa fa-tasks"></i>
                            VISITOR PASS
                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon ti-email"></i>
                            EMPLOYEE
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece">
                                    
                                </i>
                                <a href="empsecurity.php">EMPLOYEE SECURITY</a>
                            </li>
                            <li>
                                <i class="fa fa-bars">
                                    
                                </i>
                                <a href="empfamsec.php">FAMILY SECURITY</a>
                            </li>
                        </ul>  
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-file-word-o"></i>
                            VAHICLE
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-book">
                                    
                                </i>
                                <a href="vahiclesecurity.php">VAHICLE SECURITY</a>
                            </li>
                            <li>
                                <i class="fa fa-fire">
                                    
                                </i>
                                <a href="driversec.php">DRIVER SECURITY</a>
                            </li>
                        </ul>  
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-area-chart"></i>
                            SCHOOL SECURITY
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-paper-plane">
                                    
                                </i>
                                <a href="boysec.php">BOYS SCHOOL</a>
                            </li>
                            <li>
                                <i class="fa fa fa-street-view">
                                    
                                </i>
                                <a href="girlsec.php">GIRLS SCHOOL</a>
                            </li>
                        </ul>  
                    </li>

                    <h3 class="menu-title">COMMUNITY CENTER</h3><!-- /.menu-title -->
                    <li>
                        <a href="bookings.php"> 
                            <i class="menu-icon fa fa-glass"></i>
                            BOOKINGS
                        </a>
                    </li>
                    <li>
                        <a href="serviceman.php"> 
                            <i class="menu-icon fa fa-spinner"></i>
                            SERVICEMAN
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->