
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

		<h2>Products Upload</h2>
		<br>
			<table class="table table-bordered table-condensed">
			<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>PRICE</td>
			<td>IMAGE</td>
			</tr>
			<tr>
			<td><textarea name="category_id" id="category_id" rows="2" cols="30"></textarea></td>
			<!--<td><input type="text" name="image" id="image"></td> -->
			<td><textarea name="name" id="name" rows="2" cols="30"></textarea></td>
			<td><textarea name="price" id="price" rows="2" cols="30"></textarea></td>
			<td>
        		<div class="wrapper">
            	<form method="POST" enctype="multipart/form-data">
                <input type="file" name="fileUpload"  id="fileUpload" >
                <input type="submit" name="submit1" value="Upload" >
            	</form>
        	</td>
			</tr>
			</table>		
		<br><br>  
		<input type="submit" name="submit" value="Upload">
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
				$sql = "INSERT INTO 18php02_shop_new (name, category_id, price) VALUES ('$name', '$category_id', 
				'$price')";
				$sql1 = "SELECT name, category_id, price FROM 18php02_shop_new";
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
<?php
if (isset($_POST['submit1'])) {
    $allupload = true;
    $target_dir = "";
    $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
    $typeFile = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
    $typeFileAllow = array('png','jpg','jpeg', 'gif');
    if(!in_array(strtolower($typeFile), $typeFileAllow)){
        $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        $allupload = false;
    }
    $sizeFile = $_FILES['fileUpload']['size'];
    if($sizeFile > 5000000){
        $error = "File bạn chọn không được quá 5MB";
        $allupload = false;
    }   
    if (file_exists($target_file)) {
    echo "File đã tồn tại.";
    $allupload = false;
    }    
    if(empty($error) && ($allupload)){
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
            echo "Bạn đã upload file thành công";
        }  else {
            echo "File bạn vừa upload gặp sự cố";
        }
    }
}
?>
