<?php
$connection = [
    'host' => 'localhost'
    'user' => 'root'
    'password' => ''
    'databasename' => 'ropot control'
];
$mysql = new mysqli($connection['host'],$connection['user'],$connection['password'],$connection['databasename']);
$mysql->query(" insert into motor1 (name) values (1)')")
$mysql->query(" insert into motor2 (name) values (2)')")
$mysql->query(" insert into motor3 (name) vaules (3)')")
$mysql->query(" insert into motor4 (name) values (4)')")
$mysql->query(" insert into motor5 (name) values (5)')")
$mysql->query(" insert into motor6 (name) values (6)')")
$mysql->query(" insert into On/Off (On) values (1)')")
$mysql->query(" insert into On/Off (Off) values (0)')")
$mysql->query(" insert into save (name) values (1)')")
    
ini_set('display_errors;1);
ini_set('display_startup_errors;1);
error_reporting(E_ALL);
    
?>

