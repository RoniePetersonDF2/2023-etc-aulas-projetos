-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Ago-2020 às 20:52
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_loja`
--


--
-- CRIA O BANCO DE DADOS projeto_loja
--

drop database IF EXISTS projeto_loja; 

create database projeto_loja;

use projeto_loja;


--
-- Estrutura da tabela `item_de_pedido`
--


CREATE TABLE `item_de_pedido` (
  `pedido_idpedido` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `quantidade` double(10,3) DEFAULT '0.000',
  `valor_total_item` decimal(12,2) DEFAULT '0.00' 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(12,2) DEFAULT '0.00',
  `pedidocol` varchar(45) DEFAULT NULL,
  `situacao` varchar(45) DEFAULT 'Aberto' COMMENT 'Aberto\nFechado\nCancelado',
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor_unitario` decimal(12,4) DEFAULT '0.0000',
  `codigo` varchar(50) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `descricao`, `valor_unitario`, `codigo`, `imagem`) VALUES
(1, 'Produto teste', '1.0000', '1', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipoUsuario` char(1) DEFAULT 'F' COMMENT 'A=Administrador\nF=Funcionário\nC=Cliente',
  `cpf_cnpj` varchar(20) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `numero` char(6) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  `loginEmail` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `tipoUsuario`, `cpf_cnpj`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `loginEmail`, `senha`) VALUES
(1, 'Administrador', 'A', '111.111.111-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@loja.com.br', '202cb962ac59075b964b07152d234b70'),
(2, 'Pedro de Tal Funcionário', 'F', '222.222.222-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pedro@loja.com.br', '202cb962ac59075b964b07152d234b70'),
(3, 'José Fulano Cliente', 'C', '333.444.555-77', 'QNB 11 LT 2', '123', 'AP', 'CENTRO', 'TAGUATINGA', 'RJ', '72210909', 'cliente@email.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_de_pedido`
--
ALTER TABLE `item_de_pedido`
  ADD PRIMARY KEY (`pedido_idpedido`,`produto_idproduto`),
  ADD KEY `fk_pedido_has_produto_produto1_idx` (`produto_idproduto`),
  ADD KEY `fk_pedido_has_produto_pedido1_idx` (`pedido_idpedido`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_pedido_usuario_idx` (`usuario_idusuario`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `item_de_pedido`
--
ALTER TABLE `item_de_pedido`
  ADD CONSTRAINT `fk_pedido_has_produto_pedido1` FOREIGN KEY (`pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_has_produto_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
