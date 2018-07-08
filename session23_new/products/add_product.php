<?php
	session_start(); 
	if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 1){
		echo "Dang san pham tai day!";	
		echo "<a href='form.php'>Đăng Sp</a>";
	}else{
		echo "Ban khong co quyen dang san pham";	
	}
	
?>
