DROP TABLE IF EXISTS `companys`;
DROP TABLE IF EXISTS `departaments`;
DROP TABLE IF EXISTS `jobs`;
DROP TABLE IF EXISTS `employees`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `works`;
DROP TABLE IF EXISTS `status`;
DROP TABLE IF EXISTS `Payments`;

CREATE TABLE `companys` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`nombre` varchar(100) NOT NULL,
`telephone` varchar(10) NOT NULL,
`telephone2` varchar(10) NULL,
`address` varchar(255) NOT NULL,
`RFC` varchar(20) NOT NULL,
`mandated` varchar(30) NULL,
`status` enum('active','debt', 'inactive') NOT NULL,
`created` datetime NULL,
`modified` datetime NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

CREATE TABLE `departaments` (
`id` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`employee_id` varchar(50) NOT NULL,
`created` datetime NULL,
`modified` datetime NULL,
`company_id` int(11) UNSIGNED NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

CREATE TABLE `jobs` (
`id` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`departament_id` int(11) UNSIGNED NOT NULL,
`created` datetime NULL,
`modified` datetime NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;



CREATE TABLE `users` (
`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL,
`email` varchar(100) NOT NULL,
`isActive` tinyint(1) UNSIGNED NOT NULL,
`role` enum('admin','director','empleado') NOT NULL,
`created` datetime NULL DEFAULT NULL,
`modified` datetime NULL DEFAULT NULL,
`fecha_nac` datetime NULL DEFAULT NULL,
`gender` enum('Masculino','Femenino') NOT NULL,
`address` varchar(200) NOT NULL,
`telephone` varchar(10) NOT NULL,
`extension` varchar(10) NULL DEFAULT NULL,
`foto` varchar(255) NULL DEFAULT NULL,
`foto_dir` varchar(255) NULL DEFAULT NULL,
`job_id` int(11) UNSIGNED NULL,
`departament_id` int(11) UNSIGNED NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

CREATE TABLE `works` (
`id` int(11) NOT NULL,
`folio` varchar(255) NULL,
`name` varchar(255) NULL,
`telephone` varchar(255) NULL,
`status_id` int(11) NULL,
`created` datetime NULL,
`modified` datetime NULL,
`reference` varchar(20) NULL,
`foto` varchar(255) NULL,
`foto_dir` varchar(255) NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

CREATE TABLE `status` (
`id` int(11) NOT NULL,
`name` varchar(15) NOT NULL,
`created` datetime NULL,
`modified` datetime NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

CREATE TABLE `Payments` (
`id` int(11) NOT NULL,
`company_id` int(11) UNSIGNED NOT NULL,
`fecha_pago` datetime NOT NULL,
`termino` datetime NOT NULL,
`created` datetime NULL,
`modified` datetime NULL,
`importe` decimal(20,0) UNSIGNED NOT NULL,
PRIMARY KEY (`id`) 
)
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
ROW_FORMAT = dynamic;

