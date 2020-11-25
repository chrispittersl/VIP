-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 25/11/2020 às 16:38
-- Versão do servidor: 8.0.22-0ubuntu0.20.04.2
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vip`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int UNSIGNED NOT NULL,
  `nome_curso` varchar(40) NOT NULL,
  `tipo_curso` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nome_curso`, `tipo_curso`) VALUES
(1, 'Administração', 'ETIM'),
(2, 'Recursos Humanos', 'MTEC'),
(3, 'Serviços Jurídicos ', 'TÉCNICO'),
(4, 'Informática', 'ETIM'),
(5, 'Administração', 'TÉCNICO'),
(6, 'Desenvolvimento de Sistema', 'MTEC'),
(7, 'Contabilidade', 'TÈCNICO'),
(8, 'Desenvolvimento de Sistema', 'TÉCNICO'),
(9, 'Logística', 'MTEC'),
(10, 'Logística', 'TÈCNICO'),
(11, 'Logística', 'ETIM'),
(12, 'Administração', 'MTEC');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario_aula`
--

CREATE TABLE `horario_aula` (
  `cod_horario` int NOT NULL,
  `cod_usuario` int NOT NULL,
  `cod_turma` int NOT NULL,
  `horainicio` time NOT NULL,
  `horafim` time NOT NULL,
  `dia_da_semana` varchar(15) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `professor` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `horario_aula`
--

INSERT INTO `horario_aula` (`cod_horario`, `cod_usuario`, `cod_turma`, `horainicio`, `horafim`, `dia_da_semana`, `materia`, `professor`) VALUES
(1, 1, 1, '08:20:00', '09:10:00', 'Segunda', 'LE', 'Leandro Pedrosa'),
(2, 1, 1, '09:10:00', '10:00:00', 'Segunda', 'LE', 'Leandro Pedrosa'),
(3, 1, 1, '10:15:00', '11:05:00', 'Segunda', 'GFE', 'Amanda'),
(4, 1, 1, '11:05:00', '11:55:00', 'Segunda', 'GFE', 'Amanda'),
(5, 1, 1, '13:00:00', '13:50:00', 'Segunda', 'PDTCC', 'Amanda'),
(6, 1, 1, '13:50:00', '14:40:00', 'Segunda', 'PDTCC', 'Amanda'),
(7, 1, 1, '14:40:00', '15:30:00', 'Segunda', 'Filosofia', 'Lucia'),
(8, 1, 1, '08:20:00', '09:10:00', 'Terça', 'Matemática', 'Elpidio'),
(9, 1, 1, '09:10:00', '10:00:00', 'Terça', 'Geografia', 'Renilson'),
(10, 1, 1, '10:15:00', '11:05:00', 'Terça', 'Geografia', 'Renilson'),
(11, 1, 1, '11:05:00', '11:55:00', 'Terça', 'História', 'Marlon'),
(12, 1, 1, '13:00:00', '13:50:00', 'Terça', 'Matemática', 'Elpidio'),
(13, 1, 1, '13:50:00', '14:40:00', 'Terça', 'GPM', 'Cyntia'),
(14, 1, 1, '14:40:00', '15:30:00', 'Terça', 'GPM', 'Cyntia'),
(15, 1, 1, '08:20:00', '09:10:00', 'Quarta', 'Inglês ', 'Silvana'),
(16, 1, 1, '09:10:00', '10:00:00', 'Quarta', 'Sociologia', 'Lucia'),
(17, 1, 1, '10:15:00', '11:05:00', 'Quarta', 'GP II', 'Juliana'),
(18, 1, 1, '11:05:00', '11:55:00', 'Quarta', 'GP II', 'Juliana'),
(19, 1, 1, '13:00:00', '13:50:00', 'Quarta', 'GP II', 'Juliana'),
(20, 1, 1, '13:50:00', '14:40:00', 'Quarta', 'Inglês', 'Silvana'),
(21, 1, 1, '14:40:00', '15:30:00', 'Quarta', 'LPL', 'Ivonete'),
(22, 1, 1, '15:45:00', '16:35:00', 'Quarta', 'LPL', 'Ivonete'),
(23, 1, 1, '08:20:00', '09:10:00', 'Quinta', 'Matemática', 'Elpidio'),
(24, 1, 1, '09:10:00', '10:00:00', 'Quinta', 'Matemática', 'Elpidio'),
(25, 1, 1, '10:15:00', '11:05:00', 'Quinta', 'Química', 'Erick'),
(26, 1, 1, '11:05:00', '11:55:00', 'Quinta', 'Química', 'Erick'),
(27, 1, 1, '13:00:00', '13:50:00', 'Quinta', 'Ed física', 'Jaqueline'),
(28, 1, 1, '13:50:00', '14:40:00', 'Quinta', 'Ed física', 'Jaqueline'),
(29, 1, 1, '14:40:00', '15:30:00', 'Quinta', 'Física', 'Clayton'),
(30, 1, 1, '15:45:00', '16:35:00', 'Quinta', 'Física', 'Clayton'),
(31, 1, 1, '08:20:00', '09:10:00', 'Sexta', 'Biologia', 'Edelmar'),
(32, 1, 1, '09:10:00', '10:00:00', 'Sexta', 'Biologia', 'Edelmar'),
(33, 1, 1, '10:15:00', '11:05:00', 'Sexta', 'LPL', 'Ivonete'),
(34, 1, 1, '11:05:00', '11:55:00', 'Sexta', 'LPL', 'Ivonete'),
(35, 1, 1, '13:00:00', '13:50:00', 'Sexta', 'História', 'Marlon'),
(38, 1, 2, '07:30:00', '08:20:00', 'Segunda', 'LPL', 'Andreza'),
(39, 1, 2, '08:20:00', '09:10:00', 'Segunda', 'Matemática', 'André'),
(40, 1, 2, '09:10:00', '10:00:00', 'Segunda', 'LPL', 'Andreza'),
(41, 1, 2, '10:15:00', '11:05:00', 'Segunda', 'Ed física', 'Jaqueline'),
(42, 1, 2, '11:05:00', '11:55:00', 'Segunda', 'Ed física', 'Jaqueline'),
(43, 1, 2, '07:30:00', '08:20:00', 'Terça', 'Matemática', 'André'),
(44, 1, 2, '08:20:00', '09:10:00', 'Terça', 'PI II', 'Anderson'),
(45, 1, 2, '09:10:00', '10:00:00', 'Terça', 'PI II', 'Anderson'),
(46, 1, 2, '10:15:00', '11:05:00', 'Terça', 'RT', 'Carlos'),
(47, 1, 2, '11:05:00', '11:55:00', 'Terça', 'RT', 'Carlos'),
(48, 1, 2, '07:30:00', '08:20:00', 'Quarta', 'História ', 'Aguinaldo'),
(49, 1, 2, '08:20:00', '09:10:00', 'Quarta', 'Geografia', 'Rafael'),
(50, 1, 2, '09:10:00', '10:00:00', 'Quarta', 'Geografia', 'Rafael'),
(51, 1, 2, '10:15:00', '11:05:00', 'Quarta', 'LT', 'Ana'),
(52, 1, 2, '11:05:00', '11:55:00', 'Quarta', 'LT', 'Ana'),
(53, 1, 2, '07:30:00', '08:20:00', 'Quinta', 'História', 'Aguinaldo'),
(54, 1, 2, '08:20:00', '09:10:00', 'Quinta', 'Filosofia', 'Marlon'),
(55, 1, 2, '09:10:00', '10:00:00', 'Quinta', 'CDP', 'Amanda'),
(56, 1, 2, '10:15:00', '11:05:00', 'Quinta', 'CDP', 'Amanda'),
(57, 1, 2, '11:05:00', '11:55:00', 'Quinta', 'CDP', 'Amanda'),
(58, 1, 2, '07:30:00', '08:20:00', 'Sexta', 'Biologia', 'Cibele'),
(59, 1, 2, '08:20:00', '09:10:00', 'Sexta', 'Química', 'Erick'),
(60, 1, 2, '09:10:00', '10:00:00', 'Sexta', 'Química', 'Erick'),
(61, 1, 2, '10:15:00', '11:05:00', 'Sexta', 'Inglês ', 'Silvana'),
(62, 1, 2, '11:05:00', '11:55:00', 'Sexta', 'Inglês', 'Silvana'),
(63, 1, 4, '19:00:00', '20:53:00', 'Segunda', 'PO', 'Francimar'),
(64, 1, 4, '21:08:00', '22:40:00', 'Segunda', 'NDC', 'Paulo'),
(65, 1, 4, '19:00:00', '20:53:00', 'Terça', 'II', 'Flávia'),
(66, 1, 4, '21:08:00', '22:40:00', 'Terça', 'IED', 'Messias'),
(67, 1, 4, '19:00:00', '20:53:00', 'Quarta', 'TRAC', 'Emílio'),
(68, 1, 4, '21:08:00', '22:40:00', 'Quarta', 'NDC', 'Paulo'),
(69, 1, 4, '19:00:00', '20:53:00', 'Quinta', 'LTT', 'Lucilene'),
(70, 1, 4, '21:08:00', '22:40:00', 'Quinta', 'IED', 'Messias'),
(71, 1, 4, '19:00:00', '20:53:00', 'Sexta', 'TGP', 'Sisi'),
(72, 1, 4, '21:08:00', '22:40:00', 'Sexta', 'AI', 'Rafael'),
(73, 1, 3, '08:20:00', '09:10:00', 'Segunda', 'Geografia', 'Rafael'),
(74, 1, 3, '09:10:00', '10:00:00', 'Segunda', 'Geografia', 'Rafael'),
(75, 1, 3, '10:15:00', '11:05:00', 'Segunda', 'Matemática', 'Eduardo'),
(76, 1, 3, '11:05:00', '11:55:00', 'Segunda', 'Matemática', 'Eduardo'),
(77, 1, 3, '13:00:00', '13:50:00', 'Segunda', 'Física', 'Clayton'),
(78, 1, 3, '13:50:00', '14:40:00', 'Segunda', 'Física', 'Clayton'),
(79, 1, 3, '14:40:00', '15:30:00', 'Segunda', 'Inglês', 'Silvana'),
(80, 1, 3, '15:45:00', '16:35:00', 'Segunda', 'Inglês', 'Silvana'),
(81, 1, 3, '08:20:00', '09:10:00', 'Terça', 'Química', 'Erick'),
(82, 1, 3, '09:10:00', '10:00:00', 'Terça', 'Química', 'Erick'),
(83, 1, 3, '10:15:00', '11:05:00', 'Terça', 'DS', 'Edna/Wagner'),
(84, 1, 3, '11:05:00', '11:55:00', 'Terça', 'DS', 'Edna/Wagner'),
(85, 1, 3, '13:00:00', '13:50:00', 'Terça', 'Matemática', 'Eduardo'),
(86, 1, 3, '13:50:00', '14:40:00', 'Terça', 'Matemática', 'Eduardo'),
(87, 1, 3, '14:40:00', '15:30:00', 'Terça', 'PDTCC', 'Vilma/Maria'),
(88, 1, 3, '15:45:00', '16:35:00', 'Terça', 'PDTCC', 'Vilma/Maria'),
(89, 1, 3, '08:20:00', '09:10:00', 'Quarta', 'Sociologia', 'Lucia'),
(90, 1, 3, '09:10:00', '10:00:00', 'Quarta', 'Biologia', 'Cibele'),
(91, 1, 3, '10:15:00', '11:05:00', 'Quarta', 'Biologia', 'Cibele'),
(92, 1, 3, '11:05:00', '11:55:00', 'Quarta', 'PC', 'Carlos '),
(93, 1, 3, '13:00:00', '13:50:00', 'Quarta', 'PC', 'Carlos'),
(94, 1, 3, '13:50:00', '14:40:00', 'Quarta', 'PC', 'Carlos'),
(95, 1, 3, '14:40:00', '15:30:00', 'Quarta', 'LPL', 'Álvaro'),
(96, 1, 3, '15:45:00', '16:35:00', 'Quarta', 'LPL', 'Álvaro'),
(97, 1, 3, '08:20:00', '09:10:00', 'Quinta', 'DS', 'Edna/Wagner'),
(98, 1, 3, '09:10:00', '10:00:00', 'Quinta', 'Ed física', 'Jaqueline'),
(99, 1, 3, '10:15:00', '11:05:00', 'Quinta', 'Ed física', 'Jaqueline'),
(100, 1, 3, '11:55:00', '11:55:00', 'Quinta', 'Filosofia', 'Marlon'),
(101, 1, 3, '13:00:00', '13:50:00', 'Quinta', 'História', 'Marlon'),
(102, 1, 3, '13:50:00', '14:40:00', 'Quinta', 'História', 'Marlon'),
(103, 1, 3, '08:20:00', '09:10:00', 'Sexta', 'TM', 'Carlos'),
(104, 1, 3, '09:10:00', '10:00:00', 'Sexta', 'TM', 'Carlos'),
(105, 1, 3, '10:15:00', '11:05:00', 'Sexta', 'RCD', 'Carlos/Ediney'),
(106, 1, 3, '11:05:00', '11:55:00', 'Sexta', 'RCD', 'Carlos/Ediney'),
(107, 1, 3, '13:00:00', '13:50:00', 'Sexta', 'RCD', 'Carlos/Ediney'),
(108, 1, 3, '13:50:00', '14:40:00', 'Sexta', 'LPL', 'Álvaro'),
(109, 1, 3, '14:40:00', '15:30:00', 'Sexta', 'LPL', 'Álvaro'),
(110, 1, 5, '07:30:00', '09:35:00', 'Segunda', 'AI', 'Izolina/Fernando Malva'),
(111, 1, 5, '09:50:00', '11:55:00', 'Segunda', 'PRA', 'Uillicre'),
(112, 1, 5, '07:30:00', '09:35:00', 'Terça', 'LTT', 'Simone Russo'),
(113, 1, 5, '09:50:00', '11:55:00', 'Terça', 'ECO', 'Elenice Pissarro'),
(114, 1, 5, '07:30:00', '09:35:00', 'Quarta', 'CFE', 'Cynthia'),
(115, 1, 5, '09:50:00', '11:55:00', 'Quarta', 'PRDP', 'Imperio Lombardi'),
(116, 1, 5, '07:30:00', '09:35:00', 'Quinta', 'EDAM', 'Amanda'),
(117, 1, 5, '09:50:00', '11:55:00', 'Quinta', 'PE', 'Peri'),
(118, 1, 5, '07:30:00', '09:35:00', 'Sexta', 'CFE', 'Cynthia'),
(119, 1, 5, '09:50:00', '11:55:00', 'Sexta', 'EEM', 'Ana Moretin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reunioes`
--

