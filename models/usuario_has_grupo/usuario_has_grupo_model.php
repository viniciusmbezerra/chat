<?php
    function inserir_usuario_has_grupo($usuario_has_grupo, $conn){
        $sql = "INSERT INTO usuario_has_grupo(fk_idusuario, fk_idgrupo) VALUES ('{$usuario_has_grupo['idusuario']}', '{$usuario_has_grupo['idgrupo']}')";

        $conn -> query($sql);

        $conn -> close();
    }

    function buscar_usuario_has_grupo($idusuario, $conn){
        $sql = "SELECT * FROM usuario_has_grupo WHERE fk_idusuario = '{$idusuario}'";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }

    function deletar_usuario_has_grupo($usuario_has_grupo, $conn){
        $sql = "DELETE FROM usuario_has_grupo WHERE fk_idusuario='{$usuario_has_grupo['idusuario']}' AND fk_idgrupo='{$usuario_has_grupo['idgrupo']}' ";
        $conn -> query($sql);

        $conn -> close();
    }
?>