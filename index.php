<!--

Attribute			ID/Name					SpanId		class	
First Name			firstName				err1		errorSpans
Last Name			lastName				err2		errorSpans
Email				email					err3		errorSpans
Password			passwordField			err4		errorSpans
Confirm Password	confirmPasswordField	err5		errorSpans
Gender				gender					err6		errorSpans
Country				country					err7		errorSpans
About Me			textArea				err8		errorSpans
Submit				btn						

-->

<!DOCTYPE html>

<html>

<head>

<style>

body{
	border:5px solid black;
	}
form{
	background-color:lightGrey;
	padding:5px;
	}
#firstName{
	margin-left:61px;
	}
#lastName{
	margin-left:62px;
	}
#email{
	margin-left:94px;
	}
#passwordField{
	margin-left:71px;
	}
#confirmPasswordField{
	margin-left:12px;
	}
#country{
	margin-left:80px;
	width:173px;
	height:30px;
	}
#textArea{
	margin-left:67px;
	height:100px;
	width:400px;
	}
#radioButtonMale{
	margin-left:85px;
	}
#radioButtonFemale{
	margin-left:20px;
	}
#btn{
	width:80px;
	height:30px;
	}
#err6{
	margin-left:40px;
	}
.errorSpans{
	margin-left:10px;
	color:red;
	}
	
</style>

</head>

<body>

<h1> Personal Information </h1>

<?php
	
		$Err1 = "*";
		$Err2 = "*";
		$Err3 = "*";
		$Err4 = "*";
		$Err5 = "*";
		$Err6 = "*";
		$Err7 = "*";
		$Err8 = "*";

		if($_SERVER["REQUEST_METHOD"] == "POST"){

			if(empty($_POST["firstName"])){
				$Err1 = "Please enter first name";
			}
			if(empty($_POST["lastName"])){
				$Err2 = "Please enter last name";
			}
			if(empty($_POST["email"])){
				$Err3 = "Please enter email";
			}
			if(empty($_POST["passwordField"])){
				$Err4 = "Please enter password";
			}
			if(empty($_POST["confirmPasswordField"])){
				$Err5 = "Please enter password again";
			}
			if(($_POST["passwordField"]!==($_POST["confirmPasswordField"]))){
				$Err5 = "Password doesnot match";
			}
			if(empty($_POST["gender"])) {
				$Err6 = "Select Any One";
			}
			if(empty($_POST["country"])){
				$Err7 = "Please select any country";
			}
			if(!strlen(trim($_POST['textArea']))){
				$Err8 = "Please enter something about you";
			}
		}
		
?>

<form onsubmit="return validate()" action="index.php" method="post"> <br>

First Name <input type = "text" id="firstName" name="firstName" value="">
<span id="err1" class = "errorSpans"> <?php echo $Err1; ?> </span>

<br><br>

Last Name <input type = "text" id="lastName" name="lastName" value="">
<span id="err2" class = "errorSpans"> <?php echo $Err2; ?> </span>

<br><br>

Email <input type = "email" id="email" name="email" value="">
<span id="err3" class = "errorSpans"> <?php echo $Err3; ?> </span>

<br><br>
		
Password <input type = "password" id="passwordField" name="passwordField" value="">
<span id="err4" class = "errorSpans"> <?php echo $Err4; ?> </span>

<br><br>

Confirm Password <input type = "password" id="confirmPasswordField" name="confirmPasswordField" value="">
<span id="err5" class = "errorSpans"> <?php echo $Err5; ?> </span>

<br><br>

Gender
<input type = "radio" name="gender" id="radioButtonMale" value="male"> Male
<input type = "radio" name="gender" id="radioButtonFemale" value="female"> Female	
<span id="err6" class = "errorSpans" > <?php echo $Err6; ?> </span>

<br><br>

Country
<select id="country" name="country" size="3">
	<option value="0" > </option>
	<option value="1" >  </option>
	<option value="2" > </option>
</select>
<span id="err7" class = "errorSpans"> <?php echo $Err7; ?> </span>

<br><br>

About Me
<textarea id="textArea" name="textArea" value=""> </textarea>
<span id="err8" class="errorSpans"> <?php echo $Err8; ?> </span>

<br><br>

<input type="submit" name="btn" value="Submit" id="btn" onclick="validate()">

<br><br>

</form>

<script src="jquery.min.js"> </script>
<script src="scripts.js"></script>

</body>

</html>