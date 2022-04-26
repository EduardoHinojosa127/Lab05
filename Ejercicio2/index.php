<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 02</title>
</head>

<body>
    <h1>Ejercicio 02</h1>
    <form method="post" action="">
        Ingresar el precio actual de la gaseosa:<br> <input type="number" name="valor1"><br>
        Ingresar la cantidad adquirida:<br> <input type="number" name="valor2"><br>
        <br>
        <input type="submit" name="calculo" value="Calculo de importe a pagar">
    </form>

    <?php
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $precio2=$numero1-($numero1*0.05);
        $caramelos=$numero2*2;
        $importe_compra=$precio2*$numero2;
        $descuento=$importe_compra*0.07;
        $importe_final=$importe_compra-$descuento;
        print_r("<br>El nuevo precio de la gaseosa es: ".$precio2."<br>");
        print_r("El importe de la compra es: ".$importe_compra."<br>");
        print_r("El importe del descuento es: ".$descuento."<br>");
        print_r("El importe a pagar es: ".$importe_final."<br>");
        print_r("Los cantidad de caramelos de obsequio son: ".$caramelos);
    ?>
</body>

</html>