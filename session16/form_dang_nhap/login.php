<?php
	if (isset($_POST ["submit"]))
	{
		
		$user = $_POST ["user"];		
		$pass = $_POST ["pass"];
		$file = "data.txt";
		if (file_exists($file)) {
			$read = fopen($file, "r");
			while (!feof($read))//true nếu ở cuối file 
			{
				$row = fgets($read);
				$tach = explode("-", $row);
				$member[] = $tach;
				
			};

		};
		
		
	if (array_key_exists($user,$member)){
			echo "Xin chao ban."."<br>"."Đăng nhập thành công.";
			}else echo"sai rồi";
	
	};
		
?>
<form action = "login.php" method = "POST">
		<label for="user">User:</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass">Password:</label>
		<input type="Password" name="pass" id="pass">
		<br><br>
		<input type = "submit" value = "Submit" id = "submit" name = "submit"/>
	</form>