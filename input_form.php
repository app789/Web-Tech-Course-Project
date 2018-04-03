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
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom_v4/css/main.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/script.js"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" scr="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<!--<script type="text/javascript">
		$(document).ready(function(){
			/*$("form").submit(function(event){
				event.preventDefault();
				var monitor = $("#device-monitor").val();
				var mouse = $("#device-mouse").val();
				var keyboard = $("#device-keyboard").val();
				var cpu = $("#device-cpu").val();
				var submit = $("#device-submit").val();
				
				if(monitor.length < 2){
					document.getElementByClassName("form-message").innerHTML = "Invalid Monitor";
				}
				
				$(".form-message").load("add.php", {
					monitor: monitor,
					mouse: mouse,
					keyboard: keyboard,
					cpu: cpu,
					submit: submit					
				});
				
			});*/
			/*$("form").validate({
				rules:{
					monitor:{
						required:true,
						minlength:4
					},
					mouse:{
						required:true,
						minlength:4
					},
					keyboard:{
						required:true,
						minlength:4
					},
					cpu:{
						required:true,
						minlength:4
					}
				}
			});*/
		});
	</script>-->
	
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="devices" action="add.php" method="post">
				<span class="contact100-form-title">
					Enter details
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Monitor</span>
					<input class="input100" id="device-monitor" type="text" name="monitor" placeholder="Monitor code"  ><span id="monitor-error-message"></span>
					<span class="focus-input100"></span>
				</div>

				<!--<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>-->
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Mouse</span>
					<input class="input100" id="device-mouse" type="text" name="mouse" placeholder="Mouse code"><span id="mouse-error-message"></span>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Keyboard</span>
					<input class="input100" id="device-keyboard" type="text" name="keyboard" placeholder="keyboard code"><span id="keyboard-error-message"></span>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">CPU</span>
					<input class="input100" id="device-cpu" type="text" name="cpu" placeholder="CPU code"><span id="cpu-error-message"></span>
					<span class="focus-input100"></span>
				</div>

				<!--<div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>-->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" id="device-submit" type="submit" name="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" id="back-button" href="welcome.php" >
							<span>
								Back
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
				<p class="form-message"></p>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<!--<script src="js/form-validation.js"></script>-->
	
	
<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="ContactFrom_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v4/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



</body>
</html>
