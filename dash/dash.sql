CREATE TABLE IF NOT EXISTS `dash_last` (
  `uid` int(11) NOT NULL,
  `dash_file` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `dash_settings` (
`rid` INT NOT NULL ,
`dash_file` VARCHAR( 64 ) NOT NULL
) ENGINE = MYISAM DEFAULT CHARSET=utf8;