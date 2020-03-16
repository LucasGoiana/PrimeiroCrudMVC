<?php 
session_start();
include('config.php');

spl_autoload_register(function($class){

    if(file_exists('controllers/'.$class.'.class.php')){
        include('controllers/'.$class.'.class.php');
    }
    else if(file_exists('models/'.$class.'.class.php')){
        include('models/'.$class.'.class.php');
    }
    else if('core/'.$class.'.class.php'){
        include('core/'.$class.'.class.php');
    }

});

$core = new Core();
$core->run();
?>