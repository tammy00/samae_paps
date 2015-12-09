-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2015 às 20:45
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icomp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
`ID` int(11) NOT NULL,
  `matricula` int(8) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `RG` int(8) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `endereco` text,
  `bairro` varchar(100) DEFAULT NULL,
  `telResid` varchar(15) DEFAULT NULL,
  `telCel` varchar(15) DEFAULT NULL,
  `telComerc` varchar(15) DEFAULT NULL,
  `IDCurso` int(11) NOT NULL,
  `IDDisc` int(11) NOT NULL,
  `banco` varchar(150) NOT NULL,
  `agencia` varchar(150) NOT NULL,
  `conta` varchar(150) NOT NULL,
  `monitor` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID`, `matricula`, `nome`, `email`, `RG`, `CPF`, `endereco`, `bairro`, `telResid`, `telCel`, `telComerc`, `IDCurso`, `IDDisc`, `banco`, `agencia`, `conta`, `monitor`) VALUES
(3, 21201463, 'Tammy Hikari', 'tammyhikari@gmail.com', 24282278, '02806338239', NULL, NULL, NULL, NULL, NULL, 2, 1722, '', '', '', 1),
(4, 20902175, 'Kalley Correa', 'kalleycorrea@gmail.com', 16740823, '88309495234', NULL, NULL, NULL, NULL, NULL, 2, 1666, '341', '0686', '64684-5', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`ID` int(11) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`ID`, `sigla`, `nome`) VALUES
(1, 'IE08', 'Ciência da Computação'),
(2, 'IE15', 'Sistemas de Informação'),
(3, 'FT05', 'Engenharia da Computação'),
(4, 'IB14', NULL),
(5, 'IB05', NULL),
(6, 'IE16', NULL),
(7, 'IH25', NULL),
(8, 'FG03', NULL),
(9, 'IE01', NULL),
(10, 'IE13', NULL),
(11, 'IE10', NULL),
(12, 'IE03', NULL),
(13, 'FT02', NULL),
(14, 'FT02-ET', NULL),
(15, 'FT02-T', NULL),
(16, 'FT02-E', NULL),
(17, 'IE14', NULL),
(18, 'IE03-B', NULL),
(19, 'IE03-L', NULL),
(20, 'IE07', NULL),
(21, 'FT09', NULL),
(22, 'FT01', NULL),
(23, 'PA235', NULL),
(24, 'IH01', NULL),
(25, 'FA06', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
`id` int(11) NOT NULL,
  `codDisciplina` varchar(10) CHARACTER SET utf8 NOT NULL,
  `nomeDisciplina` varchar(150) CHARACTER SET utf8 NOT NULL,
  `cargaHoraria` int(3) NOT NULL,
  `creditos` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1723 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `codDisciplina`, `nomeDisciplina`, `cargaHoraria`, `creditos`) VALUES
(1665, 'ICC001', 'INTRODUÇÃO A COMPUTAÇÃO', 90, 5),
(1666, 'ICC002', 'ALGORITMOS E ESTRUTURA DE DADOS I', 90, 5),
(1667, 'ICC003', 'ALGORITMOS E ESTRUTURAS DE DADOS II', 90, 5),
(1668, 'ICC005', 'TÉCNICAS DE PROGRAMAÇÃO', 90, 4),
(1669, 'ICC011', 'LABORATÓRIO DE PROGRAMAÇÃO A', 60, 2),
(1670, 'ICC013', 'LABORATÓRIO DE PROGRAMAÇÃO C', 60, 2),
(1671, 'ICC030', 'TÓPICOS ESPECIAIS EM PROGRAMAÇÃO I', 60, 4),
(1672, 'ICC040', 'LINGUAGENS FORMAIS E AUTÔMATOS', 60, 4),
(1673, 'ICC041', 'INTRODUÇÃO À TEORIA DOS GRAFOS', 60, 4),
(1674, 'ICC043', 'PARADIGMA DE LINGUAGENS DE PROGRAMAÇÃO', 60, 4),
(1675, 'ICC044', 'COMPILADORES', 60, 4),
(1676, 'ICC060', 'SISTEMAS LÓGICOS', 60, 4),
(1677, 'ICC062', 'ARQUITETURA DE COMPUTADORES', 60, 4),
(1678, 'ICC064', 'SISTEMAS DE COMPUTAÇÃO', 90, 5),
(1679, 'ICC103', 'EMPREENDEDORISMO EM INFORMÁTICA', 60, 4),
(1680, 'ICC120', 'MATEMÁTICA DISCRETA', 60, 4),
(1681, 'ICC150', 'TRABALHO DE CONCLUSÃO DE CURSO', 150, 5),
(1682, 'ICC151', 'ESTÁGIO SUPERVISIONADO', 180, 6),
(1683, 'ICC181', 'TÓPICOS ESPECIAIS EM CIÊNCIA DA COMPUTAÇÃO II', 60, 4),
(1684, 'ICC182', 'TÓPICOS AVANÇADOS EM CIÊNCIA DA COMPUTAÇÃO I', 60, 4),
(1685, 'ICC200', 'BANCO DE DADOS I', 60, 4),
(1686, 'ICC205', 'INTRODUÇÃO A BANCO DE DADOS', 60, 4),
(1687, 'ICC210', 'PRÁTICA EM BANCO DE DADOS', 60, 2),
(1688, 'ICC222', 'TÓPICOS EM RECUPERAÇÃO DE INFORMAÇÃO', 60, 4),
(1689, 'ICC252', 'SISTEMAS COLABORATIVOS MÓVEIS', 60, 4),
(1690, 'ICC270', 'TÓPICOS ESPECIAIS EM INTELIGÊNCIA ARTIFICIAL', 60, 4),
(1691, 'ICC271', 'TÓPICOS AVANÇADOS EM INTELIGÊNCIA ARTIFICIAL', 60, 4),
(1692, 'ICC300', 'INTRODUÇÃO ÀS REDES DE COMPUTADORES', 90, 5),
(1693, 'ICC320', 'TÓPICOS ESPECIAIS EM REDES DE COMPUTADORES', 60, 4),
(1694, 'ICC350', 'INTRODUÇÃO AOS SISTEMAS EMBARCADOS', 60, 4),
(1695, 'ICC400', 'INTRODUÇÃO À ENGENHARIA DE SOFTWARE', 90, 5),
(1696, 'ICC401', 'ANÁLISE E PROJETO DE SISTEMAS', 90, 5),
(1697, 'ICC404', 'GERÊNCIA DE PROJETOS', 60, 4),
(1698, 'ICC406', 'INTERAÇÃO HUMANO-COMPUTADOR', 60, 4),
(1699, 'ICC410', 'PRÁTICA DE ANÁLISE E PROJETO DE SISTEMAS', 60, 2),
(1700, 'ICC450', 'INTRODUÇÃO À COMPUTAÇÃO GRÁFICA', 60, 4),
(1701, 'ICC520', 'TÓPICOS ESPECIAIS EM OTIMIZAÇÃO', 60, 4),
(1702, 'ICC900', 'INFORMÁTICA INSTRUMENTAL', 60, 3),
(1703, 'ICC901', 'INTRODUÇÃO À PROGRAMAÇÃO DE COMPUTADORES', 60, 3),
(1704, 'ICC903', 'GERAÇÃO E USO DE BANCO DE DADOS', 45, 3),
(1705, 'IEC010', 'MATEMÁTICA DISCRETA', 60, 4),
(1706, 'IEC011', 'INTRODUÇÃO À COMPUTAÇÃO', 90, 5),
(1707, 'IEC012', 'ALGORITMOS E ESTRUTURAS DE DADOS  I', 90, 5),
(1708, 'IEC013', 'ALGORITMOS E ESTRUTURAS DE  DADOS II', 90, 5),
(1709, 'IEC016', 'MODELAGEM  E  PROJETO  DE  SISTEMAS', 105, 6),
(1710, 'IEC019', 'PROJETO  FINAL  II', 150, 5),
(1711, 'IEC026', 'INFORMÁTICA APLICADA A CIÊNCIAS AGRÁRIAS', 60, 3),
(1712, 'IEC028', 'COMPILADORES', 75, 4),
(1713, 'IEC048', 'GERAÇÃO E USO DE BANCO DE DADOS', 45, 3),
(1714, 'IEC081', 'INTRODUÇÃO A CIÊNCIA DOS COMPUTADORES', 60, 4),
(1715, 'IEC082', 'CALCULO NUMÉRICO', 60, 4),
(1716, 'IEC087', 'LINGUAGENS FORMAIS E AUTOMATA', 60, 4),
(1717, 'IEC089', 'ARQUITETURA DE COMPUTADORES', 60, 4),
(1718, 'IEC092', 'INTELIGENCIA ARTIFICIAL E EDUCACAO', 60, 4),
(1719, 'IEC111', 'INFORMÁTICA INSTRUMENTAL', 60, 3),
(1720, 'IEC681', 'BANCO DE DADOS I', 75, 4),
(1721, 'IEC782', 'PROJETO FINAL', 150, 5),
(1722, 'IEC905', 'INFORMATICA APLICADA A ECONOMIA', 60, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_periodo`
--

