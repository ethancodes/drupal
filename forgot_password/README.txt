Client did not like the way Drupal's built-in "forgot my password" functionality worked. Built my own. Yay.

SQL structure:

CREATE TABLE IF NOT EXISTS `forgot_password` (
  `secret_key` varchar(32) NOT NULL,
  `uid` int(11) NOT NULL,
  `dtstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`secret_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
