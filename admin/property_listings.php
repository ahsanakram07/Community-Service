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
                            <li><a href="#">Property</a></li>
                            <li class="active">Listings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    	<div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <?php

                        $connection=connectToDatabase();

                        $sql="SELECT * FROM property";

                        $res=mysqli_query($connection,$sql);

                        $row=mysqli_fetch_assoc($res);

                        ?>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Property Listings</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <a href='addproperty.php' class="wid" style="margin-left: 800px;">
                                        <button type='button' class='btn btn-danger'>ADD PROPERTY</button>
                                    </a>
                                    <thead>
                                        <tr>
                                            <th><center>Title</center></th>
                                            <th><center>Type</center></th>
                                            <th><center>Purpose</center></th>
                                            <th><center>Area</center></th>
                                            <th><center>Price</center></th>
                                            <th><center>No Of Floors</center></th>
                                            <th><center>Furnished</center></th>
                                            <!-- <th><center>Address</center></th>
                                            <th><center>Description</center></th> -->
                                            <th><center>Property Image</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        do
                                        {

                                            $id=$row['Property_ID'];

                                        echo '<tr>';
                                            echo '<td style="padding-top: 70px;">'.$row['Title']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['Property_Type']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['purpose']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['Area']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['Price']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['Total_Floor']. '</td>';
                                            echo '<td style="padding-top: 70px;">'.$row['Furnish']. '</td>';
                                            // echo '<td>'.$row['Address']. '</td>';
                                            // echo '<td>'.$row['description']. '</td>';

                                            echo "<td><img src='images/property/".$row['Image']."' height='150' width='150'/></td>";

                                            echo "<td style='padding-top: 30px;'>
                                                <a href='updateproperty.php?id=$row[Property_ID]'>
                                                    <button type='button' class='btn btn-info'>UPDATE</button>
                                                </a>

                                                <br><br>

                                                <a href='deleteproperty.php?id=$row[Property_ID]'>
                                                    <button type='button' class='btn btn-warning'>DELETE</button>
                                                </a>
                                                
                                            </td>";
                                        echo '</tr>';

                                        }while($row=mysqli_fetch_assoc($res));

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    </div>
                </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include("footer.php"); ?>