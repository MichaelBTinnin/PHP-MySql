<?php
session_start();
//session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Orders</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso 8859-1" />
	<link rel="stylesheet" href="css/styles.css">
</head>
 
<body>
<header> 
<h1>Ft. Collins Smoked Meats</h1>
</header>
<div>	
		<figure class="left">
			<img src="images/brisquet_3.png" alt="Brisket">
			
		 <figcaption style="color: blue;">Brisket $20.00</figcaption>
		</figure>
		<figure class="right">
			<img src="images/ribs.png" alt="Ribs">
			
		 <figcaption style="color: blue;">Ribs $15.00</figcaption>
		</figure>
		<figure class="left">
			<img src="images/chicken_orig_.png" alt="Chicken">
			
		 <figcaption style="color: blue;">Chicken $10.00</figcaption>
		</figure>
		<figure class="right">
			<img src="images/pulled_pork_med_.png" alt="Ribs">
			
		 <figcaption style="color: blue;">Pulled Pork $15.00</figcaption>
		</figure>
<form action="review_order.php" method="get">
   <p>Meat <select name="Meats">
   <option value=""></option>
   <option value="Brisket">Brisket</option>
    <option value="Ribs">Ribs</option>
    <option value="Pulled Pork">Pulled Pork</option>
    <option value="Chicken">Chicken</option>
	
  </select>
  Meat qty <select name="Meats_qty">
   <option value="0">0</option>
   <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  Side <select name="Sides">
  <option value=""></option>
   <option value="Baked Beans">Baked Beans</option>
    <option value="Fried Okra">Fried Okra</option>
    <option value="Mashed Potatoes">Mashed Potatoes</option>
    <option value="Green Beans">Grean Beans</option>
  </select>
   Side qty <select name="Sides_qty">
   <option value="0">0</option>
   <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  Drink <select name="Drink">
  <option value=""></option>
   <option value="Lemonade">Lemonade</option>
   <option value="Coke">Coke</option>
    <option value="Sprite">Sprite</option>
   
  </select>
   Drink qty <select name="Drink_qty">
   <option value="0">0</option>
   <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
 </div>
  
  
  </p>
 <div>
<input type="submit" name="Submit" value="Next">
</div>
</form>

<footer>
      <p>&copy; Copyright 2022. All Rights Reserved.</p>
      
	  	<a href=https://www.facebook.com target="blank"><img src="images/image2.png" alt="facebook logo"></a>
      <a href=https://www.twitter.com target="blank"><img src="images/image3.png" alt="twitter logo"></a>
    </footer>
</body>
</html>