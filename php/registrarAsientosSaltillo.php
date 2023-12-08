<?php

    require 'conexion.php';

    $valorAtributo = $_GET['asiento'];

    $numeros = explode(", ", $valorAtributo);

    /*echo "<pre>";
    var_dump($numeros);
    echo "</pre>";*/

    for($i = 1; $i < count($numeros); $i++){
        $cons = "UPDATE asientos SET asiento_Ocupado = 1 WHERE asiento_Id = $numeros[$i]";

        $query = mysqli_query($enlace, $cons);
    }

    $enlace->close();

    header("Location: ../index.php");
    exit; 
?>