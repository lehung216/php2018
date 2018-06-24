<?php 
    include("ket_noi.php");
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
        <style type="text/css" >      
         	/*style menu_ngnag*/     
		    div.menu_ngang a 
		    {
		        color:blue;
		        margin-left: 10px;
		        margin-right: 10px;
		        text-decoration: none;
		        font-size:20px;
		    }
		    div.menu_ngang a:hover
		    {
		        color:red
		    }
		    /*style menu_doc*/
		    div.menu_doc a 
			{
			    color:blue;
			    text-decoration: none;
			    display:block;
			}
			div.menu_doc a:hover
			{
			    color:red
			}
		</style>
    </head>
    <body>
    <center>
    <table width="990px">
    <tr>
        <td colspan="3"><img src="12.jpg" width="900px" height="200px" ></td>
    </tr>
    <tr>
        <td colspan="3">
        	<?php 
    			include("menu_ngang.php");
			?>
		</td>
    </tr>
    <tr>
        <td width="170px"  valign="top">
        	<?php 
              include("menu_doc.php");
            ?>
                    	
        </td>
        <td width="650px"  valign="top">
        	<?php 
    		  include("dieu_huong.php");
			?>
        </td>
        <td width="170px"  valign="top">Cột phải</td>
    </tr>
    <tr>
        <td colspan="3">Footer</td>
    </tr>
	</table>
	</center>
    </body>
</html>