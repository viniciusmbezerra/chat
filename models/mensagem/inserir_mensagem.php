<?php
    include_once "../../conexao.php";
    include_once "mensagem_model.php";
    
    $mensagem['idgrupo'] = $_POST['idgrupo'];
    $mensagem['idusuario'] = $_POST['idusuario'];
    $mensagem['conteudo'] = $_POST['conteudo'];
    
    inserir_mensagem($mensagem, $conn);
    header('Location: ../../views/chat.php');
?>