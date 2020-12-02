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
			body {
			  font-family: "Lato", sans-serif;
			  transition: background-color .5s;
			}

			.sidenav {
			  height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  right: 0;
			  background-color: white;
			  overflow-x: hidden;
			  transition: 0.5s;
			  padding-top: 10px;
			}

			.sidenav .container a {
			  padding: 8px 8px 8px 32px;
			  text-decoration: none;
			  font-size: 25px;
			  color: #818181;
			  display: block;
			  transition: 0.3s;
			}

			.sidenav a:hover {
			  color: #f1f1f1;
			}

			.sidenav .closebtn {
				position: relative;
			  top: 0;
			  right: 25px;
			  font-size: 36px;
			  margin-left: 50px;
			}

			#main {
			  transition: margin-left .5s;
			  padding: 16px;
			}
			.signup form .input-group .form-control{
				height: 55px;
				width: 380px;
			}
			.login form .input-group .form-control{
				height: 55px;
				width: 80%;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
			.sidenav .containr{
				margin-left: 40px;
			}
			@media (min-width: 1200px){
			.container {
			    width: 1180px;}
			}
			.popup span{
			    background: none repeat scroll 0 0 #F8F8F8;
			    border: 5px solid #DFDFDF;
			    color: #717171;
			    font-size: 13px;
			    height: 30px;
			    letter-spacing: 1px;
			    line-height: 30px;
			    margin: 0 auto;
			    position: relative;
			    text-align: center;
			    text-transform: uppercase;
			    top: -80px;
			    left:-30px;
			    display:none;
			    padding:0 20px;

			}
			.popup span:after{
			    content:'';
			    position:absolute;
			    bottom:-10px;
			    width:10px;
			    height:10px;
			    border-bottom:5px solid #dfdfdf;
			    border-right:5px solid #dfdfdf;
			    background:#f8f8f8;
			    left:50%;
			    margin-left:-5px;
			    -moz-transform:rotate(45deg);
			    -webkit-transform:rotate(45deg);
			    transform:rotate(45deg);
			}
			.popup p{
			    margin:100px;
			    float:left;
			    position:relative;
			    cursor:pointer;
			}

			.popup p:hover span{
			    display:block;
			}
  		</style>
  		<script>
  		//for signup
			function openNav() {
				closeNav();
			  document.getElementById("mySidenav1").style.width ="550px";
			  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
		//for login
			function openNav1() {
				closeNav();
			  document.getElementById("mySidenav").style.width = "550px";
			  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
			//for closing side nav
			function closeNav() {
			  document.getElementById("mySidenav1").style.width = "0";
			  document.getElementById("mySidenav").style.width = "0";
			  document.body.style.backgroundColor = "white";
			}
		</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse nav ">
	    	<div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logo.png" height="150px" width="160px" style="margin-top: -30px;"></a>
				<span style="font-size: 80px; font-family: Comic Sans MS; color: red; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>FOODZILLA</label></span>
				<ul class="navbar-nav nav navbar-right"  style="margin-top: 10px;">
			  	<li style="font-size: 20px"><a><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="popup" style="cursor:pointer;" onclick="openNav2()">&nbsp;Cart</span></a></li>
			  	</ul>
			 	<ul class=" nav navbar-nav navbar-right" style="margin-top: 10px;">
			  	<li style="font-size: 20px;"><a><span class="glyphicon glyphicon-user" onclick="openNav()"></span><span style="cursor:pointer;" onclick="openNav()">Sign Up</span></a>
			  	</li>
			  	</ul>
			  	<ul class="navbar-nav nav navbar-right"  style="margin-top: 10px;">
			  	<li style="font-size: 20px"><a><span class="glyphicon glyphicon-log-in" onclick="openNav1()"></span><span style="cursor:pointer;" onclick="openNav1()">&nbsp;Login</span></a></li>
			 	</ul>
	      	</div>
	    </nav>
	    <!--Side nav for signup-->
			<div id="mySidenav1" class="sidenav signup">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="containr">
					<h2><b>Sign Up</b></h2>
				  	or <span onclick="openNav1();" style="cursor:pointer; color: #fc8019">login to your</span> account.<br><br>
				  	<form>
				  		<div class="input-group">
					      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
					    </div><br>
					    <div class="input-group">
					      <input id="password" type="password" class="form-control" name="pass" placeholder="Password">
					    </div><br>
					    <div class="input-group">
					      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Contact No.">
					    </div><br>
					    <div class="input-group">
					      <input id="address" type="text" class="form-control" name="address" placeholder="Address">
					    </div><br>
					    <div class="input-group">
					    	<div id="gd" style="font-size: 20px;">
		                      <input type="radio" name="gend"value="male"required><b>&nbsp;&nbsp;Male</b>&emsp;
		                      <input type="radio" name="gend"value="male"required><b>&nbsp;&nbsp;Female</b>&emsp;
		                      <input type="radio" name="gend"value="male"required><b>&nbsp;&nbsp;Other</b>
		                  </div>
					    	<br>
					    </div>
					      <input type="button" class="form-control" name="submit" value="SIGNUP" style="color: white; background-color:  #fc8019; width: 380px;">
					      By creating an account, I accept the<a href="TermsAndCondition.php"><span style="color:#fc8019 "> Terms & Conditions</span></a>
					</form>
				</div>
			</div>
			<!--side nav for login-->
			<div id="mySidenav" class="sidenav login">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <div class="containr">
				  	<h2>Login</h2>
				  	or <span onclick="openNav();" style="cursor:pointer; color: #fc8019" >create your account.</span></br></br>
				  	<form>
						<div class="input-group">
					      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					      <input id="email1" type="text" class="form-control" name="email" placeholder="Email">
					    </div><br></br>
					    <div class="input-group">
					      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					      <input id="password1" type="password" class="form-control" name="password" placeholder="Password">
					    </div><br></br></br>
				  		<input type="button" name="login" class="form-control" value="LOGIN" style="color: white; background-color:  #fc8019; width: 80%">
				  	</form>
				  </div>
			</div>
	</body>
</html>