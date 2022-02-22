SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `data_nascimento` varchar(25) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `genero` varchar(25) NOT NULL,
  `sua_etnia` varchar(25) NOT NULL,
  `altura` varchar(25) NOT NULL,
  `peso` int(11) NOT NULL,
  `pergunta1` text NOT NULL,
  `pergunta2` text NOT NULL,
  `pergunta3` text NOT NULL,
  `pergunta4` text NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_atendimento` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
COMMIT;

