-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2017 at 04:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productionLn`
--

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `telephone2` varchar(10) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `RFC` varchar(20) NOT NULL,
  `mandated` varchar(30) DEFAULT NULL,
  `status` enum('active','debt','inactive') NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='nombre de las empresas que tengo registradas' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `departaments`
--

CREATE TABLE `departaments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `company_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='departamentos dentro de la compañía, ej. dirección, diseño, impresión' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `departament_id` int(11) UNSIGNED NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='puesto de trabajo de cada trabajador, ej. auxiliar de impresión' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `Payments`
--

CREATE TABLE `Payments` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_id` int(11) UNSIGNED NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `over` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `importe` decimal(20,0) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='almacena los pagos de cada compañía a mi empresa' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tipo de estado de cada trabajo, relacionado al punto donde se encuentra cada uno de ellos, (recepción, diseño, produccion)' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isActive` int(1) UNSIGNED NOT NULL,
  `role` enum('admin','director','empleado','SU') NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `gender` enum('Masculino','Femenino') NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `extension` varchar(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_dir` varchar(255) DEFAULT NULL,
  `job_id` int(11) UNSIGNED DEFAULT NULL,
  `departament_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='almacena los usuarios del sistema, que serán los empleados\n' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) UNSIGNED NOT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `status_id` int(11) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_dir` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='almacena los trabajos a realizar o pedidos de los clientes añade descripción del trabajo e imagen para posterior preview' ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departaments`
--
ALTER TABLE `departaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Payments`
--
ALTER TABLE `Payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companys`
--
ALTER TABLE `companys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departaments`
--
ALTER TABLE `departaments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Payments`
--
ALTER TABLE `Payments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
