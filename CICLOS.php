<?php
$numero1=0;
$numero2=0;
$iteraciones="10";
$msg="";
//no perder la iteracion seleccionada
//todo lo q entra por metodo POST php lo toma como texto, si es numero hay q convertirlo
if(isset($_POST["btnPrc"])){
    //eleven el numero uno a la potencia del numero 2
    $numero1= intval($_POST["n1"]);
    $numero2= intval($_POST["n2"]);
    $newValue=$numero1;
    for($i =0; $i<$numero2-1; $i++){
        $newValue *= $numero1;
    }
    $msg="El Valor: $numero1 a la potencia $numero2 es igual a: $newValue";
}
if(isset($_POST["btnRev"])){
    //echo numero1 * iteracion a la inversa
    $numero1= intval($_POST["n1"]);
    $iteraciones=intval($_POST["iteraciones"]);
    $contador=1;
    while($iteraciones > 0){
        $msg .="$contador ). Producto: ". ($numero1 * $iteraciones). "</br>";
        $contador ++;
        $iteraciones --;
        
    }
  //gnicolle93@gmail.com
}
if(isset($_POST["btnFac"])){
    // factorial del numero2
    $numero2= intval($_POST["n2"]);
    $factorial=1;
    for($i=1;$i<=$numero2;$i++)
    {
        $factorial *= $i;
    }
    $msg .="El factorial de $numero2 es $factorial";
}


?>




<!DOCTYPE html>
<html>
    <head>
        <title>PHP Formulario Ejercicio 2</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio con Switch y ciclos en PHP</h1>
        <form action="CICLOS.php" method="POST">
            <label for="n1">Numero1</label>
            <input type ="text" id="n1" name="n1" value="<?php echo $numero1; ?>" />
            </br>
            <label for="n2">Numero2</label>
            <input type="text" id="n2" name="n2"  value="<?php echo $numero2; ?>" />
            </br>
            <label for="iteraciones">Numero de Iteraciones</label>
            <select name="iteraciones" id="iteraciones"  value="<?php echo $iteraciones; ?>">
                <option value="10">10</option>
                <option value="20" >20</option>
                <option value="50">50</option>
            </select>
            </br>
            <input type="submit" name="btnPrc" value="Procesar" id="btnPrc"/>
            <input type="submit" name="btnRev" value="Reversar" id="btnRev"/>
             <input type="submit" name="btnFac" value="Factorial" id="btnFac"/>
        </form>
        <div>
            <?php echo $msg ?>
        </div>
    </body>
</html>