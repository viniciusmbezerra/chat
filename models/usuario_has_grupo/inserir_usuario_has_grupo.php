<?php
    include_once "../../conexao.php";
    include_once "usuario_has_grupo_model.php";
    
    session_start();

    $grupo = $conn -> query(" select idgrupo from grupo where nome='{$_POST["nome"]}' ") -> fetch_assoc();
    if(isset($grupo['idgrupo'])){
        $usuario_has_grupo['idusuario'] = $_SESSION['idusuario'];
        $usuario_has_grupo['idgrupo'] = $grupo['idgrupo'];
    
        inserir_usuario_has_grupo($usuario_has_grupo, $conn);
    }
    header('Location: ../../views/perfil.php');
?>