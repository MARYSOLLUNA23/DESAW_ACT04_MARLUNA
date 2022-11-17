<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ABARROTES || ALTAS 02</title>
        <link rel="stylesheet" href="../css/act04.css">
    </head>
    <body>
        <div class="div01">
            <marquee>CONECTANDO CON EL SERVIDOR... </marquee><br><br>
            <img src="https://media.tenor.com/7-6KEMyxfGsAAAAC/succes-bro.gif" width="40%" ><br><br><br>
            <div><a href="admin.php" class="btnAlta">REGRESAR A LA ADMINISTRACIÓN</a></div>
        </div>
        <?php
        $conexion = new mysqli('localhost:3306','root','','bd-abarrotes_act03');
        $conexion->set_charset("utf8");
        $conexion->query("INSERT INTO productos
        (idproducto,idcategoria, precio, stock, nombre, pesoneto) VALUES
        
        
        ('$_REQUEST[idproducto]', '$_REQUEST[idcategoria]', '$_REQUEST[precio]', '$_REQUEST[stock]', '$_REQUEST[nombre]', '$_REQUEST[pesoneto]')");
        $conexion->close();
        ?>
        <br>
    </body>
</html>