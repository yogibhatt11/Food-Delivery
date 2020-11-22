<!DOCTYPE html>
<html>
	<head>
		<title>MENU BAR</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href="css/style.css" rel="stylesheet"/>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<style type="text/css">
  			@media only screen and (max-width: 992px) {
			  label {
			    font-size: 50px;
			  }
			@media screen and (max-width: 782px) {
			  label {
			    font-size: 40px;
			  }
			}

			/* On screens that are 600px wide or less, the background color is olive */
			@media screen and (max-width: 600px) {
			  label {
			    font-size: 30px;
			  }
			}
  		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse nav ">
	      <div class="container" style="text-align: center;">
			  <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="150px" width="160px" style="margin-top: -30px;"></a>
	      <span style="font-size: 80px; font-family: Comic Sans MS; color: red; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>FOODZILLA</label></span>

	      <ul class=" nav navbar-nav navbar-right" style="margin-top: 10px;">
	        <li style="font-size: 20px;"><a href="registration.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up</a></li>
	      </ul>
	      <ul class="navbar-nav nav navbar-right"  style="margin-top: 10px;">
	        <li style="font-size: 20px"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
	      </ul>
	      </div>
	    </nav>
	</body>
</html>