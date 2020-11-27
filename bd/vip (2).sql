-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2020 às 00:31
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(10) UNSIGNED NOT NULL,
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
-- Estrutura da tabela `horario_aula`
--

CREATE TABLE `horario_aula` (
  `cod_horario` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL,
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
(119, 1, 5, '09:50:00', '11:55:00', 'Sexta', 'EEM', 'Ana Moretin'),
(142, 1, 6, '13:00:00', '13:50:00', 'Segunda', 'Geografia', 'Rafael Almeida'),
(143, 1, 6, '13:50:00', '14:40:00', 'Segunda', 'Geografia', 'Rafael Almeida'),
(144, 1, 6, '14:40:00', '15:30:00', 'Segunda', 'Ed Física', 'Jaqueline'),
(145, 1, 6, '15:45:00', '16:35:00', 'Segunda', 'Ed Física', 'Jaqueline'),
(146, 1, 6, '16:35:00', '17:25:00', 'Segunda', 'Física', 'Rosania'),
(147, 1, 6, '17:25:00', '18:15:00', 'Segunda', 'Física', 'Rosania'),
(148, 1, 6, '13:00:00', '13:50:00', 'Terça', 'AI', 'Edna/Peri'),
(149, 1, 6, '13:50:00', '14:40:00', 'Terça', 'AI', 'Edna/Peri'),
(150, 1, 6, '14:40:00', '15:30:00', 'Terça', 'Biologia', 'Cibele'),
(151, 1, 6, '15:45:00', '16:35:00', 'Terça', 'Biologia', 'Cibele'),
(152, 1, 6, '16:35:00', '17:25:00', 'Terça', 'Química', 'Erick'),
(153, 1, 6, '17:25:00', '18:15:00', 'Terça', 'Química', 'Erick'),
(154, 1, 6, '13:00:00', '13:50:00', 'Quarta', 'Matemática', 'Eduardo Amorim'),
(155, 1, 6, '13:50:00', '14:40:00', 'Quarta', 'Matemática', 'Eduardo Amorim'),
(156, 1, 6, '14:40:00', '15:30:00', 'Quarta', 'Inglês', 'Silvana'),
(157, 1, 6, '15:45:00', '16:35:00', 'Quarta', 'Inglês', 'Silvana'),
(158, 1, 6, '16:35:00', '17:25:00', 'Quarta', 'POAL', 'Leandro Pedroza'),
(159, 1, 6, '17:25:00', '18:15:00', 'Quarta', 'POAL', 'Leandro Pedroza'),
(160, 1, 6, '13:00:00', '13:50:00', 'Quinta', 'LPL', 'Simone Russo'),
(161, 1, 6, '13:50:00', '14:40:00', 'Quinta', 'LPL', 'Simone Russo'),
(162, 1, 6, '14:40:00', '15:30:00', 'Quinta', 'Artes', 'Marinês'),
(163, 1, 6, '15:45:00', '16:35:00', 'Quinta', 'Artes', 'Marinês'),
(164, 1, 6, '16:35:00', '17:25:00', 'Quinta', 'LPL', 'Simone Russo'),
(165, 1, 6, '17:25:00', '18:15:00', 'Quinta', 'Matemática', 'Eduardo Amorim'),
(166, 1, 6, '13:00:00', '13:50:00', 'Sexta', 'EMAL', 'Ullicre'),
(167, 1, 6, '13:50:00', '14:40:00', 'Sexta', 'EMAL', 'Ullicre'),
(168, 1, 6, '14:40:00', '15:30:00', 'Sexta', 'EL', 'Leandro Pedroza'),
(169, 1, 6, '15:45:00', '16:35:00', 'Sexta', 'EL', 'Leandro Pedroza'),
(170, 1, 6, '16:35:00', '17:25:00', 'Sexta', 'História', 'Marlon'),
(171, 1, 6, '17:25:00', '18:15:00', 'Sexta', 'História', 'Marlon'),
(172, 1, 7, '07:30:00', '08:20:00', 'Segunda', 'PW II', 'Edna/Rafael Fernandes'),
(173, 1, 7, '08:20:00', '09:10:00', 'Segunda', 'PW II', 'Edna/Rafael Fernandes'),
(174, 1, 7, '09:10:00', '10:00:00', 'Segunda', 'PAM I', 'Rogerio'),
(175, 1, 7, '10:15:00', '11:05:00', 'Segunda', 'PAM I', 'Rogerio'),
(176, 1, 7, '11:05:00', '11:55:00', 'Sexta', 'SE', 'Carlos/Wagner Lucca'),
(177, 1, 7, '11:55:00', '12:45:00', 'Segunda', 'SE', 'Carlos/ Wagner Lucca'),
(178, 1, 7, '07:30:00', '08:20:00', 'Terça', 'Matemática', '-----'),
(179, 1, 7, '08:20:00', '09:10:00', 'Terça', 'Matemáica', '----'),
(180, 1, 7, '09:10:00', '10:00:00', 'Terça', 'APS', 'Emilia'),
(181, 1, 7, '10:15:00', '11:05:00', 'Terça', 'APS', 'Emilia'),
(182, 1, 7, '11:05:00', '11:55:00', 'Terça', 'Geografia', 'Rafael'),
(183, 1, 7, '11:55:00', '12:45:00', 'Terça', 'Geografia', 'Rafael'),
(184, 1, 7, '07:30:00', '08:20:00', 'Quarta', 'DS', 'Wagner Lucca/Edna'),
(185, 1, 7, '08:20:00', '09:10:00', 'Quarta', 'DS', 'Wagner Lucca/Edna'),
(186, 1, 7, '09:10:00', '10:00:00', 'Quarta', 'BD I', 'Edna/Emilia'),
(187, 1, 7, '10:15:00', '11:05:00', 'Quarta', 'BD I', 'Edna/Emilia'),
(188, 1, 7, '11:05:00', '11:55:00', 'Quarta', 'Biologia', 'Simone'),
(189, 1, 7, '11:55:00', '12:45:00', 'Quarta', 'Biologia', 'Simone'),
(190, 1, 7, '07:30:00', '08:20:00', 'Quinta', 'DS', 'Wagner Lucca/Edna'),
(191, 1, 7, '08:20:00', '09:10:00', 'Quinta', 'Química', 'Erick'),
(192, 1, 7, '09:10:00', '10:00:00', 'Quinta', 'Química', 'Erick'),
(193, 1, 7, '10:15:00', '11:05:00', 'Quinta', 'História', 'Marlon'),
(194, 1, 7, '11:05:00', '11:55:00', 'Quinta', 'Física', 'Clayton'),
(195, 1, 7, '11:55:00', '12:45:00', 'Quinta', 'Física', 'Clayton'),
(196, 1, 7, '07:30:00', '08:20:00', 'Sexta', 'LPL', 'Ivonete'),
(197, 1, 7, '08:20:00', '09:10:00', 'Sexta', 'LPL', 'Ivonete'),
(198, 1, 7, '09:10:00', '10:00:00', 'Sexta', 'Inglês', '----'),
(199, 1, 7, '10:15:00', '11:05:00', 'Sexta', 'Inglês ', '----'),
(200, 1, 7, '11:05:00', '11:55:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(201, 1, 7, '11:55:00', '12:45:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(202, 1, 8, '19:00:00', '20:53:00', 'Segunda', 'PPC', 'Manoel Messias'),
(203, 1, 8, '21:08:00', '23:01:00', 'Segunda', 'PPC', 'Manoel Messias'),
(204, 1, 8, '19:00:00', '20:53:00', 'Terça', 'PPP', 'Josenaldo'),
(205, 1, 8, '21:08:00', '23:01:00', 'Terça', 'PPP', 'Josenaldo'),
(206, 1, 8, '19:00:00', '20:53:00', 'Quarta', 'DTCC', 'Silvano'),
(207, 1, 8, '21:08:00', '23:01:00', 'Quarta', 'FMF', 'Esmeralda'),
(208, 1, 8, '19:00:00', '20:53:00', 'Quinta', 'STN', 'Anderson Meneses'),
(209, 1, 8, '21:08:00', '23:01:00', 'Quinta', 'STN', 'Anderson Meneses'),
(210, 1, 8, '19:00:00', '20:53:00', 'Sexta', 'PPT', 'Paulo Candido'),
(211, 1, 8, '21:08:00', '23:01:00', 'Sexta', 'PPA', 'Paulo Candido'),
(212, 1, 9, '07:30:00', '08:20:00', 'Segunda', 'Inglês', 'Ivonete'),
(213, 1, 9, '08:20:00', '09:10:00', 'Segunda', 'Inglês', 'Ivonete'),
(214, 1, 9, '09:10:00', '10:00:00', 'Segunda', 'CPOC', 'Cyntia'),
(215, 1, 9, '10:15:00', '11:05:00', 'Segunda', 'Matemáica', 'Geane'),
(216, 1, 9, '11:05:00', '11:55:00', 'Segunda', 'AI', 'Edna/Fernando Malva'),
(217, 1, 9, '11:55:00', '12:45:00', 'Segunda', 'AI', 'Edna/Fernando Malva'),
(218, 1, 9, '07:30:00', '08:20:00', 'Terça', 'Biologia', 'Lucas Cabral'),
(219, 1, 9, '08:20:00', '09:10:00', 'Terça', 'Biologia', 'Lucas Cabral'),
(220, 1, 9, '09:10:00', '10:00:00', 'Terça', 'Filosofia', 'Marlon'),
(221, 1, 9, '10:15:00', '11:05:00', 'Terça', 'LPL', 'Simone Russo'),
(222, 1, 9, '11:05:00', '11:55:00', 'Terça', 'LPL', 'Simone Russo'),
(223, 1, 9, '11:55:00', '12:45:00', 'Terça', 'LPL', 'Simone Russo'),
(224, 1, 9, '07:30:00', '08:20:00', 'Quarta', 'Química', 'Erick'),
(225, 1, 9, '08:20:00', '09:10:00', 'Quarta', 'Química', 'Erick'),
(226, 1, 9, '09:10:00', '10:00:00', 'Quarta', 'Matemática', 'Geane'),
(227, 1, 9, '10:15:00', '11:05:00', 'Quarta', 'Matemática', 'Geane'),
(228, 1, 9, '11:05:00', '11:55:00', 'Quarta', 'PI II', 'Ullicre'),
(229, 1, 9, '11:55:00', '12:45:00', 'Quarta', 'PI II', 'Ullicre'),
(230, 1, 9, '07:30:00', '08:20:00', 'Quinta', 'Física', 'Clayton'),
(231, 1, 9, '08:20:00', '09:10:00', 'Quinta', 'Física', 'Clayton'),
(232, 1, 9, '09:10:00', '10:00:00', 'Quinta', 'Geografia', 'Renilson'),
(233, 1, 9, '10:15:00', '11:05:00', 'Quinta', 'Geografia', 'Renilson'),
(234, 1, 9, '11:05:00', '11:55:00', 'Quinta', 'RDP', 'Imperio Lombardi'),
(235, 1, 9, '11:55:00', '12:45:00', 'Quinta', 'RDP', 'Imperio Lombardi'),
(236, 1, 9, '07:30:00', '08:20:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(237, 1, 9, '08:20:00', '09:10:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(238, 1, 9, '09:10:00', '10:00:00', 'Sexta', 'História', 'Marlon'),
(239, 1, 9, '10:15:00', '11:05:00', 'Sexta', 'CPOC', 'Cyntia'),
(240, 1, 9, '11:05:00', '11:55:00', 'Sexta', 'CPOC', 'Cyntia'),
(241, 1, 9, '11:55:00', '12:45:00', 'Sexta', 'História', 'Marlon'),
(242, 1, 10, '19:00:00', '20:53:00', 'Segunda', 'TIAL', 'Marivaldo'),
(243, 1, 10, '21:08:00', '23:01:00', 'Segunda', 'TIAL', 'Marivaldo'),
(244, 1, 10, '19:00:00', '20:53:00', 'Terça', 'DTCC', 'Madalena'),
(245, 1, 10, '21:08:00', '23:01:00', 'Terça', 'LT', 'Paulo Candido'),
(246, 1, 10, '19:00:00', '20:53:00', 'Quarta', 'GT', 'Marcos Motta'),
(247, 1, 10, '21:08:00', '23:01:00', 'Quarta', 'LR', 'Eduardo Amorim'),
(248, 1, 10, '19:00:00', '21:08:00', 'Quinta', 'GQT', 'Eduardo Amorim'),
(249, 1, 10, '21:08:00', '23:01:00', 'Quinta', 'LIE', 'Eduardo Amorim'),
(250, 1, 10, '19:00:00', '20:53:00', 'Sexta', 'GT', 'Marcos Motta'),
(251, 1, 10, '21:08:00', '23:01:00', 'Sexta', 'SST', 'Diego'),
(252, 1, 11, '07:30:00', '08:20:00', 'Segunda', 'Matemática', 'Geane'),
(253, 1, 11, '08:20:00', '09:10:00', 'Segunda', 'Matemática', 'Geane'),
(254, 1, 11, '09:10:00', '10:00:00', 'Segunda', 'Química', 'Wagner Lucca'),
(255, 1, 11, '10:15:00', '11:05:00', 'Segunda', 'Química', 'Wagner Lucca'),
(256, 1, 11, '11:05:00', '11:55:00', 'Segunda', 'Matemática', 'Geane'),
(257, 1, 11, '11:55:00', '12:45:00', 'Segunda', 'LPL', 'Flávia'),
(258, 1, 11, '07:30:00', '08:20:00', 'Terça', 'TPA', 'Edna/Wagner Lucca'),
(259, 1, 11, '08:20:00', '09:10:00', 'Terça', 'TPA', 'Ednna/Wagner Lucca'),
(260, 1, 11, '09:10:00', '10:00:00', 'Terça', 'História', 'Aguinaldo'),
(261, 1, 11, '10:15:00', '11:05:00', 'Terça', 'História', 'Aguinaldo'),
(262, 1, 11, '11:05:00', '11:55:00', 'Terça', 'FI', 'Carlos/Maria Emilia'),
(263, 1, 11, '11:55:00', '12:45:00', 'Terça', 'FI', 'Carlos/ Maria Emilia'),
(264, 1, 11, '07:30:00', '08:20:00', 'Quarta', 'Biologia', 'Simone'),
(265, 1, 11, '08:20:00', '09:10:00', 'Quarta', 'Biologia', 'Simone'),
(266, 1, 11, '09:10:00', '10:00:00', 'Quarta', 'Inglês', 'Silvana'),
(267, 1, 11, '10:15:00', '11:05:00', 'Quarta', 'Inglês', 'Silvana'),
(268, 1, 11, '11:05:00', '11:55:00', 'Quarta', 'Matemática', 'Geane'),
(269, 1, 11, '11:55:00', '12:45:00', 'Quarta', 'TPA', 'Edna/Wagner Lucca'),
(270, 1, 11, '07:30:00', '08:20:00', 'Quinta', 'DD', 'Jose Roberto'),
(271, 1, 11, '08:20:00', '09:10:00', 'Quinta', 'DD', 'Jose Roberto'),
(272, 1, 11, '09:10:00', '10:00:00', 'Quinta', 'PW I', 'Edna/Jose Roberto'),
(273, 1, 11, '10:15:00', '11:05:00', 'Quinta', 'PW I', 'Edna/Jose Roberto'),
(274, 1, 11, '11:05:00', '11:55:00', 'Quinta', 'Artes', 'Marinês'),
(275, 1, 11, '11:55:00', '12:45:00', 'Quinta', 'Artes', 'Marinês'),
(276, 1, 11, '07:30:00', '08:20:00', 'Sexta', 'Filosofia', 'Marlon'),
(277, 1, 11, '08:20:00', '09:10:00', 'Sexta', 'Filosofia', 'Marlon'),
(278, 1, 11, '09:10:00', '10:00:00', 'sexta', 'Física', 'Geane'),
(279, 1, 11, '10:15:00', '11:05:00', 'Sexta', 'Física', 'Geane'),
(280, 1, 11, '11:05:00', '11:55:00', 'Sexta', 'LPL', 'Flavia'),
(281, 1, 11, '11:55:00', '12:45:00', 'Sexta', 'LPL', 'Flavia'),
(282, 1, 12, '19:00:00', '20:53:00', 'Segunda', 'MED', 'Uillicre'),
(283, 1, 12, '21:08:00', '23:01:00', 'Segunda', 'MED', 'Uillcre'),
(284, 1, 12, '19:00:00', '20:53:00', 'Terça', 'PPCP', 'Marcos Motta'),
(285, 1, 12, '21:08:00', '23:01:00', 'Terça', 'PTCC', 'Claudio Adão'),
(286, 1, 12, '19:00:00', '20:53:00', 'Quarta', 'GRM', 'Esmeralda'),
(287, 1, 12, '21:08:00', '23:01:00', 'Quarta', 'CL', '-----'),
(288, 1, 12, '19:00:00', '20:53:00', 'Quinta', 'PPCP', 'Marcos Motta'),
(289, 1, 12, '21:08:00', '23:01:00', 'Quinta', 'MKT', 'Diego'),
(290, 1, 12, '19:00:00', '20:53:00', 'Sexta', 'GRM', 'Esmeralda'),
(291, 1, 12, '21:08:00', '23:01:00', 'Sexta', 'GRM', 'Esmeralda'),
(292, 1, 13, '07:30:00', '08:20:00', 'Segunda', 'RDP', 'Jonathan'),
(293, 1, 13, '08:20:00', '09:10:00', 'Segunda', 'RDP', 'Jonathan'),
(294, 1, 13, '09:10:00', '10:00:00', 'Segunda', 'AI', 'Edna/Michely'),
(295, 1, 13, '10:15:00', '11:05:00', 'Segunda', 'AI', 'Edna/Michely'),
(296, 1, 13, '11:05:00', '11:55:00', 'Segunda', 'Inglês', 'Silvana'),
(297, 1, 13, '11:55:00', '12:45:00', 'Segunda', 'Inglês', 'Silvana'),
(298, 1, 13, '07:30:00', '08:20:00', 'Terça', 'História', 'Aguinaldo'),
(299, 1, 13, '08:20:00', '09:10:00', 'Terça', 'História ', 'Aguinaldo'),
(300, 1, 13, '09:10:00', '10:00:00', 'Terça', 'Biologia', 'Lucas Cabral'),
(301, 1, 13, '10:15:00', '11:05:00', 'Terça', 'Biologia', 'Lucas Cabral'),
(302, 1, 13, '11:05:00', '11:55:00', 'Terça', 'Artes', 'Marinês'),
(303, 1, 13, '11:55:00', '12:45:00', 'Terça', 'Artes', 'Marinês'),
(304, 1, 13, '07:30:00', '08:20:00', 'Quarta', 'Geografia', 'Renilson'),
(305, 1, 13, '08:20:00', '09:10:00', 'Quarta', 'Geografia', 'Renilson'),
(306, 1, 13, '09:10:00', '10:00:00', 'Quarta', 'LPL', 'Simone Russo'),
(307, 1, 13, '10:15:00', '11:05:00', 'Quarta', 'LPL', 'Simone Russo'),
(308, 1, 13, '11:05:00', '11:55:00', 'Quarta', 'LPL', 'Simone Russo'),
(309, 1, 13, '11:55:00', '12:45:00', 'Quarta', 'Matemática', 'Enyton'),
(310, 1, 13, '07:30:00', '08:20:00', 'Quinta', 'PI I', 'Naira Vania'),
(311, 1, 13, '08:20:00', '09:10:00', 'Quinta', 'PI I', 'Naira Vania'),
(312, 1, 13, '09:10:00', '10:00:00', 'Quinta', 'Matemática', 'Enyton'),
(313, 1, 13, '10:15:00', '11:05:00', 'Quinta', 'Matemática', 'Enyton'),
(314, 1, 13, '11:05:00', '11:55:00', 'Quinta', 'RSP', 'Marco Broco'),
(315, 1, 13, '11:55:00', '12:45:00', 'Quinta', 'RSP', 'Marco Broco'),
(316, 1, 13, '07:30:00', '08:20:00', 'Sexta', 'Química', 'Saulo'),
(317, 1, 13, '08:20:00', '09:10:00', 'Sexta', 'Química', 'Saulo'),
(318, 1, 13, '10:15:00', '11:05:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(319, 1, 13, '11:05:00', '11:55:00', 'Sexta', 'Ed Física', 'Jaqueline'),
(320, 1, 13, '11:05:00', '11:55:00', 'Sexta', 'Física', 'Rosania'),
(321, 1, 13, '11:55:00', '12:45:00', 'Sexta', 'Física', 'Rosania'),
(322, 1, 14, '19:00:00', '20:53:00', 'Segunda', 'CTF', 'Carlos Saito'),
(323, 1, 14, '21:08:00', '23:01:00', 'Segunda', 'CTF', 'Carlos Saito'),
(324, 1, 14, '19:00:00', '20:53:00', 'Terça', 'EADF', 'Cleonice'),
(325, 1, 14, '21:08:00', '23:01:00', 'Terça', 'CGE', 'Tamura'),
(326, 1, 14, '19:00:00', '20:53:00', 'Quarta', 'EADF', 'Cleonice'),
(327, 1, 14, '21:08:00', '23:01:00', 'Quarta', 'CA', 'Aguinaldo Vicente'),
(328, 1, 14, '19:00:00', '20:53:00', 'Quinta', 'TEC', 'Madalena'),
(329, 1, 14, '21:08:00', '23:01:00', 'Quinta', 'DTCC', 'Claudio Adão'),
(330, 1, 14, '19:00:00', '20:53:00', 'Sexta', 'CP', 'Aguinaldo Vicente'),
(331, 1, 14, '21:08:00', '23:01:00', 'Sexta', 'TEC', 'Madalena'),
(332, 1, 15, '07:30:00', '08:20:00', 'Segunda', 'PRA', 'Cyntia'),
(333, 1, 15, '08:20:00', '09:10:00', 'Segunda', 'PRA', 'Cyntia'),
(334, 1, 15, '09:10:00', '10:00:00', 'Segunda', 'LPL', 'Simone Russo'),
(335, 1, 15, '10:15:00', '11:05:00', 'Segunda', 'Matemática', 'Esmeralda'),
(336, 1, 15, '11:05:00', '11:55:00', 'Segunda', 'LE', 'Paulo Candido'),
(337, 1, 15, '11:55:00', '12:45:00', 'Segunda', 'LE', 'Paulo Candido'),
(338, 1, 15, '07:30:00', '08:20:00', 'Terça', 'Geografia', 'Renilson'),
(339, 1, 15, '08:20:00', '09:10:00', 'Terça', 'Geografia', 'Renilson'),
(340, 1, 15, '09:10:00', '10:00:00', 'Terça', 'Biologia', 'Cibele'),
(341, 1, 15, '10:15:00', '11:05:00', 'Terça', 'Artes', 'Marinês'),
(342, 1, 15, '11:05:00', '11:55:00', 'Terça', 'História', 'Aguinaldo'),
(343, 1, 15, '11:55:00', '12:45:00', 'Terça', 'História', 'Aguinaldo'),
(344, 1, 15, '07:30:00', '08:20:00', 'Quarta', 'LPL', 'Simone Russo'),
(345, 1, 15, '08:20:00', '09:10:00', 'Quarta', 'LPL', 'Simone Russo'),
(346, 1, 15, '10:15:00', '11:05:00', 'Quarta', 'Química ', 'Erick'),
(347, 1, 15, '10:15:00', '11:05:00', 'Quarta', 'Química', 'Erick'),
(348, 1, 15, '11:05:00', '11:55:00', 'Quarta', 'Inglês', 'Silvana'),
(349, 1, 15, '11:55:00', '12:45:00', 'Quarta', 'Inglês', 'Silvana'),
(350, 1, 15, '07:30:00', '08:20:00', 'Quinta', 'Ed Física', 'Jaqueline'),
(351, 1, 15, '08:20:00', '09:10:00', 'Quinta', 'Ed Física', 'Jaqueline'),
(352, 1, 15, '09:10:00', '10:00:00', 'Quinta', 'Biologia', 'Cibele'),
(353, 1, 15, '10:15:00', '11:05:00', 'Quinta', 'Artes', 'Marinês'),
(354, 1, 15, '11:05:00', '11:55:00', 'Quinta', 'PI I', 'Elenice Pissarro'),
(355, 1, 15, '11:55:00', '12:45:00', 'Quinta', 'PI I', 'Elenice Pissarro'),
(356, 1, 15, '07:30:00', '08:20:00', 'Sexta', 'Matemática', 'Esmeralda'),
(357, 1, 15, '08:20:00', '09:10:00', 'Sexta', 'Matemática', 'Esmeralda'),
(358, 1, 15, '09:10:00', '10:00:00', 'Sexta', 'Física', 'Rosania'),
(359, 1, 15, '10:15:00', '11:05:00', 'Sexta', 'Física', 'Rosania'),
(360, 1, 15, '11:05:00', '11:55:00', 'Sexta', 'DAMPC', 'Uillicre'),
(361, 1, 15, '11:55:00', '12:45:00', 'Sexta', 'DAMPC', 'Uillicre'),
(362, 1, 16, '19:00:00', '20:53:00', 'Segunda', 'CINTER', 'Madalena'),
(363, 1, 16, '21:08:00', '23:01:00', 'Segunda', 'CCOM', 'Madalena'),
(364, 1, 16, '19:00:00', '20:53:00', 'Terça', 'II', 'Andreza'),
(365, 1, 16, '21:08:00', '23:01:00', 'Terça', 'PTE', 'Diego'),
(366, 1, 16, '19:00:00', '20:53:00', 'Quarta', 'SIC', 'Eduardo Amorim'),
(367, 1, 16, '21:08:00', '23:01:00', 'Quarta', 'PTCC', 'Claudio'),
(368, 1, 16, '19:00:00', '20:53:00', 'Quinta', 'CCUSTO', 'Tamura'),
(369, 1, 16, '21:08:00', '23:01:00', 'Quinta', 'CCUSTO', 'Tamura'),
(370, 1, 16, '19:00:00', '20:53:00', 'Sexta', 'PTE', 'Diego'),
(371, 1, 16, '21:08:00', '23:01:00', 'Sexta', 'PEP', 'Esmeralda'),
(372, 1, 17, '08:20:00', '09:10:00', 'Segunda', 'Física', 'Clayton'),
(373, 1, 17, '09:10:00', '10:00:00', 'Segunda', 'Física', 'Clayton'),
(374, 1, 17, '10:15:00', '11:05:00', 'Segunda', 'Geografia', 'Rafael Almeida'),
(375, 1, 17, '11:05:00', '11:55:00', 'Segunda', 'Geografia', 'Rafael Almeida'),
(376, 1, 17, '13:00:00', '13:50:00', 'Segunda', 'Matemática', 'Rosania'),
(377, 1, 17, '13:50:00', '14:40:00', 'Segunda', 'Matemática', 'Rosania'),
(378, 1, 17, '14:40:00', '15:30:00', 'Segunda', 'História', 'Marlon'),
(379, 1, 17, '15:45:00', '16:35:00', 'Segunda', 'História', 'Marlon'),
(380, 1, 17, '08:20:00', '09:10:00', 'Terça', 'Biologia', 'Edelmar'),
(381, 1, 17, '09:10:00', '10:00:00', 'Terça', 'Biologia', 'Edelmar'),
(382, 1, 17, '10:15:00', '11:05:00', 'Terça', 'SST', 'Amanda'),
(383, 1, 17, '11:05:00', '11:55:00', 'Terça', 'Inglês', '----'),
(384, 1, 17, '13:00:00', '13:50:00', 'Terça', 'Inglês', '----'),
(385, 1, 17, '13:50:00', '14:40:00', 'Terça', 'LRGQT', 'Leandro Pedroza'),
(386, 1, 17, '14:40:00', '15:30:00', 'Terça', 'LRGQT', 'Leandro Pedroza'),
(387, 1, 17, '15:30:00', '16:35:00', 'Terça', 'Filosofia', 'Marlon'),
(388, 1, 17, '08:20:00', '09:10:00', 'Quarta', 'Ed Física', 'Jaqueline'),
(389, 1, 17, '09:10:00', '10:00:00', 'Quarta', 'Ed Física', 'Jaqueline'),
(390, 1, 17, '10:15:00', '11:05:00', 'Quarta', 'GCAT', 'Uillicre'),
(391, 1, 17, '11:05:00', '11:55:00', 'Quarta', 'Sociologia', 'Lucia'),
(392, 1, 17, '08:20:00', '09:10:00', 'Quinta', 'LPL', 'Simone Russo'),
(393, 1, 17, '09:10:00', '10:00:00', 'Quinta', 'LPL', 'Simone Russo'),
(394, 1, 17, '10:15:00', '11:05:00', 'Quinta', 'LPL', 'Simone Russo'),
(395, 1, 17, '11:05:00', '11:55:00', 'Quinta', 'LPL', 'Simone Russo'),
(396, 1, 17, '13:00:00', '13:50:00', 'Quinta', 'LIELT', 'Leandro Pedroza'),
(397, 1, 17, '13:50:00', '14:40:00', 'Quinta', 'LIELT', 'Leandro Pedroza'),
(398, 1, 17, '08:20:00', '09:10:00', 'Sexta', 'GCAT', 'Uillicre'),
(399, 1, 17, '09:10:00', '10:00:00', 'Sexta', 'GCAT', 'Uillicre'),
(400, 1, 17, '10:15:00', '11:05:00', 'Sexta', 'Química', 'Erick'),
(401, 1, 17, '11:05:00', '11:55:00', 'Sexta', 'Química', 'Erick'),
(402, 1, 17, '13:00:00', '13:50:00', 'Sexta', 'Matemática', 'Rosania'),
(403, 1, 17, '13:50:00', '14:40:00', 'Sexta', 'Matemática', 'Rosania'),
(404, 1, 17, '14:40:00', '15:30:00', 'Sexta', 'PDTCC', 'Marcos Motta'),
(405, 1, 17, '15:30:00', '16:35:00', 'Sexta', 'PDTCC', 'Marcos Motta'),
(406, 1, 18, '19:00:00', '20:53:00', 'Segunda', 'CFE', 'Eduardo Amorim'),
(407, 1, 18, '21:08:00', '23:01:00', 'Segunda', 'CFE', 'Eduardo Amorim'),
(408, 1, 18, '19:00:00', '20:53:00', 'Terça', 'AI', 'Joabs/Wagner Lucca'),
(409, 1, 18, '21:08:00', '23:01:00', 'Terça', 'II', 'Flavia'),
(410, 1, 18, '19:00:00', '20:53:00', 'Quarta', 'IL', 'Leandro Pedroza'),
(411, 1, 18, '21:08:00', '23:01:00', 'Quarta', 'GP', '-----'),
(412, 1, 18, '19:00:00', '20:53:00', 'Quinta', 'PEE', 'Daniele Xavier'),
(413, 1, 18, '21:08:00', '23:01:00', 'Quinta', 'PEE', 'Daniele Xavier'),
(414, 1, 18, '19:00:00', '20:53:00', 'Sexta', 'ECO', 'Elenice Pissarro'),
(415, 1, 18, '21:08:00', '23:01:00', 'Sexta', 'LTT', 'Simone Russo'),
(416, 1, 19, '19:00:00', '20:53:00', 'Segunda', 'OF', 'Esmeralda'),
(417, 1, 19, '21:08:00', '23:01:00', 'Segunda', 'EMF', 'Francimar'),
(418, 1, 19, '19:00:00', '20:53:00', 'Terça', 'LST', 'Diego'),
(419, 1, 19, '21:08:00', '23:01:00', 'Terça', 'AI', 'Joabs/Regina Donaire'),
(420, 1, 19, '19:00:00', '20:53:00', 'Quarta', 'CINTRO', 'Madalena'),
(421, 1, 19, '21:08:00', '23:01:00', 'Quarta', 'DCE', 'Silvano'),
(422, 1, 19, '19:00:00', '20:53:00', 'Quinta', 'ECO', 'Daniela Fernandes'),
(423, 1, 19, '21:08:00', '23:01:00', 'Quinta', 'LTT', 'Flavia'),
(424, 1, 19, '19:00:00', '20:53:00', 'Sexta', 'CINTRO', 'Madalena'),
(425, 1, 19, '21:08:00', '23:01:00', 'Sexta', 'GDC', 'Aguinaldo Vicente'),
(426, 1, 20, '19:00:00', '20:53:00', 'Segunda', 'IDP', 'Silvano'),
(427, 1, 20, '21:08:00', '23:01:00', 'Segunda', 'IDP', 'Silvano'),
(428, 1, 20, '19:00:00', '20:53:00', 'Terça', 'IDC', 'Manoel Messias'),
(429, 1, 20, '21:08:00', '23:01:00', 'Terça', 'PTCC', 'Silvano'),
(430, 1, 20, '19:00:00', '20:53:00', 'Quarta', 'IDE', 'Paulo Candido'),
(431, 1, 20, '21:08:00', '23:01:00', 'Quarta', 'IDT', 'Daniela Fernandes'),
(432, 1, 20, '19:00:00', '20:53:00', 'Quinta', 'IDC', 'Manoel Messias'),
(433, 1, 20, '21:08:00', '23:01:00', 'Quinta', 'ECO', 'Elenice Pissarro'),
(434, 1, 20, '19:00:00', '20:53:00', 'Sexta', 'IDA', 'Anderson Meneses'),
(435, 1, 20, '21:08:00', '23:01:00', 'Sexta', 'IDA', 'Anderson Meneses'),
(436, 1, 21, '19:00:00', '20:53:00', 'Segunda', 'PW I', 'Edney/Valdeir'),
(437, 1, 21, '21:08:00', '23:01:00', 'Segunda', 'PW I', 'Edney/Valdeir'),
(438, 1, 21, '19:00:00', '20:53:00', 'Terça', 'BD I', 'Jose Pimenta/Sarah'),
(439, 1, 21, '21:08:00', '23:01:00', 'Terça', 'PA', 'Sarah'),
(440, 1, 21, '19:00:00', '20:53:00', 'Quarta', 'APS', 'Jose Pimenta/ Maria Emilia'),
(441, 1, 21, '21:08:00', '23:01:00', 'Quarta', 'PA', 'Sarah'),
(442, 1, 21, '19:00:00', '20:53:00', 'Quinta', 'FI', 'Carlos Alberto/Sarah'),
(443, 1, 21, '21:08:00', '23:01:00', 'Quinta', 'LTT', 'Rogerio da Costa'),
(444, 1, 21, '19:00:00', '20:53:00', 'Sexta', 'TP', 'Sara/Rafael Fernandes'),
(445, 1, 21, '21:08:00', '23:01:00', 'Sexta', 'DD', 'Eliezer/Ediney'),
(446, 1, 22, '07:30:00', '09:35:00', 'Segunda', 'GPM', 'Bento'),
(447, 1, 22, '09:50:00', '11:55:00', 'Segunda', 'GPM', 'Bento'),
(448, 1, 22, '07:30:00', '09:35:00', 'Terça', 'II', '----'),
(449, 1, 22, '09:50:00', '11:55:00', 'Terça', 'LENI', 'Imperio Lombardi'),
(450, 1, 22, '07:30:00', '09:35:00', 'Quarta', 'GFE', 'Madalena'),
(451, 1, 22, '09:50:00', '11:55:00', 'Quarta', 'GFE', 'Madalena'),
(452, 1, 22, '07:30:00', '09:35:00', 'Quinta', 'LENI', 'Imperio Lombardi'),
(453, 1, 22, '09:50:00', '11:55:00', 'Quinta', 'DTCC', 'Madalena'),
(454, 1, 22, '07:30:00', '09:35:00', 'Sexta', 'GP III', 'Jonathan'),
(455, 1, 22, '09:50:00', '11:55:00', 'Sexta', 'MI', 'Amanda'),
(456, 1, 23, '13:00:00', '13:50:00', 'Segunda', 'LPL', 'Simone Russo'),
(457, 1, 23, '13:50:00', '14:40:00', 'Segunda', 'LPL', 'Simone Russo'),
(458, 1, 23, '14:40:00', '15:30:00', 'Segunda', 'Geografia', 'Rafael Almeida'),
(459, 1, 23, '15:45:00', '16:35:00', 'Segunda', 'Geografia ', 'Rafael Almeida'),
(460, 1, 23, '16:35:00', '17:25:00', 'Segunda', 'Ed Física', 'Jaqueline'),
(461, 1, 23, '17:25:00', '18:15:00', 'Segunda', 'Ed Física', 'Jaqueline'),
(462, 1, 23, '13:00:00', '13:50:00', 'Terça', 'Biologia', 'Cibele'),
(463, 1, 23, '13:50:00', '14:40:00', 'Terça', 'Biologia', 'Cibele'),
(464, 1, 23, '14:40:00', '15:30:00', 'Terça', 'Artes', 'Marinês'),
(465, 1, 23, '15:45:00', '16:35:00', 'Terça', 'Artes', 'Marinês'),
(466, 1, 23, '16:35:00', '17:25:00', 'Terça', 'DAMPC', 'Uillicre'),
(467, 1, 23, '17:25:00', '18:15:00', 'Terça', 'DAMPC', 'Uillicre'),
(468, 1, 23, '13:00:00', '13:50:00', 'Quarta', 'LE', 'Paulo Candido'),
(469, 1, 23, '13:50:00', '14:40:00', 'Quarta', 'LE', 'Paulo Candido'),
(470, 1, 23, '14:40:00', '15:30:00', 'Quarta', 'PI I', 'Amanda'),
(471, 1, 23, '15:45:00', '16:35:00', 'Quarta', 'PI I', 'Amanda'),
(472, 1, 23, '16:35:00', '17:25:00', 'Quarta', 'História', 'Aguinaldo'),
(473, 1, 23, '17:25:00', '18:15:00', 'Quarta', 'História', 'Aguinaldo'),
(474, 1, 23, '13:00:00', '13:50:00', 'Quinta', 'Física', 'Wagner Lucca'),
(475, 1, 23, '13:50:00', '14:40:00', 'Quinta', 'Física', 'Wagner Lucca'),
(476, 1, 23, '14:40:00', '15:30:00', 'Quinta', 'Química', 'Erick'),
(477, 1, 23, '15:45:00', '16:35:00', 'Quinta', 'Química', 'Erick'),
(478, 1, 23, '16:35:00', '17:25:00', 'Quinta', 'PRA', 'Madalena'),
(479, 1, 23, '17:25:00', '18:15:00', 'Quinta', 'PRA', 'Madalena'),
(480, 1, 23, '13:00:00', '13:50:00', 'Sexta', 'Matemática', 'Mario Tortoreli'),
(481, 1, 23, '13:50:00', '14:40:00', 'Sexta', 'Matemática', 'Mario Tortoreli'),
(482, 1, 23, '14:40:00', '15:30:00', 'Sexta', 'Matemáica', 'Mario Tortoreli'),
(483, 1, 23, '15:45:00', '16:35:00', 'Sexta', 'LPL', 'Simone Russo'),
(484, 1, 23, '16:35:00', '17:25:00', 'Sexta', 'Inglês', 'Simone Russo'),
(485, 1, 23, '17:25:00', '18:15:00', 'Sexta', 'Inglês', 'Simone Russo'),
(486, 1, 24, '19:00:00', '20:53:00', 'Segunda', 'GFE', 'Ana Morettin'),
(487, 1, 24, '21:08:00', '23:01:00', 'Segunda', 'GPM', 'Mario Alessandro'),
(488, 1, 24, '19:00:00', '20:53:00', 'Terça', 'GPM', 'Mario Alessandro'),
(489, 1, 24, '21:08:00', '23:01:00', 'Terça', 'LENI', 'Marcos Motta'),
(490, 1, 24, '19:00:00', '20:53:00', 'Quarta', 'MI', 'Francimar'),
(491, 1, 24, '21:08:00', '23:01:00', 'Quarta', 'LENI', 'Marcos Motta'),
(492, 1, 24, '19:00:00', '20:53:00', 'Quinta', 'II', 'Flavia'),
(493, 1, 24, '21:08:00', '23:01:00', 'Quinta', 'GP III', 'Giovanna'),
(494, 1, 24, '19:00:00', '20:53:00', 'Sexta', 'DTCC', 'Claudio Adão'),
(495, 1, 24, '21:08:00', '23:01:00', 'Sexta', 'GFE', 'Ana Moretin'),
(496, 1, 25, '07:30:00', '09:35:00', 'Segunda', 'AM', 'Amanda'),
(497, 1, 25, '09:50:00', '11:55:00', 'Segunda', 'PTCC', 'Madalena'),
(498, 1, 25, '07:30:00', '09:35:00', 'Terça', 'GEI', 'Cyntia'),
(499, 1, 25, '09:50:00', '11:55:00', 'Terça', 'CE', 'Ana Morettin/Antonio Tamura'),
(500, 1, 25, '07:30:00', '09:35:00', 'Quarta', 'GP II', '----'),
(501, 1, 25, '09:50:00', '11:55:00', 'Quarta', 'COC', 'Cyntia'),
(502, 1, 25, '07:30:00', '09:35:00', 'Quinta', 'GP II', '----'),
(503, 1, 25, '09:50:00', '11:55:00', 'Quinta', 'GEI', 'Cyntia'),
(504, 1, 25, '07:30:00', '09:35:00', 'Sexta', 'AM', 'Amanda'),
(505, 1, 25, '09:50:00', '11:55:00', 'Sexta', 'LE', 'Peri'),
(506, 1, 26, '13:00:00', '13:50:00', 'Segunda', 'Ed física', 'Jaqueline'),
(507, 1, 26, '13:50:00', '14:40:00', 'Segunda', 'Ed física', 'Jaqueline'),
(508, 1, 26, '14:40:00', '15:30:00', 'Segunda', 'Inglês', 'Alvaro'),
(509, 1, 26, '15:45:00', '16:35:00', 'Segunda', 'Inglês', 'Alvaro'),
(510, 1, 26, '16:35:00', '17:25:00', 'Segunda', 'PI', 'Juliana'),
(511, 1, 26, '17:25:00', '18:15:00', 'Segunda', 'PI', 'Juliana'),
(512, 1, 26, '13:00:00', '13:50:00', 'Terça', 'ARM', 'Cyntia'),
(513, 1, 26, '13:50:00', '14:40:00', 'Terça', 'LPL', 'Alvaro'),
(514, 1, 26, '14:40:00', '15:30:00', 'Terça', 'LPL', 'Alvaro'),
(515, 1, 26, '15:45:00', '16:35:00', 'Terça', 'LPL', 'Alvaro'),
(516, 1, 26, '16:35:00', '17:25:00', 'Terça', 'PPCP', 'Leandro Pedroza'),
(517, 1, 26, '17:25:00', '18:15:00', 'Terça', 'PPCP', 'Leandro Pedroza'),
(518, 1, 26, '13:00:00', '13:50:00', 'Quarta', 'ARM', 'Cyntia'),
(519, 1, 26, '13:50:00', '14:40:00', 'Quarta', 'ARM', 'Cyntia'),
(520, 1, 26, '14:40:00', '15:30:00', 'Quarta', 'Biologia', 'Simone'),
(521, 1, 26, '15:45:00', '16:35:00', 'Quarta', 'Biologia', 'Simone'),
(522, 1, 26, '16:35:00', '17:25:00', 'Quarta', 'Geografia', 'Alvaro'),
(523, 1, 26, '17:25:00', '18:15:00', 'Quarta', 'Geografia', 'Alvaro'),
(524, 1, 26, '13:00:00', '13:50:00', 'Quinta', 'Química', '----'),
(525, 1, 26, '13:50:00', '14:40:00', 'Quinta', 'Química', '----'),
(526, 1, 26, '14:40:00', '15:30:00', 'Quinta', 'Matemática', 'Rosirene'),
(527, 1, 26, '15:45:00', '16:35:00', 'Quinta', 'Matemática', 'Rosirene'),
(528, 1, 26, '16:35:00', '17:25:00', 'Quinta', 'História', 'Marlon'),
(529, 1, 26, '17:25:00', '18:15:00', 'Quinta', 'História', 'Marlon'),
(530, 1, 26, '13:00:00', '13:50:00', 'Sexta', 'MED', 'Leandro Pedroza'),
(531, 1, 26, '13:50:00', '14:40:00', 'Sexta', 'MED', 'Leandro Pedroza'),
(532, 1, 26, '14:40:00', '15:30:00', 'Sexta', 'Filosofia', 'Marlon'),
(533, 1, 26, '15:45:00', '16:35:00', 'Sexta', 'Matemáttica', 'Rosirene'),
(534, 1, 26, '16:35:00', '17:25:00', 'Sexta', 'Física', '----'),
(535, 1, 26, '17:25:00', '18:15:00', 'Sexta', 'Física', '----'),
(536, 1, 27, '19:00:00', '20:53:00', 'Segunda', 'GP II', 'Mario Alessandro'),
(537, 1, 27, '21:08:00', '23:01:00', 'Segunda', 'CE', 'Fernando Malva/Humberto'),
(538, 1, 27, '19:00:00', '20:53:00', 'Terça', 'PTCC', 'Fernando Malva'),
(539, 1, 27, '21:08:00', '23:01:00', 'Terça', 'GEI', 'Francimar'),
(540, 1, 27, '19:00:00', '20:53:00', 'Quarta', 'AM', 'Claudio Adão'),
(541, 1, 27, '21:08:00', '23:01:00', 'Quarta', 'COC', '----'),
(542, 1, 27, '19:00:00', '20:53:00', 'Quinta', 'LE', 'Paulo Candido'),
(543, 1, 27, '21:08:00', '23:01:00', 'Quinta', 'GEI', 'Francimar'),
(544, 1, 27, '19:00:00', '20:53:00', 'Sexta', 'GP II', 'Mario Alessandro'),
(545, 1, 27, '21:08:00', '23:01:00', 'Sexta', 'AM', 'Claudio Adão'),
(546, 1, 28, '07:30:00', '09:35:00', 'Segunda', 'AI', 'Izolina/Fernando Malva'),
(547, 1, 28, '09:50:00', '11:55:00', 'Segunda', 'PRA', 'Uillicre'),
(548, 1, 28, '07:30:00', '09:35:00', 'Terça', 'LTT', 'Simone Russo'),
(549, 1, 28, '09:50:00', '11:55:00', 'Terça', 'ECO', 'Elenice'),
(550, 1, 28, '07:30:00', '09:35:00', 'Quarta', 'CFE', 'Cyntia'),
(551, 1, 28, '09:50:00', '11:55:00', 'Quarta', 'PRDP', 'Imperio Lombardi'),
(552, 1, 28, '07:30:00', '09:35:00', 'Quinta', 'EDAM', 'Amanda'),
(553, 1, 28, '09:50:00', '11:55:00', 'Quinta', 'PE', 'Peri'),
(554, 1, 28, '07:30:00', '09:35:00', 'Sexta', 'CFE', 'Cyntia'),
(555, 1, 28, '09:50:00', '11:55:00', 'Sexta', 'EEM', 'Ana Morettin'),
(556, 1, 29, '13:00:00', '13:50:00', 'Segunda', 'Filosofia', 'Marlon'),
(557, 1, 29, '13:50:00', '14:40:00', 'Segunda', 'PI II', 'Peri'),
(558, 1, 29, '14:40:00', '15:30:00', 'Segunda', 'PI II', 'Peri'),
(559, 1, 29, '15:45:00', '16:35:00', 'Segunda', 'CPOC', 'Amanda'),
(560, 1, 29, '16:35:00', '17:25:00', 'Segunda', 'Inglês', 'Andreza'),
(561, 1, 29, '17:25:00', '18:15:00', 'Segunda', 'Inglês', 'Andreza'),
(562, 1, 29, '13:00:00', '13:50:00', 'Terça', 'Química', 'Erick'),
(563, 1, 29, '13:50:00', '14:40:00', 'Terça', 'Química', 'Erick'),
(564, 1, 29, '14:40:00', '15:30:00', 'Terça', 'Física', 'Daniela Machado'),
(565, 1, 29, '15:45:00', '16:35:00', 'Terça', 'Física', 'Daniela Machado'),
(566, 1, 29, '16:35:00', '17:25:00', 'Terça', 'Geografia', 'Rafael'),
(567, 1, 29, '17:25:00', '18:15:00', 'Terça', 'Geografia', 'Rafael'),
(568, 1, 29, '13:00:00', '13:50:00', 'Quarta', 'AI', 'Edna/Geiza'),
(569, 1, 29, '13:50:00', '14:40:00', 'Quarta', 'AI', 'Edna/Geiza'),
(570, 1, 29, '14:40:00', '15:30:00', 'Quarta', 'História', 'Aguinaldo'),
(571, 1, 29, '15:45:00', '16:35:00', 'Quarta', 'História', 'Aguinaldo'),
(572, 1, 29, '16:35:00', '17:25:00', 'Quarta', 'RDP', 'Amanda'),
(573, 1, 29, '17:25:00', '18:15:00', 'Quarta', 'RDP', 'Amanda'),
(574, 1, 29, '13:00:00', '13:50:00', 'Quinta', 'Matemática', 'Rosirene'),
(575, 1, 29, '13:50:00', '14:40:00', 'Quinta', 'CPOC', 'Amanda'),
(576, 1, 29, '14:40:00', '15:30:00', 'Quinta', 'CPOC', 'Amanda'),
(577, 1, 29, '15:45:00', '16:35:00', 'Quinta', 'LPL', 'Lucilene'),
(578, 1, 29, '16:35:00', '17:25:00', 'Quinta', 'LPL', 'Lucilene'),
(579, 1, 29, '17:25:00', '18:15:00', 'Quinta', 'LPL', 'Lucilene'),
(580, 1, 29, '13:00:00', '13:50:00', 'Sexta', 'Ed fisíca', 'Jaqueline'),
(581, 1, 29, '13:50:00', '14:40:00', 'Sexta', 'Ed fisíca', 'Jaqueline'),
(582, 1, 29, '14:40:00', '15:30:00', 'Sexta', 'Biologia', 'Cibelle'),
(583, 1, 29, '15:45:00', '16:35:00', 'Sexta', 'Biologia', 'Cibelle'),
(584, 1, 29, '16:35:00', '17:25:00', 'Sexta', 'Matemática', 'Rosirene'),
(585, 1, 29, '17:25:00', '18:15:00', 'Sexta', 'Matemática', 'Rosirene'),
(586, 1, 30, '19:00:00', '20:53:00', 'Segunda', 'CE', 'Vitor Hugo'),
(587, 1, 30, '21:08:00', '23:01:00', 'Segunda', 'PTCC', '----'),
(588, 1, 30, '19:00:00', '20:53:00', 'Terça', 'AM', 'Claudio Adao'),
(589, 1, 30, '21:08:00', '23:01:00', 'Terça', 'COC', 'Fernando Malva'),
(590, 1, 30, '19:00:00', '20:53:00', 'Quarta', 'GP II', '----'),
(591, 1, 30, '21:08:00', '23:01:00', 'Quarta', 'GP II', '----'),
(592, 1, 30, '19:00:00', '20:53:00', 'Quinta', 'AM', 'Claudio Adao'),
(593, 1, 30, '21:08:00', '23:01:00', 'Quinta', 'LE', 'Paulo Candido'),
(594, 1, 30, '19:00:00', '20:53:00', 'Sexta', 'GEI', 'Francimar'),
(595, 1, 30, '21:08:00', '23:01:00', 'Sexta', 'GEI', 'Francimar'),
(596, 1, 31, '19:00:00', '20:53:00', 'Segunda', 'CFE', 'Enyton'),
(597, 1, 31, '21:08:00', '23:01:00', 'Segunda', 'EEM', 'Carlos Xavier'),
(598, 1, 31, '19:00:00', '20:53:00', 'Terça', 'PRA', 'Humberto'),
(599, 1, 31, '21:08:00', '23:01:00', 'Terça', 'PRDP', 'Cleonice'),
(600, 1, 31, '19:00:00', '20:53:00', 'Quarta', 'EDAM', 'Amanda'),
(601, 1, 31, '21:08:00', '23:01:00', 'Quarta', 'AI', 'Joabs'),
(602, 1, 31, '19:00:00', '20:53:00', 'Quinta', 'ECO', 'Naira Vania'),
(603, 1, 31, '21:08:00', '23:01:00', 'Quinta', 'PE', 'Naira Vania'),
(604, 1, 31, '19:00:00', '20:53:00', 'Sexta', 'LTT', 'Simone Russo'),
(605, 1, 31, '21:08:00', '23:01:00', 'Sexta', 'CFE', 'Enyton'),
(609, 1, 32, '08:20:00', '09:10:00', 'Segunda', 'Inglês', 'Silvana'),
(608, 1, 32, '09:10:00', '10:00:00', 'Segunda', 'Inglês', 'Silvana'),
(610, 1, 32, '10:15:00', '11:05:00', 'Segunda', 'Física', 'Clayton'),
(611, 1, 32, '11:05:00', '11:55:00', 'Segunda', 'Física', 'Clayton'),
(612, 1, 32, '13:00:00', '13:50:00', 'Segunda', 'GPM', 'Leandro Pedroza'),
(613, 1, 32, '13:50:00', '14:40:00', 'Segunda', 'Sociologia', 'Lucia'),
(614, 1, 32, '14:40:00', '15:30:00', 'Segunda', 'LPL', 'Ivonete'),
(615, 1, 32, '15:45:00', '16:35:00', 'Segunda', 'Filosofia', 'Lucia'),
(616, 1, 32, '08:20:00', '09:10:00', 'Terça', 'GFE', 'Amanda'),
(617, 1, 32, '09:10:00', '10:00:00', 'Terça', 'GFE', 'Amanda'),
(618, 1, 32, '10:15:00', '11:05:00', 'Terça', 'Biologia', 'Edelmar'),
(619, 1, 32, '11:05:00', '11:55:00', 'Terça', 'Biologia', 'Edelmar'),
(620, 1, 32, '13:00:00', '13:50:00', 'Terça', 'Geografia', 'Rafael Almeida'),
(621, 1, 32, '13:50:00', '14:40:00', 'Terça', 'Geografia', 'Rafael Almeida'),
(622, 1, 32, '14:40:00', '15:30:00', 'Terça', 'História', 'Marlon'),
(623, 1, 32, '08:20:00', '09:10:00', 'Quarta', 'Matemática', '----'),
(624, 1, 32, '09:10:00', '10:00:00', 'Quarta', 'Matemática', '----'),
(625, 1, 32, '10:15:00', '11:05:00', 'Quarta', 'Ed fisíca', 'Jaqueline'),
(626, 1, 32, '11:05:00', '11:55:00', 'Quarta', 'Ed fisíca', 'Jaqueline'),
(627, 1, 32, '13:00:00', '13:50:00', 'Quarta', 'LE', 'Leandro Pedroza'),
(628, 1, 32, '13:50:00', '14:40:00', 'Quarta', 'LE', 'Leandro Pedroza'),
(629, 1, 32, '08:20:00', '09:10:00', 'Quinta', 'LPL', 'Ivonete'),
(630, 1, 32, '09:10:00', '10:00:00', 'Quinta', 'LPL', 'Ivonete'),
(631, 1, 32, '10:15:00', '11:05:00', 'Quinta', 'LPL', 'Ivonete'),
(632, 1, 32, '11:05:00', '11:55:00', 'Quinta', 'Matemática', '----'),
(633, 1, 32, '13:00:00', '13:50:00', 'Quinta', 'Matemática', '----'),
(634, 1, 32, '13:50:00', '14:40:00', 'Quinta', 'PDTCC', 'Arno'),
(635, 1, 32, '14:40:00', '15:30:00', 'Quinta', 'PDTCC', 'Arno'),
(636, 1, 32, '15:45:00', '16:35:00', 'Quinta', 'História', 'Marlon'),
(637, 1, 32, '08:20:00', '09:10:00', 'Sexta', 'Química', 'Erick'),
(638, 1, 32, '09:10:00', '10:00:00', 'Sexta', 'Química', 'Erick'),
(639, 1, 32, '10:15:00', '11:05:00', 'Sexta', 'GPM', 'Leandro Predroza'),
(640, 1, 32, '11:05:00', '11:55:00', 'Sexta', 'GP II', 'Gleicy'),
(641, 1, 32, '13:00:00', '13:50:00', 'Sexta', 'GP II', 'Gleicy'),
(642, 1, 32, '13:50:00', '14:40:00', 'Sexta', 'GP II', 'Gleicy'),
(643, 1, 33, '19:00:00', '20:53:00', 'Segunda', 'EEM', 'Carlos Xavier'),
(644, 1, 33, '21:08:00', '23:01:00', 'Segunda', 'CFE', 'Enyton'),
(645, 1, 33, '19:00:00', '20:53:00', 'Terça', 'PE', 'Regina Donaire'),
(646, 1, 33, '21:08:00', '23:01:00', 'Terça', 'ECO', '----'),
(647, 1, 33, '19:00:00', '20:53:00', 'Quarta', 'CFE', 'Enyton'),
(648, 1, 33, '21:08:00', '23:01:00', 'Quarta', 'PRDP', 'Cleonice'),
(649, 1, 33, '19:00:00', '20:53:00', 'Quinta', 'PRA', 'Diego'),
(650, 1, 33, '21:08:00', '23:01:00', 'Quinta', 'AI', 'Karina'),
(651, 1, 33, '19:00:00', '20:53:00', 'Sexta', 'EDAM', 'Amanda'),
(652, 1, 33, '21:08:00', '23:01:00', 'Sexta', 'LTT', 'Jose Acacio');

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
(1, '15:30:00', '2020-10-08', 'Reunião de pais da turma 3 ano Etim Informáica, a professora Ivonete conduzirá a reunião', 'Reunião de pais e mestres', '2020-09-01', 18, 1),
(2, '12:30:00', '2020-10-23', 'Reunião de pais da turma 2 ano MTEC Recursos Humanos, o professor Elpidio conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-15', 18, 1),
(3, '12:30:00', '2020-10-23', 'Reunião de pais da turma 1 módulo do curso Técnico Administração, a professora Amanda conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-07', 18, 1),
(4, '16:35:00', '2020-11-01', 'Reunião de pais da turma 3 ano Etim administração, professora Silvana conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-16', 18, 1),
(5, '19:00:00', '2020-11-10', 'Reunião de pais da turma 1 módulo do curso Técnico Serviços Jurídicos, professor Francimar conduzirá a reunião', 'Reunião de pais e mestres', '2020-10-13', 18, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `num_sala` int(10) UNSIGNED NOT NULL,
  `nome_sala` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
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
(1, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo VIP - Virtual Increased Plan; Curso: 3 ano Etim Informática.\r\nIntegrantes: Christopher Pitter, Gustavo Lopes, Isabele Vallim, Izabella Rodrigues e João Victor Galdino.', 'Apresentação de TCC', '2020-09-01', 19, 1),
(2, '09:00:00', '2020-11-19', 'Apresenação de TCC do grupo Mulheres na Prisão; Curso: 3 ano Etim Administração.\r\nIntegrantes: Maria joaquina, Bruno Santos e Antônia Pereira.', 'Apresentação de TCC', '2020-10-30', 20, 1),
(3, '14:00:00', '2020-11-09', 'Apresentação de TCC do grupo Adoção nos Dias de Hoje; Curso: 3 ano Etim Administração.\r\nIntegrantes: Pedro Souza, Henrique Alves, Beijamin Martins.', 'Apresentação de TCC', '2020-10-29', 19, 1),
(4, '15:30:00', '2020-11-18', 'Apresentação de TCC do grupo Novas estratégias de processos seletivos; Curso: 3 ano Etim Administração.\r\nIntegrantes: Mariane Barbosa, Cibele Silva e Lucas Garcia.', 'Apresentação de TCC', '2020-10-18', 20, 1),
(5, '13:00:00', '2020-10-30', 'Apresentação de TCC do grupo Meio Ambiente; Curso: 3 ano Etim Informática.\r\nIntegrantes: Pedro Henrique, João Pedro e Juan de Matos.', 'Apresentação de TCC', '2020-09-09', 20, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `cod_turma` int(11) NOT NULL,
  `serie` varchar(30) COLLATE utf8_bin NOT NULL,
  `num_sala` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `serie`, `num_sala`, `cod_curso`) VALUES
(1, '3 ano B', 2, 1),
(2, '2 ano A', 15, 2),
(3, '3 ano A', 9, 4),
(4, '1 ano A', 15, 3),
(5, '3 ano c', 6, 5),
(6, '1 ano A', 6, 9),
(7, '2 ano A', 16, 6),
(8, '3 ano A', 16, 3),
(9, '2 ano A', 14, 12),
(10, '3 ano B', 14, 10),
(11, '1 ano A', 13, 6),
(12, '2 ano B', 13, 10),
(13, '1 ano A', 12, 2),
(14, '3 ano B', 12, 7),
(15, '1 ano A', 11, 12),
(16, '2 ano B', 11, 7),
(17, '3 ano A', 10, 11),
(18, '1 ano B', 10, 10),
(19, '1 ano B', 9, 7),
(20, '2 ano A', 8, 3),
(21, '1 ano A', 7, 8),
(22, '3 ano A', 5, 5),
(23, '1 ano B', 5, 12),
(24, '3 ano B', 5, 5),
(25, '2 ano A', 4, 5),
(26, '2 ano A', 4, 9),
(27, '2 ano C', 4, 5),
(28, '1 ano A', 3, 5),
(29, '2 ano B', 3, 12),
(30, '2 ano B', 3, 5),
(31, '1 ano C', 2, 5),
(32, '3 ano A', 1, 1),
(33, '1 ano B', 1, 5);

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
  MODIFY `cod_curso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `horario_aula`
--
ALTER TABLE `horario_aula`
  MODIFY `cod_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;
--
-- AUTO_INCREMENT for table `reunioes`
--
ALTER TABLE `reunioes`
  MODIFY `cod_reuniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `num_sala` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tcc`
--
ALTER TABLE `tcc`
  MODIFY `cod_tcc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
