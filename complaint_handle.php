<?php
	session_start();
	$link = mysqli_connect('localhost:3307','root','', 'lab');
	 
			// Check connection
	if(!$link){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
      $system_number = $_POST["sys_no"];
      $component= $_POST["component"];
	  
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
			$sql = "INSERT INTO complaints(System_number,Component,Submitted_by) VALUES ('$system_number','$component','$name')"; //SQL query
		
		    if(mysqli_query($link, $sql)){
				//echo "HI";
			
			
					
				$_SESSION['add_success']= true;
				header("location: complaint.php");
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