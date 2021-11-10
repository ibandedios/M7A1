-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tarea`;
CREATE TABLE `tarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) DEFAULT NULL,
  `nomTarea` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_email` (`email_user`),
  CONSTRAINT `fk_email` FOREIGN KEY (`email_user`) REFERENCES `usuarios` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tarea` (`id`, `email_user`, `nomTarea`) VALUES
(11,	'carlos@gmail.com',	'M10'),
(13,	'iban@gmail.com',	'M3');

DROP TABLE IF EXISTS `taskItem`;
CREATE TABLE `taskItem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `list_id` int(11) NOT NULL,
  `nombreItem` varchar(50) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_list` (`list_id`),
  CONSTRAINT `fk_list` FOREIGN KEY (`list_id`) REFERENCES `tarea` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `taskItem` (`id`, `list_id`, `nombreItem`, `completed`) VALUES
(22,	11,	'ACT4',	0),
(23,	11,	'ACT1',	0),
(24,	13,	'ACTIVIDAD1',	0);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`email`, `nombre`, `passwd`, `tipo`) VALUES
('carlos@gmail.com',	'carlos',	'81dc9bdb52d04dc20036dbd8313ed055',	'alumno'),
('iban2@gmail.com',	'iban2',	'81dc9bdb52d04dc20036dbd8313ed055',	'alumno'),
('iban@gmail.com',	'iban',	'90399c51ca316f74e0240eddf9e7bd39',	'alumno'),
('pau@gmail.com',	'pau',	'e10adc3949ba59abbe56e057f20f883e',	'alumno'),
('xavier@gmail.com',	'xavier',	'e10adc3949ba59abbe56e057f20f883e',	'alumno');

-- 2021-11-10 14:47:20
