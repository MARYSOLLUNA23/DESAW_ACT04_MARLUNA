<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABARROTES || ALTAS </title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
    <form action="altas02.php" method="POST">
        <table class="tableProd">
            <tr>
                <th colspan="2" class="thOrigen"><h1>PRODUCTOS DEL ABARROTES</h1></th>
            </tr>
            <tr>
                <td class="tdOrigen" >Id del Producto:</td>
                <td class="tdOrigen" ><input type="text" placeholder="Ingrese el id" name="idproducto"></td>
            </tr>
            <tr>
                <td class="tdOrigen">Categoria:</td>
                <td class="tdOrigen"><input type="text" placeholder="Categoria" name="idcategoria"></td>
            </tr>
            <tr>
                <td class="tdOrigen">Precio:</td>
                <td class="tdOrigen"><input type="text" placeholder="Cantidad en pesos" name="precio"></td>
            </tr>
            <tr>
                <td class="tdOrigen">Stock:</td>
                <td class="tdOrigen"><input type="text" placeholder="Cantidad de pzas" name="stock"></td>
            </tr>
            <tr>
                <td class="tdOrigen">Nombre:</td>
                <td class="tdOrigen"><input type="text" placeholder="Ingrese el nombre" name="nombre"></td>
            </tr>
            <tr>
                <td class="tdOrigen">Peso Neto:</td>
                <td class="tdOrigen"><input type="text" placeholder="Peso Neto en kg" name="pesoneto"></td>
            </tr>
            <tr>
                <td colspan="2" class="tdOrigen"><input type="submit" value="DAR DE ALTA :)"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>