<?php    
session_start();



$usuario_autenticado = false;
$usuario_id = null; 

$usuarios_app = array(
    array('id'=> 1, 'email' => 'adm@teste.com.br', 'senha' => '1234'),
    array('id'=> 2, 'email' => 'user@teste.com.br', 'senha' => '1234'),
    array('id'=> 3, 'email' => 'jose@teste.com.br', 'senha' => '1234'),
    array('id'=> 4, 'email' => 'mariaa@teste.com.br', 'senha' => '1234'),
);
foreach($usuarios_app as $user){
   
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';
        $_SESSION['autenticado'] = 'SIM'; 
        $_SESSION['id'] = $usuario_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro2');
    }
    ?> 
