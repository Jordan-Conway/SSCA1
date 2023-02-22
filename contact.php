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
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'>Your Name:</label> <br>
<input type="text" name="name">
</p>
<p>
<label for='email'>Email Address:</label> <br>
<input type="text" name="email"> <br>
</p>
<p>
<label for="phone">Phone</label> <br>
<input type="tel" name="phone" placeholder="1234567890"> <br>
</p>
<p>
<label for="date">Date</label> <br>
<input type="date" name="date"> <br>
</p>
<p>
<label for="reservationNumber">Reservation Number</label> <br>
<input type="number" name="reservationNumber"> <br>
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>

</body>
</html>