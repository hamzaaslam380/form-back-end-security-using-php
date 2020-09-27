function validate(){
	var isValid = true;
	
	if($("#firstName").val() == ""){
		$("#err1").html("Write First Name");
		isValid = false;
	}
	else{
		$("#err1").html("");
	}
	
	if($("#lastName").val() == ""){
		$("#err2").html("Write Last Name");
		isValid = false;
	}
	else{
		$("#err2").html("");
	}
	
	if($("#email").val() == ""){
		$("#err3").html("Write E-mail");
		isValid = false;
	}
	else{
		$("#err3").html("");
	}
	
	if($("#passwordField").val() == ""){
		$("#err4").html("Write Password");
		isValid = false;
	}
	else{
		$("#err4").html("");
	}
	
	if($("#confirmPasswordField").val() == ""){
		$("#err5").html("Write Confirm Password");
		isValid = false;
	}
	else{
		$("#err5").html("");
	}
	
	if($("#confirmPasswordField").val() != $("#passwordField").val()){
			$("#err5").html("Password Doesnot Match");
			isValid = false;
	}
	
	if(!$("input[name=gender]:checked").val()){
		$("#err6").html("Select Any One");
		isValid = false;
	}
	else{
		$("#err6").html("");
	}
	
	if($("#country")[0].selectedIndex <= 0){
		$("#err7").html("Select Country");
		isValid = false;
	}
	else{
		$("#err7").html("");
	}
	
	if($("#textArea").val().length < 5){
		$("#err8").html("Please Write Something");
		isValid = false;
	}
	else{
		$("#err8").html("");
	}
	
	return isValid;
};