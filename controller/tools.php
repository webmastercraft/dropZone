<?php

/**
 * settings() function
 * This function recovers settings from JSON file (root).
 * 
 *
 * @return stdClassObject $settings if file decoded
 * @return null $settings if file is not decoded
 */
function settings(){
    $json = file_get_contents('settings.json');

    $settings = json_decode($json);

    if($settings === null){
        error_throw(503);
    }

    return $settings;
}