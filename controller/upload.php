<?php
require_once './model/upload.php';

/**
 * Final controller function
 *
 * @param STRING $index_path dirname(__FILE__), arg passed on index
 * @return void
 */
function upload($index_path){

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    else{
        header("HTTP/1.0 400 Bad Request",$http_response_code = 400);
        exit();
    }

    print_r($id);

    $file = new File_uploaded($index_path,$id);
    
    if($file->filetreatement()){
        
        if($file->addFile() === false)
        {
            error_throw(500);
        }
        else{
            $file->cookies();
        }
    }

    else{
        error_throw(500);
    }

}