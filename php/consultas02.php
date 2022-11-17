<!DOCTYPE html>
<html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Consultas | Confirmación</title>
        <link rel="stylesheet" href="../css/act04.css">
    </head>
 <body>
    <?php
    $conexion= new mysqli('localhost:3306','root','','bd-abarrotes_act03');
    $conexion->set_charset("utf8");
    $registros=$conexion->query("select
    idproducto, idcategoria,precio,stock,nombre,pesoneto from
    productos where idproducto='$_REQUEST[idproducto]'");
    if($reg=mysqli_fetch_array($registros)){
    ?>

    <div class="tablaReg">
    <table class="tableProd">
        <tr>
        <td colspan=2 class="thOrigen"><marquee>CONSULTANDO AL PRODUCTO... </marquee></td>
        </tr>
        <tr>
        <td class="tdOrigen">Id del maestro:</td>
        <td class="tdOrigen"><?php echo $reg['idproducto']?></td>
        </tr>
        <tr>
        <td class="tdOrigen">Nombre: </td>
        <td class="tdOrigen"><?php echo $reg['idcategoria']?></td>
        </tr>
        <tr>
        <td class="tdOrigen">Apellido Paterno: </td>
        <td class="tdOrigen"><?php echo $reg['precio']?></td>
        </tr>
        <tr>
        <td class="tdOrigen">Apellido Materno: </td>
        <td class="tdOrigen"><?php echo $reg['stock']?></td>
        </tr>
        <tr>
        <td class="tdOrigen">Materia: </td>
        <td class="tdOrigen"><?php echo $reg['nombre']?></td>
        </tr>
        <tr>
        <td class="tdOrigen">Teléfono: </td>
        <td class="tdOrigen"><?php echo $reg['pesoneto']?></td>
        </tr>
        <tr>
        <td colspan=2 class="tdOrigen"><div><br><a href="admin.php" class="btnAltaC">REGRESAR A LA ADMINISTRACIÓN</a></div><br></td>
        </tr>
    </table>
    <?php
        }
        else{
            echo' <div class="div01">
        <marquee>ERROR EL PRODUCTO NO SE HA DADO DE ALTA... </marquee><br><br>
        <img src="https://media.tenor.com/iROp8uu-48IAAAAi/bloodbros-error.gif" width="40%" ><br><br><br>
        <div><a href="admin.php" class="btnAlta">REGRESAR A LA ADMINISTRACIÓN</a></div>
        </div>';
        } $conexion->close();;
        ?>
    </div>
 </body>
</html>