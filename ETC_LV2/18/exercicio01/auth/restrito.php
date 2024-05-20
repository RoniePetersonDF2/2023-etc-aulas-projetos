<?php
session_start();

$usuario = $_SESSION['usuario'] ?? null; 

if (!$usuario) {
    header("location: ../auth/index.php?error=Usuário não tem permissão!");
    exit;
}