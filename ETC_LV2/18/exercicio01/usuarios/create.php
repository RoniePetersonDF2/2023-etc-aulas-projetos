<?php
require_once __DIR__ . "/../layouts/header.php";
require_once __DIR__ . "/../layouts/nav.php";
require_once __DIR__ . "/../src/dao/perfildao.php";

$perfilDAO = new PerfilDAO();
$perfis = $perfilDAO->getAll();
?>
<main>

    <h1>Novo Usuário</h1>
    <form action="save.php" method="post">
        <label>E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail." size="80" required autofocus><br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Informe sua senha." required><br>
        <label>Perfil</label>
        <select name="perfil">
            <?php foreach($perfis as $perfil) :?>
                <option value="<?= $perfil['id']?>"><?= $perfil['nome']?></option>
            <?php endforeach ?>
        </select><br>
        <button class="btn" type="submit">Salvar</button>
    </form>
</main>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>