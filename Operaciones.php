<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Operaciones</legend>
            <label>
                Ingrese un valor: <input type="number" name="num1"><br><br>
                Ingrese el segundo valor: <input type="number" name="num2"><br><br>
                <select name="Operacion">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicación</option>
                    <option value="Division">División</option>
                </select><br><br>
                <input type="submit" name="enviar" value="CALCULAR">
            </label>
        </fieldset>
    </form>
</body>
</html>
<?php
if(isset($_POST['enviar'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $operacion=$_POST['Operacion'];
    $resp=0;
    $resp2=0;
    if($operacion=="Suma"){
        $resp=$num1+$num2;
        echo "La suma de $num1 y $num2 es: $resp";
    }else if($operacion=="Resta"){
        $resp=$num1-$num2;
        echo "La resta de $num1 y $num2 es: $resp";
    }else if($operacion=="Multiplicacion"){
        $resp=$num1*$num2;
        echo "La multiplicación de $num1 y $num2 es: $resp";
    }else if($operacion=="Division"){
        $resp=$num1/$num2;
        $resp2=$num1%$num2;
        echo "La división de $num1 y $num2 es: $resp y el residuo es: $resp2";
    }
}
?>