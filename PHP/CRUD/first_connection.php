<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$connection = mysqli_connect($host, $user, $pass);

if(!$connection){
    die(mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS `museum`;";

if(mysqli_query($connection, $sql)){
    echo "La BDD du museum a été créée";
}else{
    echo "Erreur de création de la BDD";
}

mysqli_close($connection);
?>