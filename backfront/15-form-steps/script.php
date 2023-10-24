<?php

    include_once 'conexao.php'; 

     header("Access-Control-Allow-Headers: Content-Type");
     header('Access-Control-Allow-Methods: GET, POST');
     header("Access-Control-Alow-Origin:*");

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(empty($dados['name'])){
        $retorna = ['status' => false, 'msg' => "<p>Erro; Preencha o campo Nome</p>"];
    }
    elseif(empty($dados['email'])){
        $retorna = ['status' => false, 'msg' => "<p>Erro; Preencha o campo email</p>"];
    }
    elseif(empty($dados['phone'])){
        $retorna = ['status' => false, 'msg' => "<p>Erro; Preencha o campo Phone</p>"];
    }
    elseif(empty($dados['addons'])){
        $retorna = ['status' => false, 'msg' => "<p>Erro; Selecione um plano</p>"];
    }
    elseif(empty($dados['planbox'])){
        $retorna = ['status' => false, 'msg' => "<p>Erro; Selecione ao menos um serviço</p>"];
    }
    else{

        $query_usuario = "INSERT INTO usuario (nome, email, phone, plano, servico) values (:nome, :email, :phone, :addons, :planbox)";
        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->bindParam(':nome',$dados['name']);
        $cad_usuario->bindParam(':email',$dados['email']);
        $cad_usuario->bindParam(':phone',$dados['phone']);
        $cad_usuario->bindParam(':addons',$dados['addons']);
        $cad_usuario->bindParam(':planbox',$dados['planbox']);
        $cad_usuario->execute();

        $retorna = ['status' => true, 'msg' => "<p>Sucesso, usuario cadastrado!</p>"];
    }


    
    echo json_encode($dados);

    // $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); 
    // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    // $addons = filter_input(INPUT_POST, 'addons', );
    // $planbox = filter_input(INPUT_POST, 'planbox', );






    // $result_envio = "INSERT INTO usuario (nome, email, phone, plano, servico) VALUES ('$nome', '$email', '$telefone', '$addons', '$planbox')";
    // $resultado_envio = mysqli_query($conn ,$result_envio);

    // if(isset($_POST['Confirm'])){
        // $nome = $_POST['name'];
        // $email = $_POST['email'];
        // $telefone = $_POST['phone'];
        // $planos = $_POST['add-ons'];
        // $servicos = $_POST['planbox'];


    //     //limpeza dos dados (sanitização)
        // $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); 
        // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        // $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        // $addons = filter_input(INPUT_POST, 'addons', FILTER_SANITIZE_STRING);
        // $planbox = filter_input(INPUT_POST, 'planbox', FILTER_SANITIZE_STRING);

    //     if(!filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS)){
    //         $erros[] = "Nome invalido, por favor verifique";
    //     }

    //     if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
    //         $erros[] = "E-mail inválido, por favor verifique seu e-mail";
    //     }

    //     if(!filter_var($telefone, FILTER_SANITIZE_NUMBER_INT)){
    //         $erros[] = "Telefone inválido, certifique-se de colocar apenas numeros";
    //     }
    //     if(!empty($erros)){
    //         foreach($erros as $erro){
    //             echo"<p> $erro </p>";
    //         }
    //     }
    //     else{echo "Dados enviados com sucesso";
    //         $result_envio = "INSERT INTO usuario (nome, email, phone, plano, servico) VALUES ('$nome', '$email', '$telefone', '$planos', '$servicos'";
    //         $resultado_envio = mysqli_query($conn,$result_envio);

    //     }
    // }

?>  