-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `payparty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoesdecredito`
--

CREATE TABLE IF NOT EXISTS `cartoesdecredito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bandeira` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `codSeguranca` varchar(50) NOT NULL,
  `validade` varchar(50) NOT NULL,
  `nomeTitular` varchar(50) NOT NULL,
  `enderecoTitular` varchar(50) NOT NULL,
  `telefoneTitular` varchar(50) NOT NULL,
  `pessoaID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `nome` varchar(50) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataTermino` date NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `precoMasc` float NOT NULL,
  `precoFem` float NOT NULL,
  `organizadorID` int(11) NOT NULL,
  `localID` int(11) DEFAULT NULL,
  `facebookEventPage` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descricao` text NOT NULL,
  `numeroIngressos` int(11) NOT NULL,
  `horaInicio` time NOT NULL,
  `horaTermino` time NOT NULL,
  `miniatura` varchar(50) NOT NULL,
  `classificacao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`nome`, `dataInicio`, `dataTermino`, `imagem`, `precoMasc`, `precoFem`, `organizadorID`, `localID`, `facebookEventPage`, `id`, `dataCriacao`, `descricao`, `numeroIngressos`, `horaInicio`, `horaTermino`, `miniatura`) VALUES
('as', '2013-06-06', '2013-06-15', '../view/images/1370319982.jpg', 12, 12, 3, 0, 'as', 18, '0000-00-00 00:00:00', 'as', 25, '00:00:16', '00:00:16', '../view/images/thumb1370319982.jpg'),
('as', '2013-06-06', '2013-06-15', '../view/images/1370322873.jpg', 12, 12, 3, 0, 'as', 19, '0000-00-00 00:00:00', 'as', 25, '00:00:16', '00:00:16', '../view/images/thumb1370322873.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingressos`
--

CREATE TABLE IF NOT EXISTS `ingressos` (
  `id` int(11) NOT NULL,
  `pessoaID` int(11) NOT NULL,
  `eventoID` int(11) NOT NULL,
  `qr` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `validade` varchar(50) NOT NULL,
  `instrucoes` text NOT NULL,
  `tipo` varchar(10) NOT NULL DEFAULT 'Inteira'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE IF NOT EXISTS `locais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(50) NOT NULL,
  `coordenadasGoogleMaps` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `miniatura` varchar(50) NOT NULL,
  `fotos` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`id`, `endereco`, `coordenadasGoogleMaps`, `nome`, `numero`, `complemento`, `bairro`, `cidade`, `pais`, `cep`, `estado`, `miniatura`, `fotos`) VALUES
(16, 'peknf', '', 'sapkljsdpa', '3413', 'açldknf', 'çadknf', 'açldkn', '~çknsd', '12333-333', '~pkenf', '../view/images/thumb1370320010.jpg', '../view/images/1370320010.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locaisdoseventos`
--

CREATE TABLE IF NOT EXISTS `locaisdoseventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localID` int(11) NOT NULL,
  `eventoID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `locaisdoseventos`
--

INSERT INTO `locaisdoseventos` (`id`, `localID`, `eventoID`) VALUES
(9, 16, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizadores`
--

CREATE TABLE IF NOT EXISTS `organizadores` (
  `cnpj` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `informaçoesBancarias` varchar(50) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,
  `nomeFantasia` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `facebookFanPage` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoaID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizadorescriameventos`
--

CREATE TABLE IF NOT EXISTS `organizadorescriameventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organizadorID` int(11) NOT NULL,
  `eventoID` int(11) NOT NULL,
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
  `id` int(11) NOT NULL,
  `pessoaID` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantesdoseventosatuais`
--

CREATE TABLE IF NOT EXISTS `participantesdoseventosatuais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participanteID` int(11) NOT NULL,
  `eventoID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantestemingressos`
--

CREATE TABLE IF NOT EXISTS `participantestemingressos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingressoID` int(11) NOT NULL,
  `participanteID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `primeiroNome` varchar(50) NOT NULL,
  `sobreNome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `emailConfirmado` tinyint(1) NOT NULL,
  `codConfirmacao` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,   
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`primeiroNome`, `sobreNome`, `email`, `id`, `senha`, `sexo`, `emailConfirmado`, `codConfirmacao`, `cpf`, `telefoneContato`) VALUES
('Andre', 'Ferraz', '234', 3, '202cb962ac59075b964b07152d234b70', 'Masculino', 0, '', '111.111.111-11', '(11) 1111-1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoasjaparticiparamdoevento`
--

CREATE TABLE IF NOT EXISTS `pessoasjaparticiparamdoevento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participanteID` int(11) NOT NULL,
  `eventoID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoastemcartoes`
--

CREATE TABLE IF NOT EXISTS `pessoastemcartoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoaID` int(11) NOT NULL,
  `cartaoID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
