-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2021 às 06:47
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bus_tour`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `foto`, `nome`, `cnpj`, `email`, `senha`) VALUES
(1, '1001.svg', '1001', '000', '1001@t', '$2y$10$f/w5Lkf2h6jsYfXMr7QSnOGTambMLsUxrXne05AZ.XLZdhb2adima'),
(2, 'acailandia.svg', 'Acailandia', '001', 'acailandia@t', '$2y$10$rfI.39zGCijloI.XektzAe2DKkV/rEAmjTFwOytHRbPuDI069.iGC'),
(3, 'aguia-branca.svg', 'Aguia branca', '002', 'aguia-branca@t', '$2y$10$zyHFgwuK5Py2ZkcCZrXoEOit.VqmyjH/w4oOpE4syvp/1s2TF7m2S'),
(4, 'aguiar.svg', 'Aguiar', '003', 'aguiar@t', '$2y$10$LJa8adzsTuL5ArwpzTDuPe/X.PuAnvt7lPyRgBxWWhEFL1WzS.1C2'),
(5, 'alfa-luz.svg', 'Alfa luz', '004', 'alfa-luz@t', '$2y$10$cjMborTxqwuFeX5ELdlFKeXsX3VQZyULB2ovlRLo7/izGy1arEzO.'),
(11, 'amarelinho.svg', 'Amarelinho', '005', 'amarelinho@t', '$2y$10$8Vum3kvqqjnpozQaaz5UQOP/EHl//BHRMWMlEMKXdJPwGMd1LBRce'),
(12, 'andorinha.svg', 'Andorinha', '006', 'andorinha@t', '$2y$10$mt3UI3kdRdurYrQEyhKzZuiNLdd/h8CaOfucIDxk5puyzZ9.Nq7su'),
(13, 'planalto.svg', 'Planalto', '007', 'planalto@t', '$2y$10$D8tVLLSriBR6TWEChSFNGOTXXffw9QAs79MunWZOgs2fGL5zhC5Ty'),
(14, 'real-transportes.svg', 'Real Transportes', '008', 'real-transportes@t', '$2y$10$dPHfwvRWs56BlGJhPfFROeYGlXn2cbpsyN0Z8V4mkqRhFXQCjWugC'),
(15, 'teresopolis.svg', 'Teresopolis', '009', 'teresopolis@t', '$2y$10$XRd4bb.OwDPIMuKuXkE4FOH0pp2kvOw9OQRCyRSs8yLqmeBTcfkiy'),
(16, 'viasul.svg', 'ViaSul', '010', 'viasul@t', '$2y$10$qEdhOqkLdLTTijPcxdI/RO0Exc7Y01wYX.NVN2iyb/9ZacBnc4Wka'),
(17, 'penha.svg', 'Penha', '011', 'penha@t', '$2y$10$5NozZeBZegfPISAuJPx4Ne2FnHKDGSDDGpzTT9gxiTjKri1o9mJOq'),
(18, 'lirabus.svg', 'LiraBus', '012', 'lirabus@t', '$2y$10$dyC8IW9zMiWVpx3d7fvGJupG36mRMmHnlbmE1gWavDh3pLhlyY3iS'),
(19, 'vb-transportes.svg', 'vb-transportes', '013', 'vb-transportes@t', '$2y$10$ZlY8cwNE6fvoBhr0KF28yOX1h.n8h3i5uPm.WslvG4RoZdTISqX.e'),
(20, 'sao-paulo-sao-pedro.svg', 'São Paulo São Pedro', '014', 'sao-paulo-sao-pedro@t', '$2y$10$NJ54jqQF9pO6zABOBQwrQ.7gw.TWmHelgzDoEWMpZjF7a5.KWAJCq'),
(21, 'planeta.svg', 'Planeta', '015', 'planeta@t', '$2y$10$kxp7ID4WYlkGER04wNa7ceg16aAY.HtixG/mcz5VQWoP.BW5Vxuwu'),
(22, 'reunidas.svg', 'Reunidas', '017', 'reunidas@t', '$2y$10$K8XYIx2EnuyHyC0V2iXxKext17QfVuAtMAcOvooexmPML07Pq9Ms6'),
(23, 'expresso-sao-luiz.svg', 'Expresso São Luiz', '016', 'expresso-sao-luiz@t', '$2y$10$e2SIlty4oDVFNTZf34IBMuwtX8yltQB/5PzqQ9dPdQwEddRYVP/Pi'),
(24, 'ultra.svg', 'Ultra', '018', 'ultra@t', '$2y$10$VgROeL8oWRwkHsjolyZ77eSMLESP76zTA51zCjshIqFpTVh6tIso2'),
(25, 'rapido-brasil.svg', 'Rápido Brasil', '019', 'rapido-brasil@t', '$2y$10$80eVQjLmFgsObcN5jVoFGu/MuSKHuUNTcOCUhlARbVJnLGzRK9UIa'),
(26, 'piracicabana.svg', 'Piracicabana', '020', 'piracicabana@t', '$2y$10$r1gQGYUBJ3NeIX2rhV8Op.O4VG6jPLXhSUIgLfJVRKrrCBkzNtbem'),
(27, 'jbl-turismo.svg', 'JBL Turismo', '021', 'jbl-turismo@t', '$2y$10$.vPA/5v8uzzM2PkpATknyutWkvQXyr63dZXNyeobxmMm4UQdMSZgS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_viagem` int(11) NOT NULL,
  `pagamento` tinyint(4) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `origem` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `assento` varchar(20) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`id`, `id_empresa`, `origem`, `destino`, `assento`, `preco`, `data`, `hora`, `status`) VALUES
(1, 27, 'Recife, PE', 'Salvador, BA', '42', '45.70', '2021-03-23', '22:57:00', 0),
(2, 13, 'Recife, PE', 'Salvador, BA', '45', '134.00', '2021-03-02', '13:10:56', 0),
(3, 20, 'Recife, PE', 'Salvador, BA', '42', '134.00', '2021-03-02', '13:10:56', 0),
(4, 2, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '14:30:00', 0),
(5, 15, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '11:30:00', 0),
(6, 19, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '11:30:00', 0),
(7, 26, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '17:30:00', 0),
(8, 4, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '11:13:15', 0),
(9, 23, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '10:08:00', 0),
(10, 27, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '17:00:00', 0),
(11, 20, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '14:30:00', 0),
(12, 16, 'Recife, PE', 'Sao Paulo, SP', '42', '45.80', '2021-03-11', '05:30:00', 0),
(13, 13, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '05:38:00', 0),
(14, 20, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '14:38:00', 0),
(15, 1, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '09:38:00', 0),
(16, 11, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '11:38:00', 0),
(17, 20, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '13:38:00', 0),
(18, 25, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '04:59:00', 0),
(19, 18, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '19:09:00', 0),
(20, 3, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '11:38:00', 0),
(21, 17, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '23:38:00', 0),
(22, 21, 'Recife, PE', 'Rio de Janeiro, RJ', '42', '32.50', '2021-03-17', '15:38:00', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_viagem` (`id_viagem`);

--
-- Índices para tabela `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `id_viagem` FOREIGN KEY (`id_viagem`) REFERENCES `viagem` (`id`);

--
-- Limitadores para a tabela `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
