<?php 
    $link = mysqli_connect("localhost", "root", "", "ban_hang");
    $tv = "select * from menu_doc order by id";
    $tv_1 = mysqli_query($link, $tv);
    echo "<div class='menu_doc' >";
    while($tv_2 = mysqli_fetch_array($tv_1))
    {
        $link1 = "?thamso=xuat_san_pham&id=".$tv_2['id'];
        echo "<a href = '$link1'>";
            echo $tv_2['ten'];
        echo "</a>";
    }
    echo "</div>";
?>