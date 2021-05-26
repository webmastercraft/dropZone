<?php
//Mixture Project
//Author : Matthieu BOUCHET

/*
----IMPORTANT----
CONFIGURE THIS LIMITS IN PHP.INI, mini limits => 128
ini_set('post_max_size','200M');
ini_set('upload_max_filesize','200M');*/

require_once('./controller/tools.php');
require_once('./controller/home.php');
require_once('./controller/upload.php');
require_once('./controller/video.php');
require_once('./controller/error.php');

/**
 * Settings recuperation
 */

$GLOBALS['settings'] = settings();
$GLOBALS['root'] = $GLOBALS['settings']->root;
$GLOBALS['catchword'] = $GLOBALS['settings']->catchword;

if(isset($_GET['action'])){
    $action = filter_input(INPUT_GET,'action');
    
    switch($action){
        case 'home':
            home();
            break;

        case 'upload':
            upload(dirname(__FILE__));
            break;

        case 'up':
            video();
            break;
        
        case 'error':
            error_management();
            break;

        case 'terms':
            terms();
            break;
        
        default:
            home();
            break;
    }
}

else{
    home();
}