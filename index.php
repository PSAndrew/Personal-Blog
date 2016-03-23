<?php 
$pTitle="";
include("login.php");
include("lheader.php");
?>
    <main>
	    <div class="container contentContainer">

	    	<div class="row center" id="topRow">
	    		<div class="col-md-8 col-md-offset-2">
		    		<h1 class="marginTop"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Personal Blog</h1>
		    		<p class="lead">Your very own personal daily blog, with you wherever you go.</p>
		    		<p>Interested? Sign up Below!</p>

		    		<?php
		    			if(isset($error)){
		    				echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.addslashes($error).'</div>';
		    			}
		    			if(isset($message)){
		    				echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.addslashes($message).'</div>';
		    			}
		    		?>

	    		</div>
	    	</div>

		    <div class="row regBox marginTop">
				<form method="post">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input class="form-control" type="email" name="email" id="email" placeholder="Your Email"
						<?php
						if(isset($_POST['email'])){echo 'value="'. addslashes($_POST['email']).'"';}
						?>
						/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" id="password" placeholder="Password"
						<?php
						if(isset($_POST['password'])){echo 'value="'.addslashes($_POST['password']).'"';}
						?>
						/>
					</div>
					<button class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Sign Up">Sign Up</button>
				</form>
			</div>
		</div>
		<!-- <div class="container contentContainer cTwo"></div> -->
	</main>

<?php include("footer.php"); ?>



