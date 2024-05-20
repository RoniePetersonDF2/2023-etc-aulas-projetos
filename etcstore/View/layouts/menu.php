<nav>
  <ul>
    <li>
      <a href="listar_produto.php" class="item_menu">Produto</a>
    </li>
    <?php
    if (isset($_SESSION["tipo"]) && strtolower($_SESSION["tipo"]) == "a") {
    ?>
      <li>
        <a href="listar_usuario.php" class="item_menu">Usuários</a>
      </li>
    <?php
    }
    ?>
    <li>
      <a href="logout.php" class="item_menu">Sair</a>
    </li>
  </ul>
</nav>