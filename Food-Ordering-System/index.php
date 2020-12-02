<?php 
include('conection.php');
include('menu.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Food Ordering System</title>
		<style type="text/css">
			    #hi-box
			    {
			      background-color:orange;
			      margin-left: 25%;
			      margin-right: 25%;
			    
			    }
			  .showcase-box
			  {
			    margin: 5% 2%;
			    padding: 4%;
			    box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
			    transition: 1s;
			  }
			  .showcase-box : hover
			  {
			    transform:scale(1.5)
			  }
			  .btn-orange 
			  {
			    background-color:orange;
			    color:white;
			  }
			  .showcase hr
			    {
			      height: 0px;
			      border:2px solid grey;
			    }
			    .showcase-box img{
			    	height: 264px;
			    	width: 320px;
			    }
			    .showcase-box1 img{
			    	height: 264px;
			    	width: 320px;
			    }
			    .zoom {
				  transition: transform .2s;
				  margin: 0 auto;
				}

				.zoom:hover {
				  transform: scale(1.1); 
				}
				#img2{
					height: 300px
					width: 300px;
				}
		</style>
	</head>
	<body>
		<div style="background-image: url(images/background.jpg); height: 540px; margin-top: -20px;">
		</div><br><br><br>
		<div class="container-fluid"><!--Id Is Red--> 
			<div class="container text-center showcase">    
				<div class="row">
						<div class="col-sm-4 zoom">
							<div class="showcase-box1">
					     		<img src="images/orderfood.jpg" alt="Image" style="border-radius: 15px; " ><br><br> <!--Id Is Img-->
					     		<a href=""> <h3 style="color:black;">Order food online.</h3></a>
					     	</div>
				 		</div>
						<div class="col-sm-4 zoom ">
					    	<div class="showcase-box1">
					     		<img src="images/goout.jpg" alt="Image" style="border-radius: 15px;><br><br> <!--Id Is Img-->
					     		<a href=""> <h3 style="color:black;">Go out for a meal.</h1></a>
					   		</div>
				 		</div>
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box1">
					     		<img src="images/charity.jpg" alt="Image" style="border-radius: 15px;> <br><br><!--Id Is Img-->
					     		<a href=""> <h3 style="color:black;">Donate for Charity.</h1></a>
					   		</div>
				 		</div>
				</div>
			</div>
		</div><br><br>
		 <div class="container-fluid"><!--Id Is Red--> 
			<div class="container text-center showcase">    
 				<div id="hi-box"> <h1><b>Our Best Meals</b></h1></div><hr></hr><br>
				<div class="row">
				    <div class="hov"><!--Hov is Class-->
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/chic_img1.jpg" alt="Image" id="img1"><br><br> <!--Id Is Img-->
					     		<a href="#" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		       <a href=""> <h4 style="color:white;">Starting @270</h4></a>
					       		</div>
					   		</div>
				 		</div>
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/chic_img21.jpg" alt="Image"id="img1"><br><br> <!--Id Is Img-->
					     		<a href="" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		<a href=""> <h4 style="color:white;">Starting @280</h4></a>
					       		</div>
					   		</div>
				 		</div>
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/matar_mash1.jpg" alt="Image"id="img1"> <br><br><!--Id Is Img-->
					     		<a href="" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		<a href=""> <h4 style="color:white;">Starting @160</h4></a>
					       		</div>
					   		</div>
				 		</div>
				  	</div>
				</div>
				<div class="row">
				    <div class="hov"><!--Hov is Class-->
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/chic_lol1.jpg" alt="Image" id="img1"><br><br> <!--Id Is Img-->
					     		<a href="#" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		<a href=""> <h4 style="color:white;">Starting @250</h4></a>
					       		</div>
					   		</div>
				 		</div>
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/mix_veg1.jpg"alt="Image"id="img1"><br><br> <!--Id Is Img-->
					     		<a href="" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		<a href=""> <h4 style="color:white;">Starting @180</h4></a>
					       		</div>
					   		</div>
				 		</div>
						<div class="col-sm-4 zoom">
					    	<div class="showcase-box">
					     		<img src="images/matar_pan1.jpg"alt="Image"id="img1"><br><br> <!--Id Is Img-->
					     		<a href="" class="btn btn-orange text-center">Get Details</a><br><br>
					     	 	<div style="background-color:grey;border:3px solid grey;border-radius:4px;">
					     	 		<a href=""> <h4 style="color:white;">Starting @150</h4></a>
					       		</div>
					   		</div>
				 		</div>
				  	</div>
				</div>
			</div>
		</div>
	 	<?php
	  include('Footer.php')
	?>			
	</body>
</html>