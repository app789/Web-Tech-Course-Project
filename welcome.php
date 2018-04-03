<?php
// Initialize the session
session_start();
$notfiy = false;
$NOTIFY = false;
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

	$link = mysqli_connect('localhost:3307','root','', 'lab');
	 
			// Check connection
	if(!$link){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	 $q  = "SELECT * from complaints";
	  if($result = mysqli_query($link, $q)){
		   $rowcount=mysqli_num_rows($result);
		   if($rowcount != 0){
				while($data = mysqli_fetch_array($result)){
					if($data['Status'] == "pending" )
						//echo '<p>You have unread complaints</p>';
						$notfiy = true;
				}
				
			
		   }
	 }
	 $r = "SELECT * from Requests";
	  if($result = mysqli_query($link, $r)){
		   $rowcount=mysqli_num_rows($result);
		   if($rowcount != 0){
				while($data = mysqli_fetch_array($result)){
					if($data['status'] == "pending" )
						//echo '<p>You have unread complaints</p>';
						$NOTIFY = true;
				}
				
			
		   }
	 }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Mgmt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="icon" type="image/png" href="images/4-star-dragonball.png"/>
    <style type="text/css">
       body{ font: 14px sans-serif; text-align: center; }
		img{  animation-name: example;
				animation-duration: 4s;
				align:left;
			}
		@keyframes example {
    0%   { left:0px; top:0px;}
    25%  { left:200px; top:0px;}
    50%  { left:200px; top:200px;}
    75%  { left:0px; top:200px;}
    100% { left:0px; top:0px;}
	}
	p{
		color:red;
		font-size:20px;
	}
    </style>
</head>
<body >
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username'].",".$_SESSION['type']; ?></b>. Welcome to our site.</h1>
		<img src="images/muthoot.png" >
    </div>
	<p><a href="view.php" class="btn btn-danger">See Systems</a></p>
	<?php if($_SESSION['type'] == "admin")echo '<p><a href="input_form.php" class="btn btn-danger">Add data</a></p>'; ?>
	<?php if($_SESSION['type'] == "user" ){
				echo '<p><a href="complaint.php" class="btn btn-danger">Complaint</a></p>'; 
				echo '<p><a href="complaint-log.php" class="btn btn-danger">Complaint Logs</a></p>';
				echo '<p><a href="request.php" class="btn btn-danger">Request Software installation</a></p>';
	}	
			else{ 
				echo '<p><a href="view-complaints.php" class="btn btn-danger">View Complaints</a></p>';
				echo '<p><a href="view-requests.php" class="btn btn-danger">View Requests</a></p>';
				if($notfiy == true && $_SESSION['type'] == "admin") echo '<p>You have unread complaints</p>';
				if($NOTIFY == true && $_SESSION['type'] == "admin") echo '<p>You have pending requests</p>';
			}
		
	?>
	
	
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
	
</body>
</html>