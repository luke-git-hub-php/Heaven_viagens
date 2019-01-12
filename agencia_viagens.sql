-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2017 às 04:34
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencia_viagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome`, `login`, `senha`) VALUES
(1, 'angelo', 'angelo', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `data_saida` date NOT NULL,
  `data_volta` date NOT NULL,
  `Valor_passagem` int(11) NOT NULL,
  `historico_viagens` int(11) NOT NULL,
  `estrelas_hotel` int(11) NOT NULL,
  `numero_acompanhantes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `cpf`, `email`, `cidade`, `estado`, `destino`, `data_saida`, `data_volta`, `Valor_passagem`, `historico_viagens`, `estrelas_hotel`, `numero_acompanhantes`) VALUES
(10, 'Angelo', '123.456.789-11', 'angelo@gmail.com', 'Fortaleza', 'CE', 'Dubai', '2017-06-09', '2017-06-18', 1500, 4, 4, 3),
(11, 'Edson', '111.111.111-11', 'felipe@gmail.com', 'Fortaleza', 'AC', 'Pacatuba', '1111-11-11', '2222-02-22', 2222, 4, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id_contato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id_contato`, `id_cliente`, `telefone`, `celular`) VALUES
(11, 11, '(85)86667-7640', '(85)86666-6666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pacote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nota` varchar(10) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `id_pacote` int(11) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `qnt_dias` int(11) NOT NULL,
  `transporte` varchar(15) NOT NULL,
  `translado` varchar(100) NOT NULL,
  `acompanhantes` int(10) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_pacote` (`id_pacote`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`id_pacote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id_pacote` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `historico_ibfk_2` FOREIGN KEY (`id_pacote`) REFERENCES `pacotes` (`id_pacote`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
