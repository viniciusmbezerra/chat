<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
</head>
<body class="bg-dark">
    <div id="pagina">
        <div class="bg-dark text-white p-5 m-5 border rounded">
            <form action="../models/usuario/usuario_login.php" method="POST">
                <h2 class="h2">LOGIN</h2>
                <div class="form-group">
                    <label for="email" class="lead">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="digite o seu email">
                </div>
                <div class="form-group">
                    <label for="senha" class="lead">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="digite a sua senha">
                </div>
                <button type="submit" class="btn btn-success m-2">Entrar</button><br>
                <a href="cadastro_usuario.php" class="btn btn-light m-2">Criar Conta</a>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>