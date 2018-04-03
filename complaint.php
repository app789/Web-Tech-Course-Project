<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab Mgmt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="images/4-star-dragonball.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.button {
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
		cursor: pointer;
	}
	.button2 {
		background-color: white; 
		color: black; 
		border: 2px solid #008CBA;
	}

	.button2:hover {
		background-color: #008CBA;
		color: white;
	}

	
  </style>
</head>
<body>
<a href="welcome.php" class="btn btn-danger" >Home</a>
<div class="container">
  <h2>Submit your complaint</h2>
  <form name="complaintForm" action="complaint_handle.php" onsubmit="return validateForm()" method="post">
   <!-- <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>-->
    
      <label for="pwd">Enter the system id which has complaint</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter system number" name="sys_no">
   
    <label style="margin:10px"> Which component has complaint?</label>
	<input type="text" class="form-control" id="pwd" placeholder="Enter component" name="component">
	<!--<div class="dropdown">
		
	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		Dropdown
		<span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<!--<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="#">Separated link</a></li>
		<select multiple>
		  <option value="monitor">Monitor</option>
		  <option value="mouse">Mouse</option>
		  <option value="keyboard">Keyboard</option>
		  <option value="cpu">CPU</option>
		</select>
	  </ul>
	</div>-->
	<!--<textarea style="margin:50px" rows="4" cols="50" name="comment" form="usrform">
	Enter text here...</textarea>-->
    <button style="margin:50px" type="submit" name="submit" class="button button2">Submit</button>
  </form>
</div>

<script type="text/javascript" language="javascript" src="js/complaint.js"></script>

</body>
</html>