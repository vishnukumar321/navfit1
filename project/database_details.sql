-- Adminer 4.8.1 MySQL 8.3.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `navfit1_nav_fit`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `sub_premium`;
CREATE TABLE `sub_premium` (
  `id` int NOT NULL,
  `sub_token` varchar(20) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `exp_date` varchar(15) NOT NULL,
  `active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `sub_premium` (`id`, `sub_token`, `start_date`, `exp_date`, `active`) VALUES
(81,	'266ae04b38800e16',	'2025-Apr-26',	'2025-05-26',	1);

DROP TABLE IF EXISTS `sub_pro`;
CREATE TABLE `sub_pro` (
  `id` int NOT NULL,
  `sub_token` varchar(40) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `exp_date` varchar(15) NOT NULL,
  `active` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `sub_pro` (`id`, `sub_token`, `start_date`, `exp_date`, `active`) VALUES
(55,	'653a6d659d4ec0f7',	'2025-Apr-26',	'2025-05-26',	1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint NOT NULL,
  `password` varchar(200) NOT NULL,
  `address1` varchar(230) NOT NULL,
  `address2` varchar(230) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` bigint NOT NULL,
  `age` int NOT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `referral` varchar(20) NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `coin` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `address1`, `address2`, `city`, `state`, `zip`, `age`, `height`, `weight`, `gender`, `referral`, `active`, `coin`) VALUES