CREATE TABLE `reunioes` (
  `cod_reuniao` int NOT NULL,
  `horario_reuniao` time NOT NULL,
  `data_reuniao` date NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_agendamento` date NOT NULL,
  `num_sala` int NOT NULL,
  `cod_usuario` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `reunioes`
--

INSERT INTO `reunioes` (`cod_reuniao`, `horario_reuniao`, `data_reuniao`, `descricao`, `nome`, `data_agendamento`, `num_sala`, `cod_usuario`) VALUES
(1, '15:30:00', '2020-10-08', 'Reunião de pais da turma 3 ano Etim Informáica, a professora Ivonete conduzirá a reunião', 'Reunião de pais e mestres', '2020-09-01', 18, 1),
(2, '12:30:00', '2020-10-23', 'Reunião de pais da turma 2 ano MTEC Recursos Humanos, o professor Elpidio conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-15', 18, 1),
(3, '12:30:00', '2020-10-23', 'Reunião de pais da turma 1 módulo do curso Técnico Administração, a professora Amanda conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-07', 18, 1),
(4, '16:35:00', '2020-11-01', 'Reunião de pais da turma 3 ano Etim administração, professora Silvana conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-16', 18, 1),
(5, '19:00:00', '2020-11-10', 'Reunião de pais da turma 1 módulo do curso Técnico Serviços Jurídicos, professor Francimar conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-13', 18, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sala`
--

CREATE TABLE `sala` (
  `num_sala` int UNSIGNED NOT NULL,
  `nome_sala` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `sala`
--

INSERT INTO `sala` (`num_sala`, `nome_sala`) VALUES
(1, 'Sala 1 - Bloco A'),
(2, 'Sala 2 - Bloco A'),
(3, 'Sala 3 - Bloco A'),
(4, 'Sala 4 - Bloco A'),
(5, 'Sala 5 - Bloco A'),
(6, 'Sala 6 - Bloco A'),
(7, 'Sala 7 - Bloco A'),
(8, 'Sala 8 - Bloco A'),
(9, 'Sala 9 - Bloco B'),
(10, 'Sala 10 - Bloco B'),
(11, 'Sala 11 - Bloco B'),
(12, 'Sala 12 - Bloco B'),
(13, 'Sala 13 - Bloco B'),
(14, 'Sala 14 - Bloco B'),
(15, 'Sala 15 - Bloco B'),
(16, 'Sala 16 - Bloco B'),
(17, 'Sala 1 - Anexo'),
(18, 'Sala 2 - Anexo'),
(19, 'Miniauditório'),
(20, 'Auditório');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tcc`
--

CREATE TABLE `tcc` (
  `cod_tcc` int NOT NULL,
  `horario_tcc` time NOT NULL,
  `data_tcc` date NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_agendamento` date NOT NULL,
  `num_sala` int NOT NULL,
  `cod_usuario` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tcc`
--

INSERT INTO `tcc` (`cod_tcc`, `horario_tcc`, `data_tcc`, `descricao`, `nome`, `data_agendamento`, `num_sala`, `cod_usuario`) VALUES
(1, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo VIP - Virtual Increased Plan; Curso: 3 ano Etim Informática.\r\nIntegrantes: Christopher Pitter, Gustavo Lopes, Isabele Vallim, Izabella Rodrigues e João Victor Galdino.', 'Apresentação de TCC', '2020-09-01', 19, 1),
(2, '09:00:00', '2020-11-19', 'Apresenação de TCC do grupo Mulheres na Prisão; Curso: 3 ano Etim Administração.\r\nIntegrantes: Maria joaquina, Bruno Santos e Antônia Pereira.', 'Apresentação de TCC', '2020-10-30', 20, 1),
(3, '14:00:00', '2020-11-09', 'Apresentação de TCC do grupo Adoção nos Dias de Hoje; Curso: 3 ano Etim Administração.\r\nIntegrantes: Pedro Souza, Henrique Alves, Beijamin Martins.', 'Apresentação de TCC', '2020-10-29', 19, 1),
(4, '15:30:00', '2020-11-18', 'Apresentação de TCC do grupo Novas estratégias de processos seletivos; Curso: 3 ano Etim Administração.\r\nIntegrantes: Mariane Barbosa, Cibele Silva e Lucas Garcia.', 'Apresentação de TCC', '2020-10-18', 20, 1),
(5, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo Meio Ambiente; Curso: 3 ano Etim Informática.\r\nIntegrantes: Pedro Henrique, João Pedro e Juan de Matos.', 'Apresentação de TCC', '2020-09-09', 20, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `cod_turma` int NOT NULL,
  `serie` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num_sala` int NOT NULL,
  `cod_curso` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `serie`, `num_sala`, `cod_curso`) VALUES
(1, '3 ano B', 2, 1),
(2, '2 ano A', 15, 2),
(3, '3 ano A', 9, 4),
(4, '1 ano A', 15, 3),
(5, '3 ano c', 6, 5),
(6, '1 ano A', 6, 10),
(7, '2 ano A', 16, 7),
(8, '3 ano A', 16, 3),
(9, '2 ano A', 14, 31),
(10, '3 ano B', 14, 11),
(11, '1 ano A', 13, 7),
(12, '2 ano B', 13, 11),
(13, '1 ano A', 12, 2),
(14, '3 ano B', 12, 8),
(15, '1 ano A', 11, 31),
(16, '2 ano B', 11, 8),
(17, '3 ano A', 10, 12),
(18, '1 ano B', 10, 11),
(19, '1 ano B', 9, 8),
(20, '2 ano A', 8, 3),
(21, '1 ano A', 7, 9),
(22, '3 ano A', 5, 5),
(23, '1 ano B', 5, 31),
(24, '3 ano B', 5, 5),
(25, '2 ano A', 4, 5),
(26, '2 ano A', 4, 10),
(27, '2 ano C', 4, 5),
(28, '1 ano A', 3, 5),
(29, '2 ano B', 3, 31),
(30, '2 ano B', 3, 5),
(31, '1 ano C', 2, 5),
(32, '3 ano A', 1, 1),
(33, '1 ano B', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `usuario`, `senha`) VALUES
(1, 'adm', '123'),
(2, 'geral', '456');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Índices de tabela `horario_aula`
--
ALTER TABLE `horario_aula`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Índices de tabela `reunioes`
--
ALTER TABLE `reunioes`
  ADD PRIMARY KEY (`cod_reuniao`);

--
-- Índices de tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`num_sala`);

--
-- Índices de tabela `tcc`
--
ALTER TABLE `tcc`
  ADD PRIMARY KEY (`cod_tcc`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_turma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `horario_aula`
--
ALTER TABLE `horario_aula`
  MODIFY `cod_horario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de tabela `reunioes`
--
ALTER TABLE `reunioes`
  MODIFY `cod_reuniao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
  MODIFY `num_sala` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tcc`
--
ALTER TABLE `tcc`
  MODIFY `cod_tcc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
