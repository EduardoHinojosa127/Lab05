<!DOCTYPE html>
<html>

<head>
    <title>Calculo de sueldo neto</title>
</head>

<body>
    <h1>Calculo de sueldo neto</h1>
    <form method="post" action="">
        Ingresar importe total de ventas:<br> <input type="number" name="valor1"><br>
        Ingresar numero de hijos escolares:<br> <input type="number" name="valor2"><br>
        <br>
        <input type="submit" name="calculo" value="Calculo de sueldo">
    </form>

    <?php
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $bonificacion=$numero2*50;
        $sueldo_bruto=600+($numero1*0.075)+$bonificacion;
        $descuento=$sueldo_bruto*0.11;
        $calculo=$sueldo_bruto-$descuento;
        print_r("<br>La comision es: ".$numero1*0.075."<br>");
        print_r("La bonificacion es: ".$bonificacion."<br>");
        print_r("El sueldo bruto es: ".$sueldo_bruto."<br>");
        print_r("El descuento es: ".$descuento."<br>");
        print_r("EL sueldo neto es: ".$calculo);
    ?>
</body>

</html>