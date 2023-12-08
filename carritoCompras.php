<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/carrito_Compras.css" as="style">
    <link rel="stylesheet" href="css/carrito_Compras.css"> 

    <script defer src="funciones.js"></script>
</head>
<body>
    <div class="fondo_Header">

    </div>
    
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
            <a href="./registrar.php"> <!-- Icon iniciar sesión -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </a>
    
            <?php
            session_start();

            if(isset($_SESSION['loginState']))
                {   
                    echo '<a href = "./php/exit.php" title = "Cerrar sesión">';
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

    <main>
        <section class="contenedor_principal">
            <div class="titulo">
                <h1>Listado de compras</h1>

                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
            </div>

            <div class="cont_Compras">
                <h2> Compra 1</h2>
                
                <h3>Destino: <p>Saltillo</p></h3>
                <h3>Fecha de compra: <p>19/12/1987</p></h3>
                <h3>Asientos: <p>A1, A2, E2, D4</p></h3>
                <h3>Nombre del comprador: <p>Salvador Frausto</p></h3>
                <h3>Pago: <p>5000000</p></h3>

                <img src="./img/saltillo_main.jpg">
            </div>

            <div class="cont_Compras">
                <h2> Compra 2</h2>
                
                <h3>Destino: <p>Vergel</p></h3>
                <h3>Fecha de compra: <p>19/12/1987</p></h3>
                <h3>Asientos: <p>B9, B2</p></h3>
                <h3>Nombre del comprador: <p>Isaac Burciaga</p></h3>
                <h3>Pago: <p>10000</p></h3>

                <img src="./img/vergel_main.jpg">
            </div>
            
        </section>

    </main>

    <!-- Footer ------------------------------------------------------- -->
    <footer>
        © Derechos reservados a Neftali Industries 2015.
    </footer>
</body>
</html>