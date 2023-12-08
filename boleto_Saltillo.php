<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Boleto Saltillo</title>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style_Boletos.css" as="style">
    <link rel="stylesheet" href="css/style_Boletos.css">

    <!-- JScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".inner-seat").on("click", function() {
                if ($(this).hasClass("inner-seat") && !$(this).hasClass("selectedOcupado-innerColor")) {
                    $(this).toggleClass("selected-innerColor");
                    $(this).parent().toggleClass("selected-outerColor");

                    var inputElement = document.getElementById("asiento");
                    var num = $(this).attr('numasiento');

                    var currentValues = inputElement.value.split(',').map(function(item) {
                        return item.trim();
                    });

                    var index = currentValues.indexOf(num);
                    if (index !== -1) {
                        currentValues.splice(index, 1);
                    } else {
                        currentValues.push(num);
                    }

                    currentValues.sort(function(a, b) {
                        return a - b;
                    });

                    inputElement.value = currentValues.join(', ');

                    var inputTotal = document.getElementById("precio");
                    inputTotal.value =  (currentValues.length-1) * 487;
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputAsiento = document.getElementById('asiento');

            inputAsiento.addEventListener('input', function() {
                var currentValues = inputAsiento.value.split(',').map(function(item) {
                    return item.trim();
                });

                console.log(inputAsiento.value);
            });
        });
    </script>


    <script src="https://www.paypal.com/sdk/js?client-id=Aealcpj9JCWFsZVJ7i1WFEuHvdPCmQGa20-lnQD87IgEfUuP4KPs0t7konRPuC0uTwQwHg-mCwZeQcFb&components=buttons&currency=MXN"></script>

</head>

<body>
    <div class="fondo_Header">

    </div>
    <!-- HEADER ------------------------------------------------------------------------------------- -->
    <header>
        <div class="logo"> <!-- Logo -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bus" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
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
            <a href="./index.php#inicio">Inicio</a>
            <a href="./index.php#puntos_venta">Puntos de venta</a>
            <a href="./index.php#abt_us">Sobre nosotros</a>
        </nav>

        <section class="iconos">
            <a href="./registrar.php" title="Inicie sesión o Registrese"> <!-- Icon iniciar sesión -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </a>

            <a href="./carritoCompras.php" title="Compras"> <!-- Icon Carrito -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
            </a>

            <?php
            if (isset($_SESSION['loginState'])) {
                echo '<a href = "./php/exit.php">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">';
                echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
                echo '<path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />';
                echo '<path d="M9 12h12l-3 -3" />';
                echo '<path d="M18 15l3 -3" />';
                echo '</svg>';
                echo '</a>';

                echo '<p>Bienvenid@ ' . $_SESSION['nombre'] . '</p>';
            }
            ?>

        </section>
    </header>

    <!-- Imagen abajo del header --------------------------- -->
    <section class="header_img Saltillo">
    </section>

    <!-- Datos del viaje ------------------------------------ -->

    <section class="datosViaje">
        <h2> Destino: Saltillo</h2>
        <h3>Hora de salida: <p>7:00 pm</p>
        </h3>
        <h3>Central: <p>El Vergel</p>
        </h3>
        <h3>Fecha de salida: <p>04/11/2023</p>
        </h3>
        <form class="formDatos" id = "formDatos" action="./php/registrarAsientosSaltillo.php">
            <!-- Nombre -->
            <label for="nombre">Nombre del comprador:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <!-- Asientos -->
            <label for="asiento">Asiento(s):</label>
            <input type="text" id="asiento" name="asiento" readonly><br>

            <!-- Precio -->
            <label for="precio">Cantidad a pagar($):</label>
            <input type="number" id="precio" name="precio" value = 0 readonly><br>

            <!-- PAYPAL -->
            <div id="paypal-button-container" style="max-width:1000px;"></div>
            <script>
                var total = document.getElementById("precio");
                var formulario = document.getElementById("formDatos");

                paypal.Buttons({
                    style: {
                        disableMaxWidth: true
                    },
                    createOrder: function(data, actions){
                        return actions.order.create({
                            purchase_units:[{
                                amount :{
                                    value: total.value
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions){
                        actions.order.capture().then(function(detalles){
                            console.log(detalles);                            
                            formulario.submit();
                        });
                        
                    },
                    onCancel: function(data){
                        alert('Pago cancelado');
                    }
                }).render('#paypal-button-container');
            </script>

            <br>
            <p>Tiempo restante para ordenar</p>
            <p id="contador"> 05:00</p>
            <script src="../Proyecto_Venta de bolets/js/contador.js"></script>
        </form>

    </section>

    <?php
    require '../Proyecto_Venta de bolets/php/conexion.php';

    $sql = $enlace->query("SELECT * from asientos where viaje_Id = 2");

    if ($sql) {
        $results = $sql->fetch_all(MYSQLI_ASSOC);

        for ($d = 1; $d <= 4; $d++) {
            echo "<div class='centrar'>";
            switch ($d) {
                case 1:
                    echo "<p class='asientosNombre'>A</p>";
                    for ($i = 1; $i < 9; $i++) {
                        if (intval($results[$i - 1]['asiento_Ocupado']) == 1) {
                            echo "<div class='outer-seat selectedOcupado-outerColor' id='div-inline'><div class='inner-seat selectedOcupado-innerColor' numasiento = '$i'></div></div>";
                        } else {
                            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' numasiento = '$i'></div></div>";
                        }
                    }
                    break;
                case 2:
                    echo "<p class='asientosNombre'>B</p>";
                    for ($i = 9; $i < 17; $i++) {
                        if (intval($results[$i - 1]['asiento_Ocupado']) == 1) {
                            echo "<div class='outer-seat selectedOcupado-outerColor' id='div-inline'><div class='inner-seat selectedOcupado-innerColor' numasiento = '$i'></div></div>";
                        } else {
                            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' numasiento = '$i'></div></div>";
                        }
                    }
                    break;
                case 3:
                    echo "<p class='asientosNombre'>C</p>";
                    for ($i = 17; $i < 25; $i++) {
                        if (intval($results[$i - 1]['asiento_Ocupado']) == 1) {
                            echo "<div class='outer-seat selectedOcupado-outerColor' id='div-inline'><div class='inner-seat selectedOcupado-innerColor' numasiento = '$i'></div></div>";
                        } else {
                            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' numasiento = '$i'></div></div>";
                        }
                    }
                    break;
                case 4:
                    echo "<p class='asientosNombre'>D</p>";
                    for ($i = 25; $i < 33; $i++) {
                        if (intval($results[$i - 1]['asiento_Ocupado']) == 1) {
                            echo "<div class='outer-seat selectedOcupado-outerColor' id='div-inline'><div class='inner-seat selectedOcupado-innerColor' numasiento = '$i'></div></div>";
                        } else {
                            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' numasiento = '$i'></div></div>";
                        }
                    }
                    break;
            }
            echo "</div><p></p>";
        }
    } else {
        echo "<script> alert('Error al cargar el servicio');
                location.href = '../inicio_sesion.php';
                </script>";
    }
    ?>

    <!-- Footer ------------------------------------------------------- -->
    <footer>
        © Derechos reservados a Neftali Industries 2015.
    </footer>
</body>

</html>