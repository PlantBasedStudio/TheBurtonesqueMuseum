<?php

require './connection.php';

$table = 'users';

$sql = "CREATE TABLE IF NOT EXISTS " . $table . " (
    id int(10) auto_increment PRIMARY KEY NOT NULL,
    login VARCHAR(128) UNIQUE NOT NULL,
    password VARCHAR(256) NOT NULL,
    role VARCHAR(20) NOT NULL,
    token_reset VARCHAR(255) NULL, 
    isVerified bool NULL);";


if (mysqli_query($connection,$sql)){
    echo 'La table des '.$table.' a été créée';
}else{
    mysqli_error($connection,$sql);
}

$sql = "CREATE TABLE IF NOT EXISTS clients (
    id int(10) auto_increment PRIMARY KEY NOT NULL, 
    firstname VARCHAR(128) NOT NULL,
    lastname VARCHAR(128)  NOT NULL,
    mail VARCHAR(128) UNIQUE NOT NULL,
    phone VARCHAR(15) NULL,
    address VARCHAR(254) NULL,
    complement VARCHAR(150) NULL,
    postal_code VARCHAR(16) NULL,
    city VARCHAR(255) NULL,
    state VARCHAR(50) NULL,
    country VARCHAR(50) NULL,
    wishlist text NULL,
    avantage bool NULL,
    ticket VARCHAR(128) NULL,
    user_id int(6) NOT NULL,         
    FOREIGN KEY (user_id) REFERENCES users(id))";

if (mysqli_query($connection,$sql)){
    echo 'La table des clients a été créée';
}else{
    mysqli_error($connection,$sql);
}

// $sql = "ALTER TABLE ". $table . "(
//     ADD COLUMN clients_id int(6) NOT NULL,
//     ADD FOREIGN KEY (clients_id) REFERENCES clients(id))";  

// if (mysqli_query($connection,$sql)){
//     echo 'La modification de la table '. $table. 'a été effectuée avec succès !';
// }else{
//     mysqli_error($connection,$sql);
// }

$sql = "CREATE TABLE IF NOT EXISTS article (
    id int(10) auto_increment PRIMARY KEY NOT NULL, 
    reference VARCHAR(50) NOT NULL, 
    designation VARCHAR(150) NOT NULL, 
    description text NOT NULL, 
    categorie VARCHAR(50) NOT NULL, 
    img VARCHAR(255) NULL, 
    thumbnail VARCHAR(255) NULL,
    price_ht DECIMAL(10, 2) NOT NULL, 
    tva FLOAT NOT NULL,
    stock int(5) NOT NULL)";

if (mysqli_query($connection,$sql)){
    echo 'La création de la table article a été effectuée avec succès !';
}else{
    mysqli_error($connection,$sql);
}

mysqli_close($connection);

?>