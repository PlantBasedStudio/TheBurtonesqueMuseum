<?php

require './connection.php';

$table = 'users';

$sql = "CREATE TABLE IF NOT EXISTS " . $table . " (
    id int(6) auto_increment PRIMARY KEY NOT NULL,
    pseudo VARCHAR(32) NULL,
    login VARCHAR(128) UNIQUE NOT NULL,
    firstname VARCHAR(128) NOT NULL,
    lastname VARCHAR(128)  NOT NULL,
    password VARCHAR(256) NOT NULL,
    role VARCHAR(20) NOT NULL,
    phone VARCHAR(15) NULL,
    address VARCHAR(254) NULL,
    complement VARCHAR(150) NULL,
    postal_code VARCHAR(16) NULL,
    city VARCHAR(255) NULL,
    state VARCHAR(50) NULL,
    country VARCHAR(50) NULL,
    isVerified bool NULL);";



if (mysqli_query($connection,$sql)){
    echo 'La table des '.$table.' a été créée';
}else{
    mysqli_error($connection,$sql);
}

mysqli_close($connection);

?>