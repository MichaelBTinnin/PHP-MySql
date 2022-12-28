<?php error_reporting(E_ALL^E_NOTICE);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Review Order</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso 8859-1" />
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header> 
<h1>Ft. Collins Smoked Meats</h1>
</header>
	

<?php
	if(empty($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	
	if(!empty($_GET['item_number_remove'])){	
		$item = $_GET['item_number_remove'];
		$qty = $_GET['quantity_remove'];
		
		
		$max=sizeof($_SESSION['cart']);
		
		for($i=0; $i<$max; $i++) { 
		$j = $i + 1;
			
				if($j == $item){
					
					
					if($_SESSION['cart'][$i]['item_qty'] > $qty ){
						$_SESSION['cart'][$i]['item_qty'] = $_SESSION['cart'][$i]['item_qty'] - $qty;
					}
					else{
						unset($_SESSION['cart'][$i]);
						break;
					}
					
				}
		}
	}
	
	function addItems($Product){
	$qtyAdjusted = FALSE;
	foreach($_SESSION['cart'] as &$product){
		if($product['item'] == $Product['item']){
			$product['item_qty'] += $Product['item_qty'];
			$qtyAdjusted = TRUE;
			break;
		}
	}
	if($qtyAdjusted == FALSE){
		array_push($_SESSION['cart'], $Product);
	}
}
	
if(!isset($_GET['submit'])){
$Product = array();
if(!empty($_GET['Meats'])){
	$Product['item'] = stripslashes($_GET['Meats']);
	$Product['item_qty'] = stripslashes($_GET['Meats_qty']);
	if($Product['item'] == 'Brisket'){
		$Product['product_#'] = 1;
		$Product['price'] = 20.00;
	}
	else if($Product['item'] == 'Pulled Pork'){
		$Product['product_#'] = 2;
		$Product['price'] = 15.00;
	}
	else if($Product['item'] == 'Ribs'){
		$Product['product_#'] = 3;
		$Product['price'] = 15.00;
	}
	else{
		$Product['product_#'] = 4;
		$Product['price'] = 10.00;
	}
	if(!empty($_SESSION['cart'])){
		addItems($Product);
	}
	else{
		array_push($_SESSION['cart'], $Product);
	}
	
}
if(!empty($_GET['Sides'])){
	$Product = array();
	$Product['item'] = stripslashes($_GET['Sides']);
	$Product['item_qty'] = stripslashes($_GET['Sides_qty']);
	if($Product['item'] == 'Baked Beans'){
		$Product['product_#'] = 5;
		$Product['price'] = 5.00;
	}
	else if($Product['item'] == 'Fried Okra'){
		$Product['product_#'] = 6;
		$Product['price'] = 5.00;
	}
	else if($Product['item'] == 'Mashed Potatoes'){
		$Product['product_#'] = 7;
		$Product['price'] = 5.00;
	}
	else{
		$Product['product_#'] = 8;
		$Product['price'] = 5.00;
	}
	if(!empty($_SESSION['cart'])){
		addItems($Product);
	}
	else{
		array_push($_SESSION['cart'], $Product);
	}
}
if(!empty($_GET['Drink'])){
	$Product = array();
	$Product['item']= stripslashes($_GET['Drink']);
	$Product['item_qty'] = stripslashes($_GET['Drink_qty']);
	if($Product['item'] == 'Lemonade'){
		$Product['product_#'] = 9;
		$Product['price'] = 2.00;
	}
	else if($Product['item'] == 'Coke'){
		$Product['product_#'] = 10;
		$Product['price'] = 2.00;
	}
	else{
		$Product['product_#'] = 11;
		$Product['price'] = 2.00;
	}
	if(!empty($_SESSION['cart'])){
		addItems($Product);
	}
	
	else{
		array_push($_SESSION['cart'], $Product);
	}
}





}



$i = 0;
foreach($_SESSION['cart'] as &$product){
	echo '<div>';
	$i++;
	$price = $product['item_qty'] * $product['price'];
	echo "Item Number: " . $i . "  Product #: " . $product['product_#'] . "  Item: " . $product['item'] . "   Quantity: " . $product['item_qty'] . "  Price  $" . $price ."<br /><br />";
	echo '</div>';
}


	
		
?>
<div>
<h3 style="color:#468499;">You must enter an item number and quantity to remove an item.</h3>
<form action="review_order.php" method="get">
	<p> Item Number(to remove)<input type="text" name="item_number_remove">
  
   Quantity(to remove)<input type="text" name="quantity_remove">
  </p>
<input type="submit" name="Submit" value="Remove Items">
</form>



<a href="order.php">Order more items</a>
<br />
<a href="customer_info.php">Continue With Order</a>
</div>
<footer>
      <p>&copy; Copyright 2022. All Rights Reserved.</p>
      
	  	<a href=https://www.facebook.com target="blank"><img src="images/image2.png" alt="facebook logo"></a>
      <a href=https://www.twitter.com target="blank"><img src="images/image3.png" alt="twitter logo"></a>
    </footer>
</body>
</html>