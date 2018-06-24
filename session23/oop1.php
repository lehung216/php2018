<?php 
class hoso{ 
public $ho_ten; 
public $ngay_sinh;
function hoso($hten,$ngsinh){
$this->ho_ten = $hten; 
$this->ngay_sinh=$ngsinh; 
}
}
echo "Su dung ham constractor<br>"; 
$hung = new hoso("Lê Mai Hùng","12/3/1992"); 
echo "Họ tên: " . $hung->ho_ten . ", Ngày sinh: " . $hung->ngay_sinh; 
?>
/*Chia làm ba loại chính: 
	Public: có thể truy cập trực tiếp bởi đoạn mã bên ngoài lớp 
	Private: không thể truy cập trực tiếp bởi đoạn mã bên ngoài lớp 
	Protected: không thể truy cập trực tiếp bởi đoạn mã bên ngoài lớp, sử dụng được bởi các lớp kế thừa 
*/
