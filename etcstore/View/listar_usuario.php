<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo_tabela.css">

    <!--Links ícones-->
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!--Início da barra de navegação-->
    <div id="container">
    <?php
    include "menu.php";
    ?>
    </div>
 <!--Fim da barra de navegação-->
 <div id="container_tabela">
     <?php
        require_once "../Model/DAO/UsuarioDAO.php";
        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->listarTodos();

     ?>
    <h1>LISTA DE USUÁRIOS CADASTRADOS</h1>
    <table id="tabela_lista_usuario">
        <thead>
            <tr>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>TIPO DE USUÁRIO</th>
                <th>CPF/CNPJ</th>
                <th>UF</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $usu ){
            ?>
            <tr>
                <td><?php echo $usu["nome"];?></td>
                <td><?=$usu["loginEmail"] ?></td>
                <td><?=$usu["tipoUsuario"]?></td>
                <td><?=$usu["cpf_cnpj"]?></td>
                <td><?=$usu["uf"]?></td>
                <td>
                    <a href="#" title="ALTERAR"> <i class="fa fa-edit fa-lg"></i></a>
                    <a href="../control/excluirUsuarioControl.php?id=<?=$usu["idusuario"] ?>" 
                    title="EXCLUIR"><i class="fa fa-trash fa-lg"></i></a>
                </td>
            </tr>
            <?php
                }
            ?>
 
            
        </tbody>
    </table>
    <div id="rodape_container"></div>
</div>


</body>
</html>