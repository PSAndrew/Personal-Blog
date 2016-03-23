<?php 
$pTitle="| Home";
include("login.php");
include("header.php");
include("oldentry.php");
?>

    <main>
	    <div class="container contentContainer">

	    	<div id="topRow" class="row center">
	    		<!-- Entry Title Here -->
	    	</div>

		    <div class="row regBox marginTop">
			    <div class="col-xs-12 col-lg-6 col-lg-offset-4 col-md-8 col-md-offset-2">
	    			<textarea class="form-control"><?php echo date('l jS \of F Y'); ?><?php echo $entry; ?></textarea>
	    		</div>
			</div>
		</div>
		<!-- <div class="container contentContainer cTwo">
		</div> -->
	</main>

<?php include("footer.php"); ?>



