<?php 

session_start();
$password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
		//echo $password;
		if($password == "neelan"){
			$_SESSION['admin'] = "allow";
			header("location: register-admin.php");
		}
		else{
			$password_err="Wrong password";
		}
    }
    
    
  echo $_SESSION['admin']; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="icon" type="image/png" href="images/4-star-dragonball.png"/>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style >
        body{ font: 14px sans-serif; }
        .wrapper{ width:550px; padding:120px;align:center;}
		* {box-sizing: border-box; }
		.help-block{color:red;}
    </style>
</head>
<body>
    <div class="wrapper" >
       <!-- <h2 align='center'>Login</h2>-->
        <p>Enter password to continue.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" required>
                <span class="help-block"><?php if(!empty($password_err))echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p> <a href="index.php">Home</a>.</p>
        </form>
    </div>    
</body>
</html>