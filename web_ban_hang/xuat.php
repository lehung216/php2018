<?php 
    
    $link = mysqli_connect("localhost", "root", "", "ban_hang");
    $id = $_GET['id'];
    $tv = "select id,ten,gia,img,thuoc_menu from san_pham where thuoc_menu='$id' order by id desc ";
    $tv1 = mysqli_query($link, $tv);
	while($tv_2 = mysqli_fetch_array($tv1))
    {
        echo $tv_2['ten'];echo "<br>";
        echo $tv_2['gia'];echo "<br>";
        
         $link_anh = $tv_2['img'];
        echo "<img src='$link_anh' width='150px' >";echo "<br>";
        echo "<hr>"; 
    }
?>