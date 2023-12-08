<?php
    require 'conexion.php';

    $usuario = $_POST["email"];
    $contrasena = $_POST["contrasena"];


    $sql = $enlace->query("SELECT * from usuarios where user_Correo = '$usuario' and user_Contraseña = '$contrasena'");

    if ($sql && $sql->num_rows > 0) {        
        $results = $sql->fetch_assoc();

        // Inicia la sesion del usuario
        session_start();
        // Usuario válido, establece la variable de sesión

        $_SESSION['usuario'] = $results['user_Correo'];
        $_SESSION['nombre'] = $results['user_nombres'];
        $_SESSION['loginState'] = true;

        echo "<script>;        
        location.href = '../index.php';
         </script>";
    } else {
    
        echo "<script> alert('Correo o contraseña inválidos.');
        location.href = '../inicio_sesion.php';
        </script>";
    }
 
?>