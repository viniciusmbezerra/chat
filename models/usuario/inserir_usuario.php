<?php
    include_once "../../conexao.php";
    include_once "usuario_model.php";
    
    $usuario['nome'] = $_POST['nome'];
    $usuario['email'] = $_POST['email'];
    $usuario['senha'] = $_POST['senha'];
    
    inserir_usuario($usuario, $conn);
    header('Location: ../../views/login.php');
?>