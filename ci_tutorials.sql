-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Set-2017 às 21:36
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_tutorials`
--
CREATE DATABASE IF NOT EXISTS `ci_tutorials` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_tutorials`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `articales`
--
-- Criação: 08-Set-2017 às 14:17
--

DROP TABLE IF EXISTS `articales`;
CREATE TABLE `articales` (
  `id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_datetime` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `articales`:
--

--
-- Extraindo dados da tabela `articales`
--

INSERT INTO `articales` (`id`, `user_id`, `title`, `body`, `created_datetime`, `status`) VALUES
(8, 2, 'lorem ipsu', 'dsfdsfdfdf sdf dffd sdsdsf dsfds sfdsf dsfdsf dsf dsfdsf ds', '2016-11-11 20:09:24', '1'),
(19, 1, '2016-2017 Academic Time Table', 'dsfdsfds', '2016-11-12 14:17:42', '1'),
(20, 1, 'sdfdsfdfs fsds dsf dsfsdfdsf sdfdsf', 'sdfdsfds', '2016-11-12 14:17:46', '1'),
(21, 1, 'Learning Support Assistant', 'f fdsfdssdf dsf dsf dsf dsf ds fds fds', '2016-11-12 14:17:52', '1'),
(22, 1, 'Learning Support Assistant', 'f fdsfdssdf dsf dsf dsf dsf ds fds fds', '2016-11-12 14:17:52', '1'),
(23, 1, 'dfg', 's dfdsfdsfgfh gfhfsgfdgfd gf', '2016-11-12 14:18:00', '1'),
(24, 1, 'fdg fdgfdgfdg', 'fg fdgfgfdg fdgfd gfd gfdg fdg fd fd', '2016-11-12 14:18:05', '1'),
(25, 1, 'fdg fdg', 'fd gfdgfdgfdgfdg fdg', '2016-11-12 14:18:09', '1'),
(26, 1, 'ererer e cvcgffd', 'fdg fdgfdg dfrtyhrtyrytre ert ret retretret r', '2016-11-12 14:18:16', '1'),
(27, 1, 'dfd', 'fsgf', '2016-11-12 14:40:28', '1'),
(28, 1, 'fdg', 'dfg', '2016-11-12 14:40:31', '1'),
(29, 1, 'fdg', 'dfgf', '2016-11-12 14:40:34', '1'),
(30, 1, 'fd', 'dfgf', '2016-11-12 14:40:37', '1'),
(31, 1, 'fdg', 'dfg', '2016-11-12 14:40:41', '1'),
(32, 1, 'rg', 'rgr', '2016-11-12 14:40:44', '1'),
(33, 1, 'fg', 'fgd', '2016-11-12 14:40:47', '1'),
(34, 1, 'fdg', 'dfg', '2016-11-12 14:40:51', '1'),
(35, 1, 'aamir', 'khan', '2016-11-14 10:42:20', '1'),
(36, 4, 'fasgfgfdgfdgfd', 'ggfdsgdfsgdfgdfg', '2017-09-08 18:53:03', '1'),
(37, 4, 'gfdgdfsgdfsgdfgdsfg', 'gdfgsdfgsdfgdfsgdfsgdfsgsfdgsdfgsdfgdsfgfdgfdg', '2017-09-08 18:53:10', '1'),
(38, 4, '123456789', '123456789123456789123456789123456789123456789123456789123456789123456789', '2017-09-08 19:05:34', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--
-- Criação: 08-Set-2017 às 14:36
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `users`:
--

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `uname`, `password`, `fname`, `lname`) VALUES
(1, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aamir', 'khan'),
(2, '', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'visitor', 'blog'),
(3, 'felipe.alima@gmail.com', 'felipe', '21232f297a57a5a743894a0e4a801fc3', 'felipe', 'felipe'),
(4, 'teste@teste.com', 'teste', '21232f297a57a5a743894a0e4a801fc3', 'teste', 'teste'),
(5, 'ola@ola.com', 'ola', '21232f297a57a5a743894a0e4a801fc3', 'ola', 'ola'),
(7, 'lizonete@gmail.com', 'lizonete', '21232f297a57a5a743894a0e4a801fc3', 'lizonete', 'lizonete'),
(8, 'usuario@usuario.com', 'usuario', '21232f297a57a5a743894a0e4a801fc3', 'usuario', 'usuario'),
(9, 'copy@copy.com', 'copy', '21232f297a57a5a743894a0e4a801fc3', 'copy', 'copy'),
(10, 'juh@juh.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', ''),
(11, 'teste@teste.com.br', 'testeteste', 'e10adc3949ba59abbe56e057f20f883e', 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articales`
--
ALTER TABLE `articales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articales`
--
ALTER TABLE `articales`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table articales
--
-- Error reading data: (#1100 - Tabela 'pma__column_info' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__table_uiprefs' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__tracking' não foi travada com LOCK TABLES)

--
-- Metadata for table users
--
-- Error reading data: (#1100 - Tabela 'pma__column_info' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__table_uiprefs' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__tracking' não foi travada com LOCK TABLES)

--
-- Metadata for database ci_tutorials
--
-- Error reading data: (#1100 - Tabela 'pma__bookmark' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__relation' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__savedsearches' não foi travada com LOCK TABLES)
-- Error reading data: (#1100 - Tabela 'pma__central_columns' não foi travada com LOCK TABLES)
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
