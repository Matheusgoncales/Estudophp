<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 

        require_once 'classe.php';
        $c = new Controleremoto();
        $c->ligar();
        $c->abrirMenu();
       
        $c->menosVolume();
        $c->maisVolume();
        $c->maisVolume();
        $c->ligarMudo();
        $c->desligarMudo();
        $c->play();
       print_r($c);
    ?>
    </pre>
</body>
</html>