<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $real = 1000;
            $cotacao = 5.12;
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivale a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
    </main>
</body>
</html>