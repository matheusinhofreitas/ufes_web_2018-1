-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 20:49
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monkey`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(10) NOT NULL,
  `idArtista` int(10) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `local` varchar(1000) DEFAULT NULL,
  `evento` varchar(1000) NOT NULL,
  `facebook` varchar(1000) DEFAULT NULL,
  `instagram` varchar(1000) DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`idAgenda`, `idArtista`, `data`, `hora`, `local`, `evento`, `facebook`, `instagram`, `foto`) VALUES
(15, 18, '2018-05-18', '21:00', 'Local', 'Evento 2', '', '', 'public\\fotos\\festas.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `idArtista` int(10) NOT NULL,
  `nome` varchar(5000) NOT NULL,
  `nomeArtistico` varchar(5000) NOT NULL,
  `descricao` varchar(5000) DEFAULT NULL,
  `bio` varchar(5000) DEFAULT NULL,
  `facebook` varchar(5000) DEFAULT NULL,
  `instagram` varchar(5000) DEFAULT NULL,
  `soundcloud` varchar(5000) DEFAULT NULL,
  `youtube` varchar(5000) DEFAULT NULL,
  `site` varchar(5000) DEFAULT NULL,
  `foto1` varchar(5000) DEFAULT NULL,
  `foto2` varchar(5000) DEFAULT NULL,
  `foto3` varchar(5000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`idArtista`, `nome`, `nomeArtistico`, `descricao`, `bio`, `facebook`, `instagram`, `soundcloud`, `youtube`, `site`, `foto1`, `foto2`, `foto3`) VALUES
(15, 'Matheus', 'Matheus', 'Entre com a descriÃ§Ã£o do projeto                                                                                                                                                                                                                                                                                                                                                ', 'Entre com a descriÃ§Ã£o do projeto                                                                                                                                                                                                                                                                                                                                                   ', 'facebook', 'instagram', 'Soundcoud', 'youtube', 'site', 'public\\fotos\\17758577_1253207268066034_534758404709894478_o.jpg', 'public\\fotos\\25660052_1338998799544157_1389543196666894133_n.jpg', 'public\\fotos\\29356882_1320054661429183_4062500954153418752_o.jpg'),
(18, 'Matheus 2 ', 'Matheus 2 ', 'Entre com a descriÃ§Ã£o do projeto                                                                                                                                                                                                                                                            ', 'Entre com a descriÃ§Ã£o do projeto                                                                                                                                                                                                                                                               ', 'facebook', 'instagram', 'Soundcoud', 'youtube', 'site', 'public\\fotos\\17758577_1253207268066034_534758404709894478_o.jpg', 'public\\fotos\\25660052_1338998799544157_1389543196666894133_n.jpg', 'public\\fotos\\29356882_1320054661429183_4062500954153418752_o.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `email`) VALUES
(2, 'matheus', '6450cff7dbc6ca2347add18b15e5f4b6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`);

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idArtista`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `idArtista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
