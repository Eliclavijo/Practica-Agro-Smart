<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>AgroSmart</title>
</head>

<body>
    <div class="mainHome">
        <div class="lado1">
            <br />
            <img src="images/logo.png" alt="" class="Logo">
            <br />
            <nav>
                <ul>
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="perfil.php">Perfil e inventario</a></li>
                    <li><a href="NuevaMaquina.php">Insertar nueva maquina a utilizar</a></li>
                    <li><a href="PlanificacionMantenimiento.php">Planificacion de mantenimiento</a></li>
                    <li><a href="Reportes.php">Reportes y analisis</a></li>
                    <li><a href="ProveedoresMaquinaria.php">Proveedores de maquinaria</a></li>
                    <li><a href="NuevoProveedor.php">Insertar Nuevo proveedor de maquinaria</a></li>
                    <li><a href="TecnicosMantenimiento.php">Tecnicos de mantenimiento</a></li>
                    <li><a href="NuevoTecnicoMantenimiento">Insertar nuevo tecnico de mantenimiento</a></li>
                    <li><a href="contacto.php" class="active">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="lado2">
            <div class="bannerHora">
                <?php
            $fecha_actual = date("d-m-Y h:i:s");
            echo "La fecha y hora actual es: $fecha_actual";
            ?>
                <a href="index.php">Cerrar sesion</a>
            </div>
            <div id="ww_5e9be276e538e" v='1.3' loc='id'
                a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl4203"],"font":"Arial","sl_ics":"one","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                Más previsiones: <a href="https://oneweather.org/es/buenos_aires/25_days/" id="ww_5e9be276e538e_u"
                    target="_blank">25 días tiempo Buenos Aires</a></div>
            <script async src="https://app2.weatherwidget.org/js/?id=ww_5e9be276e538e"></script>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16289953.167360846!2d-85.0430862516801!3d4.586960798576897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e15a43aae1594a3%3A0x9a0d9a04eff2a340!2sColombia!5e0!3m2!1ses!2sco!4v1700506862542!5m2!1ses!2sco"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="mapa"></iframe>
            <div class="gridContacto">
                <div class="l1">
                    <p class="subtitulo1">Contacto</p>
                    <div class="datos1">
                        <p>Pagina web: aaaaaaaa</p>
                        <p>Correo electronico: 00000000</p>
                        <p>Direccion: aaaaaaaaa </p>
                        <p>Telefono: 000000</p>
                    </div>
                </div>
                <div class="l2">
                    <p class="subtitulo1">Preguntas frecuentes</p>
                </div>
            </div>
            <div class="footer">
                <p>Copyright © 2023 By AgroSmart | Todos los derechos reservados. | <a
                        href="Terminosycondiciones.php">Terminos y
                        condiciones</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>