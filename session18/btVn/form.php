
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="slider.css" />

</head>
<body>
<div class="container">
<form action = "form.php" method = "POST">

		<h2>Products123</h2>
		<br>
			<table class="table table-bordered table-condensed">
			<tr>
			<td>ID</td>
			<!--<td>Image</td>-->
			<td>NAME</td>
			
			
			<td>Price</td>
			</tr>
			<tr>
			
			<!--<td><input type="text" name="image" id="image"></td> -->
			<td><input type="text" name="category_id" id="category_id"></td>
			<td><input type="text" name="name" id="name"></td>
			
			<td><input type="text" name="price" id="price"></td>
			</tr>
			</table>		
		<br><br>  
		<input type="submit" name="register" value="Register">
	</form>	
</div>
</body>
</html>
<?php
		if(isset($_POST['submit']))
		{
			
			$category_id = $_POST['category_id'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			if (empty($name) || empty($category_id)  || empty($price)) {
				echo "Bạn chưa nhập dữ liệu";
			}
			else{
				echo "Bạn đã nhập dữ liệu"."<br>";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "learn_mysql";
				//Create connection
				$conn = new mysqli($servername, $username, $password, $database);

				if ($conn->connect_error) {
					die("connection false: ".$conn->connect_error);
				}
				$sql = "INSERT INTO newproducts (stt, product_id, name, model, price) VALUES ('$stt', '$product_id', 
				'$name', '$model', '$price')";
				$sql1 = "SELECT stt, product_id, name, model, price FROM newproducts";
				$result = $conn->query($sql1);
				if ($conn->query($sql) === TRUE) {
					if ($result->num_rows >0) {
						echo "<table border=1 cellspacing=0 cellpading=0>
						<tr> 
							<th><font color=blue>STT</th>
							<th>Name</th> 
							<th>Product_id</th>
							<th>Price</font></th>
						</tr>  
						</table>";
						while ($row = $result->fetch_assoc()) {
							   	$a = $row["stt"];  
								$b = $row["name"];  
								$c = $row["product_id"]; 
								$d = $row["price"]; 
							echo "<table border=1 cellspacing=0 cellpading=0>  
									<tr>
									<th><font color=blue>$a</th>
									<th>$b</th> 
									<th>$c</th>
									<th>$d</font></th>
									</tr>
									</table>";  
						}
					}
					else{
						echo "0 results";
					}
				}
				else
				{
					echo "Error";
				}
				
			}
		}
	?>
	