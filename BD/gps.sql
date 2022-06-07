-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2022 às 14:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gps`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `introducao` varchar(2000) NOT NULL,
  `ingresso` varchar(2000) NOT NULL,
  `imagem` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`, `introducao`, `ingresso`, `imagem`) VALUES
(1, 'Desenvolvimento para a Web e Dipositivos', 'Descrição Geral\nGerir e desenvolver projetos que visem a criação e o desenvolvimento de soluções informáticas a veicular na Web ou\nem dispositivos móveis, incluindo a conceção das respetivas interfaces e a produção dos conteúdos a\nincluir.\nPrograma BrightStart (Deloitte)\nO Programa BrightStart é uma iniciativa da Escola Superior de Tecnologia e Gestão de Viseu, pertencente ao Instituto\nPolitécnico de Viseu, com a Deloitte.\nConhece o programa BrightStart, que te permite tirar uma licenciatura na área das Tecnologias Informáticas e ter uma\nexperiência em ambiente real de trabalho.', '1. Podem candidatar-se ao acesso de um Curso Técnico Superior Profissional (CTeSP) da ESTGV:\nOs titulares de um curso de ensino secundário ou de habilitação legalmente equivalente;\nOs que tenham sido aprovados nas provas especialmente adequadas, destinadas a avaliar a capacidade para a\nfrequência do ensino superior dos maiores de 23 anos, realizadas, para o curso em causa, nos termos do Decreto-Lei\nn.º 64/2006, de 21 de março, alterado pelo Decreto-Lei n.º 113/2014, de 16 de julho, e pelo Decreto-Lei n.º 63/2016,\nde 13 de setembro.\n2. Podem igualmente candidatar-se ao acesso aos Cursos Técnicos Superiores Profissionais os titulares de um\ndiploma de especialização tecnológica, de um diploma de técnico superior profissional ou de um grau de ensino\nsuperior.\nPara informações relacionadas com o acesso ao CTeSP em Desenvolvimento para a Web e Dispositivos Móveis, por\nfavor, consulte o Edital respetivo.', './Imagens/dwdm.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `horario` varchar(500) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `username`, `password`, `email`, `dataNascimento`, `isAdmin`) VALUES
(1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin@admin.com', '2000-04-06', 1),
(2, 'marco', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'marco@user.com', '2000-04-19', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
