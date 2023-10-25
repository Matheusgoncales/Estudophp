<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Pessoa.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video ("aaaaa");
            // $v[0]->setTitulo("Matheus");
            
            $v[1]= new Video("Aula 2");


            print_r($v);

            $p[0] = new Gafanhoto ("Matheus", 25, "M", "matheus.silva"); 
            $p[1] = new Gafanhoto ("jessica", 19, "F", "Jessica.alves");

            print_r($p);

            $vis[0] = new Visualizacao ($p[0],$v[0]);
            $vis[1] = new visualizacao ($p[1],$v[1]);
           
            $vis[0]->avaliar();
            $vis[1]->avaliarporc(85);
            print_r($vis)
        ?>
    </pre>
</body>
</html>