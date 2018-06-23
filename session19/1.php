<?php
if (isset($_POST['submit'])) {
    $allupload = true;
    $target_dir = "";
    $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
    $typeFile = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
    $typeFileAllow = array('png','jpg','jpeg', 'gif');
    if(!in_array(strtolower($typeFile), $typeFileAllow)){
        $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        $allupload = false;
    }
    $sizeFile = $_FILES['fileUpload']['size'];
    if($sizeFile > 5000000){
        $error = "File bạn chọn không được quá 5MB";
        $allupload = false;
    }
    
    if (file_exists($target_file)) {
    echo "File đã tồn tại.";
    $allupload = false;
    }
    
    if(empty($error) && ($allupload)){
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
            echo "Bạn đã upload file thành công";
        }  else {
            echo "File bạn vừa upload gặp sự cố";
        }
    }
}

?>
<html>
    <head>
        <title>Upload file to server</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>File Upload .....</h2>
        <div class="wrapper">
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="fileUpload"  id="fileUpload" >
                <br>
                <br>
                <input type="submit" name="submit" >
            </form>
        </div>
    </body>
</html>