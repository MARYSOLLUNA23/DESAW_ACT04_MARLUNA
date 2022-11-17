<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ABARROTES || CAMBIOS 02 </title>
        <link rel="stylesheet" href="../css/act04.css">
    </head>
    <body>
        <?php
            $conexion= new mysqli('localhost:3306','root','','bd-abarrotes_act03');
            $conexion->set_charset("utf8");
            $registros=$conexion->query("select idproducto,idcategoria, precio, stock, nombre, pesoneto from productos where idproducto='$_REQUEST[idproducto]'");

            if($reg=mysqli_fetch_array($registros)){
        ?>
            <form action="cambios03.php" method="POST">
                <table class="tableProd" id="tablaCambios">
                    <tr>
                        <th class="thOrigen" colspan="2"> <h1>MODIFIQUE, EXCEPTO EL ID DEL PRDUCTO:</h1></th>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Id del producto:</td>
                        <td class="tdOrigen"><input type="text" name="idproducto" value='<?php echo $reg[0]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Categoria: </td>
                        <td class="tdOrigen"><input type="text" name="idcategoria" value='<?php echo $reg[1]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Precio: </td>
                        <td class="tdOrigen"><input type="text" name="precio" value='<?php echo $reg[2]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Stock: </td>
                        <td class="tdOrigen"><input type="text" name="stock" value='<?php echo $reg[3]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Nombre: </td>
                        <td class="tdOrigen"><input type="text" name="nombre" value='<?php echo $reg[4]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen">Peso Neto: </td>
                        <td class="tdOrigen"><input type="text" name="pesoneto" value='<?php echo $reg[5]; ?>'></td>
                    </tr>
                    <tr>
                        <td class="tdOrigen" colspan="2"><input type="submit" value="MODIFICAR"></td>
                    </tr>
                </table>
            </form>

        <?php
            }
            else{
                echo' <div class="div01">
            <marquee>ERROR EL PRODUCTO NO EXISTE... </marquee><br><br>
            <img src="https://media.tenor.com/iROp8uu-48IAAAAi/bloodbros-error.gif" width="40%" ><br><br><br>
            <div><a href="admin.php" class="btnAlta">REGRESAR A LA ADMINISTRACIÓN</a></div>';
            }
            $conexion->close();
        ?>
    </body>
</html>