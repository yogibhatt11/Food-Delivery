<?php 
include('conection.php');
include('menu.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<style>
.signup
{
    font-family: sans-serif;

}
.sign-up-box
{
    margin-top: 5%;
    margin-bottom: 5%;
    margin-left: 25%;
    margin-right: 25%;
    padding: 2% 5%;
    border: 2px solid gray;
    box-shadow: 2px 2px 6px 1px rgba(0,0,0,0.5);
}
.control-label h4
{
    float: left;
    font-weight: bold;
    font-size: 20px;
    font-family: sans-serif;
    margin: 2%;

}
.control-label h2
{
  font-size: 40px;
  float: left;
  color: grey;

}
.form-control 
{
    width: 100%;
    height: 6%;
    margin-top: 9px;
    margin-left: 30px;
    border: 1px solid orange !important;
    

}
.textarea
{
    width: 100%;
    height: 6%;
}
.form-submit-btn1 button
{
    margin-top: 9px;
    margin-left: 44px;
    width: 95%;
    height: 6%;
    color: white;
    background-color: orange;

}
.signup
{
    background:url(bg2.jpg);
    background-repeat: no-repeat;
    background-size:100%;
}
</style>
  <div class="mysidenav">
     <section class="signup">
            <div class="sign-up-box">
                <form class="form-horizontal"method="post">
                   <div class="control-label">
                       <h2>Sign Up</h2></br></br></br></br>
                   </div>
        
                     <div class="control-label"><h4>Name :</h4></div>
                      <div class="">
                       <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
                      </div>
                   
        
                  
                  <div class="control-label"><h4>Email-Id:</h4></div>
                    <div class="">
                      <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
                      </div>
                 
        
                
                <div class="control-label"><h4>Password :</h4></div>
                  <div class="">
                      <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
                  </div>
                
        
                <div class="control-label"><h4>Mobile No:</h4></div>
                  <div class="">
                      <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
                  </div>
                

             
               <div class="control-label"><h4>Address :</h4></div>
                  <div class="A">
                      <textarea  name="addr" class="form-control"required></textarea>
                  </div>
           
        
                
                <div class="control-label"><h4 id="top">Gender :</h4></div>
                  <div class="" id="gd">
                      <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
                      <input type="radio" name="gend"value="male"required><b>Female</b>&emsp;
                      <input type="radio" name="gend"value="male"required><b>Other</b>
                  </div>
                
        
              <div class="row">
                    <div class="form-submit-btn1" style="text-align:right;"><br>
                    <button type="submit" value="Submit" name="save"class="btn btn-group-justified">Sign Up</button>
                  </div>
                  </div>
                  </div>
                </form>
            </div>
        </section>
  </div>


		<?php
		  include('Footer.php')
		?>
	</body>
</html>
