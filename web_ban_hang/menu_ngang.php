<?php 
    $link = mysqli_connect("localhost", "root", "", "ban_hang");
    $tv = "select * from menu_ngang order by id";
    $tv_1 = mysqli_query($link, $tv);
    echo "<div class='menu_ngang' >";
    while($tv_2 = mysqli_fetch_array($tv_1))
    {
        echo "<a href=''>";
            echo $tv_2['ten'];
        echo "</a>";
    }
    echo "</div>";
?>