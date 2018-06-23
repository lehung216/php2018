<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "18php02";
//create connection
		$conn = new mysqli($servername, $username, $password, $database);

//check connection
		if ($conn->connect_error){
			die("connection failed: ".$conn->connect_error);
		}else echo "connection successfully."."<br>";
?>
<?php 
if(isset($_POST ["submit"]))
	{
		$name = $_POST ["name"];
		$mail = $_POST ["mail"];
		
		$phone = $_POST ["phone"];
		echo "Xin chao ban: ".$name."<br>";
		
		$sql = "INSERT INTO users (name, email, phone)
			VALUES ('$name', '$mail', '$phone')";
		if ($conn->query($sql) == TRUE){
			echo "New record created successfully";
		}else {
			echo "Error:" . $sql . "<br>" . $conn->error;
		} 
	}
?>

<form action = "bt1.php" method = "POST">
		<label for="name">Họ và tên:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label for="mail">Email:</label>
		<input type="text" name="mail" id="mail">
		<br><br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone">
		<br><br>
		<input type = "submit" value = "Submit" id = "submit" name = "submit"/>
	</form>