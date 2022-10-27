<?php
$server = "127.0.0.1";
$database = "appdb";
$user = "usrsite";
$password = "2001niver31";

$con = new PDO("mysql:host=$server;dbname=$database", "$user","$password" );
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($con == true) {
        echo "voce está conectado ao banco de dados" . PHP_EOL;
    } else {
        echo "erro ao conectar";
    };

?>