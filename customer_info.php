<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Personal Information</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso 8859-1" />
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header> 
<h1>Ft. Collins Smoked Meats</h1>
</header>
<div>
<h1 style="color:#468499;">Personal Information</h1>
<form action="submit_order.php" method="get">
<p>First Name<input type="text" name="first_name" size="36" />Last Name <input type="text" name="last_name" size="36" /></p>
<p>Phone Number<input type="text" name="phone" size="36" />
<p>Email<input type="text" name="email" size="36" /></p>
<input type="submit" value="Submit Order" />

<input type="reset" value="Start Over"/>
<br />
<a href="review_order.php">Review Order</a>

</form>
</div>
<footer>
      <p>&copy; Copyright 2022. All Rights Reserved.</p>
      
	  	<a href=https://www.facebook.com target="blank"><img src="images/image2.png" alt="facebook logo"></a>
      <a href=https://www.twitter.com target="blank"><img src="images/image3.png" alt="twitter logo"></a>
    </footer>
</body>
</html>
