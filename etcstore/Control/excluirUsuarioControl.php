<?php
    require_once "../Model/DAO/UsuarioDAO.php";
    $idUsuario =  $_GET["id"];
    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->excluirUsuarioById($idUsuario);

    header("location:../view/listar_usuario.php");
//    echo "<script>";
//    echo "window.location.href= '../view/listar_usuario.php'";
//    echo "</script>";

?>