<?php
    $hostname = "localhost";
    $bd = "ex01simples";
    $usuario = "root";
    $senha = "";
    $port = 3306;

    $conn = new PDO ("mysql:host=$hostname;port=$port;dbname=". $bd,$usuario,$senha);
    
//     echo "conexao realizada com sucesso";
// } catch (PDOException $err){
//     echo " deu nao" . $err->getMessage();
// }
    
    
    
    // if($mysqli->connect_errno){
    //     echo "Falha ao conectar ao banco (" . $mysqli->connect_errno. ")" . $mysqli->connect_errno;
    // }
    // else {
    //     echo "Conectado com sucesso";
    // }

?>