<?php
header('Content-Type: text/html; charset=utf-8');

require_once "src/conexao.php";
$message = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $nome = $_POST['nome'];
    $status = $_POST['status'];
    
    $dbh = Conexao::getConexao();
    # cria uma instrução SQL para inserir dados na tabela usuarios
    $query = "INSERT INTO usuarios (email, password, nome, status) 
                VALUES ('$email', '$password', '$nome', $status)";

    # executa a instução contida em query e se tudo der certo retorna um valor maior que zero (true)
    $result = $dbh->exec($query);
    if($result) {
        $message =  "Usuário inserido com sucesso.";
    } else {
        $message = "Não foi possível inserir o usuário.";
    }
     
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <main class="container">
        <h1>Adicionando usuários</h1>
        <hr>
        <?php if (isset($message)) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?=$message?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>        
        <?php } ?>
        <section>
            <form action="" method="post">
                <label for="email" class="form-label">E-mail</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu e-mail (name@example.com)." required autofocus><br>
                <label for="password" class="form-label">Password</label><br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Informe seu password." required><br>
                <label for="nome" class="form-label">Nome</label><br>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome." required><br>
                <label for="status" class="form-label">Status</label><br>
                <select class="form-select" aria-label="Default select example" id="status" name="status">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
                <br><br>

                <input type="submit" class="btn btn-primary" value="Salvar" id="btn-salvar" name="btn-salvar">
            </form>
        </section>
    </main>
</body>

</html>