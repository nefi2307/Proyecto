<?php

$host = "localhost";
$user = "root";
$contraseña = "";
$db = "dbteclagexpress";

$enlace = mysqli_connect($host, $user, $contraseña, $db);
    if(!$enlace){
        die("No se pudo realizar la conexión con el sevidor, intentelo de nuevo más tarde.");
    }
    ?>