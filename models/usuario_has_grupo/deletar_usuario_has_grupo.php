<?php
    include_once "../../conexao.php";
    include_once "usuario_has_grupo_model.php";
    
    session_start();

    $usuario_has_grupo['idusuario'] = $_SESSION['idusuario'];
    $usuario_has_grupo['idgrupo'] = $_POST['idgrupo'];

    deletar_usuario_has_grupo($usuario_has_grupo, $conn);

    header('Location: ../../views/perfil.php');
?>