CREATE TABLE `tbl_fornitori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `data_iscrcc` date DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;