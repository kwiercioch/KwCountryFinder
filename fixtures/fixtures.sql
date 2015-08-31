CREATE TABLE `ip_addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beginipaddress` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `endipaddress` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `beginipnumber` bigint(20) unsigned NOT NULL,
  `endipnumber` bigint(20) unsigned NOT NULL,
  `countrycode` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `countryname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_number_idx` (`beginipnumber`,`endipnumber`));