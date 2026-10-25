-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2026 às 03:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hubsap45_tcc_bdpastoraldeusvivo_2026`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblbairro`
--

CREATE TABLE `tblbairro` (
  `idBairro` int(11) NOT NULL,
  `idCidade` int(11) NOT NULL,
  `barNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tblbairro`
--

INSERT INTO `tblbairro` (`idBairro`, `idCidade`, `barNome`) VALUES
(1, 1, 'Centro'),
(2, 1, 'Parque Ícaro'),
(3, 1, 'Nova Guará'),
(4, 1, 'Engenheiro Neiva'),
(5, 1, 'Jardim do Vale I'),
(6, 1, 'Jardim do Vale II'),
(7, 1, 'Jardim Esperança'),
(8, 1, 'Jardim Tamandaré'),
(9, 1, 'Parque do Sol	'),
(10, 1, 'Beira Rio'),
(11, 1, 'Parque São Francisco'),
(12, 1, 'Pedregulho'),
(13, 1, 'Residencial Santa Bárbara'),
(14, 1, 'Santa Rita'),
(15, 1, 'Alto das Almas'),
(16, 1, 'Aroeira'),
(17, 1, 'Beira Rio II'),
(18, 1, 'Belveder Clube dos 500'),
(19, 1, 'Bom Jardim I'),
(20, 1, 'Bom Jardim II'),
(21, 1, 'Bom Jardim III'),
(22, 1, 'Bosque dos Ipês'),
(23, 1, 'Bairro Campinho'),
(24, 1, 'Campo do Galvão'),
(25, 1, 'CECAP'),
(26, 1, 'Chácara Selles'),
(27, 1, 'Chácaras Piagui'),
(28, 1, 'Chácaras Santa Maria I'),
(29, 1, 'Chácaras Vitória'),
(30, 1, 'Cohab Bandeirante	'),
(31, 1, 'Cooperi'),
(32, 1, 'Escola Especialista da Aeronáutica'),
(33, 1, 'Figueira'),
(34, 1, 'Internacional Park'),
(35, 1, 'Jardim Aeroporto'),
(36, 1, 'Jardim Alvorada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcidade`
--

CREATE TABLE `tblcidade` (
  `idCidade` int(11) NOT NULL,
  `cidNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tblcidade`
--

INSERT INTO `tblcidade` (`idCidade`, `cidNome`) VALUES
(1, 'Guaratinguetá'),
(2, 'Aparecida');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `idCliente` int(11) NOT NULL,
  `cliNome` varchar(40) NOT NULL,
  `cliCodigo` char(5) NOT NULL,
  `cliSenha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`idCliente`, `cliNome`, `cliCodigo`, `cliSenha`) VALUES
(2, 'Adm Arthur', '11067', 'vasco');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblentrega`
--

CREATE TABLE `tblentrega` (
  `idEntrega` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `entQuantidadeMarmita` int(2) NOT NULL,
  `entData` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblingrediente`
--

CREATE TABLE `tblingrediente` (
  `idIngrediente` int(11) NOT NULL,
  `ingNome` varchar(45) NOT NULL,
  `ingPreco` double NOT NULL,
  `idQuantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tblingrediente`
--

INSERT INTO `tblingrediente` (`idIngrediente`, `ingNome`, `ingPreco`, `idQuantidade`) VALUES
(18, 'Carne Moída', 400, 1),
(19, 'Arroz', 75, 1),
(20, 'Batata', 154, 1),
(21, 'Alho', 32, 2),
(22, 'Cebola', 18, 3),
(23, 'Tomate', 35, 4),
(24, 'Molho de Tomate', 22, 5),
(25, 'Salsicha', 21, 6),
(26, 'Salsicha', 162, 7),
(27, 'Cebola', 25, 4),
(28, 'Ketchup', 19, 8),
(29, 'Pimentão', 50, 3),
(30, 'Fubá', 27, 9),
(31, 'Feijão', 67, 10),
(32, 'Óleo', 30, 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbllocal`
--

CREATE TABLE `tbllocal` (
  `idLocal` int(11) NOT NULL,
  `idBairro` int(11) NOT NULL,
  `locNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblmarmita`
--

CREATE TABLE `tblmarmita` (
  `idMarmita` int(11) NOT NULL,
  `marNome` varchar(45) NOT NULL,
  `marPreco` double NOT NULL,
  `marPeso` double NOT NULL,
  `marFoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblmarmita_ingrediente`
--

CREATE TABLE `tblmarmita_ingrediente` (
  `idMarmita_Ingrediente` int(11) NOT NULL,
  `idMarmita` int(11) NOT NULL,
  `idIngrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblquantidade`
--

CREATE TABLE `tblquantidade` (
  `idQuantidade` int(11) NOT NULL,
  `quaQuantidade` double NOT NULL,
  `quaTipodeQuantidade` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `tblquantidade`
--

INSERT INTO `tblquantidade` (`idQuantidade`, `quaQuantidade`, `quaTipodeQuantidade`) VALUES
(1, 20, 'Kg'),
(2, 1, 'Kg'),
(3, 2, 'Kg'),
(4, 3, 'Kg'),
(5, 10, 'Sachês'),
(6, 2, 'Maços'),
(7, 15, 'Kg'),
(8, 2, 'Litros'),
(9, 6, 'Kg'),
(10, 10, 'Kg'),
(11, 4, 'Litros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblreabilitado`
--

CREATE TABLE `tblreabilitado` (
  `idReabilitado` int(11) NOT NULL,
  `idRelatorio` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL,
  `reaNome` varchar(80) DEFAULT NULL,
  `reaApelido` varchar(15) NOT NULL,
  `reaIdade` int(2) NOT NULL,
  `reaCpf` char(11) DEFAULT NULL,
  `reaTelefone` char(11) DEFAULT NULL,
  `reaDocumento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblrelatorio`
--

CREATE TABLE `tblrelatorio` (
  `idRelatorio` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idMarmita` int(11) NOT NULL,
  `relQuantidadeEntregue` int(3) NOT NULL,
  `relQuantidadeFeita` int(3) NOT NULL,
  `relAtendidos` int(3) NOT NULL,
  `relData` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblrelatorio_entrega`
--

CREATE TABLE `tblrelatorio_entrega` (
  `idRelatorio_Entrega` int(11) NOT NULL,
  `idRelatorio` int(11) NOT NULL,
  `idEntrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblbairro`
--
ALTER TABLE `tblbairro`
  ADD PRIMARY KEY (`idBairro`),
  ADD KEY `Fk_Bairro_Cidade_idx` (`idCidade`);

--
-- Índices de tabela `tblcidade`
--
ALTER TABLE `tblcidade`
  ADD PRIMARY KEY (`idCidade`);

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblentrega`
--
ALTER TABLE `tblentrega`
  ADD PRIMARY KEY (`idEntrega`),
  ADD KEY `Fk_Entrega_Local_idx` (`idLocal`);

--
-- Índices de tabela `tblingrediente`
--
ALTER TABLE `tblingrediente`
  ADD PRIMARY KEY (`idIngrediente`),
  ADD KEY `Fk_Ingrediente_Quantidade_idx` (`idQuantidade`);

--
-- Índices de tabela `tbllocal`
--
ALTER TABLE `tbllocal`
  ADD PRIMARY KEY (`idLocal`),
  ADD KEY `Fk_Local_Bairro_idx` (`idBairro`);

--
-- Índices de tabela `tblmarmita`
--
ALTER TABLE `tblmarmita`
  ADD PRIMARY KEY (`idMarmita`);

--
-- Índices de tabela `tblmarmita_ingrediente`
--
ALTER TABLE `tblmarmita_ingrediente`
  ADD PRIMARY KEY (`idMarmita_Ingrediente`),
  ADD KEY `Fk_Marmita_Ingrediente_Marmita_idx` (`idMarmita`),
  ADD KEY `Fk_Marmita_Ingrediente_Ingrediente_idx` (`idIngrediente`);

--
-- Índices de tabela `tblquantidade`
--
ALTER TABLE `tblquantidade`
  ADD PRIMARY KEY (`idQuantidade`);

--
-- Índices de tabela `tblreabilitado`
--
ALTER TABLE `tblreabilitado`
  ADD PRIMARY KEY (`idReabilitado`),
  ADD KEY `Fk_Reabilitado_Relatorio_idx` (`idRelatorio`),
  ADD KEY `Fk_Reabilitado_Local_idx` (`idLocal`);

--
-- Índices de tabela `tblrelatorio`
--
ALTER TABLE `tblrelatorio`
  ADD PRIMARY KEY (`idRelatorio`),
  ADD KEY `Fk_Relatorio_Cliente_idx` (`idCliente`),
  ADD KEY `Fk_Relatorio_Marmita_idx` (`idMarmita`);

--
-- Índices de tabela `tblrelatorio_entrega`
--
ALTER TABLE `tblrelatorio_entrega`
  ADD PRIMARY KEY (`idRelatorio_Entrega`),
  ADD KEY `Fk_Relatorio_Entrega_Entrega_idx` (`idEntrega`),
  ADD KEY `Fk_Relatorio_Entrega_Relatorio_idx` (`idRelatorio`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblbairro`
--
ALTER TABLE `tblbairro`
  MODIFY `idBairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `tblcidade`
--
ALTER TABLE `tblcidade`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblentrega`
--
ALTER TABLE `tblentrega`
  MODIFY `idEntrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblingrediente`
--
ALTER TABLE `tblingrediente`
  MODIFY `idIngrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tbllocal`
--
ALTER TABLE `tbllocal`
  MODIFY `idLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblmarmita`
--
ALTER TABLE `tblmarmita`
  MODIFY `idMarmita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblmarmita_ingrediente`
--
ALTER TABLE `tblmarmita_ingrediente`
  MODIFY `idMarmita_Ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tblquantidade`
--
ALTER TABLE `tblquantidade`
  MODIFY `idQuantidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tblreabilitado`
--
ALTER TABLE `tblreabilitado`
  MODIFY `idReabilitado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblrelatorio`
--
ALTER TABLE `tblrelatorio`
  MODIFY `idRelatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblrelatorio_entrega`
--
ALTER TABLE `tblrelatorio_entrega`
  MODIFY `idRelatorio_Entrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblbairro`
--
ALTER TABLE `tblbairro`
  ADD CONSTRAINT `Fk_Bairro_Cidade` FOREIGN KEY (`idCidade`) REFERENCES `tblcidade` (`idCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblentrega`
--
ALTER TABLE `tblentrega`
  ADD CONSTRAINT `Fk_Entrega_Local` FOREIGN KEY (`idLocal`) REFERENCES `tbllocal` (`idLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblingrediente`
--
ALTER TABLE `tblingrediente`
  ADD CONSTRAINT `Fk_Ingrediente_Quantidade` FOREIGN KEY (`idQuantidade`) REFERENCES `tblquantidade` (`idQuantidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tbllocal`
--
ALTER TABLE `tbllocal`
  ADD CONSTRAINT `Fk_Local_Bairro` FOREIGN KEY (`idBairro`) REFERENCES `tblbairro` (`idBairro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblmarmita_ingrediente`
--
ALTER TABLE `tblmarmita_ingrediente`
  ADD CONSTRAINT `Fk_Marmita_Ingrediente_Ingrediente` FOREIGN KEY (`idIngrediente`) REFERENCES `tblingrediente` (`idIngrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Marmita_Ingrediente_Marmita` FOREIGN KEY (`idMarmita`) REFERENCES `tblmarmita` (`idMarmita`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblreabilitado`
--
ALTER TABLE `tblreabilitado`
  ADD CONSTRAINT `Fk_Reabilitado_Local` FOREIGN KEY (`idLocal`) REFERENCES `tbllocal` (`idLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Reabilitado_Relatorio` FOREIGN KEY (`idRelatorio`) REFERENCES `tblrelatorio` (`idRelatorio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblrelatorio`
--
ALTER TABLE `tblrelatorio`
  ADD CONSTRAINT `Fk_Relatorio_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Relatorio_Marmita` FOREIGN KEY (`idMarmita`) REFERENCES `tblmarmita` (`idMarmita`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tblrelatorio_entrega`
--
ALTER TABLE `tblrelatorio_entrega`
  ADD CONSTRAINT `Fk_Relatorio_Entrega_Entrega` FOREIGN KEY (`idEntrega`) REFERENCES `tblentrega` (`idEntrega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_Relatorio_Entrega_Relatorio` FOREIGN KEY (`idRelatorio`) REFERENCES `tblrelatorio` (`idRelatorio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
