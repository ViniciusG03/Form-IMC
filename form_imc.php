<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styletable.css">
</head>
<body>
    <div class="container">
    <?php
        $peso = str_replace(",", ".", $_POST["peso"]);
        $altura = str_replace(",", ".", $_POST["altura"]);

        $floatPeso = floatval($peso);
        $floatAltura = floatval($altura);

        $imc = $peso / ($altura * $altura);
        $round = round($imc, 2);

        if ($imc <= 17) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round
                <p>Você está muito <strong>abaixo</strong> do peso!</p>
                ";
        } else if ($imc > 17 || $imc <= 18.49) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está <strong>abaixo</strong> do peso.</p>";
        } else if ($imc > 18.50 || $imc <= 24.99) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está com o peso <strong>normal!</strong></p>";
        } else if ($imc >= 25 || $imc <= 29.99) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está <strong>acima</strong> do peso!";
        } else if ($imc >= 30 || $imc <= 34.99) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está com <strong>Obesidade I</strong>";
        } else if ($imc >= 35 || $imc <= 39.99) {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está com Obesidade II (<strong>severa</strong>)";
        } else {
            echo "<h1> Resultado do seu IMC!</h1>
                <p>Seu IMC: $round</p>
                <p>Você está com Obesidae III (<strong>mórbida</strong>)";
        }
    ?>
    </div>

    <div class="box">
        <div class="linha"></div>
        <div class="empty"></div>
       <table border="1">
        <tr>
            <td><strong>Resultado</strong></td>
            <td><strong>Situação</strong></td>
        </tr>
        <tr>
            <td>Abaixo de 17</td>
            <td>Muito abaixo do peso</td>
        </tr>
        <tr>
            <td>Entre 17 e 18,49</td>
            <td>Abaixo do peso</td>
        </tr>
        <tr>
            <td>Entre 18,5 e 24,99</td>
            <td>Peso normal</td>
        </tr>
        <tr>
            <td>Entre 25 e 29,99</td>
            <td>Acima do peso</td>
        </tr>
        <tr>
            <td>Entre 30 e 34,99</td>
            <td>Obesidade I</td>
        </tr>
        <tr>
            <td>Entre 35 e 39,99</td>
            <td>Obesidade II (severa)</td>
        </tr>
        <tr>
            <td>Acima de 40</td>
            <td>Obesidade III (mórbida)</td>
        </tr>
       </table>

       <div class="link">
        <input type="button" value="Voltar" onclick="window.history.back();">
    </div>
    </div>
</body>
</html>