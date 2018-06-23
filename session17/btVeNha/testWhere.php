<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "18php02";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "DELETE * FROM users WHERE phone LIKE '%8%'";
$sql = "SELECT id, name, phone FROM users WHERE name LIKE '%a%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) 
    	{
    	//if ( strpos($row["name"], "a") )
    	echo "Cau 3:";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " "."Phone:" . $row["phone"]. "<br>"; 	
		}    	
}
//xoa

mysqli_close($conn);
?>