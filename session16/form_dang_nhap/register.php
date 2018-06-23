<?php
	if(isset($_POST ["submit"]))
	{
		$name = $_POST ["name"];
		$mail = $_POST ["mail"];
		$pass = $_POST ["pass"];
		$phone = $_POST ["phone"];
		echo "Xin chao ban: ".$name;
		$file = "data.txt";
		$a = fopen($file, "a");
		fwrite($a,($name."-".$mail."-".$pass."-".$phone."\r\n"));
		fclose($a);
	}
	
?>
<form action = "register.php" method = "POST">
		<label for="name">Họ và tên:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label for="mail">Email:</label>
		<input type="text" name="mail" id="mail">
		<br><br>
		<label for="pass">Password:</label>
		<input type="Password" name="pass" id="pass">
		<br><br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" id="phone">
		<br><br>
		<input type = "submit" value = "Submit" id = "submit" name = "submit"/>
	</form>