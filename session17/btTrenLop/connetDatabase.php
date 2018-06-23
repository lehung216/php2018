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

$sql = "INSERT INTO users (id,name, email, phone)
VALUES ('2', 'jhon', 'john@gmail.com', '0909090909')";
if ($conn->query($sql) == TRUE){
	echo "New record created successfully";
}else {
	echo "Error:" . $sql . "<br>" . $conn->error;
}
?>