<?php

require_once 'environment.php';

//define("BASE_URL","http://www.vfweb.com.br/vf");
define("BASE_URL","http://localhost/vf");

global $config;
$config=array();
if(ENVIRONMENT == "development"){
    $config['dbname'] = 'dbclubcard';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'vftecnologia';
    $config['dbpass'] = 'vftec687408';
}
else{
    $config['dbname'] = 'dbclubcard';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'vftecnologia';
    $config['dbpass'] = 'vftec687408';
    
}
    
