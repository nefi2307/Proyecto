<?php
    // Inicia la sesión
    session_start();

    // Elimina todas las variables de sesión
    $_SESSION = array();

    // Destruye la sesión
    session_destroy();

    // Redirecciona a la página de inicio de sesión o a otra página
    //header("Location: index.php");
    echo "<script>;
        location.href = '../index.php';
         </script>";
    exit();
?>