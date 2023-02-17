<?php

spl_autoload_register('myAutoLaoder'); 
 
function myAutoLaoder($className) {

    $url =  $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

    
    $path = "classes/";

    
    $extension = '.class.php';
    require_once $path.strtolower($className).$extension;

}