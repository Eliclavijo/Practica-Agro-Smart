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
    <div class="main">
        <div class="bannerHora">
            <?php
            $fecha_actual = date("d-m-Y h:i:s");
            echo "La fecha y hora actual es: $fecha_actual";
            ?>
            <a href="index.php">Volver</a>
        </div>
        <div class="containerGeneral">
            <br /> 
            <form action="" method="post" class="fomularioLogin">
                <img src="images/logo.png" alt="" class="Logo">
                <div class="gridInputs">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
                    <input type="text" name="cedula" class="form-control" placeholder="Cedula">
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                    <input type="text" name="nombreEmpresa" class="form-control" placeholder="Nombre de la empresa">
                    <input type="text" name="direccionEmpresa" class="form-control" placeholder="Direccion de la empresa">
                    <input type="text" name="nitEmpresa" class="form-control" placeholder="Nit de la empresa">
                    <input type="text" name="telefonoEmpresa" class="form-control" placeholder="Telefono de la empresa">
                    <input type="email" name="correo" class="form-control" placeholder="Correo eletronico">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
            <br /> 
        </div>
        <div class="footer">
            <p>Copyright © 2023 By AgroSmart | Todos los derechos reservados. | <a href="">Terminos y condiciones</a>
            </p>
        </div>
    </div>
</body>

</html>