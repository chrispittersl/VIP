-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2020 às 20:36
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vip`
--
CREATE DATABASE IF NOT EXISTS `vip` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vip`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome_curso` varchar(40) NOT NULL,
  `tipo_curso` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nome_curso`, `tipo_curso`) VALUES
(1, 'Administração', 'ETIM'),
(2, 'Recursos Humanos', 'MTEC'),
(3, 'Serviços Jurídicos ', 'TÉCNICO'),
(4, 'Informática', 'ETIM'),
(5, 'Administração', 'TÉCNICO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_aula`
--

CREATE TABLE `horario_aula` (
  `cod_horario` int(11) NOT NULL,
  `cod_usuario` int(1) NOT NULL,
  `cod_turma` int(2) NOT NULL,
  `horainicio` time NOT NULL,
  `horafim` time NOT NULL,
  `dia_da_semana` varchar(15) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `professor` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario_aula`
--

INSERT INTO `horario_aula` (`cod_horario`, `cod_usuario`, `cod_turma`, `horainicio`, `horafim`, `dia_da_semana`, `materia`, `professor`) VALUES
(1, 1, 1, '08:20:00', '09:10:00', 'Segunda-feira', 'LE', 'Leandro Pedrosa'),
(2, 1, 1, '09:10:00', '10:00:00', 'Segunda-feira', 'LE', 'Leandro Pedrosa'),
(3, 1, 1, '10:15:00', '11:05:00', 'Segunda-feira', 'GFE', 'Amanda'),
(4, 1, 1, '11:05:00', '11:55:00', 'Segunda-feira', 'GFE', 'Amanda'),
(5, 1, 1, '13:00:00', '13:50:00', 'Segunda-feira', 'PDTCC', 'Amanda'),
(6, 1, 1, '13:50:00', '14:40:00', 'Segunda-feira', 'PDTCC', 'Amanda'),
(7, 1, 1, '14:40:00', '15:30:00', 'Segunda-feira', 'Filosofia', 'Lucia'),
(8, 1, 1, '08:20:00', '09:10:00', 'Terça-feira', 'Matemática', 'Elpidio'),
(9, 1, 1, '09:10:00', '10:00:00', 'Terça-feira', 'Geografia', 'Renilson'),
(10, 1, 1, '10:15:00', '11:05:00', 'Terça-feira', 'Geografia', 'Renilson'),
(11, 1, 1, '11:05:00', '11:55:00', 'Terça-feira', 'História', 'Marlon'),
(12, 1, 1, '13:00:00', '13:50:00', 'Terça-feira', 'Matemática', 'Elpidio'),
(13, 1, 1, '13:50:00', '14:40:00', 'Terça-feira', 'GPM', 'Cyntia'),
(14, 1, 1, '14:40:00', '15:30:00', 'Terça-feira', 'GPM', 'Cyntia'),
(15, 1, 1, '08:20:00', '09:10:00', 'Quarta-feira', 'Inglês ', 'Silvana'),
(16, 1, 1, '09:10:00', '10:00:00', 'Quarta-feira', 'Sociologia', 'Lucia'),
(17, 1, 1, '10:15:00', '11:05:00', 'Quarta-feira', 'GP II', 'Juliana'),
(18, 1, 1, '11:05:00', '11:55:00', 'Quarta-feira', 'GP II', 'Juliana'),
(19, 1, 1, '13:00:00', '13:50:00', 'Quarta-feira', 'GP II', 'Juliana'),
(20, 1, 1, '13:50:00', '14:40:00', 'Quarta-feira', 'Inglês', 'Silvana'),
(21, 1, 1, '14:40:00', '15:30:00', 'Quarta-feira', 'LPL', 'Ivonete'),
(22, 1, 1, '15:45:00', '16:35:00', 'Quarta-feira', 'LPL', 'Ivonete'),
(23, 1, 1, '08:20:00', '09:10:00', 'Quinta-feira', 'Matemática', 'Elpidio'),
(24, 1, 1, '09:10:00', '10:00:00', 'Quinta-feira', 'Matemática', 'Elpidio'),
(25, 1, 1, '10:15:00', '11:05:00', 'Quinta-feira', 'Química', 'Erick'),
(26, 1, 1, '11:05:00', '11:55:00', 'Quinta-feira', 'Química', 'Erick'),
(27, 1, 1, '13:00:00', '13:50:00', 'Quinta-feira', 'Ed física', 'Jaqueline'),
(28, 1, 1, '13:50:00', '14:40:00', 'Quinta-feira', 'Ed física', 'Jaqueline'),
(29, 1, 1, '14:40:00', '15:30:00', 'Quinta-feira', 'Física', 'Clayton'),
(30, 1, 1, '15:45:00', '16:35:00', 'Quinta-feira', 'Física', 'Clayton'),
(31, 1, 1, '08:20:00', '09:10:00', 'Sexta-feira', 'Biologia', 'Edelmar'),
(32, 1, 1, '09:10:00', '10:00:00', 'Sexta-feira', 'Biologia', 'Edelmar'),
(33, 1, 1, '10:15:00', '11:05:00', 'Sexta-feira', 'LPL', 'Ivonete'),
(34, 1, 1, '11:05:00', '11:55:00', 'Sexta-feira', 'LPL', 'Ivonete'),
(35, 1, 1, '13:00:00', '13:50:00', 'Sexta-feira', 'História', 'Marlon'),
(38, 1, 2, '07:30:00', '08:20:00', 'Segunda-feira', 'LPL', 'Andreza'),
(39, 1, 2, '08:20:00', '09:10:00', 'Segunda-feira', 'Matemática', 'André'),
(40, 1, 2, '09:10:00', '10:00:00', 'Segunda-feira', 'LPL', 'Andreza'),
(41, 1, 2, '10:15:00', '11:05:00', 'Segunda-feira', 'Ed física', 'Jaqueline'),
(42, 1, 2, '11:05:00', '11:55:00', 'Segunda-feira', 'Ed física', 'Jaqueline'),
(43, 1, 2, '07:30:00', '08:20:00', 'Terça-feira', 'Matemática', 'André'),
(44, 1, 2, '08:20:00', '09:10:00', 'Terça-feira', 'PI II', 'Anderson'),
(45, 1, 2, '09:10:00', '10:00:00', 'Terça-feira', 'PI II', 'Anderson'),
(46, 1, 2, '10:15:00', '11:05:00', 'Terça-feira', 'RT', 'Carlos'),
(47, 1, 2, '11:05:00', '11:55:00', 'Terça-feira', 'RT', 'Carlos'),
(48, 1, 2, '07:30:00', '08:20:00', 'Quarta-feira', 'História ', 'Aguinaldo'),
(49, 1, 2, '08:20:00', '09:10:00', 'Quarta-feira', 'Geografia', 'Rafael'),
(50, 1, 2, '09:10:00', '10:00:00', 'Quarta-feira', 'Geografia', 'Rafael'),
(51, 1, 2, '10:15:00', '11:05:00', 'Quarta-feira', 'LT', 'Ana'),
(52, 1, 2, '11:05:00', '11:55:00', 'Quarta-feira', 'LT', 'Ana'),
(53, 1, 2, '07:30:00', '08:20:00', 'Quinta-feira', 'História', 'Aguinaldo'),
(54, 1, 2, '08:20:00', '09:10:00', 'Quinta-feira', 'Filosofia', 'Marlon'),
(55, 1, 2, '09:10:00', '10:00:00', 'Quinta-feira', 'CDP', 'Amanda'),
(56, 1, 2, '10:15:00', '11:05:00', 'Quinta-feira', 'CDP', 'Amanda'),
(57, 1, 2, '11:05:00', '11:55:00', 'Quinta-feira', 'CDP', 'Amanda'),
(58, 1, 2, '07:30:00', '08:20:00', 'Sexta-feira', 'Biologia', 'Cibele'),
(59, 1, 2, '08:20:00', '09:10:00', 'Sexta-feira', 'Química', 'Erick'),
(60, 1, 2, '09:10:00', '10:00:00', 'Sexta-feira', 'Química', 'Erick'),
(61, 1, 2, '10:15:00', '11:05:00', 'Sexta-feira', 'Inglês ', 'Silvana'),
(62, 1, 2, '11:05:00', '11:55:00', 'Sexta-feira', 'Inglês', 'Silvana'),
(63, 1, 4, '19:00:00', '20:53:00', 'Segunda-feira', 'PO', 'Francimar'),
(64, 1, 4, '21:08:00', '22:40:00', 'Segunda-feira', 'NDC', 'Paulo'),
(65, 1, 4, '19:00:00', '20:53:00', 'Terça-feira', 'II', 'Flávia'),
(66, 1, 4, '21:08:00', '22:40:00', 'Terça-feira', 'IED', 'Messias'),
(67, 1, 4, '19:00:00', '20:53:00', 'Quarta-feira', 'TRAC', 'Emílio'),
(68, 1, 4, '21:08:00', '22:40:00', 'Quarta-feira', 'NDC', 'Paulo'),
(69, 1, 4, '19:00:00', '20:53:00', 'Quinta-feira', 'LTT', 'Lucilene'),
(70, 1, 4, '21:08:00', '22:40:00', 'Quinta-feira', 'IED', 'Messias'),
(71, 1, 4, '19:00:00', '20:53:00', 'Sexta-feira', 'TGP', 'Sisi'),
(72, 1, 4, '21:08:00', '22:40:00', 'Sexta-feira', 'AI', 'Rafael'),
(73, 1, 3, '08:20:00', '09:10:00', 'Segunda-feira', 'Geografia', 'Rafael'),
(74, 1, 3, '09:10:00', '10:00:00', 'Segunda-feira', 'Geografia', 'Rafael'),
(75, 1, 3, '10:15:00', '11:05:00', 'Segunda-feira', 'Matemática', 'Eduardo'),
(76, 1, 3, '11:05:00', '11:55:00', 'Segunda-feira', 'Matemática', 'Eduardo'),
(77, 1, 3, '13:00:00', '13:50:00', 'Segunda-feira', 'Física', 'Clayton'),
(78, 1, 3, '13:50:00', '14:40:00', 'Segunda-feira', 'Física', 'Clayton'),
(79, 1, 3, '14:40:00', '15:30:00', 'Segunda-feira', 'Inglês', 'Silvana'),
(80, 1, 3, '15:45:00', '16:35:00', 'Segunda-feira', 'Inglês', 'Silvana'),
(81, 1, 3, '08:20:00', '09:10:00', 'Terça-feira', 'Química', 'Erick'),
(82, 1, 3, '09:10:00', '10:00:00', 'Terça-feira', 'Química', 'Erick'),
(83, 1, 3, '10:15:00', '11:05:00', 'Terça-feira', 'DS', 'Edna/Wagner'),
(84, 1, 3, '11:05:00', '11:55:00', 'Terça-feira', 'DS', 'Edna/Wagner'),
(85, 1, 3, '13:00:00', '13:50:00', 'Terça-feira', 'Matemática', 'Eduardo'),
(86, 1, 3, '13:50:00', '14:40:00', 'Terça-feira', 'Matemática', 'Eduardo'),
(87, 1, 3, '14:40:00', '15:30:00', 'Terça-feira', 'PDTCC', 'Vilma/Maria'),
(88, 1, 3, '15:45:00', '16:35:00', 'Terça-feira', 'PDTCC', 'Vilma/Maria'),
(89, 1, 3, '08:20:00', '09:10:00', 'Quarta-feira', 'Sociologia', 'Lucia'),
(90, 1, 3, '09:10:00', '10:00:00', 'Quarta-feira', 'Biologia', 'Cibele'),
(91, 1, 3, '10:15:00', '11:05:00', 'Quarta-feira', 'Biologia', 'Cibele'),
(92, 1, 3, '11:05:00', '11:55:00', 'Quarta-feira', 'PC', 'Carlos '),
(93, 1, 3, '13:00:00', '13:50:00', 'Quarta-feira', 'PC', 'Carlos'),
(94, 1, 3, '13:50:00', '14:40:00', 'Quarta-feira', 'PC', 'Carlos'),
(95, 1, 3, '14:40:00', '15:30:00', 'Quarta-feira', 'LPL', 'Álvaro'),
(96, 1, 3, '15:45:00', '16:35:00', 'Quarta-feira', 'LPL', 'Álvaro'),
(97, 1, 3, '08:20:00', '09:10:00', 'Quinta-feira', 'DS', 'Edna/Wagner'),
(98, 1, 3, '09:10:00', '10:00:00', 'Quinta-feira', 'Ed física', 'Jaqueline'),
(99, 1, 3, '10:15:00', '11:05:00', 'Quinta-feira', 'Ed física', 'Jaqueline'),
(100, 1, 3, '11:55:00', '11:55:00', 'Quinta-feira', 'Filosofia', 'Marlon'),
(101, 1, 3, '13:00:00', '13:50:00', 'Quinta-feira', 'História', 'Marlon'),
(102, 1, 3, '13:50:00', '14:40:00', 'Quinta-feira', 'História', 'Marlon'),
(103, 1, 3, '08:20:00', '09:10:00', 'Sexta-feira', 'TM', 'Carlos'),
(104, 1, 3, '09:10:00', '10:00:00', 'Sexta-feira', 'TM', 'Carlos'),
(105, 1, 3, '10:15:00', '11:05:00', 'Sexta-feira', 'RCD', 'Carlos/Ediney'),
(106, 1, 3, '11:05:00', '11:55:00', 'Sexa-feira', 'RCD', 'Carlos/Ediney'),
(107, 1, 3, '13:00:00', '13:50:00', 'Sexta-feira', 'RCD', 'Carlos/Ediney'),
(108, 1, 3, '13:50:00', '14:40:00', 'Sexta-feira', 'LPL', 'Álvaro'),
(109, 1, 3, '14:40:00', '15:30:00', 'Sexta-feira', 'LPL', 'Álvaro'),
(110, 1, 5, '07:30:00', '09:35:00', 'Segunda-feira', 'AI', 'Izolina/Fernando Malva'),
(111, 1, 5, '09:50:00', '11:55:00', 'Segunda-feira', 'PRA', 'Uillicre'),
(112, 1, 5, '07:30:00', '09:35:00', 'Terça-feira', 'LTT', 'Simone Russo'),
(113, 1, 5, '09:50:00', '11:55:00', 'Terça-feira', 'ECO', 'Elenice Pissarro'),
(114, 1, 5, '07:30:00', '09:35:00', 'Quarta-feira', 'CFE', 'Cynthia'),
(115, 1, 5, '09:50:00', '11:55:00', 'Quarta-feira', 'PRDP', 'Imperio Lombardi'),
(116, 1, 5, '07:30:00', '09:35:00', 'Quinta-feira', 'EDAM', 'Amanda'),
(117, 1, 5, '09:50:00', '11:55:00', 'Quinta-feira', 'PE', 'Peri'),
(118, 1, 5, '07:30:00', '09:35:00', 'Sexta-feira', 'CFE', 'Cynthia'),
(119, 1, 5, '09:50:00', '11:55:00', 'Sexta-feira', 'EEM', 'Ana Moretin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reunioes`
--

CREATE TABLE `reunioes` (
  `cod_reuniao` int(11) NOT NULL,
  `horario_reuniao` time NOT NULL,
  `data_reuniao` date NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_agendamento` date NOT NULL,
  `num_sala` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reunioes`
--

INSERT INTO `reunioes` (`cod_reuniao`, `horario_reuniao`, `data_reuniao`, `descricao`, `nome`, `data_agendamento`, `num_sala`, `cod_usuario`) VALUES
(1, '15:30:00', '2020-10-08', 'Reunião de pais da turma 3 ano Etim Informáica, a professora Ivonete conduzirá a reunião', 'Reunião de pais e mestres', '2020-09-01', 28, 1),
(2, '12:30:00', '2020-10-23', 'Reunião de pais da turma 2 ano MTEC Recursos Humanos, o professor Elpidio conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-15', 8, 1),
(3, '12:30:00', '2020-10-23', 'Reunião de pais da turma 1 módulo do curso Técnico Administração, a professora Amanda conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-07', 6, 1),
(4, '16:35:00', '2020-11-01', 'Reunião de pais da turma 3 ano Etim administração, professora Silvana conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-16', 1, 1),
(5, '19:00:00', '2020-11-10', 'Reunião de pais da turma 1 módulo do curso Técnico Serviços Jurídicos, professor Francimar conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-13', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `num_sala` int(11) NOT NULL,
  `nome_sala` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`num_sala`, `nome_sala`) VALUES
(1, 'Sala de Aula - Bloco A'),
(2, 'Sala de Aula - Bloco A'),
(3, 'Sala de Aula - Bloco A'),
(4, 'Sala de Aula - Bloco A'),
(5, 'Sala de Aula - Bloco A'),
(6, 'Sala de Aula - Bloco A'),
(7, 'Sala de Aula - Bloco A'),
(8, 'Sala de Aula - Bloco A'),
(9, 'Sala de Aula - Bloco A'),
(10, 'Sala de Aula - Bloco A'),
(11, 'Sala de Aula - Bloco A'),
(12, 'Sala de Aula - Bloco A'),
(13, 'Sala de Aula - Bloco B'),
(14, 'Sala de Aula - Bloco B'),
(15, 'Sala de Aula - Bloco B'),
(16, 'Sala de Aula - Bloco B'),
(17, 'Sala de Aula - Bloco B'),
(18, 'Sala de Aula - Bloco B'),
(19, 'Sala de Aula - Bloco B'),
(20, 'Sala de Aula - Bloco B'),
(21, 'Sala de Aula - Bloco B'),
(22, 'Sala de Aula - Bloco B'),
(23, 'Sala de Aula - Bloco B'),
(24, 'Sala de Aula - Bloco B'),
(25, 'Sala 1 - Anexo'),
(26, 'Sala 2 - Anexo'),
(27, 'Miniauditório'),
(28, 'Auditório');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE `tcc` (
  `cod_tcc` int(11) NOT NULL,
  `horario_tcc` time NOT NULL,
  `data_tcc` date NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_agendamento` date NOT NULL,
  `num_sala` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tcc`
--

INSERT INTO `tcc` (`cod_tcc`, `horario_tcc`, `data_tcc`, `descricao`, `nome`, `data_agendamento`, `num_sala`, `cod_usuario`) VALUES
(1, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo VIP - Virtual Increased Plan; Curso: 3 ano Etim Informática.\r\nIntegrantes: Christopher Pitter, Gustavo Lopes, Isabele Vallim, Izabella Rodrigues e João Victor Galdino.', 'Apresentação de TCC', '2020-09-01', 10, 1),
(2, '09:00:00', '2020-11-19', 'Apresenação de TCC do grupo Mulheres na Prisão; Curso: 3 ano Etim Administração.\r\nIntegrantes: Maria joaquina, Bruno Santos e Antônia Pereira.', 'Apresentação de TCC', '2020-10-30', 7, 1),
(3, '14:00:00', '2020-11-09', 'Apresentação de TCC do grupo Adoção nos Dias de Hoje; Curso: 3 ano Etim Administração.\r\nIntegrantes: Pedro Souza, Henrique Alves, Beijamin Martins.', 'Apresentação de TCC', '2020-10-29', 14, 1),
(4, '15:30:00', '2020-11-18', 'Apresentação de TCC do grupo Novas estratégias de processos seletivos; Curso: 3 ano Etim Administração.\r\nIntegrantes: Mariane Barbosa, Cibele Silva e Lucas Garcia.', 'Apresentação de TCC', '2020-10-18', 28, 1),
(5, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo Meio Ambiente; Curso: 3 ano Etim Informática.\r\nIntegrantes: Pedro Henrique, João Pedro e Juan de Matos.', 'Apresentação de TCC', '2020-09-09', 27, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `cod_turma` int(11) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `num_sala` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `serie`, `num_sala`, `cod_curso`) VALUES
(1, '3 ano', 1, 1),
(2, '2 ano', 2, 2),
(3, '3 ano', 3, 4),
(4, '1 módulo', 4, 3),
(5, '1 módulo', 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `usuario`, `senha`) VALUES
(1, 'adm', '123'),
(2, 'geral', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `horario_aula`
--
ALTER TABLE `horario_aula`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Indexes for table `reunioes`
--
ALTER TABLE `reunioes`
  ADD PRIMARY KEY (`cod_reuniao`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`num_sala`);

--
-- Indexes for table `tcc`
--
ALTER TABLE `tcc`
  ADD PRIMARY KEY (`cod_tcc`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_turma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `horario_aula`
--
ALTER TABLE `horario_aula`
  MODIFY `cod_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `reunioes`
--
ALTER TABLE `reunioes`
  MODIFY `cod_reuniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `num_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tcc`
--
ALTER TABLE `tcc`
  MODIFY `cod_tcc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
