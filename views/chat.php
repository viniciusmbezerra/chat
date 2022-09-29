<?php
    session_start();

    if(!isset($_SESSION['email']) AND !isset($_SESSION['login'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>chat</title>
</head>
<body class="bg-dark">
    <div class="bg-dark text-white border rounded">
        <h2 class="h3 bg-dark text-white p-2 fixed-top">
            Grupo: 
            <?php
                include_once "../conexao.php";
                include_once "../models/grupo/grupo_model.php";
                include_once "../models/mensagem/mensagem_model.php";
                include_once "../models/usuario/usuario_model.php";

                if(isset($_POST['idgrupo'])){
                    $_SESSION['idgrupo'] = $_POST['idgrupo'];
                }

                $grupo = buscar_grupo($_SESSION['idgrupo'], $conn) -> fetch_assoc();
                echo $grupo['nome'];
            ?>
            <div class="text-right">
                <a href="perfil.php" class="btn btn-warning">voltar</a>
            </div>
        </h2>
        <div id="conteudo">
            <div class="caixa d-flex flex-column-reverse" style="margin: 120px 10%;">
            <?php
                $mensagens = buscar_mensagem($_SESSION['idgrupo'], $conn);

                if($mensagens -> num_rows > 0){
                    while($row = $mensagens -> fetch_assoc()){
                        $usuario = buscar_usuario($row['fk_idusuario'], $conn) -> fetch_assoc();
                        if($row['fk_idusuario']==$_SESSION['idusuario']){
                            echo "<div class='item align-self-end p-3 bg-info text-white text-justify mb-2' style='max-width: 90%;width: max-content;border-radius: 30px 0px 30px 30px;'>";
                            echo $row['conteudo'];
                            echo "</div>";
                        }else{
                            echo "<div class='item p-3 bg-secondary text-justify mb-2' style='max-width: 90%;width: max-content;border-radius: 0px 30px 30px 30px;'>";
                            echo "<span class='badge badge-info mr-2 d-block' style='width:max-content;'>".$usuario['nome']."</span>".$row['conteudo'];
                            echo "</div>";
                        }
                    }
                }
            ?>
            </div>
            <div class="m-0 p-3 fixed-bottom bg-dark">
                <form action="../models/mensagem/inserir_mensagem.php" method="post" class="form">
                    <input type="hidden" name="idgrupo" value="<?php echo $_SESSION['idgrupo'] ?>">
                    <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" name="conteudo" placeholder="escreva a sua mensagem aqui">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-info">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>