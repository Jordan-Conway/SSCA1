<!DOCTYPE HTML> 
<html>
<head>
	<title>Contact us</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
<!-- define some style elements-->
<style>

</style>	
</head>	

<?php include 'includes/header.php' ?>

<body>
<div class="starter-template text-center">
	<h1>Contact us</h1>
</div>
<div class="row px-3">
	<div class="col-sm">

		<p>Enter your details here and we'll try to get back to you promptly</p>

		<form method="POST" name="contactform" action="contact-form-handler.php" class="mb-3"> 
			<label for='firstName' class="form-label">First Name:</label> <br>
			<input type="text" name="firstName" class="form-control" id="firstName" onBlur="validateFirstName()"> <br>
			<p class="error" id="firstNameError"></p>

			<label for='lastName' class="form-label">Last Name:</label> <br>
			<input type="text" name="lastName" class="form-control" id="lastName" onBlur="validateLastName()"> <br>
			<p class="error" id="lastNameError"></p>

			<label for='email' class="form-label">Email Address:</label> <br>
			<input type="text" name="email" class="form-control" id="email" onBlur="validateEmail()"> <br>
			<p class="error" id="emailError"></p>

			<label for="phone" class="form-label">Phone</label> <br>
			<input type="tel" name="phone" placeholder="1234567890" class="form-control" id="phone"> <br>

			<label for="date" class="form-label">Date</label> <br>
			<input type="date" name="date" class="form-control" id="date" onBlur="validateDate()"> <br>
			<p class="error" id="dateError"></p>

			<label for='message' class="form-label">Message:</label> <br>
			<textarea name="message" id="message" class="form-control" onBlur="validateMessage()"></textarea>
			<p class="error" id="messageError"></p>

			<input class="btn btn-success" type="submit" value="Submit" id="contact-form-submit"><br>
		</form>
		<a href="index.php" class="btn btn-secondary">
          Return
    </a>
	</div>
	<div class="col-sm">
	</div>
</div>

</body>

<script src="js\validation.js"></script>

</html>