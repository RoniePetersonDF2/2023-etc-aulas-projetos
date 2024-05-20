<?php
require_once "verificaUsuarioLogado.php";
require_once "layouts/header.php";
?>
<?php
require_once "../Model/DAO/ProdutoDAO.php";
$produtoDAO = new ProdutoDAO();
$produtos = $produtoDAO->listarTodos();

?>

<main>
    <h2>Produtos</h2>
    <div class="row mb-2 mt-2">
        <a href="#" class="btn btn-primary" style="display: inline; width:100px; ">Novo</a>
    </div>
    <table class="table table-striped table-hover table-bordered" >
        <thead>
            <tr>
                <th>DESCRIÇÃO</th>
                <th>VALOR UNITÁRIO</th>
                <th>CÓDIGO</th>
                <th>IMAGEM</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $prod) {
            ?>
                <tr>
                    <td><?php echo $prod["descricao"]; ?></td>
                    <td><?= $prod["valor_unitario"] ?></td>
                    <td><?= $prod["codigo"] ?></td>
                    <td><?= isset($prod["imagem"]) ? $prod["imagem"] : "Sem Imagem" ?></td>
                    <td>
                        <a href="#" title="ALTERAR"> <i class="fa fa-edit fa-lg"></i></a>
                        <a href="../control/excluirProdutoControl.php?id=<?= $prod["idproduto"] ?>" title="EXCLUIR"><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>


        </tbody>
    </table>
</main>
<div id="container_tabela">

    
    <div id="rodape_container"></div>
</div>


</body>

</html>