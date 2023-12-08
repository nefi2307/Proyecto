<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecLagExpress</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <script defer src="./js/carrusel_JS.js"></script>
    <script defer src="../Proyecto_Venta de bolets/js/mensaje.js"></script>
    <script defer src="../Proyecto_Venta de bolets/js/redireccionar.js"></script>
</head>
<body id = "inicio">

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
            <a href = "#viajes_disp">Viajes disponibles</a>
            <a href = "#puntos_venta">Puntos de venta</a>
            <a href = "#abt_us">Sobre nosotros</a>
        </nav>

        <section class ="iconos">
            <a href="./registrar.php" title="Inicie sesión o registrese"> <!-- Icon iniciar sesión -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </a>
    
            <a href="./carritoCompras.php" title="Compras"> <!-- Icon Carrito -->
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
                    echo '<a href = "./php/exit.php" title = "Cerrar sesión">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">';
                    echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
                    echo '<path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />';
                    echo '<path d="M9 12h12l-3 -3" />';
                    echo '<path d="M18 15l3 -3" />';
                    echo '</svg>';
                    echo '</a>';

                    echo '<p>Bienvenid@ ' .$_SESSION['nombre']. '</p>';  
                }else{
                    
                }
            ?>
            
        </section>
    </header>

    <!-- Imagen abajo del header --------------------------- -->
    <section class="header_img">
    </section>

    <br><br>
    <!-- Panel de viajes disponibles --------------------------------------------------------------->
    <section class = "panelViajes" id = "viajes_disp">
        <section id="container-slider">
            <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-arrow-left-filled" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 2a10 10 0 0 1 .324 19.995l-.324 .005l-.324 -.005a10 10 0 0 1 .324 -19.995zm.707 5.293a1 1 0 0 0 -1.414 0l-4 4a1.048 1.048 0 0 0 -.083 .094l-.064 .092l-.052 .098l-.044 .11l-.03 .112l-.017 .126l-.003 .075l.004 .09l.007 .058l.025 .118l.035 .105l.054 .113l.043 .07l.071 .095l.054 .058l4 4l.094 .083a1 1 0 0 0 1.32 -1.497l-2.292 -2.293h5.585l.117 -.007a1 1 0 0 0 -.117 -1.993h-5.586l2.293 -2.293l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor" />
                  </svg>
            </a>
            <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-arrow-right-filled" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 2l.324 .005a10 10 0 1 1 -.648 0l.324 -.005zm.613 5.21a1 1 0 0 0 -1.32 1.497l2.291 2.293h-5.584l-.117 .007a1 1 0 0 0 .117 1.993h5.584l-2.291 2.293l-.083 .094a1 1 0 0 0 1.497 1.32l4 -4l.073 -.082l.064 -.089l.062 -.113l.044 -.11l.03 -.112l.017 -.126l.003 -.075l-.007 -.118l-.029 -.148l-.035 -.105l-.054 -.113l-.071 -.111a1.008 1.008 0 0 0 -.097 -.112l-4 -4z" stroke-width="0" fill="currentColor" />
                  </svg>
            </a>
            <ul class="listslider">
              <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
              <li><a itlist="itList_1" href="#"></a></li>
            </ul>
            <ul id="slider">
              <li style="background-image: url('./img/saltillo_boletos.jpg'); z-index:0; opacity: 1;">
                <div class="content_slider">
                  <div>
                    <h2>Saltillo</h2>
                    <p>Cápital de Coahuila</p>
                    <a href="./boleto_Saltillo.php" target="_blank" class="btnSlider">Agendar</a>
                  </div>
                </div>
              </li>
              <li style="background-image: url('./img/vergel_boletos.jpg'); ">
                <div class="content_slider">
                  <div>
                    <h2>Vergel</h2>
                    <p>Vergel, cápital industrial y ecónomica de la laguna</p>
                    <a href="./boleto_Vergel.php" target="_blank" class="btnSlider">Agendar</a>
                  </div>
                </div>
              </li>
              
            </ul>
          </section>
    </section>

    <!-- Misión Visión e Historia -->
    <h2 class = "titulo_sobreNosotros" id="abt_us"> Sobre Nosotros</h2>

    <section class = "sobre_nosotros">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-target-arrow" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M12 7a5 5 0 1 0 5 5" />
                <path d="M13 3.055a9 9 0 1 0 7.941 7.945" />
                <path d="M15 6v3h3l3 -3h-3v-3z" />
                <path d="M15 9l-3 3" />
              </svg>

            <h3> Misión</h3>

            <p> 
                Nuestra misión es la de brindar un servicio rápido, eficaz y sobretodo seguro a nuestros clientes. 
                Nos comprometemos a hacer que su experiencia con nosotros sea de lo mejor y que reciba un servicio 
                equivalente a su precio.
            </p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
              </svg>

            <h3> Visión</h3>

            <p>
                Actualmente líderes del mercado en el vergel. Esta proyección nos llevará a ser los líderes de la industria 
                estatal en poco tiempo, esperando pronto dar el salto para ser una de las mejores en el mercado nacional.
            </p>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                <path d="M3 6l0 13" />
                <path d="M12 6l0 13" />
                <path d="M21 6l0 13" />
              </svg>

            <h3> Historia</h3>

            <p>
                Fundada en el 2003 por Salvador Frausto Carrillo, Isaac Neftali Burciaga Chacón y Emanuel Navarro (2003- 2022) en el 
                imperio industrial, la mejor ciudad de la comarca lagunera, Gómez Palacio. Ahora, líder del mercado 
                en Vergel, mejor conocida como la ciudad que nunca duerme.
            </p>
        </div>
    </section>

    <!-- Panel Viaje rápido y seguro ------------------------------------------------------------------------------>
    <section class = "panel_slogan">
        <div>
            <h2>
                Viaje rápido y seguro.
            </h2>
            <p>
                Orgullosos de contar con los mejores transportes de la Laguna, ofreciendo una experiencia de viaje inigualable, descubre por qué elegirnos es la elección inteligente. 
            </p>
            <h2>
                ¡Bienvenido a un mundo de transportes de primera clase en la Comarca Lagunera!
            </h2>
            <h3>
                Laguna Bus
            </h3>
        </div>
    </section>

    <!-- Puntos de Venta ------------------------------------------------ -->

    <section class = "puntos_deVenta">
        
        <h2 id="puntos_venta"> Puntos de Venta</h2>
        <a href="https://maps.app.goo.gl/e79wZiSYcWR8dXRf9">
        <div class="image">
        </div>
    </a>
        <p>
            Nuestra única sucursal activa actualmente es la sucursal de "El Vergel". Se encuentra en
            construcción la siguiente en ciudad Dubai
        </p>

    </section>

    <footer>
        © Derechos reservados a Neftali Industries 2015.
    </footer>
    

    <button id="scrollToTopButton" onmouseover="mostrarMensaje()" onmouseout="ocultarMensaje()">
        ¡Contáctanos!
        <div id="mensajeEmergente" style="display: none;"> Vía Whatsapp 8712516480</div>
    </button>
    <!--<script src="../Proyecto_Venta de bolets/js/mensaje.js"></script>
    <script src="../Proyecto_Venta de bolets/js/redireccionar.js"></script>-->
</body>
</html>