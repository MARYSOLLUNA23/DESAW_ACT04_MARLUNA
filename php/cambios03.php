<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ABARROTES || CAMBIOS CONFIRM</title>
        <link rel="stylesheet" href="../css/act04.css">
    </head>
    <body>
        <?php
            $conexion= new mysqli('localhost:3306','root','','bd-abarrotes_act03');
            $conexion->set_charset("utf8");

            $idproducto=$_REQUEST['idproducto'];
            $idcategoria=$_REQUEST['idcategoria'];
            $precio=$_REQUEST['precio'];
            $stock=$_REQUEST['stock'];
            $nombre=$_REQUEST['nombre'];
            $pesoneto=$_REQUEST['pesoneto'];

            $conexion->query("UPDATE productos SET idproducto='$idproducto',idcategoria='$idcategoria',precio='$precio',stock='$stock',nombre='$nombre',pesoneto='$pesoneto' WHERE idproducto='$idproducto'");

            $conexion->close();
        ?>
        <div class="div01">
            <marquee>MODIFICACIÓN EXITOSA :) </marquee><br><br>
            <img src="https://media.tenor.com/s21lfIJ2AZsAAAAC/dancing-spongebob.gif" width="40%" ><br><br><br>
            <div>
                <div class="divspan"><a href="../index.html" class="btnAlta">Regresar al menú principal</a></div>
                <div class="divspan"><a href="./cambios.php" class="btnAlta">Modificar otro producto</a></div>
            </div>
        </div>
    </body>
</html>