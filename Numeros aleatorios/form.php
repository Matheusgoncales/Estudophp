<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <main>
        <?php 
           $min = 0;
           $max = 100;

           $numero = mt_rand($min, $max);
           echo "Numero gerado é ".$numero
        ?>
        <button onclick="javascript:document.location.reload()">gerar novo numero</button>
    </main>
</body>
</html>