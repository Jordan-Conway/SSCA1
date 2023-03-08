<!DOCTYPE HTML> 
<html>
<head>
	<title>Thank you!</title>
<!-- define some style elements-->
<style>
h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px;
    font-weight : bold;
}
label,a,body
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
<!-- a helper script for validating the form-->
</head>	
</head>

<body>
<h1>Thank you!</h1>
Thank you for submitting the form. We will contact you soon! <br>
You will be redirected in 5 seconds
<?php
	header("Refresh: 5; URL=https://mysql07.comp.dkit.ie/D00244954/cardShop/index.php"); 
	exit();
?>
</body>
</html>