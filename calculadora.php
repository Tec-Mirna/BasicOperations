

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>BasicOperations</title>
    <style>
    body{
        padding:40px;
    }     
    </style>
</head>
<body>
    <div class="container">
    <h2>Opraciones Básicas</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Numero 1</label>
        <input type="number" name="num1" required><br><br>
        <label>Numero 2</label>
        <input type="number" name="num2" required><br><br>
        <label>Operación: </label>
        <!-- Seleccionar la operación que desea realizar -->
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calcular" class="btn btn-info">
    </form>
    </div>


    <?php
//si está definido (hemos hecho click al boton calcular)
    if(isset($_POST['submit'])){

        //Se recogen los 3 datos que hemos enviado en el form
        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        /* Si la operacion es igual a sumar, restar, multiplicar...*/
        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            
            case 'restar':
                $resultado = $num1 - $num2;
                break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            
            case 'dividir':
                $resultado = $num1 / $num2;
                break;
            
            default:
                $resultado = "Sin resultados";
                break;
        }
        echo "<br><br><h6>El resultado de la operación ".$operacion." es igual a ".$resultado."</h6>";
      
    }
?>
    
</body>
</html>