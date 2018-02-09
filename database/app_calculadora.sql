-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 09-Fev-2018 às 17:38
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_calculadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacoes`
--

CREATE TABLE `operacoes` (
  `ope_id` int(11) NOT NULL,
  `ope_data` date NOT NULL,
  `ope_calculo` varchar(255) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `operacoes`
--

INSERT INTO `operacoes` (`ope_id`, `ope_data`, `ope_calculo`, `usu_id`) VALUES
(1, '2018-02-09', '9x5', 16),
(2, '2018-02-09', '85+3', 16),
(3, '2018-02-09', '27+1', 1),
(4, '2018-02-09', '2,5+6,3', 1),
(5, '2018-02-09', '89÷6', 1),
(7, '2018-02-09', 'raiz_quadrada:43046721', 1),
(8, '2018-02-09', '100-10%', 1),
(9, '2018-02-09', '85*25%', 1),
(10, '2018-02-09', '500x500', 1),
(11, '2018-02-09', 'fsfsd', 1),
(12, '2018-02-09', 'f', 1),
(13, '2018-02-09', '100-30%', 1),
(14, '2018-02-09', '(50+50)-30%', 1),
(15, '2018-02-09', '2+2', 1),
(16, '2018-02-09', '2x5', 1),
(17, '2018-02-09', 'raiz_quadrada:6561', 1),
(18, '2018-02-09', 'raiz_quadrada:9', 1),
(19, '2018-02-09', 'raiz_quadrada:25', 1),
(20, '2018-02-06', '10÷8', 1),
(21, '2018-02-07', '8÷0', 1),
(22, '2018-02-08', '25+100%', 1),
(23, '2018-02-09', 'raiz_quadrada:43046721', 1),
(24, '2018-01-09', '5x5', 1),
(25, '2018-01-08', '-25÷3', 1),
(26, '2018-01-07', '3÷8+2%', 1),
(27, '2018-02-09', '33312/0', 1),
(28, '2018-02-09', '8+8', 19),
(29, '2018-02-09', '16x9', 19),
(30, '2018-02-09', '144+6', 19),
(31, '2018-02-09', '150-6', 19),
(32, '2018-02-09', '144+10%', 19),
(33, '2018-02-09', '158,4-3,5%', 19),
(34, '2018-02-09', 'raiz_quadrada:43046721', 19),
(35, '2018-02-09', '(25x25)+2', 19),
(36, '2018-02-09', '89+2', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(255) NOT NULL,
  `usu_login` varchar(255) NOT NULL,
  `usu_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nome`, `usu_login`, `usu_senha`) VALUES
(1, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'Ana Paula', 'anapaula', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(18, 'Vitor Borges', 'vitor', '202cb962ac59075b964b07152d234b70'),
(19, 'Junio Aparecido de Souza', 'junio', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`ope_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_login` (`usu_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `ope_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
