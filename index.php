<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rodrigo Alves">
    <meta name="description" content="Exercício Cálculo Fatorial">
    <meta name="keybords" content="PHP, Entrada de Dados">

    <title> Cálculo Fatorial </title>
</head>

<body>

    <h1 style="font-family: monospace;"> Cálculo Fatorial </h1>

    <form>
        <span> Insira um valor... </span>
        <input type="number" name="insereValor">
        <button type="submit"> Enviar </button>
    </form>

    <?php

    if (empty($_GET['insereValor'])) {
        echo "";
    } 
    else {

        if(($_GET['insereValor']) < 0){
            echo "<p style='color: red;'> Favor inserir valores Positivos...";
        }
        else{
            $int_cast = (int)$_GET['insereValor']; // Conversão de Valores
            $valorEntrada = (int)$int_cast; // Conversão de Valores

            $fatoracao = ($int_cast - 1);

            echo "<hr>";
            echo    "<p style='color: green;'>" . "*OBS: Lembrando que o resultado da Fatoração de um número
                    é o ÚLTIMO valor." . "</p>";

            do {

                echo    $valorEntrada . " x " . $fatoracao . " = " . 
                        "<span style='color: blue;'>".
                        $resultado = (int)($valorEntrada) * ($fatoracao)."</span>";
                echo "<br>";
                $valorEntrada = $resultado;

                $fatoracao--;
            } while ($fatoracao >= 1);
            }
    }

    ?>

</body>

</html>