<h1>Login form</h1>
<br>
<form action = "" method = "POST">
	<p>username:<input type="text" name="username"></p>
	<p>password:<input type="password" name="password"></p>
	<br><br>
	<input type = "submit" value = "Submit" name = "submit"/>
</form>
<?php
include '../config/connet.php';
if(isset($_POST['submit'])){
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$sql = "INSERT into users(role, username, password) values (0, '$username', '$password')";
	$result = mysqli_query($conn, $sql);
	echo "dang nhap thanh cong";
}
?>