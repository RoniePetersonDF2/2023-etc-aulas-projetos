<?php
session_start();
header('Content-Type: text/html; charset=utf-8;');

include_once __DIR__. '/../src/dao/usuariodao.php';

# recebe os valores enviados do formulário via método post.
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$passwordCrypto = md5($password);


$dao = new UsuarioDAO();
$usuario = $dao->login($email, $passwordCrypto);


if (!$usuario) {
    header("location: index.php?error=Usuário ou senha invalidos!");
    exit;
}

$_SESSION['usuario'] = array(
    'id' => $usuario['id'],
    'nome' => $usuario['nome'],
    'perfil' => $usuario['perfil_id'],
    'status' => $usuario['status'],
);
header("location: ../index.php");
// echo '<pre>'; var_dump($_SESSION['usuario']); exit;
