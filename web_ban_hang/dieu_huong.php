<?php 
    if(isset($_GET['thamso']))
    	{$thamso = $_GET['thamso'];

		}
    else
    	{$thamso = "";
		 echo "trang chủ";

		}
	if(isset($_GET['id'])) include("xuat.php");
		
   
?>