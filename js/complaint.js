
function validateForm() {
    var component = document.forms["complaintForm"]["component"].value.toLowerCase();
	var number = document.forms["complaintForm"]["sys_no"].value;
    
	if (number == "") {
        alert("System number must be filled out");
        return false;
    }
	if (component == "") {
        alert("Component must be filled out");
        return false;
    }
	/*else if(component != "monitor" || component != "mouse" || component != "keyboard" || component != "cpu" ){
		alert("No such component...");
		return false;
	}-*/
	
}