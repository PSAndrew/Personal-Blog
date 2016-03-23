<?php
	
	// START THE SESSION
	session_start();

	if(isset($_GET["logout"]) && $_GET["logout"]==1 && @isset($_SESSION['id'])) { session_destroy();
		$message="You have been logged out. Have a wonderful day!";
	}


	include("connection.php");


	// "localhost", "review-a", "f5r8Q3xWuXYbJasQ", "databasereview"
	if(isset($_POST['submit'])=="Sign Up"){
		if(!isset($error)) $error="";
		if(!$_POST['email']) $error="<br />Please enter your email.";
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address.";
		if(!$_POST['password']) $error.="<br />Please enter in a password.";
		else {
			if(strlen($_POST['password'])<7) $error.="<br />Please enter a password with at least 8 characters.";
			// if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password.";
		}
		if($error) $error = "There were error(s) in your signup details:".$error;
		else{
			

			$query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result = mysqli_query($link, $query);
			$results = mysqli_num_rows($result);

			if($results) echo $error = "That email address is already registered. Do you want to log in?";
			else{
				// add user to the password -- be sure to double check this later tomorrow
				$query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo "You've been signed up!";

				$_SESSION['id']=mysqli_insert_id($link);

				//Redirect to logged in page
				header("Location:mainpage.php");
			}
		}
	}

	if(isset($_POST['loginsubmit'])=="Log In"){

		$query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		if ($row) {
			$_SESSION['id']=$row['id'];

			//Redirect to logged in page
			header("Location:mainpage.php");
		}
		else{
			$error = "We could not find a user with that email and password. Please try again.";
		}

	}

?>