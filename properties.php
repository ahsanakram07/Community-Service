<?php include('header.php'); ?>

<!--/short-->
<div class="services-breadcrumb setcrumb">
	<div class="inner_breadcrumb">
		<ul class="short_w3ls_agile">
			<li><a href="index.php">Home</a><span>|</span></li>
			<li>Properties</li>
		</ul>
	</div>
</div>
<!--//short-->

<div class="about-w3l">
	<h3 class="w3l-titles w3l-titlespr marg">Properties</h3>
</div>

<?php

	$connection=connectToDatabase();

	$sql="SELECT * FROM property";

	$res=mysqli_query($connection,$sql);

	$row=mysqli_fetch_assoc($res);
?>

<div class="palign rpalingn">
    <!-- For filtering controls add -->
	<button type="button" class="btn btn-info all allmed" data-filter="all"> 
		All Items 
	</button>
    <button type="button" class="btn btn-info all allmed" data-filter="Residential Plot"> 
		Residentail Plot 
	</button>
	<button type="button" class="btn btn-info all allmed" data-filter="Commercial Plot"> 
		Commercial Plot 
	</button>
	<button type="button" class="btn btn-info all allmed" data-filter="House">
		House
	</button>
	<button type="button" class="btn btn-info all allmed" data-filter="Appartment">
		Appartment
	</button>
	<button type="button" class="btn btn-info all allmed z1" data-filter="Office">
		Office
	</button>
	<button type="button" class="btn btn-info all allmed z2" data-filter="Plaza">
		Plaza
	</button>
	<!-- For a shuffle control add -->
    <!-- <button type="button" class="btn btn-warning liset lset" data-shuffle> 
		Shuffle items 
	</button> -->
	<!-- For sorting controls add -->
    <!-- <button type="button" class="btn btn-danger liset" data-sortAsc> Ascending </button>
    <button type="button" class="btn btn-success liset lset" data-sortDesc> Descending </button> -->
</div>

<div class="filter container-fluid banner-bottom">

		<?php

    	do
    	{

		?>

		<?php $id=$row['Property_ID']; ?>

		<div data-category="<?php echo $row['Property_Type']; ?>" data-sort="value" class="filtr-item col-xs-3 col-sm-3 col-md-3 col-lg-3 column">
		    <div class="card" style="margin-top: 40px;">
		    	<?php 
		    		echo "<a href='single property.php?id=$row[Property_ID]' class='hovs'>";
				    echo "<img src='admin/images/property/".$row['Image']."' style='width:100%; height: 300px;'/>";
				    
				    echo '</a>';
			    ?>
			    <div class="containerr">
			        <h2><?php echo $row['Title']; ?></h2>
			        <p class="title"><?php echo $row['Property_Type']; ?></p>
			        <p>
			        	<?php
			        		echo '<span class="fsetssss">Registration Date: &nbsp</span>'.$row['Reg_Date'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">Area:&nbsp</span>'.$row['Area'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">Furnished:&nbsp</span>'.$row['Furnish'];
			        		echo '<br>';
			        		echo '<span class="fsetssss">ADDRESS:&nbsp</span>'.$row['Address'];
			        		echo '&nbsp';
			        		
			        	?>
		        	</p>
			        <button class="button">
			        	<?php echo '<span class="fsetssss">For:&nbsp</span>'.$row['purpose'];?>	
		        	</button>
		        </div>
		    </div>
		</div>

		<?php

        }while($row=mysqli_fetch_assoc($res));

		?>

</div>

<?php include('footer.php'); ?>

<script src="Filterizr/dist/jquery.filterizr.min.js"></script>

<script type="text/javascript">
	var filterizd = $('.filter').filterizr({
	   //your options here
	})
</script>