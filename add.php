
 
<?php
    session_start();
    if($_SESSION['username']){
    }
    else{ 
       header("location:home.php");
    }

	if(isset($_POST["submit"])){
    
       $Monitor = $_POST["monitor"];
       $Mouse = $_POST["mouse"];
       $Keyboard = $_POST["keyboard"];
       $CPU = $_POST["cpu"];
	   
	   $errorEmpty = false;
	   
	   if(empty($Monitor) || empty($Mouse) || empty($Keyboard) || empty($CPU)){
		   echo "<span style='color:red;'>Fill in all fields!</span>";
			$errorEmpty = true;
	   }
	   elseif(strlen($Monitor)<2 || strlen($Mouse)<2 || strlen($Keyboard)<2 || strlen($CPU)<2){
		   echo "<span style='color:red;'>Invalid format!</span>";
	   }
	   else{
		   echo "<span style='color:green;'>Fill in all fields!></span>";
	   
   
		  $link = mysqli_connect('localhost:3307','root','', 'lab');
	 
			// Check connection
			if(!$link){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
		  /* foreach($_POST['public'] in $each_check) //gets the data from the checkbox
		   {
			  if($each_check != null){ //checks if checkbox is checked
				 $decision = "yes"; // sets the value
			  }
		   }*/

		   $sql = "INSERT INTO systems(Monitor,Mouse,Keyboard,CPU) VALUES (?, ?, ?, ?)"; //SQL query
		   if($stmt = mysqli_prepare($link, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "ssss", $item_1, $item_2,$item_3,$item_4);
				$item_1 = $Monitor;
				$item_2 = $Mouse;
				$item_3 = $Keyboard;
				$item_4 = $CPU;
				 if(mysqli_stmt_execute($stmt)){
					// Redirect to login page
					
					$_SESSION['add_success']= true;
					header("location: input_form.html");
					//echo "Success";
				 }
				 else	
				{
					//header("location:login.php");
					echo "ERROR: ".$sql;
				} 
				
		   
			}
			else	
			{
			   //header("location:welcome.php");
			   echo "ERROR: ".$sql;
			} 
		   mysqli_close($link);
		}
	}
	else{
		echo "There wan an error!";
	}
	  
 ?>
 <script>
	var errorEmpty = "<?php echo $errorEmpty ?>";
	
	//delete all inputs
	if(errorEmpty == false ){
			$("#device-monitor,#device-mouse,#device-keyboard,#device-cpu").val("");
			$("#device-submit").val("Success");
	}
 </script>
 
 