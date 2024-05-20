<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store ETC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <main class="main__login">
        <div class="div__login_lateral">
            <h1>Store <span>ETC</span></h1>
            <h2>Loja de Informática</h2>

            <?php if (isset($_GET["msg"])) { ?>
                <div class="alert alert-warning login__error" role="alert">
                    <?= $_GET["msg"]; ?>
                </div>
            <?php } ?>

        </div>

        <div class="form__login">
            <figure>
                <img src="../assets/imagens/usuario.png" alt="Imagem login usuário">
            </figure>
            <form action="../Control/loginControl.php" method="POST">
                <div class="mb-2">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                </div>
                <div>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                </div>
                <div class="d-grid gap-2 mt-3">
                    <input type="submit" class="btn btn-primary" value="Logar">
                </div>

            </form>
        </div>
    </main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</body>
</html>