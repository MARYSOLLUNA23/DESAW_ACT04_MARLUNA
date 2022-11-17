<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>ABARROTES || PRODUCTOS</title>
</head>
<body>
    <header>
        <img src="../img/header.gif" class="imgheader">
    <header>
    <br>
    <nav id="menu">
        <a href="../index.html">INICIO</a>
        <a href="productos.php">PRODUCTOS</a>
        <a href="admin.php">ADMINISTRACIÓN</a>
    </nav>
    <div class="cont">
        <form action="productos02.php" method= POST>
        <table class="tableProd">
            <tr>
                <td colspan="2" class="tdOrigen"><input type="text" placeholder="Nombre" name="nombre"></div></td>
                <td colspan="2" class="tdOrigen"><input type="date" name="fecha"></td>
            <tr>
                <td class="tdprod"><img src="../img/prodLimp01.gif" class="imgProd" ></td>
                <td class="tdprod"><img src="../img/prodLimp02.gif" class="imgProd" ></td>
                <td class="tdprod"><img src="../img/prodLimp03.gif" class="imgProd" ></td>
                <td class="tdprod"><img src="../img/prodLimp04.gif" class="imgProd" ></td>
            </tr>
            <tr>
                <td class="tdprod"> <input type="text" placeholder="CANTIDAD" name="limpieza01"></td>
                <td class="tdprod"> <input type="text" placeholder="CANTIDAD" name="limpieza02"></td>
                <td class="tdprod"> <input type="text" placeholder="CANTIDAD" name="limpieza03"></td>
                <td class="tdprod"> <input type="text" placeholder="CANTIDAD" name="limpieza04"></td>
            </tr>
            <tr><td colspan="4" class="tdespacio"></td></tr>
            <tr>
                <td class="tdprod"><img src="../img/prodEnlata01.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodEnlata02.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodEnlata03.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodEnlata04.gif" class="imgProd"></td>
            </tr>
            <tr>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="lata01"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="lata02"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="lata03"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="lata04"></td>
            </tr>
            <tr><td colspan="4" class="tdespacio"></td></tr>
            <tr>
                <td class="tdprod"><img src="../img/prodSnack01.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodSnack02.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodSnack03.gif" class="imgProd"></td>
                <td class="tdprod"><img src="../img/prodSnack04.gif" class="imgProd"></td>
            </tr>
            <tr>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="snack01"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="snack02"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="snack03"></td>
                <td class="tdprod"><input type="text" placeholder="CANTIDAD" name="snack04"></td>
            </tr>
            <tr>
                <td class="tdprod" colspan="2">NOTA: En caso de no querer algun producto ingrese el número 0 por favor</td>
                <td class="tdprod" colspan="2"><input type="submit" value="PAGAR" class="btnComprar"></td>
            </tr>
        </table>
        </form>
    </div>
    <footer>
        <h4>Autora del sitio:<br>
            Mar Y Sol Luna Quijada  5BMPR
            <p>&copy; 2022 CBTIS #37-MARLUNA</p></h4>
    </footer>
</body>
</html>