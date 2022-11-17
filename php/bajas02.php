<!--Alumna: Mar Y Sol Luna Quijada 5BM PROGRAMACIÓN-->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Bajas | Confirmación</title>
    <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
    <div class="div01">
                <marquee>DANDO DE BAJA AL PRODUCTO</A>... </marquee><br><br>
                <img src="https://media.tenor.com/jhE8NBhENzQAAAAC/among-us-mungus.gif" width="40%" ><br><br><br>
                <div><a href="admin.php" class="btnAlta">REGRESAR A LA ADMINISTRACIÓN</a></div>
            </div>
    <?php
    $conexion = new mysqli('localhost:3306','root','','bd-abarrotes_act03');
    $conexion->set_charset("utf8");
    $conexion->query("delete from productos where
    idproducto='$_REQUEST[idproducto]'");
    $conexion->close();
    ?>
 </body>
</html>