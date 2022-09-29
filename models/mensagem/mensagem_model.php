<?php
    function inserir_mensagem($mensagem, $conn){
        $sql = "INSERT INTO mensagem(conteudo, fk_idusuario, fk_idgrupo) VALUES ('{$mensagem['conteudo']}', '{$mensagem['idusuario']}', '{$mensagem['idgrupo']}')";

        $conn -> query($sql);

        $conn -> close();
    }

    function buscar_mensagem($idgrupo, $conn){
        $sql = "SELECT * FROM mensagem WHERE fk_idgrupo = '{$idgrupo}'";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }
?>