<?php

    // Inicia la sesión
    session_start();

    // Verifica si la variable de sesión 'usuario' está establecida
    if (isset($_SESSION['usuario'])) {
        // Si está establecida, muestra un mensaje de bienvenida y un enlace para cerrar sesión
        echo "<p>Bienvenido, " . $_SESSION['usuario'] . ".</p>";
        echo "<p><a href='cerrar_sesion.php'>Cerrar Sesión</a></p>";
    } else {
        // Si no está establecida, muestra un mensaje indicando que no ha iniciado sesión
        echo "<p>No has iniciado sesión.</p>";
    }

?>