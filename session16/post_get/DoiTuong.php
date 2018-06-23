<?php
	$data = $_POST ["data"]; //lấy dữ liệu bằng phương thức POST
	echo "Xin chao ban."."<br>".$data;//in ra màn hình
	$file = "data.txt";//tạo biến file chứa file cần dùng
	$a = fopen($file, "a");// mở file
	fwrite($a,$data);//viết vào file dữ liệu đã nhập
	fclose($a);//đóng flie
?>