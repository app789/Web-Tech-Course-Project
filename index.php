<?php session_start(); ?> 

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet href="css/style.css">
		<link rel="icon" type="image/png" href="images/4-star-dragonball.png"/>
		<script src="jquery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
		.navbar-brand
		{
			position: absolute;
			width: 100%;
			left: 0;
			text-align: center;
			margin:0 auto;
		}
		.navbar-toggle {
			z-index:3;
		}
		.navbar{background-color:black;}
	</style>
		
		<title>Lab Mgmt</title>
	</head>
	
	<body  style="background-color: grey"  >
		
		<!--<nav class="navbar navbar-default" role="navigation">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>    
		  </div>
		  <a class="navbar-brand" >LABO</a>
		  <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="login-admin.php">Login</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="register.html">Sign In</a></li>
			 
			</ul>
		  </div>
		</nav>-->
	<div class="container-fluid">
		<div class="row" >
		<nav class="navbar navbar-inverse" style="margin-bottom:0">
		  
			<div class="navbar-header">
			  <a class="navbar-brand" >LAB MANAGEMENT PORTAL</a>
			</div>
			<!--<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#">Page 1-1</a></li>
				  <li><a href="#">Page 1-2</a></li>
				  <li><a href="#">Page 1-3</a></li>
				</ul>
			  </li>
			  <li><a href="#">Page 2</a></li>
			</ul>-->
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="login-user.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  
		</nav>
		</div>
		
		<div class="row">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/lab-1.jpg" alt="Chania">
					  <div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					  </div>
					</div>

					<div class="item">
					  <img src="images/lab-2.jpg" alt="Chania">
					  <div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					  </div>
					</div>

					<div class="item">
					  <img src="images/muthoot.jpg" alt="Flower">
					  <div class="carousel-caption">
						<h3>Flowers</h3>
						<p>Beautiful flowers in Kolymbari, Crete.</p>
					  </div>
					</div>

					<!--<div class="item">
					  <img src="img_flower2.jpg" alt="Flower">
					  <div class="carousel-caption">
						<h3>Flowers</h3>
						<p>Beautiful flowers in Kolymbari, Crete.</p>
					  </div>
					</div>
				  </div>-->

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			</div>
		</div>
		
		<div class="row">
			<div class="jumbotron">
			  <h1>Welcome to our site!</h1>
			  <p>Department of Computer science and Engineering at Muthoot Institute of Technology and Science currently operates following laboratories</p>
			  <ul>
				<li>Operating system lab</li>
				<li>Data base lab</li>
				<li>Programming lab</li>
				<li>Project Lab</li>
				<li>FOSS and System software lab</li>
			  </ul>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>
		
	</div>
	
		
  

	
		
		
		
	<body>
	
</html>