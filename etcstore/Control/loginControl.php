<?php
require_once '../Model/DAO/UsuarioDAO.php';
require_once '../Model/DTO/UsuarioDTO.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setLoginEmail($email);
$usuarioDTO->setSenha($senha);

$usuarioDAO= new UsuarioDAO();
$usuarioLogado = $usuarioDAO->logar($usuarioDTO);

if ($usuarioLogado!=null ) {
    session_start();
    $_SESSION["login"]=$usuarioLogado->getLoginEmail();
    $_SESSION["tipo"]=$usuarioLogado->getTipoUsuario();
    header("location:../view/index.php");
} else {
   header ( "location:../view/login.php?msg=usuário e/ou senha inválidos" ); 
}



