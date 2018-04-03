<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to home page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

	$link = mysqli_connect('localhost:3307','root','', 'lab');
	 
			// Check connection
	if(!$link){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
      $system_number = $_POST["sys_no"];
      $software= $_POST["software"];
	  
	  //echo $component;
	  
	  
	  $system_number_present = 1;
	  
	  //Validate System number
	  $q  = "SELECT * from systems WHERE id=$system_number";
	  if($result = mysqli_query($link, $q)){
		   $rowcount=mysqli_num_rows($result);
		   if($rowcount == 0){
			
			$system_number_present = 0;
		   }
		   else 
		   {
			   
				$system_number_present = 1;
			}
	  }
	  //If system number is valid , submit the complaint
	   if($system_number_present == 1){
		   $name = $_SESSION['username'];
			$sql = "INSERT INTO Requests(System_no,install_request,submitted_by) VALUES ('$system_number','$software','$name')"; //SQL query
		
		    if(mysqli_query($link, $sql)){
				//echo "HI";
			
			
					
				$_SESSION['add_success']= true;
				header("location: request.php");
				//echo "Success";
			}
			else	
			{
				//header("location:login.php");
				echo "ERROR: ".mysqli_error($link);
			} 
				
		   
		}
		//if invalid system number, alert the user 
		else echo "<script type='text/javascript'>alert(\"No such system number!\");</script>";
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
  <h2>Submit your request</h2>
  <form name="requestForm" action="request.php" onsubmit="return validateForm()" method="post">
   
    
      <label for="pwd">Enter the system number which needs installation</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter system number" name="sys_no">
   
    <label style="margin:10px"> What software do you need?</label>
	<input type="text" class="form-control" id="pwd" placeholder="Enter software" name="software">
	
    <button style="margin:50px" type="submit" name="submit" class="button button2">Submit</button>
  </form>
</div>

<script type="text/javascript" language="javascript" src="js/complaint.js"></script>

</body>
</html>