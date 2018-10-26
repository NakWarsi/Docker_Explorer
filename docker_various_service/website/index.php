<html>
	<head>
		<title>Available Books in my Store</title>
	</head>
	<body>
	<h1>Welcome to My Book-Store</h1>
	
	<ul>
		<?php
		
			$json = file_get_contents('http://product-service/');
			$obj = json_decode($json);
			$products = $obj->product;
			echo $products;
			foreach($products as $product)
			{
			echo "<li>$product</li>";
			}
		?>
	</ul>
	</body>
</html>
