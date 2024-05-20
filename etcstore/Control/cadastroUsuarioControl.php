<?php
require_once "../Model/DTO/UsuarioDTO.php";
require_once "../Model/DAO/UsuarioDAO.php";
 $nome = $_POST["nome"];
 $cpf_cnpj = $_POST["cpf_cnpj"];
 $endereco = $_POST["endereco"];
 $numero = $_POST["numero"];
 $complemento = $_POST["complemento"]; 
 $bairro = $_POST["bairro"]; 
 $cidade = $_POST["cidade"]; 
 $uf = $_POST["uf"]; 
 $cep = $_POST["cep"]; 
 $loginEmail = $_POST["loginEmail"]; 
 $senha = $_POST["senha"]; 
 $tipoUsuario = $_POST["tipoUsuario"]; 

$usuarioDTO = new UsuarioDTO();  
$usuarioDTO->setNome($nome);
$usuarioDTO->setCpfCnpj($cpf_cnpj);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setNumero($numero );
$usuarioDTO->setBairro($bairro);
$usuarioDTO->setCidade($cidade);
$usuarioDTO->setUF($uf);
$usuarioDTO->setCep($cep);
$usuarioDTO->setLoginEmail($loginEmail);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setTipoUsuario($tipoUsuario);
$usuarioDTO->setComplemento($complemento);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->cadastrarUsuario($usuarioDTO);


?>