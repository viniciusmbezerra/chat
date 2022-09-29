<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
<body class="bg-dark"> 
    <div class="bg-dark text-white p-5">
        <form action="../models/grupo/inserir_grupo.php" method="POST">
            <h2>Crie o seu próprio grupo</h2>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="será usado como chave de entrada">
            </div>
            <div class="form-group">
                <label for="email">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="quais assuntos serão discutidos">
            </div>
            <button type="submit" class="btn btn-success m-2">Criar</button><br>
            <a href='perfil.php' class="btn btn-warning m-2">Voltar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>