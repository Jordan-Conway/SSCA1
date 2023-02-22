<!DOCTYPE HTML> 
<html>
<head>
	<title>Contact us</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
<!-- define some style elements-->
<style>
h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px;
    font-weight : bold;
}
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
</head>	

<?php include 'includes/header.php' ?>

<body>
<div class="starter-template text-center">
	<h1>Contact us</h1>
</div>
<form method="POST" name="contactform" action="contact-form-handler.php" class="mb-3"> 
<p>
<label for='name' class="form-label">Your Name:</label> <br>
<input type="text" name="name" class="form-control"> <br>
</p>
<p>
<label for='email' class="form-label">Email Address:</label> <br>
<input type="text" name="email" class="form-control"> <br>
</p>
<p>
<label for="phone" class="form-label">Phone</label> <br>
<input type="tel" name="phone" placeholder="1234567890" class="form-control"> <br>
</p>
<p>
<label for="date" class="form-label">Date</label> <br>
<input type="date" name="date" class="form-control"> <br>
</p>
<p>
<label for="reservationNumber" class="form-label">Reservation Number</label> <br>
<input type="number" name="reservationNumber" class="form-control"> <br>
</p>
<p>
<label for='message' class="form-label">Message:</label> <br>
<textarea name="message" class="form-control"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>

</body>
</html>