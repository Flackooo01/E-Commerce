<?php
    if(isset($_POST)){
        $file = $_FILES['file'];
        $fileName = $_FILES['file'] ['name'];
        $fileTmpName = $_FILES['file'] ['tmp_name'];
        $fileSize = $_FILES['file'] ['size'];
        $fileError = $_FILES['file'] ['error'];
        $fileType = $_FILES['file'] ['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0 ){
                if($fileSize < 500000){
                    $fileNameNew = uniqid('', true). ".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                if($file){
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo ("<script>alert('Upload Successfully.')</script>");
                    echo("<script>window.location = 'addproduct.php';</script>");
                }
                else{
                    echo "<script>Your file is too big!</script>";
                }
            }else{
                echo "<script>There was an error uploading your file!</script>";
            }
        }else{
            echo "<script>You cannot upload files of this type!</script>";
        }
    }
}

?>