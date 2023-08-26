<?php 

    $usuarios_app = array(
        array('email' => 'adm@test.com.br', 'senha' => '123456'),
        array('email' => 'user@test.com.br', 'senha' => 'abcdef'),
    );


    foreach($usuarios_app as $user){
        
        $usuario_email = $user['email'];
        $usuario_senha = $user['senha'];

        $email_post = $_POST['email'];
        $senha_post = $_POST['senha'];

        $usuario_autenticado = false;
        

        if($usuario_email == $email_post && $usuario_senha == $senha_post){
            $usuario_autenticado = true;
        };
    };
        if($usuario_autenticado){
            echo "Usuário autenticado.";
        }else{
          header('Location: index.php?login=erro');  
        };
        
        echo "<hr>";

    echo "<br />";
    
    
?>