<h2>Fiz usando XAMPP server</h2>
<h3>No phpmyadmin criei um banco chamado 'aixdb' e aqui está a estrutura :</h3>



-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jan-2022 às 23:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `aixdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `cod_aluno` int(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 's',
  `cep` int(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(30) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turma` varchar(30) NOT NULL,
  `data_cadastro` date DEFAULT curdate(),
  `imagem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `cod_aluno`, `nome`, `login`, `senha`, `email`, `ativo`, `cep`, `cidade`, `estado`, `bairro`, `rua`, `numero`, `complemento`, `curso`, `turma`, `data_cadastro`, `imagem`) VALUES
(1, 15039, 'Thiago', 'thiago', '123', 'theagohen001@gmail.com', 's', 34710510, 'Sabará', 'MG', 'Vila Nova Vista', 'Rua Americana', 60, 'Fundos', 'Ranger Vermelho', '8606b', '2022-01-16', ''),
(2, 39281, 'cavetown', 'cave', '425', 'robbie@hotmail.com', 's', 34135125, '', '', '', '', 32, 'Fundos', 'Javascript', '1327B', '2022-01-16', ''),
(3, 33402, 'Thiago3', 'thiago3', '', 'j@hotmail.com', 'n', 49044460, 'Aracaju', 'SE', 'Santa Maria', 'Rua Quarenta e Um', 321, '2 Andar', 'Fisioterapia', '8606b', '2022-01-16', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) NOT NULL,
  `cod_curso` varchar(30) NOT NULL,
  `nome_curso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `cod_curso`, `nome_curso`) VALUES
(2, '8273', 'PHP'),
(4, '9829', 'Ajax'),
(5, '1283', 'cs:go'),
(6, '123', 'a'),
(8, '3241', 'Loro Jose'),
(9, '5231', 'Ranger Vermelho'),
(10, '1', 'Administração'),
(11, '2', 'Engenharia de Produção'),
(12, '3', 'Sistemas de Informação'),
(13, '4', 'Engenharia Elétrica'),
(14, '5', 'Educação Física'),
(15, '6', 'Fisioterapia'),
(16, '1', 'Administração'),
(17, '2', 'Engenharia de Produção'),
(18, '3', 'Sistemas de Informação'),
(19, '4', 'Engenharia Elétrica'),
(20, '5', 'Educação Física'),
(21, '6', 'Fisioterapia'),
(22, '23332', 'Curso novo'),
(23, '242dwq', 'CursoNovo'),
(24, '1', 'Administração'),
(25, '2', 'Engenharia de Produção'),
(26, '3', 'Sistemas de Informação'),
(27, '4', 'Engenharia Elétrica'),
(28, '5', 'Educação Física'),
(29, '6', 'Fisioterapia'),
(30, '1', 'Administração'),
(31, '2', 'Engenharia de Produção'),
(32, '3', 'Sistemas de Informação'),
(33, '4', 'Engenharia Elétrica'),
(34, '5', 'Educação Física'),
(35, '6', 'Fisioterapia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;
