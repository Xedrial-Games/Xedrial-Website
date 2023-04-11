<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // chech if the file was uploaded successfully
    if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK){
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $file_tmp = $_FILES['file']['tmp_name'];
        
        // check if file type is allowed
    }
    $allowed_types = array('image/jpeg','image/png','image/gif');
    if(!in_array($file_type, $allowed_types)){
        echo "invalid file type";
        exit;
    }

    $max_size = 2048 * 2048; // 2mp
    if($file_size > $max_size){
        echo "file size exceeds limit";
        exit;
    }

    $upload_dir = 'uploads/';
    $upload_path = $upload_dir .$file_name;
    if(move_uploaded_file($file_tmp,$upload_path)){
        echo "file uploaded successfully";
    }else{
        echo "Error uploading file";
    }
}
?>