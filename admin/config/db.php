<?php
#conexion a la BD
$host="localhost";
$bd="bookstore";
$user="root";
$pwd="";

#Seguido realizamos una instruccion try
try {
    //PDO es el que nos permite comunicar directamente con la bd, creando una conexion
    $conn= new PDO("mysql:host=$host; dbname=$bd",$user,$pwd);
} catch (Exception $ex) {
    //En caso dado de que exista un error 
    echo $ex->getMessage();
}




?>