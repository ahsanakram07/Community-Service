<?php

include ('../database/connection.php');

$connection=connectToDatabase();

$fname=$_SESSION['uname'];
$pwd=$_SESSION['pwd'];

if ($fname==true && $pwd==true) 
{

}
else
{
    echo("<script>location.href = '../index.php';</script>");
}

$sql="SELECT * FROM admin WHERE firstname='$fname' AND Password='$pwd'";

$res=mysqli_query($connection,$sql);

$row=mysqli_fetch_assoc($res);

?>
<!-- Header-->
<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-2 col-xs-2">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <div class="dropdown for-notification">

                    <?php

                        $connection2=connectToDatabase();

                        $sql2="SELECT * FROM bookings";

                        $res2=mysqli_query($connection2,$sql2);

                        $num=mysqli_num_rows($res2);

                        $rows=mysqli_fetch_assoc($res2);

                    ?>

                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell fa-lg"></i>
                        <span class="count bg-danger"><?php echo $num ?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have <?php echo $num ?> Notification</p>

                        <?php  
                        do
                        {
                            echo '<a class="dropdown-item media bg-flat-color-1" href="bookings.php">';
                            echo '<i class="fa fa-check"></i>';
                            echo "<p>".$rows['Name']."&nbsp Need &nbsp".$rows['Service']."</p>";
                            echo '</a>';
                        }while ($rows=mysqli_fetch_assoc($res2));
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-xs-2">
            <div class="col-sm-8" style="padding-top: 20px; font-size: 20px; font-weight: 900;">
                <center>
                    WELCOME <?php echo $row['firstname']."&nbsp".$row['lastname'] ?>
                </center>
            </div>
            <div class="col-sm-4 user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/profile/<?php echo $row['image']; ?>" alt="User Avatar" style="height: 80px; width: 100px">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>
                    <a class="nav-link" href="../database/logout.php" name="logout">
                        <i class="fa fa-power -off"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header-->
