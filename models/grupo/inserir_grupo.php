<?php
    include "../../conexao.php";
    include_once "grupo_model.php";
    include_once "../usuario_has_grupo/usuario_has_grupo_model.php";
    
    session_start();

    $grupo['nome'] = $_POST['nome'];
    $grupo['descricao'] = $_POST['descricao'];
    inserir_grupo($grupo, $conn);//inserindo o grupo primeiro

    include "../../conexao.php";
    $grupo = $conn -> query(" select idgrupo from grupo where nome='{$_POST["nome"]}' ") -> fetch_assoc();//pegando o idgrupo para inserir um usuario_has_grupo
    $usuario_has_grupo['idusuario'] = $_SESSION['idusuario'];
    $usuario_has_grupo['idgrupo'] = $grupo['idgrupo'];
    inserir_usuario_has_grupo($usuario_has_grupo, $conn);//inserindo usuário_has_grupo

    header('Location: ../../views/perfil.php');
?>