CREATE TABLE IF NOT EXISTS `disciplina_periodo` (
`id` int(11) NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  `codTurma` varchar(10) CHARACTER SET utf8 NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  `nomeUnidade` varchar(100) CHARACTER SET utf8 NOT NULL,
  `qtdVagas` int(4) NOT NULL,
  `numPeriodo` tinyint(1) NOT NULL,
  `anoPeriodo` int(4) NOT NULL,
  `dataInicioPeriodo` date DEFAULT NULL,
  `dataFimPeriodo` date DEFAULT NULL,
  `usaLaboratorio` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Extraindo dados da tabela `disciplina_periodo`
--

INSERT INTO `disciplina_periodo` (`id`, `idDisciplina`, `codTurma`, `idCurso`, `idProfessor`, `nomeUnidade`, `qtdVagas`, `numPeriodo`, `anoPeriodo`, `dataInicioPeriodo`, `dataFimPeriodo`, `usaLaboratorio`) VALUES
(69, 1665, '3', 2, 1, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', 0),
(70, 1666, 'CB01', 1, 2, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 25, 1, 2015, '2015-09-08', '2016-01-18', 0),
(71, 1666, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 5, 1, 2015, '2015-09-08', '2016-01-18', NULL),
(72, 1666, 'CB03', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 5, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(73, 1666, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 1, 2015, '2015-09-08', '2016-01-18', NULL),
(74, 1667, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 13, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(75, 1667, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 5, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(76, 1668, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(77, 1669, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(78, 1670, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(79, 1670, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(80, 1671, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(81, 1672, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(82, 1672, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 5, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(83, 1673, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(84, 1674, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(85, 1675, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(86, 1676, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 25, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(87, 1676, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 25, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(88, 1677, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(89, 1678, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(90, 1679, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(91, 1680, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(92, 1680, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(93, 1680, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(94, 1681, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, NULL, NULL, NULL),
(95, 1681, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, NULL, NULL, NULL),
(96, 1682, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, NULL, NULL, NULL),
(97, 1683, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(98, 1684, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(99, 1685, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(100, 1686, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 45, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(101, 1687, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 35, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(102, 1688, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(103, 1689, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(104, 1689, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(105, 1690, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(106, 1691, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(107, 1692, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(108, 1693, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(109, 1693, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 1, 2, 2015, NULL, NULL, NULL),
(110, 1693, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(111, 1694, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(112, 1695, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(113, 1696, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(114, 1697, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 35, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(115, 1698, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(116, 1698, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 35, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(117, 1699, '01', 2, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(118, 1700, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(119, 1701, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(120, 1702, '02', 4, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 42, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(121, 1702, '03', 5, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(122, 1702, '04', 5, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(123, 1703, 'MA01', 6, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(124, 1704, '6', 7, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(125, 1705, '03', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 4, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(126, 1705, '04', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 4, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(127, 1706, '11', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(128, 1707, '03', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 22, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(129, 1707, '04', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 22, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(130, 1708, '03', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 8, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(131, 1709, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(132, 1710, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, NULL, NULL, NULL),
(133, 1711, '01', 8, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 46, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(134, 1712, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(135, 1713, 'EB01', 9, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 50, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(136, 1714, 'FL01', 10, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 21, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(137, 1714, 'FL11', 11, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(138, 1714, 'FL501', 10, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(139, 1714, 'FL511', 11, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(140, 1714, '01', 12, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 1, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(141, 1714, '01A', 14, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(142, 1714, '01B', 15, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 22, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(143, 1714, '01C', 16, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 25, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(144, 1714, '02', 12, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 0, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(145, 1714, '03', 12, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 0, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(146, 1714, '04', 12, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 0, 2, 2015, NULL, NULL, NULL),
(147, 1715, 'FB01', 17, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(148, 1715, 'FB501', 17, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(149, 1715, 'MB01', 18, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 20, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(150, 1715, 'MB02', 18, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 5, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(151, 1715, 'ML01', 19, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(152, 1715, 'ML11', 20, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 60, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(153, 1715, '01', 21, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 46, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(154, 1715, '10', 22, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 60, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(155, 1715, '235', 23, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 60, 2, 2015, NULL, NULL, NULL),
(156, 1716, '02', 3, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 40, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(157, 1717, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(158, 1718, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 1, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(159, 1719, '05', 24, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 56, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(160, 1719, '6', 7, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 60, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(161, 1720, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 10, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(162, 1721, 'CB01', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 30, 2, 2015, NULL, NULL, NULL),
(163, 1722, '01', 25, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 60, 2, 2015, '2015-09-08', '2016-01-18', NULL),
(164, 1665, 'TESTE', 2, 3, 'ICOMP', 19, 2, 2015, NULL, NULL, 0),
(165, 1666, 'TESTE', 2, 4, 'ICOMP', 17, 1, 2015, NULL, NULL, 0),
(166, 1665, 'CB02', 1, NULL, 'COORD. ACADÊMICA DO INSTITUTO DE COMPUTAÇÃO', 15, 2, 2015, '2015-09-08', '2016-01-18', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitoria`
--

CREATE TABLE IF NOT EXISTS `monitoria` (
`ID` int(11) NOT NULL,
  `IDAluno` int(11) NOT NULL,
  `IDDisc` int(11) NOT NULL,
  `IDperiodoinscr` int(11) NOT NULL,
  `pathArqHistorico` varchar(250) CHARACTER SET utf8 NOT NULL,
  `status` int(11) DEFAULT NULL,
  `semestreConclusao` tinyint(1) NOT NULL,
  `anoConclusao` int(4) NOT NULL,
  `mediaFinal` float NOT NULL,
  `bolsa` tinyint(1) NOT NULL,
  `banco` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `agencia` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `conta` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `datacriacao` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `monitoria`
--

INSERT INTO `monitoria` (`ID`, `IDAluno`, `IDDisc`, `IDperiodoinscr`, `pathArqHistorico`, `status`, `semestreConclusao`, `anoConclusao`, `mediaFinal`, `bolsa`, `banco`, `agencia`, `conta`, `datacriacao`) VALUES
(16, 4, 69, 1, '20902175_20150912_202704.pdf', 0, 127, 1, 8, 1, '10', '20', '30', '2015-09-12 20:27:04'),
(17, 4, 76, 1, '20902175_20150912_202732.pdf', 0, 127, 2, 9, 0, '', '', '', '2015-09-12 20:27:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodoinscricao`
--

CREATE TABLE IF NOT EXISTS `periodoinscricao` (
`ID` int(11) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date NOT NULL,
  `periodo` tinyint(1) NOT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `periodoinscricao`
--

INSERT INTO `periodoinscricao` (`ID`, `dataInicio`, `dataFim`, `periodo`, `ano`) VALUES
(1, '2015-11-20', '2015-11-21', 2, 2015);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
`ID` int(11) NOT NULL,
  `Nome` varchar(120) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefone` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`ID`, `Nome`, `Email`, `Telefone`) VALUES
(1, 'ARILO CLÁUDIO DIAS NETO', 'arilo@icomp.ufam.edu.br', 912334567),
(2, 'EDLENO SILVA DE MOURA', 'edleno@icomp.ufam.edu.br', 911234564),
(3, 'CÉSAR AUGUSTO VIANA MELO', 'cesar@icomp.ufam.edu.br', 91234142),
(4, 'EDSON NASCIMENTO SILVA JÚNIOR', 'edson@icomp.ufam.edu.br', 987667887),
(5, 'ELAINE HARADA TEIXEIRA DE OLIVEIRA', 'elaine@icomp.ufam.edu.br', 35555555);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`ID` int(11) NOT NULL,
  `login` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `senha` text CHARACTER SET latin1 COLLATE latin1_bin,
  `nome` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `auth_key` text CHARACTER SET latin1 COLLATE latin1_bin,
  `password_reset_token` text CHARACTER SET latin1 COLLATE latin1_bin,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `login`, `senha`, `nome`, `email`, `auth_key`, `password_reset_token`, `perfil`) VALUES
(5, '02806338239', 'tammy', 'Tammy Hikari', 'tammyhikari@gmail.com', NULL, NULL, 1),
(6, '88309495234', 'kalley', 'Kalley Correa', 'kalleycorrea@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_disciplina_monitoria`
--
CREATE TABLE IF NOT EXISTS `view_disciplina_monitoria` (
`id` int(11)
,`nomeDisciplina` varchar(150)
,`nomeCurso` varchar(50)
,`codTurma` varchar(10)
,`nomeProfessor` varchar(120)
,`numPeriodo` tinyint(1)
,`anoPeriodo` int(4)
);
-- --------------------------------------------------------

--
-- Structure for view `view_disciplina_monitoria`
--
DROP TABLE IF EXISTS `view_disciplina_monitoria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_disciplina_monitoria` AS select `a`.`id` AS `id`,`b`.`nomeDisciplina` AS `nomeDisciplina`,`c`.`nome` AS `nomeCurso`,`a`.`codTurma` AS `codTurma`,`d`.`Nome` AS `nomeProfessor`,`a`.`numPeriodo` AS `numPeriodo`,`a`.`anoPeriodo` AS `anoPeriodo` from (((`disciplina_periodo` `a` join `disciplina` `b` on((`a`.`idDisciplina` = `b`.`id`))) left join `curso` `c` on((`a`.`idCurso` = `c`.`ID`))) left join `professor` `d` on((`a`.`idProfessor` = `d`.`ID`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
 ADD PRIMARY KEY (`ID`), ADD KEY `matricula` (`matricula`), ADD KEY `IDCurso` (`IDCurso`), ADD KEY `IDDisc` (`IDDisc`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `codDisciplina` (`codDisciplina`);

--
-- Indexes for table `disciplina_periodo`
--
ALTER TABLE `disciplina_periodo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `idDisciplinaPeriodo` (`idDisciplina`,`numPeriodo`,`anoPeriodo`,`codTurma`), ADD KEY `fk_disciplina_periodo_idDisciplina` (`idDisciplina`), ADD KEY `fk_disciplina_periodo_idCurso` (`idCurso`), ADD KEY `fk_disciplina_periodo_idProfessor` (`idProfessor`);

--
-- Indexes for table `monitoria`
--
ALTER TABLE `monitoria`
 ADD PRIMARY KEY (`ID`), ADD KEY `IDDisc` (`IDDisc`) USING BTREE, ADD KEY `IDAluno` (`IDAluno`), ADD KEY `IDperiodoinscr` (`IDperiodoinscr`);

--
-- Indexes for table `periodoinscricao`
--
ALTER TABLE `periodoinscricao`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1723;
--
-- AUTO_INCREMENT for table `disciplina_periodo`
--
ALTER TABLE `disciplina_periodo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `monitoria`
--
ALTER TABLE `monitoria`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `periodoinscricao`
--
ALTER TABLE `periodoinscricao`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
ADD CONSTRAINT `idcurso_fk_aluno` FOREIGN KEY (`IDCurso`) REFERENCES `curso` (`ID`),
ADD CONSTRAINT `iddisc_fk_aluno` FOREIGN KEY (`IDDisc`) REFERENCES `disciplina` (`id`);

--
-- Limitadores para a tabela `disciplina_periodo`
--
ALTER TABLE `disciplina_periodo`
ADD CONSTRAINT `disciplina_periodo_ibfk_1` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`id`),
ADD CONSTRAINT `disciplina_periodo_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`ID`),
ADD CONSTRAINT `disciplina_periodo_ibfk_3` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`ID`);

--
-- Limitadores para a tabela `monitoria`
--
ALTER TABLE `monitoria`
ADD CONSTRAINT `monitoria_ibfk_1` FOREIGN KEY (`IDDisc`) REFERENCES `disciplina_periodo` (`id`),
ADD CONSTRAINT `monitoria_ibfk_3` FOREIGN KEY (`IDperiodoinscr`) REFERENCES `periodoinscricao` (`ID`),
ADD CONSTRAINT `monitoria_ibfk_4` FOREIGN KEY (`IDAluno`) REFERENCES `aluno` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
