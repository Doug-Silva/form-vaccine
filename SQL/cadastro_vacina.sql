-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2021 às 22:37
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_vacina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` varchar(10) NOT NULL,
  `genero` varchar(25) NOT NULL,
  `sua_etnia` varchar(25) NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `pergunta1` text NOT NULL,
  `pergunta2` text NOT NULL,
  `pergunta3` text NOT NULL,
  `pergunta4` text NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_atendimento` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `nome`, `sobrenome`, `email`, `celular`, `data_nascimento`, `cep`, `genero`, `sua_etnia`, `altura`, `peso`, `pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `data_agendamento`, `hora_atendimento`) VALUES
(254, 'Douglas', 'Silva', 'silvatac@gmail.com', '51981398812', '1991-11-08', '94110312', 'Masculino', 'Pardo', 154, 80, 'Não', 'Mais de 4 Pessoas', 'Sim', 'Não', '2021-07-08', '18:22:00'),
(255, 'Camila', 'Marques', 'camila@gmail.com', '51991874575', '1990-07-12', '94110210', 'Feminino', 'Negro', 152, 85, 'Sim', '2 Pessoas', 'Não', 'Não', '2021-07-22', '20:24:00'),
(256, 'Paulo', 'Santos', 'paulo@gmail.com', '51991874585', '1992-05-12', '94110111', 'Masculino', 'Indígena', 180, 54, 'Não', 'Mais de 4 Pessoas', 'Sim', 'Não', '2021-05-04', '22:29:00'),
(257, 'Aline', 'Souza', 'aline@hotmail.com', '51991454588', '1980-02-08', '94110221', 'Feminino', 'Pardo', 160, 88, 'Sim', 'Moro sozinho', 'Não', 'Não', '2021-07-10', '18:27:00'),
(258, 'João', 'Siqueira', 'joao@outlook.com', '519918974577', '1995-02-19', '94110256', 'Masculino', 'Branco', 151, 98, 'Não', '2 Pessoas', 'Não', 'Sim', '2021-01-05', '20:32:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
