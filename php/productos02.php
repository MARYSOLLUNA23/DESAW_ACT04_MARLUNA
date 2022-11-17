<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>ABARROTES || PRODUCTOS 02</title>
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
    <?php
        if($_POST){

            $Nombre=$_POST['nombre'];
            $fecha=$_POST['fecha'];
            $limpieza01=$_POST['limpieza01'];
            $limpieza02=$_POST['limpieza02'];
            $limpieza03=$_POST['limpieza03'];
            $limpieza04=$_POST['limpieza04'];

            $p01=$limpieza01*20;
            $p02=$limpieza02*19.99;
            $p03=$limpieza03*120;
            $p04=$limpieza04*80;

            $lata01=$_POST['lata01'];
            $lata02=$_POST['lata02'];
            $lata03=$_POST['lata03'];
            $lata04=$_POST['lata04'];

            $p05=$lata01*15;
            $p06=$lata02*20;
            $p07=$lata03*18;
            $p08=$lata04*25;

            $snack01=$_POST['snack01'];
            $snack02=$_POST['snack02'];
            $snack03=$_POST['snack03'];
            $snack04=$_POST['snack04'];

            $p09=$snack01*30;
            $p10=$snack02*14;
            $p11=$snack03*14;
            $p12=$snack04*12;

            $subtotal= $p01 + $p02 + $p03 +$p04 + $p05 + $p06 + $p07 +$p08 +$p09 + $p10 + $p11 +$p12;
            if ($subtotal>=500){
                $desc=$subtotal*.50;
                $total=$subtotal-$desc;

            }else{
                $total=$subtotal;
            }
        }
    ?>
         <div>
        <table class="recibo">
            <tr>
                <td colspan="2"><?php  echo "Nombre del cliente: ".$Nombre; ?></td>
                <td><?php  echo $fecha; ?></td>
            </tr>
            <tr><td>Productos:</td><td>Cantidad:</td><td>Total</td></tr>
            <tr><td>Jabón corporal Zest:</td><td><?php echo $limpieza01; ?></td><td><?php echo $p01;?></td></tr>
            <tr><td>Jabón para ropa Ariel:</td><td><?php echo $limpieza02;?></td><td><?php echo $p02;?></td></tr>
            <tr><td>Jabón para ropa Mascolor:</td><td><?php echo $limpieza03?></td><td><?php echo $p03;?></td></tr>
            <tr><td>Shampoo Pantene:</td><td><?php echo $limpieza04;?></td><td><?php echo $p04;?></td></tr>

            <tr><td>Atún el dorado:</td><td><?php echo $lata01; ?></td><td><?php echo $p05;?></td></tr>
            <tr><td>Garbanzos del monte:</td><td><?php echo $lata02; ?></td><td><?php echo $p06;?></td></tr>
            <tr><td>Marca ponto Sardinas:</td><td><?php echo $lata03; ?></td><td><?php echo $p07;?></td></tr>
            <tr><td>Elote el dorado:</td><td><?php echo $lata04; ?></td><td><?php echo $p08;?></td></tr>

            <tr><td>Paketón clásico Chokis:</td><td><?php echo $snack01; ?></td><td><?php echo $p09;?></td></tr>
            <tr><td>Emperador chocolate:</td><td><?php echo $snack02; ?></td><td><?php echo $p10;?></td></tr>
            <tr><td>Adobadas Sabritas:</td><td><?php echo $snack03; ?></td><td><?php echo $p11;?></td></tr>
            <tr><td>Queso Ruffles:</td><td><?php echo $snack04; ?></td><td><?php echo $p12;?></td></tr>

            <tr><td colspan="2">SUBTOTAL:</td><td><?php echo "$".$subtotal;?></td>
            <tr><td colspan="2">TOTAL:</td><td><b><?php echo "$".$total;?></b></td>
        </table>
    </div>
    <footer>
        <h4>Autora del sitio:<br>
            Mar Y Sol Luna Quijada  5BMPR
            <p>&copy; 2022 CBTIS #37-MARLUNA</p></h4>
    </footer>
</body>
</html>