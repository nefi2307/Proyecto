<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
        <!-- CSS -->
        <link rel="preload" href="css/normalize.css" as="style">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="preload" href="css/style.css" as="style">
        <link rel="stylesheet" href="css/style_register.css">
        <link rel="stylesheet" href="css/style_register.css">
        <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>    
    <div class="fondo_Header">

    </div>
    <!-- HEADER ------------------------------------------------------------------------------------- -->
    <header>
        <div class = "logo"> <!-- Logo -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bus" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8" />
                <path d="M16 5l1.5 7l4.5 0" />
                <path d="M2 10l15 0" />
                <path d="M7 5l0 5" />
                <path d="M12 5l0 5" />
            </svg>

            <h1> TECLAG<span>EXPRESS</span> </h1>
        </div>

        <nav class="nav"> <!-- Navegador -->
            <a href = "./index.php#inicio">Inicio</a>
            <a href = "./index.php#viajes_disp">Viajes disponibles</a>
            <a href = "./index.php#puntos_venta">Puntos de venta</a>
        </nav>

        <section class ="iconos">
            <a href="./carritoCompras.php"> <!-- Icon Carrito -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
            </a>

            <?php
            session_start();

            if(isset($_SESSION['loginState']))
                {   
                    echo '<a href = "./php/exit.php" title=  "Cerrar Sesión">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">';
                    echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
                    echo '<path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />';
                    echo '<path d="M9 12h12l-3 -3" />';
                    echo '<path d="M18 15l3 -3" />';
                    echo '</svg>';
                    echo '</a>';

                    echo '<p>Bienvenid@ ' .$_SESSION['nombre']. '</p>';  
                }
            ?>
        </section>
    </header>
    
    <!-- Login para registrarse-->
    <section class="contenedorLogin">

        <div class="contenedor-imagen">            
            <div class="mensajeamlo">            
            <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
            <BR><BR><BR><BR><BR>
                Nuestro presidente AMLO disfrutando de nuestro servicio.
                <BR>
                    ¡UNASE A NOSOTROS!
                </div>
        </div>

        <div class="datos">
            
            <label class="titulo">Registro de Usuario</label>         
            
                <form method="post" name="fomr1" action="../Proyecto_Venta de bolets/php/registro_usuario.php"  id="registroForm">
                    <label for="nombre">Nombres</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre(s)." required>
        
                    <label for="apellidoPaterno"> Apellido Paterno</label>
                    <input type="text" id="apellidoPaterno" name="apellidoPaterno" placeholder="Ingrese su apellido paterno." required><br>
        
                    <label for="apellidoMaterno"> Apellido Materno</label>
                    <input type="text" id="apellidoMaterno" name="apellidoMaterno"  placeholder="Ingrese su apellido materno." required><br>
        
                    <label for="edad"> Edad</label>
                    <input type="text" id="edad" name="edad" placeholder="Ingrese su edad."  required pattern="^(1[8-9])$|^([2-9])([0-9])$" title="Necesitas ser mayor de edad"><br>
        
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required><br>
        
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder = "Ingrese una contraseña máximo 10 caracteres."required ><br>

                    <a href="./inicio_sesion.php">¿Ya tienes cuenta? ¡Inicia Sesión!</a> <br>
        
                    <button type="submit">Registrarse</button>
                </form>        
        </div>
    </section>
    <br><br>    
    <footer>
        © Derechos reservados a Neftali Industries 2015.
    </footer>

</body>

</html>
