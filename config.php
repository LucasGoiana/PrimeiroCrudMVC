<?php 
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
    define('BASE_URL','http://localhost/PrimeiroCrudMVC/');
    $config['dbname'] ='CrudMVC';
    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['password'] ='';
}else{
    $config['dbname'] ='';
    $config['host'] = '';
    $config['user'] = '';
    $config['password'] ='';

}
global $db;
try{

    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host']."",$config['user'],$config['password']);

}catch(PDOExpeception $e){

    echo 'Error: '.$e->getMessage();
    exit;
}

?>