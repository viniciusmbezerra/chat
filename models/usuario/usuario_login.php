<?php

    require_once '../../conexao.php';
    require_once 'usuario_model.php';

    $usuario['email'] = $_POST['email'];
    $usuario['senha'] = $_POST['senha'];

    $resultado = verificar_usuario($usuario, $conn);

    if(isset($resultado)){
        $row = $resultado -> fetch_assoc();

        session_start();

        $_SESSION['email'] = $row['email'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['idusuario'] = $row['idusuario'];

        header('Location: ../../views/perfil.php');
    }else{
        header('Location: ../../views/login.php');
    }

?>