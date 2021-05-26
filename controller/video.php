<?php

function video(){
    if(isset($_GET['id'])){
        $id = filter_input(INPUT_GET,'id');
        
        $db = new Database();
        $result = $db->selection($id);

        if(!$result){
            error_throw(404);
        }
        require_once('./view/video.php');
    }
    else{//Get variable doesn't exist
        error_throw(400);
    }
}