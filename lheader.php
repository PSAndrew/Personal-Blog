<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Personal Blog <?php echo $pTitle; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Personal Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <form method="post" class="form-inline navbar-form navbar-right">
            <div class="form-group">
              <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email"
              <?php
              if(isset($_POST['loginemail'])){echo 'value="'. addslashes($_POST['loginemail']).'"';}
              ?>
              />
              <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password"
              <?php
              if(isset($_POST['loginpassword'])){echo 'value="'. addslashes($_POST['loginpassword']).'"';}
              ?>
              />
            </div>
            <button class="btn btn-success" type="submit" name="loginsubmit" value="Log In"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Log In</button>
          </form>
        </div>
      </div>
    </nav>