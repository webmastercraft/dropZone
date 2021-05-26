<?php

/**
 * error_throw() function
 * This function redirects 302 to index.php with error in GET + code
 *
 * @param integer $code Error code
 * @return void
 */
function error_throw($code=-1){
    $code = filter_input(INPUT_GET,'code');
    require_once './view/error.php';
}

/**
 * Must be called in index.php after an error_throw
 */
function error_management(){
    $code = filter_input(INPUT_GET,'code');
    require_once './view/error.php';
}