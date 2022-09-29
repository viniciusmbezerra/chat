<?php
    function verificar_usuario($usuario, $conn){
        $sql = "SELECT * FROM usuario WHERE email = '{$usuario['email']}' AND senha = '{$usuario['senha']}' ";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }

    function inserir_usuario($usuario, $conn){
        $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('{$usuario['nome']}', '{$usuario['email']}', '{$usuario['senha']}')";

        $conn -> query($sql);

        $conn -> close();
    }

    function buscar_usuario($idusuario, $conn){
        $sql = "SELECT * FROM usuario WHERE idusuario = '{$idusuario}'";

        $resultado = $conn -> query($sql);

        return $resultado;

        $conn -> close();
    }
?>