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
    <title>Perfil</title>
</head>
<body class="bg-dark">
    <div class="bg-dark text-white p-3 m-0">
        <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
            <!-- Logo -->
            <h2 class="navbar-brand"><?php echo $_SESSION['nome']; ?></h2>
            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
            data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="cadastro_grupo.php" class="nav-link btn btn-info text-white m-2">Novo Grupo</a>
                    </li>
                    <li class="nav-item">
                        <a href="perfil.php" class="nav-link btn btn-light text-dark m-2">Grupos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link btn btn-warning text-dark m-2">Editar Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../models/usuario/usuario_sair.php" class="nav-link btn btn-danger text-white m-2">Sair</a>
                    </li>
                </ul>
                <!-- Formulário -->
                <form class="form-inline m-3" action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="nome" placeholder="email do contato">
                        <div class="input-group-append">
                            <button class="btn btn-success">ADICIONAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
        <h4 class="h5 bg-white text-dark text-center p-2">Meus Contatos</h4>
        <?php
            include_once "../conexao.php";
            include_once "../models/grupo/grupo_model.php";
            include_once "../models/usuario_has_grupo/usuario_has_grupo_model.php";

            $meus_grupos = buscar_usuario_has_grupo($_SESSION['idusuario'],$conn);
        ?>
        <?php if($meus_grupos -> num_rows > 0){ ?>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($row = $meus_grupos -> fetch_assoc()){
                    $grupo = buscar_grupo($row['fk_idgrupo'], $conn) -> fetch_assoc();
                    echo "<tr>";

                        echo "<td>";
                            echo "<form action='' method='post'>";
                                echo "<input type='hidden' name='idgrupo' value='".$grupo['idgrupo']."'>";
                                echo "<button class='btn btn-info btn-sm'>IR</button>";
                            echo "</form>";
                        echo "</td>";

                        echo "<td>".$grupo['nome']."</td>";
                        echo "<td>".$grupo['descricao']."</td>";

                        echo "<td>";
                            echo "<form action='' method='post'>";
                                echo "<input type='hidden' name='idgrupo' value='".$grupo['idgrupo']."'>";
                                echo "<button class='btn btn-danger btn-sm'>DELETAR</button>";
                            echo "</form>";
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
            }
            ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>