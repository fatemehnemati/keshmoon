<?php
spl_autoload_register('myAutoloader');
function myAutoloader ($ClassName){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'includes')!==false){
        $path='../class/';

    }
    else{
        $path = 'class/';
    }
    $ext = '.class.php';
    required_once ($path.$ClassName.$ext) ;
}