(54,	'04797997121',	'vishnu1@gmail.com',	'vishnu6',	'vishnu1@gmail.com',	4797997124,	'$2y$10$Lu7Uuvg5WuZHepG410lhtu5NA3L41D8Ai4f.MkqN2O.m/CF.F5Vl6',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'7705b955',	1,	5),
(55,	'Vishnukumar',	'E',	'vishnu2',	'vishnu2@gmail.com',	9656357874,	'$2y$10$h7YCpWFdDyt2fMAs6BH5ZuIMgCULzlePqT.hOsBvgQtmHOXti33pu',	'karuvarakundu(po),malappuram,kerala',	'5th phase,yelahanka new town,karnadaka',	'bangalore',	'Karnataka',	676523,	22,	160,	50,	'male',	'a07dc858',	1,	66),
(56,	'08888888888',	'vishnu2@gmail.com',	'vishnu3',	'vishnu2@gmail.com',	8888888888,	'$2y$10$pMa9pOlZRgZxCa1XwJbA6OPqQi8F4jFzUeI889aaedDSfsrY/3oH6',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'8b5a3036',	1,	0),
(57,	'08888888888',	'vishnu2@gmail.com',	'vishnu4',	'vishnu2@gmail.com',	8888888888,	'$2y$10$eGeJPkdnJsZm2e71RSdwDOL.Y4Zgunoj1EiFawdmM0qOTxLk19Nr.',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'0fac2f49',	1,	0),
(58,	'08888888888',	'vishnu2@gmail.com',	'vishnu8',	'vishnu2@gmail.com',	8888888888,	'$2y$10$BjpFwsWb8PsUz/oO40Vaa.Ru5dY3p0DsmLAuUFehe.VvGDTZIZFBO',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'0ffc036d',	1,	0),
(59,	'08888888888',	'vishnu2@gmail.com',	'vishnu54',	'vishnu2@gmail.com',	8888888888,	'$2y$10$XpApG2hsKyEKM9tilzqaVer7f9lQgz3tHhfG8nQHh.0i2qKcnYqDG',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'12480c5d',	1,	0),
(60,	'08888888888',	'vishnu2@gmail.com',	'vishnu10',	'vishnu2@gmail.com',	8888888888,	'$2y$10$rWT0moBeqY7zf5TNn6XtBuKlzb7u7BiDM9w6UxAPK9kYi02BtShze',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'4bf3dd7a',	1,	0),
(61,	'08888888888',	'vishnu2@gmail.com',	'vishnu11',	'vishnu2@gmail.com',	8888888888,	'$2y$10$D4jLhUhacNx/pMMc4aN2T.7VpSswc/5wnRPygDCz8es14Ki4X2jwm',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'206d7929',	1,	0),
(62,	'08888888888',	'vishnu2@gmail.com',	'vishnu12',	'vishnu2@gmail.com',	8888888888,	'$2y$10$wzXcKXkaHv4RFTVZQjQWoe5yVl1oJODOeumU5jdXmVixIYIHzhnyS',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	67,	43243,	76,	'male',	'6bea0ad0',	1,	2),
(63,	'08888888888',	'vishnu2@gmail.com',	'vishnu13',	'vishnu2@gmail.com',	8888888888,	'$2y$10$j5aDpgwe4org6hLTDvwNDOoTsehQOr1gP0rQYuNmbNxF8MrWhkfDa',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	77,	88,	77,	'male',	'e7cb657c',	1,	1),
(64,	'04797997124',	'vishnu1@gmail.com',	'vishnu18',	'vishnu1@gmail.com',	4797997124,	'$2y$10$9jEtW2n38K0yDrJihWGmMu9wEUZJGqx1naDn943Tn0spnke8gZiBi',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'9e0e4961',	1,	1),
(65,	'04797997124',	'vishnu1@gmail.com',	'vishnu20',	'vishnu1@gmail.com',	4797997124,	'$2y$10$ELbki3lJ5c2hVUTvej0JverwiVyxbhn9gDJ3qgoUqXG13RExW4J76',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	185,	130,	'male',	'2d074eda',	1,	1),
(66,	'04797997124',	'vishnu1@gmail.com',	'vishnu21',	'vishnu1@gmail.com',	4797997124,	'$2y$10$RQjqJp63Tq0riEtxcRs0WeGb1elHQt8juSsatfWij2N0BScXEd8Au',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'58319925',	1,	3),
(67,	'04797997124',	'vishnu1@gmail.com',	'vishnu51',	'vishnu1@gmail.com',	4797997124,	'$2y$10$HToyV6KtRjYyrsvlUwagYei5A6yDe//N78NU/yP.4vlb7tnDn8SFi',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'454f7d5c',	1,	1),
(68,	'04797997124',	'vishnu1@gmail.com',	'vishnu58',	'vishnu1@gmail.com',	4797997124,	'$2y$10$jSdwB7GAVXyP87q78kiICeW.z.WB4umdDZj/pPC.J2RFoYs/K0SEa',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	1,	180,	60,	'male',	'd9b80544',	1,	1),
(69,	'04797997124',	'vishnu1@gmail.com',	'vishnu33',	'vishnu1@gmail.com',	4797997124,	'$2y$10$EB7edeEgGgxJQqIqzwGLrOQwoSY8zO7kSiVUxud3aCfMIns9jEuEi',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	185,	45,	'male',	'727f3fe0',	1,	0),
(70,	'abhinav',	'p s',	'abhi',	'abhi@gmail.com',	8089697282,	'$2y$10$QbUCGyHD9ttdWiSr9p1kmuUe/zK9fKmOAaBtFHeSnMPgrbDgSYHYC',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	21,	180,	60,	'male',	'68b997cf',	1,	1),
(71,	'vishnu',	'kumar',	'vishnu79',	'vshn@gmail.com',	8590245538,	'$2y$10$RXulDqGlYfbuNQpSMUOLIuvvoS4bpPbrM9UbGP9duz9KvaZ0TMBo2',	'hty',	'uiiiieo8688',	'ernakulam',	'Kerala',	98765,	23,	175,	58,	'male',	'c2f1540c',	1,	1),
(72,	'04797997124',	'vishnu1@gmail.com',	'vishnu567',	'vishnu1@gmail.com',	4797997124,	'$2y$10$y1s2hH2WMAfGMcrkH1BHEuvD0lf9Y/bRMqfx3/KCUWmLA.hVpUXtu',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'2d125714',	1,	1),
(73,	'vishnukumar',	'E',	'vishnu531',	'vishnu1@gmail.com',	4797997124,	'$2y$10$i0hDfXe.ulR2KAt9P3VTQugzpXJQJ1vX30d4BQldzd5BHqbBtwqQm',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	150,	45,	'male',	'8b470792',	1,	1),
(74,	'04797997124',	'vishnu1@gmail.com',	'vishnu321',	'vishnu1@gmail.com',	4797997124,	'$2y$10$PUSZ5nJ9cAqsMeUrjXhNXuK5jf5g3In/r7I.c4LPvjsqYo4wUnjxe',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'2c3f6d71',	1,	0),
(75,	'vishnukumar',	'E',	'vishnu1234',	'vishnu1234@gmail.com',	9656357874,	'$2y$10$2hXmWGocyIxm0DD4x8fskeCN.wxLLAc8h4Zm0a2XpoTZI5rhWQcMe',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Karnataka',	676523,	22,	150,	55,	'male',	'8f70c27e',	1,	0),
(76,	'08590245538',	'vshn@gmail.com',	'vishnu657',	'vshn@gmail.com',	8590245538,	'$2y$10$LEz47J1Tk1ng2ZxEMQy9d.IGWu65hnLBbJxFtUl8PymexwNMadsye',	'hty',	'uiiiieo8688',	'ernakulam',	'Kerala',	98765,	33,	213,	60,	'male',	'1ea3ae39',	1,	1),
(77,	'Roy',	'Isidore',	'Roy',	'royisidore17@gmail.com',	7510740147,	'$2y$10$cTygCl9vAf0IPTG77PRCqODo2W6x9e0.zdH55OQi4746GidAx1yIG',	'mangalassery',	'Ernakulam',	'KERALA',	'Kerala',	683214,	21,	181,	65,	'male',	'9549690a',	1,	0),
(78,	'08590245538',	'vshn@gmail.com',	'vishnu555',	'vishnu2@gmail.com',	8888888888,	'$2y$10$uLzaVY2J.nmTXYSEhOPYXuCvRT2eB5je1D8A3qQCvas2aNaKtZVDm',	'lkj',	'oiui',	'bangalore',	'Kerala',	98765,	20,	167,	60,	'male',	'2bcfe2cb',	1,	1),
(79,	'Dinu',	'Krishna',	'Dinukriz',	'dinukrishnadk40@gmail.com',	9747602898,	'$2y$10$H5CdYQPNmhFG73MS4F4YDOGX29hWKIkxaeWNNeU.miRYPGpFSsY.6',	'Attur Layout',	'Lakshmi Nivas',	'Bemgaluru',	'Karnataka',	560064,	21,	168,	79,	'male',	'05cb3436',	1,	0),
(80,	'04797997124',	'vishnu1@gmail.com',	'vishnu4242',	'vishnu1@gmail.com',	4797997124,	'$2y$10$GxbzuHT8lnD5PbLE3YPVYuxbwR4g9kVVVV8NrTO2RPrzBHm6tj.em',	'kllkllkjlk',	'sdfsfsdfsdf',	'malappuram',	'Kerala',	676523,	22,	180,	60,	'male',	'd774808b',	1,	0),
(81,	'Tharun',	'S',	'Tharun',	'tharuns29052005@gmail.com',	7558949072,	'$2y$10$hip7J33Ozet5Lca5w4EB4uV.Uis6zYvlmMRRwCq7gCXTYaDERqS9C',	'S/o saraswathy ramachandhran',	'Konnayavil house Pullumedu chenkara p/o',	'Pullumedu',	'Kerala',	685533,	19,	167,	54,	'male',	'c7b4e5c0',	1,	91);

DROP TABLE IF EXISTS `user_session`;
CREATE TABLE `user_session` (
  `uid` int NOT NULL,
  `ip` varchar(20) NOT NULL,
  `agent` varchar(244) NOT NULL,
  `token` varchar(160) NOT NULL,
  `time` bigint NOT NULL,
  `http_accept` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  KEY `uid` (`uid`),
  CONSTRAINT `user_session_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user_session` (`uid`, `ip`, `agent`, `token`, `time`, `http_accept`, `active`) VALUES
(76,	'10.11.3.24',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',	'b7ac679d38d8105358f3077a011defaa',	1745483873,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',	1),
(75,	'10.11.3.24',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',	'e1e8d83b3fd021b19137815d30f8bd38',	1745488140,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',	1),
(78,	'10.11.3.24',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',	'dc8cde3dcb9ce4888c225d7da95a7cb5',	1745519784,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',	1),
(79,	'10.11.3.24',	'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36',	'68e7d5554611de3f7f5943344ff6df80',	1745567755,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',	1),
(78,	'10.11.3.24',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',	'be3f865b7ed9e400adbc72c010d23237',	1745569322,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',	1),
(55,	'10.11.3.24',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',	'52a17a7f41631b824901e62fa73b07c4',	1745616306,	'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',	1);

-- 2025-04-25 21:38:20