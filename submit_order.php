<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Submit Order</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso 8859-1" />
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
	
	if(empty($_GET['first_name']) || empty($_GET['last_name']) || empty($_GET['phone']) || empty($_GET['email'])){
		echo "You Must Enter All Fields press your back button to enter info<br />";
	}
	else{
		$first_name = stripslashes($_GET['first_name']);
		$last_name = stripslashes($_GET['last_name']);
		$phone = stripslashes($_GET['phone']);
		$email = stripslashes($_GET['email']);
		
		$DBConnect = mysqli_connect("localhost", "root", "");     
	if ($DBConnect === FALSE)
		echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() . "</p>";

	else {        
		$DBName = "food";        
		if (!@mysqli_select_db($DBConnect,$DBName)) {             
			$SQLstring = "CREATE DATABASE $DBName";             	
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);             
			if ($QueryResult === FALSE)
				echo "<p> Line 36 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect). ": " . mysqli_error($DBConnect) . "</p>";
			  
		}        
		mysqli_select_db($DBConnect, $DBName);
		
		
		
		//Product table
		$TableName = "product";   
		$SQLstring = "SHOW TABLES LIKE '$TableName'";   
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);   
		
		if(!$QueryResult || mysqli_num_rows($QueryResult) == 0){

			$SQLstring = "CREATE TABLE $TableName (product_number INT(10), name VARCHAR(25), price decimal(10,2), PRIMARY KEY(product_number) )";
			    
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);        
			if ($QueryResult === FALSE)             
				echo "<p> Line 54 Unable to create the table.</p>" . "<p>Error code " . mysqli_errno($DBConnect)  . ": " . mysqli_error($DBConnect) . "</p>";
			
			
			$SQLstring = "INSERT INTO $TableName VALUES(1, 'Brisquit', 20)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 60 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>"; 

			$SQLstring = "INSERT INTO $TableName VALUES(2, 'Pulled Pork', 15)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
				if ($QueryResult === FALSE)
					echo "<p> Line 65 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>"; 			
		
			$SQLstring = "INSERT INTO $TableName VALUES(3, 'Ribs', 15)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 70 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(4, 'Chicken', 10)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(5, 'Baked Beans', 5)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(6, 'Fried Okra', 5)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(7, 'Mashed Potatoes', 5)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(8, 'Green Beans', 5)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(9, 'Lemonade', 2)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(10, 'Coke', 2)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
			
			$SQLstring = "INSERT INTO $TableName VALUES(11, 'Sprite', 2)";            
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
			if ($QueryResult === FALSE)
				echo "<p> Line 75 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
		}
		
		
			
		//customer table
		$TableName = "customer";   
		$SQLstring = "SHOW TABLES LIKE '$TableName'";   
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);   
		
		if(!$QueryResult || mysqli_num_rows($QueryResult) == 0){
			$SQLstring = "CREATE TABLE $TableName (account_num int NOT NULL AUTO_INCREMENT, first_name VARCHAR(30), last_name VARCHAR(30), phone VARCHAR(12), email VARCHAR(35), PRIMARY KEY(account_num))";
			    
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);        
			if ($QueryResult === FALSE)             
				echo "<p> Line 129 Unable to create the table.</p>" . "<p>Error code " . mysqli_errno($DBConnect)  . ": " . mysqli_error($DBConnect) . "</p>";
		}
		$SQLstring = "SELECT email from customer where email = '$email'";
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);        
			if ($QueryResult === FALSE)  {           
				echo "<p> Line 33 Unable to execute query.</p>" . "<p>Error code " . mysqli_errno($DBConnect)  . ": " . mysqli_error($DBConnect) . "</p>";
			}
			else{
				if(mysqli_num_rows($QueryResult) == 0){
					$SQLstring = "INSERT INTO $TableName VALUES(NULL, '$first_name', '$last_name', '$phone', '$email')"; 
					if(mysqli_query($DBConnect, $SQLstring)){
						$last_id_1 = mysqli_insert_id($DBConnect);//last $account# generated
					}	
					//$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
					//if ($QueryResult === FALSE)
						//echo "<p> Line 138 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
										
				}
				else{
					$account_num = mysqli_fetch_assoc(@mysqli_query($DBConnect,"select account_num from customer where email = '$email'"));
						$last_id_1 = $account_num['account_num'];//account number to be used in _order table
				}
			}
		           
		

		
		
		//Orders table
		$TableName = "_order";   
		$SQLstring = "SHOW TABLES LIKE '$TableName'";   
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);   
		
		if(!$QueryResult || mysqli_num_rows($QueryResult) == 0){

			
			$SQLstring = "CREATE TABLE $TableName (order_num int NOT NULL AUTO_INCREMENT PRIMARY KEY, order_date DATE, order_total VARCHAR(10), account_num VARCHAR(20), FOREIGN KEY (account_num) REFERENCES customer(account_num) )";
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);        
			if ($QueryResult === FALSE)             
				echo " Line 153 <p>Unable to create the table.</p>" . "<p>Error code " . mysqli_errno($DBConnect)  . ": " . mysqli_error($DBConnect) . "</p>";
		}
		$order_date = date("Y/m/d");  
		$order_total = 0;		
		foreach($_SESSION['cart'] as &$product){
			
			$order_total += $product['item_qty'] * $product['price'];
		}	
		$SQLstring = "INSERT INTO $TableName VALUES(NULL, '$order_date', '$order_total', '$last_id_1' )";  
		if(mysqli_query($DBConnect, $SQLstring)){
			$last_id_2 = mysqli_insert_id($DBConnect);//last $order# generated
		}			
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);               
		if ($QueryResult === FALSE)
			echo "<p> Line 167 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";  
		
		
		
		//OrderItems table
		$TableName = "order_items";   
		$SQLstring = "SHOW TABLES LIKE '$TableName'";   
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);   
		
		if(!$QueryResult || mysqli_num_rows($QueryResult) == 0){

			$SQLstring = "CREATE TABLE $TableName (order_num INT(100), product_num INT(100), quantity INT(10), FOREIGN KEY(order_num) references _order (order_num), FOREIGN KEY(product_num) references product (product_number),PRIMARY KEY(order_num, product_num))";
			    
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);        
			if ($QueryResult === FALSE)             
				echo "<p>Line 182 Unable to create the table.</p>" . "<p>Error code " . mysqli_errno($DBConnect)  . ": " . mysqli_error($DBConnect) . "</p>";
		}
		 foreach($_SESSION['cart'] as &$product){
			$product_num = $product['product_#'];
			$item_qty = $product['item_qty'];
			$SQLstring = "INSERT INTO $TableName VALUES('$last_id_2', '$product_num', '$item_qty' )";  			
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);  
			if ($QueryResult === FALSE)
			echo "<p> Line 190 Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>"; 
		 }			 
		 mysqli_close($DBConnect);     
	}
}

	
echo '<div style="color:#468499;">';
echo "<h1>Your order was placed!</h1>";
echo '</div>';	
	
session_destroy();

?>
<div>
<a href="order.php">Start New Order</a>
</div>
</form>
</body>
</html>

