-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Ott 28, 2013 alle 11:38
-- Versione del server: 5.5.29
-- Versione PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gesticoop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_anagrafica`
--

CREATE TABLE `tbl_anagrafica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cognome` varchar(45) DEFAULT NULL,
  `data_nascita` datetime DEFAULT NULL,
  `regione_nascita` varchar(45) DEFAULT NULL,
  `provincia_nascita` varchar(45) DEFAULT NULL,
  `comune_nascita` varchar(45) DEFAULT NULL,
  `c_fiscale` varchar(45) DEFAULT NULL,
  `regione_residenza` varchar(45) DEFAULT NULL,
  `provincia_residenza` varchar(45) DEFAULT NULL,
  `comune_residenza` varchar(45) DEFAULT NULL,
  `indirizzo_residenza` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `cellulare` varchar(45) DEFAULT NULL,
  `iban` varchar(45) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_contratti`
--

CREATE TABLE `tbl_contratti` (
  `id` int(11) NOT NULL,
  `utente` varchar(45) DEFAULT NULL,
  `società` varchar(45) DEFAULT NULL,
  `tipologia` varchar(45) DEFAULT NULL,
  `data_inizio` datetime DEFAULT NULL,
  `data_fine` datetime DEFAULT NULL,
  `ruolo` varchar(45) DEFAULT NULL,
  `provvigione` varchar(45) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_fatture`
--

CREATE TABLE `tbl_fatture` (
  `id` int(11) NOT NULL,
  `numero_fattura` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `società` varchar(45) DEFAULT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `causale` varchar(45) DEFAULT NULL,
  `descrizione` varchar(45) DEFAULT NULL,
  `imponibile` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `data_accredito` datetime DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_mezzi`
--

CREATE TABLE `tbl_mezzi` (
  `id` int(11) NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modello` varchar(45) DEFAULT NULL,
  `prezzo` varchar(45) DEFAULT NULL,
  `rata` varchar(45) DEFAULT NULL,
  `targa` varchar(45) DEFAULT NULL,
  `immatricolazione` varchar(45) DEFAULT NULL,
  `proprietario` varchar(45) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_prestiti`
--

CREATE TABLE `tbl_prestiti` (
  `id` int(11) NOT NULL,
  `causale` varchar(45) DEFAULT NULL,
  `totale` varchar(45) DEFAULT NULL,
  `n_rate` varchar(45) DEFAULT NULL,
  `scadenza` datetime DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `societa` varchar(45) DEFAULT NULL,
  `anagrafica` varchar(45) DEFAULT NULL,
  `altro` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_societa`
--

CREATE TABLE `tbl_societa` (
  `id` int(11) NOT NULL,
  `ragione_sociale` varchar(45) DEFAULT NULL,
  `tipologia` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `amministratore` varchar(45) DEFAULT NULL,
  `regione` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `comune` varchar(45) DEFAULT NULL,
  `cap` varchar(45) DEFAULT NULL,
  `indirizzo` varchar(45) DEFAULT NULL,
  `gruppo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `p_iva` varchar(45) DEFAULT NULL,
  `c_fiscale` varchar(45) DEFAULT NULL,
  `numero_iscrcc` varchar(45) DEFAULT NULL,
  `regione_iscrcc` varchar(45) DEFAULT NULL,
  `provincia_iscrcc` varchar(45) DEFAULT NULL,
  `comune_iscrcc` varchar(45) DEFAULT NULL,
  `data_iscrcc` datetime DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

