<?php
    //echo "En Archivo calcular";
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $operacion=$_POST['operacion'];
        if($operacion == 'Sumar'){
            $total= $num1 + $num2;
        }
        else if($operacion== 'Restar'){
            $total= $num1 - $num2;
        }
        else if($operacion == 'Multiplicar'){
            $total= $num1 * $num2;
        }
        else if($operacion== 'Dividir'){
            $total= $num1 / $num2;
        }
        echo '<h1 class="center-align"> El Resultado es: '.$total.'</h1>';
    ?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <title>Resultado</title>
    </head>
    <body>
        <div class="container" align="center">
            <a href="index.html"><input name ="Inicio"  type="submit" value="Inicio" class="waves-effect waves-light btn"></a>
        </div>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
