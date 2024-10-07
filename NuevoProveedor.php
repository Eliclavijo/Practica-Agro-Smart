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
                    <li><a href="NuevoProveedor.php" class="active">Insertar Nuevo proveedor de maquinaria</a></li>
                    <li><a href="TecnicosMantenimiento.php">Tecnicos de mantenimiento</a></li>
                    <li><a href="NuevoTecnicoMantenimiento">Insertar nuevo tecnico de mantenimiento</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
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
            <div class="container-texto">
                <p class="titulo1">Insertar Nuevo proveedor de maquinaria</p>

                <form action="" method="post" class="form-proveedor">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
                    <input type="text" name="cedula" class="form-control" placeholder="Cedula">
                    <input type="text" name="profesion" class="form-control" placeholder="Profesion">
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                    <input type="text" name="email" class="form-control" placeholder="Correo electronico">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
                
            </div>
            <div class="footer">
                <p>Copyright © 2023 By AgroSmart | Todos los derechos reservados. | <a href="Terminosycondiciones.php">Terminos y
                        condiciones</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>