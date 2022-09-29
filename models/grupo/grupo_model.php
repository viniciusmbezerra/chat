<?php
    function inserir_grupo($grupo, $conn){
        $sql = "INSERT INTO grupo(nome, descricao) VALUES ('{$grupo['nome']}', '{$grupo['descricao']}')";
        
        $conn -> query($sql);

        $conn -> close();
    }

    function buscar_grupo($idgrupo, $conn){
        $sql = "SELECT * FROM grupo WHERE idgrupo = '{$idgrupo}'";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }
    function listar_grupo($conn){
        $sql = "SELECT * FROM grupo";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }
?>