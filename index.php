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
        </div>
        <div class="containerGeneral">
            <br /> <br /> <br />
            <form action="" method="post" class="fomularioLogin">
                <img src="images/logo.png" alt="" class="Logo">
                <input type="email" name="correo" class="form-control" placeholder="Correo eletronico">
                <br />
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
                <br />
                <button type="submit" class="btn btn-primary">Entrar</button>
                <br />
                <p>¿No estas registrado? clic <a href="registro.php">ac&aacute;</a></p>
            </form>
            <br /> <br /> <br />
        </div>
        <div class="footer">
            <p>Copyright © 2023 By AgroSmart | Todos los derechos reservados. | <a href="">Terminos y condiciones</a></p>
        </div>
    </div>
</body>

</html>