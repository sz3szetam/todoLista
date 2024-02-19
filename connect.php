<?php
$server = 'localhost';
$db = '513_user';
$user = 'root';
$pwd = "";

try{
    $connect = new PDO("mysql:host=$server;dbname=$db;port='3306'", $user, $pwd);
}catch (Exception $e){
    print ($e -> getMessage());
}