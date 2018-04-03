
$(document).ready(function () {
  //your code here


	
	$("#monitor-error-message").hide();
	$("#mouse-error-message").hide();
	$("#keyboard-error-message").hide();
	$("#cpu-error-message").hide();
	
	var error_monitor = false;
	var error_mouse = false;
	var error_keyboard = false;
	var error_cpu = false;
	
	$("#device-monitor").focusout(function(){
		check_monitor();
	});
	$("#device-mouse").focusout(function(){
		check_mouse();
	});$("#device-keyboard").focusout(function(){
		check_keyboard();
	});
	$("#device-cpu").focusout(function(){
		check_cpu();
	});
	
	function check_monitor(){
		var monitor_length = $("#device-monitor").val().length;
		
		if(monitor_length < 3 || monitor_length > 8){
			$("#monitor-error-message").html("Greater than 3 characters");
			$("#monitor-error-message").show();
			error_monitor = true;
		}
		
	}
	function check_mouse(){
		var mouse_length = $("#device-mouse").val().length;
		
		if(mouse_length < 3 || mouse_length > 8){
			$("#mouse-error-message").html("Greater than 3 characters");
			$("#mouse-error-message").show();
			error_mouse = true;
		}
		
	}
	
});