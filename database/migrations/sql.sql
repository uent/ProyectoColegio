-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.2.3-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla proyectocolegio.anamnesis
CREATE TABLE IF NOT EXISTS `anamnesis` (
  `idAnamnesis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idOrden` int(10) unsigned NOT NULL,
  `condSocioComunicativaFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competComunicativaFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lengComprensivoFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lengExpresivoFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conclusionesFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugerenciasFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procEvaluaFonoaudiologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desarrolloSocialPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respEmocionalPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refConjuntaPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juegoPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conmunicacionLengPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flexMentalPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pensamientoPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comportamientoGnrlPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concluPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procEvaluaPsicologo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coordinacionObsTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coordinacionSugTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procesamientoObsTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procesamientoSugTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concluSugereniasTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procEvaluaTerapeutaOcupacional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNE1Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNEESug1Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNE2Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNEESug2Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNE3Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNEESug3Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNE4Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FPBNEESug4Psicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comportamientoNivelPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComportamientoSugPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aprendizajeNivelPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aprendizajeSugPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conclusionesSugerenciasPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procEvaluaPsicopedagogo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacionMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imitacionMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `afectoMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuerpoMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objetosMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adaptacionMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respVisualMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respAuditivaMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gustoOlfatoTactoMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ansiedadMiedoMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comunicVerbalMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comunicNoVerbalMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivelActMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respIntelectualMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `impresGnrlMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivoDeEvaluacionMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugerenciasMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antecedentesRelevantesMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conclusionesMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procEvaluaMultiDisiplinario` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idAnamnesis`),
  KEY `anamnesis_idorden_foreign` (`idOrden`),
  CONSTRAINT `anamnesis_idorden_foreign` FOREIGN KEY (`idOrden`) REFERENCES `ordendiagnostico` (`idOrdenDiagnostico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.anamnesis: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `anamnesis` DISABLE KEYS */;
/*!40000 ALTER TABLE `anamnesis` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.categories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.citas
CREATE TABLE IF NOT EXISTS `citas` (
  `idCitas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idOrden` int(10) unsigned NOT NULL,
  `idProfesional` int(10) unsigned NOT NULL,
  `idNino` int(10) unsigned NOT NULL,
  `tipoEvaluacion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `comentarios` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCitas`),
  KEY `citas_idorden_foreign` (`idOrden`),
  KEY `citas_idprofesional_foreign` (`idProfesional`),
  KEY `citas_idnino_foreign` (`idNino`),
  CONSTRAINT `citas_idnino_foreign` FOREIGN KEY (`idNino`) REFERENCES `ninos` (`idNino`),
  CONSTRAINT `citas_idorden_foreign` FOREIGN KEY (`idOrden`) REFERENCES `ordendiagnostico` (`idOrdenDiagnostico`),
  CONSTRAINT `citas_idprofesional_foreign` FOREIGN KEY (`idProfesional`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.citas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.data_rows
CREATE TABLE IF NOT EXISTS `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.data_rows: ~152 rows (aproximadamente)
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
	(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
	(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
	(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
	(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
	(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
	(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
	(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', 7),
	(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title","forceUpdate":true}}', 8),
	(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
	(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
	(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}', 11),
	(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
	(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
	(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
	(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
	(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
	(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
	(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
	(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title"}}', 6),
	(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
	(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
	(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}', 9),
	(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
	(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
	(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
	(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
	(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
	(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '', 3),
	(29, 3, 'password', 'password', 'password', 0, 0, 0, 1, 1, 0, '', 4),
	(30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"name","pivot_table":"roles","pivot":"0"}', 10),
	(31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, '', 5),
	(32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 6),
	(33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
	(34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, '', 8),
	(35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
	(36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
	(37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
	(38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
	(39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
	(40, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', 2),
	(41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{"default":1}', 3),
	(42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 4),
	(43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{"slugify":{"origin":"name"}}', 5),
	(44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, '', 6),
	(45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
	(46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
	(47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
	(48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
	(49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
	(50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
	(51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
	(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
	(53, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
	(54, 14, 'idCitas', 'checkbox', 'IdCitas', 1, 0, 0, 0, 0, 0, NULL, 1),
	(55, 14, 'idOrden', 'checkbox', 'IdOrden', 1, 1, 1, 1, 1, 1, NULL, 2),
	(56, 14, 'idProfesional', 'checkbox', 'IdProfesional', 1, 1, 1, 1, 1, 1, NULL, 3),
	(57, 14, 'idNino', 'checkbox', 'IdNino', 1, 1, 1, 1, 1, 1, NULL, 4),
	(58, 14, 'tipoEvaluacion', 'checkbox', 'TipoEvaluacion', 1, 1, 1, 1, 1, 1, NULL, 5),
	(59, 14, 'estado', 'checkbox', 'Estado', 1, 1, 1, 1, 1, 1, NULL, 6),
	(60, 14, 'fechaInicio', 'checkbox', 'FechaInicio', 1, 1, 1, 1, 1, 1, NULL, 7),
	(61, 14, 'fechaFin', 'checkbox', 'FechaFin', 1, 1, 1, 1, 1, 1, NULL, 8),
	(62, 14, 'comentarios', 'checkbox', 'Comentarios', 1, 1, 1, 1, 1, 1, NULL, 9),
	(63, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 10),
	(64, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 11),
	(65, 15, 'idNinoTutor', 'checkbox', 'IdNinoTutor', 1, 0, 0, 0, 0, 0, NULL, 1),
	(66, 15, 'idNino', 'checkbox', 'IdNino', 1, 1, 1, 1, 1, 1, NULL, 2),
	(67, 15, 'parentesco', 'checkbox', 'Parentesco', 1, 1, 1, 1, 1, 1, NULL, 3),
	(68, 15, 'idTutor', 'checkbox', 'IdTutor', 1, 1, 1, 1, 1, 1, NULL, 4),
	(69, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
	(70, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
	(71, 16, 'idNino', 'checkbox', 'IdNino', 1, 0, 0, 0, 0, 0, NULL, 1),
	(72, 16, 'nombre', 'checkbox', 'Nombre', 1, 1, 1, 1, 1, 1, NULL, 2),
	(73, 16, 'apellidos', 'checkbox', 'Apellidos', 1, 1, 1, 1, 1, 1, NULL, 3),
	(74, 16, 'rut', 'checkbox', 'Rut', 1, 1, 1, 1, 1, 1, NULL, 4),
	(75, 16, 'fechaNacimiento', 'checkbox', 'FechaNacimiento', 0, 1, 1, 1, 1, 1, NULL, 5),
	(76, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
	(77, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
	(78, 17, 'idOrdenDiagnostico', 'checkbox', 'IdOrdenDiagnostico', 1, 0, 0, 0, 0, 0, NULL, 1),
	(79, 17, 'idNino', 'checkbox', 'IdNino', 1, 1, 1, 1, 1, 1, NULL, 2),
	(80, 17, 'estado', 'checkbox', 'Estado', 1, 1, 1, 1, 1, 1, NULL, 3),
	(81, 17, 'prioridad', 'checkbox', 'Prioridad', 1, 1, 1, 1, 1, 1, NULL, 4),
	(82, 17, 'diagnosticoProfesional', 'checkbox', 'DiagnosticoProfesional', 1, 1, 1, 1, 1, 1, NULL, 5),
	(83, 17, 'derivacion', 'checkbox', 'Derivacion', 1, 1, 1, 1, 1, 1, NULL, 6),
	(84, 17, 'solicitud', 'checkbox', 'Solicitud', 1, 1, 1, 1, 1, 1, NULL, 7),
	(85, 17, 'observaciones', 'checkbox', 'Observaciones', 1, 1, 1, 1, 1, 1, NULL, 8),
	(86, 17, 'escolaridad', 'checkbox', 'Escolaridad', 1, 1, 1, 1, 1, 1, NULL, 9),
	(87, 17, 'prevision', 'checkbox', 'Prevision', 0, 1, 1, 1, 1, 1, NULL, 10),
	(88, 17, 'escolaridadNino', 'checkbox', 'EscolaridadNino', 0, 1, 1, 1, 1, 1, NULL, 11),
	(89, 17, 'cantHermanos', 'checkbox', 'CantHermanos', 0, 1, 1, 1, 1, 1, NULL, 12),
	(90, 17, 'nombrePadre', 'checkbox', 'NombrePadre', 0, 1, 1, 1, 1, 1, NULL, 13),
	(91, 17, 'nombreMadre', 'checkbox', 'NombreMadre', 0, 1, 1, 1, 1, 1, NULL, 14),
	(92, 17, 'Dirección', 'checkbox', 'Dirección', 0, 1, 1, 1, 1, 1, NULL, 15),
	(93, 17, 'nombreLlenadoFicha', 'checkbox', 'NombreLlenadoFicha', 0, 1, 1, 1, 1, 1, NULL, 16),
	(94, 17, 'textoPorqueEvaluacion', 'checkbox', 'TextoPorqueEvaluacion', 0, 1, 1, 1, 1, 1, NULL, 17),
	(95, 17, 'textoExpectativas', 'checkbox', 'TextoExpectativas', 0, 1, 1, 1, 1, 1, NULL, 18),
	(96, 17, 'textoTipoDificultades', 'checkbox', 'TextoTipoDificultades', 0, 1, 1, 1, 1, 1, NULL, 19),
	(97, 17, 'textoProfesionalActual', 'checkbox', 'TextoProfesionalActual', 0, 1, 1, 1, 1, 1, NULL, 20),
	(98, 17, 'textoIntegrantesOcupaciones', 'checkbox', 'TextoIntegrantesOcupaciones', 0, 1, 1, 1, 1, 1, NULL, 21),
	(99, 17, 'textoAntecendentesEnfermedadosFamiliares', 'checkbox', 'TextoAntecendentesEnfermedadosFamiliares', 0, 1, 1, 1, 1, 1, NULL, 22),
	(100, 17, 'textoDesarrolloEmbarazo', 'checkbox', 'TextoDesarrolloEmbarazo', 0, 1, 1, 1, 1, 1, NULL, 23),
	(101, 17, 'SemanasGestacion', 'checkbox', 'SemanasGestacion', 0, 1, 1, 1, 1, 1, NULL, 24),
	(102, 17, 'textoParto', 'checkbox', 'TextoParto', 0, 1, 1, 1, 1, 1, NULL, 25),
	(103, 17, 'peso', 'checkbox', 'Peso', 0, 1, 1, 1, 1, 1, NULL, 26),
	(104, 17, 'talla', 'checkbox', 'Talla', 0, 1, 1, 1, 1, 1, NULL, 27),
	(105, 17, 'apgar', 'checkbox', 'Apgar', 0, 1, 1, 1, 1, 1, NULL, 28),
	(106, 17, 'textopPrimerAñoVida', 'checkbox', 'TextopPrimerAñoVida', 0, 1, 1, 1, 1, 1, NULL, 29),
	(107, 17, 'enfermedadesRelevantes', 'checkbox', 'EnfermedadesRelevantes', 0, 1, 1, 1, 1, 1, NULL, 30),
	(108, 17, 'textoMarcha', 'checkbox', 'TextoMarcha', 0, 1, 1, 1, 1, 1, NULL, 31),
	(109, 17, 'textoControlEsfinter', 'checkbox', 'TextoControlEsfinter', 0, 1, 1, 1, 1, 1, NULL, 32),
	(110, 17, 'textoHabilidadesMotricesGruesas', 'checkbox', 'TextoHabilidadesMotricesGruesas', 0, 1, 1, 1, 1, 1, NULL, 33),
	(111, 17, 'textoHabilidadesMotricesFinas', 'checkbox', 'TextoHabilidadesMotricesFinas', 0, 1, 1, 1, 1, 1, NULL, 34),
	(112, 17, 'textoAdquisicionLenguaje', 'checkbox', 'TextoAdquisicionLenguaje', 0, 1, 1, 1, 1, 1, NULL, 35),
	(113, 17, 'textoDificultadesLenguaje', 'checkbox', 'TextoDificultadesLenguaje', 0, 1, 1, 1, 1, 1, NULL, 36),
	(114, 17, 'textoDesarrolloSocialAdultos', 'checkbox', 'TextoDesarrolloSocialAdultos', 0, 1, 1, 1, 1, 1, NULL, 37),
	(115, 17, 'textoDesarrolloSocialNinos', 'checkbox', 'TextoDesarrolloSocialNinos', 0, 1, 1, 1, 1, 1, NULL, 38),
	(116, 17, 'textoQueTanAutonomo', 'checkbox', 'TextoQueTanAutonomo', 0, 1, 1, 1, 1, 1, NULL, 39),
	(117, 17, 'opcionComer', 'checkbox', 'OpcionComer', 0, 1, 1, 1, 1, 1, NULL, 40),
	(118, 17, 'opcionVestirse', 'checkbox', 'OpcionVestirse', 0, 1, 1, 1, 1, 1, NULL, 41),
	(119, 17, 'opcionHigiene', 'checkbox', 'OpcionHigiene', 0, 1, 1, 1, 1, 1, NULL, 42),
	(120, 17, 'textoHabitosAlimenticios', 'checkbox', 'TextoHabitosAlimenticios', 0, 1, 1, 1, 1, 1, NULL, 43),
	(121, 17, 'textoManifiestaEmociones', 'checkbox', 'TextoManifiestaEmociones', 0, 1, 1, 1, 1, 1, NULL, 44),
	(122, 17, 'textoManifiestaFrustracion', 'checkbox', 'TextoManifiestaFrustracion', 0, 1, 1, 1, 1, 1, NULL, 45),
	(123, 17, 'textoFlexibilidadActividades', 'checkbox', 'TextoFlexibilidadActividades', 0, 1, 1, 1, 1, 1, NULL, 46),
	(124, 17, 'textoInteresesObjetosActividades', 'checkbox', 'TextoInteresesObjetosActividades', 0, 1, 1, 1, 1, 1, NULL, 47),
	(125, 17, 'textoIntensidadMiedos', 'checkbox', 'TextoIntensidadMiedos', 0, 1, 1, 1, 1, 1, NULL, 48),
	(126, 17, 'textoHabitosSueño', 'checkbox', 'TextoHabitosSueño', 0, 1, 1, 1, 1, 1, NULL, 49),
	(127, 17, 'textoInicioEscolaridad', 'checkbox', 'TextoInicioEscolaridad', 0, 1, 1, 1, 1, 1, NULL, 50),
	(128, 17, 'textoOtrosEstablecimientos', 'checkbox', 'TextoOtrosEstablecimientos', 0, 1, 1, 1, 1, 1, NULL, 51),
	(129, 17, 'textoEstablecimientoActual', 'checkbox', 'TextoEstablecimientoActual', 0, 1, 1, 1, 1, 1, NULL, 52),
	(130, 17, 'textoNivelCursoActual', 'checkbox', 'TextoNivelCursoActual', 0, 1, 1, 1, 1, 1, NULL, 53),
	(131, 17, 'textoRepitencias', 'checkbox', 'TextoRepitencias', 0, 1, 1, 1, 1, 1, NULL, 54),
	(132, 17, 'textoComentarios', 'checkbox', 'TextoComentarios', 0, 1, 1, 1, 1, 1, NULL, 55),
	(133, 17, 'monto', 'checkbox', 'Monto', 0, 1, 1, 1, 1, 1, NULL, 56),
	(134, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 57),
	(135, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 58),
	(136, 18, 'idPerfil', 'checkbox', 'IdPerfil', 1, 0, 0, 0, 0, 0, NULL, 1),
	(137, 18, 'nombrePerfil', 'checkbox', 'NombrePerfil', 1, 1, 1, 1, 1, 1, NULL, 2),
	(138, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
	(139, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
	(140, 19, 'idPerfilUsuario', 'checkbox', 'IdPerfilUsuario', 1, 0, 0, 0, 0, 0, NULL, 2),
	(141, 19, 'idPerfil', 'checkbox', 'IdPerfil', 1, 1, 1, 1, 1, 1, NULL, 3),
	(142, 19, 'id', 'checkbox', 'Id', 1, 1, 1, 1, 1, 1, NULL, 1),
	(143, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
	(144, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
	(145, 20, 'idPermiso', 'checkbox', 'IdPermiso', 1, 0, 0, 0, 0, 0, NULL, 1),
	(146, 20, 'nombrePermiso', 'checkbox', 'NombrePermiso', 1, 1, 1, 1, 1, 1, NULL, 2),
	(147, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
	(148, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
	(149, 21, 'idPermisoPerfil', 'checkbox', 'IdPermisoPerfil', 1, 0, 0, 0, 0, 0, NULL, 1),
	(150, 21, 'idPermiso', 'checkbox', 'IdPermiso', 1, 1, 1, 1, 1, 1, NULL, 2),
	(151, 21, 'idPerfil', 'checkbox', 'IdPerfil', 1, 1, 1, 1, 1, 1, NULL, 3),
	(152, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
	(153, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.data_types
CREATE TABLE IF NOT EXISTS `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.data_types: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
	(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2017-11-21 16:17:09', '2017-11-21 16:17:09'),
	(14, 'citas', 'citas', 'Cita', 'Citas', NULL, 'App\\Citas', NULL, 'CitaController', NULL, 1, 0, '2017-11-22 00:51:32', '2017-11-22 00:51:32'),
	(15, 'nino_tutor', 'nino-tutor', 'Nino Tutor', 'Nino Tutors', NULL, 'App\\Nino_tutor', NULL, 'Nino_TutorController', NULL, 1, 0, '2017-11-22 00:55:41', '2017-11-22 00:55:41'),
	(16, 'ninos', 'ninos', 'Nino', 'Ninos', NULL, 'App\\Ninos', NULL, 'NinoController', NULL, 1, 0, '2017-11-22 00:57:55', '2017-11-22 00:57:55'),
	(17, 'ordendiagnostico', 'ordendiagnostico', 'Ordendiagnostico', 'Ordendiagnosticos', NULL, 'App\\OrdenDiagnostico', NULL, 'OrdenDiagnosticoController', NULL, 1, 0, '2017-11-22 00:58:25', '2017-11-22 00:58:25'),
	(18, 'perfil', 'perfil', 'Perfil', 'Perfils', NULL, 'App\\Perfil', NULL, NULL, NULL, 1, 0, '2017-11-22 01:00:08', '2017-11-22 01:00:08'),
	(19, 'perfil_usuario', 'perfil-usuario', 'Perfil Usuario', 'Perfil Usuarios', NULL, 'App\\Perfil_Usuario', NULL, NULL, NULL, 1, 0, '2017-11-22 01:00:34', '2017-11-22 01:00:34'),
	(20, 'permiso', 'permiso', 'Permiso', 'Permisos', NULL, 'App\\Permiso', NULL, 'PermisosController', NULL, 1, 0, '2017-11-22 01:03:42', '2017-11-22 01:03:42'),
	(21, 'permiso_perfil', 'permiso-perfil', 'Permiso Perfil', 'Permiso Perfils', NULL, 'App\\Permiso_Perfil', NULL, NULL, NULL, 1, 0, '2017-11-22 01:06:51', '2017-11-22 01:06:51');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.menus: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2017-11-21 16:17:15', '2017-11-21 16:17:15');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.menu_items
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.menu_items: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
	(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2017-11-21 16:17:15', '2017-11-21 16:17:15', 'voyager.dashboard', NULL),
	(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2017-11-21 16:17:15', '2017-11-21 16:17:15', 'voyager.media.index', NULL),
	(3, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2017-11-21 16:17:15', '2017-11-21 16:17:15', 'voyager.posts.index', NULL),
	(4, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2017-11-21 16:17:15', '2017-11-21 16:17:15', 'voyager.users.index', NULL),
	(5, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2017-11-21 16:17:15', '2017-11-21 16:17:15', 'voyager.categories.index', NULL),
	(6, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2017-11-21 16:17:16', '2017-11-21 16:17:16', 'voyager.pages.index', NULL),
	(7, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2017-11-21 16:17:16', '2017-11-21 16:17:16', 'voyager.roles.index', NULL),
	(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2017-11-21 16:17:16', '2017-11-21 16:17:16', NULL, NULL),
	(9, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 8, 10, '2017-11-21 16:17:16', '2017-11-21 16:17:16', 'voyager.menus.index', NULL),
	(10, 1, 'Database', '', '_self', 'voyager-data', NULL, 8, 11, '2017-11-21 16:17:16', '2017-11-21 16:17:16', 'voyager.database.index', NULL),
	(11, 1, 'Compass', '/admin/compass', '_self', 'voyager-compass', NULL, 8, 12, '2017-11-21 16:17:16', '2017-11-21 16:17:16', NULL, NULL),
	(12, 1, 'Hooks', '/admin/hooks', '_self', 'voyager-hook', NULL, 8, 13, '2017-11-21 16:17:16', '2017-11-21 16:17:16', NULL, NULL),
	(13, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2017-11-21 16:17:16', '2017-11-21 16:17:16', 'voyager.settings.index', NULL),
	(14, 1, 'Citas', '/admin/citas', '_self', NULL, NULL, NULL, 15, '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL, NULL),
	(15, 1, 'Nino Tutors', '/admin/nino-tutor', '_self', NULL, NULL, NULL, 16, '2017-11-22 00:55:42', '2017-11-22 00:55:42', NULL, NULL),
	(16, 1, 'Ninos', '/admin/ninos', '_self', NULL, NULL, NULL, 17, '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL, NULL),
	(17, 1, 'Ordendiagnosticos', '/admin/ordendiagnostico', '_self', NULL, NULL, NULL, 18, '2017-11-22 00:58:26', '2017-11-22 00:58:26', NULL, NULL),
	(18, 1, 'Perfils', '/admin/perfil', '_self', NULL, NULL, NULL, 19, '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL, NULL),
	(19, 1, 'Perfil Usuarios', '/admin/perfil-usuario', '_self', NULL, NULL, NULL, 20, '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL, NULL),
	(20, 1, 'Permisos', '/admin/permiso', '_self', NULL, NULL, NULL, 21, '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL, NULL),
	(21, 1, 'Permiso Perfils', '/admin/permiso-perfil', '_self', NULL, NULL, NULL, 22, '2017-11-22 01:06:52', '2017-11-22 01:06:52', NULL, NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.migrations: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_01_01_000000_add_voyager_user_fields', 1),
	(4, '2016_01_01_000000_create_data_types_table', 1),
	(5, '2016_01_01_000000_create_pages_table', 1),
	(6, '2016_01_01_000000_create_posts_table', 1),
	(7, '2016_02_15_204651_create_categories_table', 1),
	(8, '2016_05_19_173453_create_menu_table', 1),
	(9, '2016_10_21_190000_create_roles_table', 1),
	(10, '2016_10_21_190000_create_settings_table', 1),
	(11, '2016_11_30_135954_create_permission_table', 1),
	(12, '2016_11_30_141208_create_permission_role_table', 1),
	(13, '2016_12_26_201236_data_types__add__server_side', 1),
	(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
	(15, '2017_01_14_005015_create_translations_table', 1),
	(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
	(17, '2017_01_15_000000_create_permission_groups_table', 1),
	(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
	(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
	(20, '2017_04_01_235927_Crear_tabla_perfil', 1),
	(21, '2017_04_01_235929_Crear_tabla_ninos', 1),
	(22, '2017_04_04_011623_Crear_tabla_orden_diagnostico', 1),
	(23, '2017_04_05_011648_Crear_tabla_anamnesis', 1),
	(24, '2017_04_08_011712_Crear_tabla_citas', 1),
	(25, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
	(26, '2017_04_21_000000_add_order_to_data_rows_table', 1),
	(27, '2017_05_01_235928_Crear_tabla_perfil_usuario', 1),
	(28, '2017_05_03_011735_Crear_tabla_nino-tutor', 1),
	(29, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
	(30, '2017_08_05_000000_add_group_to_settings_table', 1),
	(31, '2018_05_19_214658_Permiso', 1),
	(32, '2019_05_19_214651_Permiso_Perfil', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.ninos
CREATE TABLE IF NOT EXISTS `ninos` (
  `idNino` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idNino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.ninos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ninos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ninos` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.nino_tutor
CREATE TABLE IF NOT EXISTS `nino_tutor` (
  `idNinoTutor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNino` int(10) unsigned NOT NULL,
  `parentesco` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTutor` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idNinoTutor`),
  KEY `nino_tutor_idnino_foreign` (`idNino`),
  KEY `nino_tutor_idtutor_foreign` (`idTutor`),
  CONSTRAINT `nino_tutor_idnino_foreign` FOREIGN KEY (`idNino`) REFERENCES `ninos` (`idNino`),
  CONSTRAINT `nino_tutor_idtutor_foreign` FOREIGN KEY (`idTutor`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.nino_tutor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `nino_tutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `nino_tutor` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.ordendiagnostico
CREATE TABLE IF NOT EXISTS `ordendiagnostico` (
  `idOrdenDiagnostico` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNino` int(10) unsigned NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioridad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosticoProfesional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `derivacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicitud` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `escolaridad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prevision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escolaridadNino` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantHermanos` tinyint(4) DEFAULT NULL,
  `nombrePadre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombreMadre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dirección` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombreLlenadoFicha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoPorqueEvaluacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoExpectativas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoTipoDificultades` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoProfesionalActual` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoIntegrantesOcupaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoAntecendentesEnfermedadosFamiliares` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoDesarrolloEmbarazo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SemanasGestacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoParto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peso` tinyint(4) DEFAULT NULL,
  `talla` tinyint(4) DEFAULT NULL,
  `apgar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textopPrimerAñoVida` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedadesRelevantes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoMarcha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoControlEsfinter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoHabilidadesMotricesGruesas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoHabilidadesMotricesFinas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoAdquisicionLenguaje` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoDificultadesLenguaje` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoDesarrolloSocialAdultos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoDesarrolloSocialNinos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoQueTanAutonomo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opcionComer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opcionVestirse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opcionHigiene` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoHabitosAlimenticios` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoManifiestaEmociones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoManifiestaFrustracion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoFlexibilidadActividades` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoInteresesObjetosActividades` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoIntensidadMiedos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoHabitosSueño` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoInicioEscolaridad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoOtrosEstablecimientos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoEstablecimientoActual` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoNivelCursoActual` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoRepitencias` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoComentarios` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idOrdenDiagnostico`),
  KEY `ordendiagnostico_idnino_foreign` (`idNino`),
  CONSTRAINT `ordendiagnostico_idnino_foreign` FOREIGN KEY (`idNino`) REFERENCES `ninos` (`idNino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.ordendiagnostico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ordendiagnostico` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordendiagnostico` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.pages: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.perfil
CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombrePerfil` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.perfil: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` (`idPerfil`, `nombrePerfil`, `created_at`, `updated_at`) VALUES
	(1, 'Tutor', '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(2, 'Fonoaudiologo', '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(3, 'Psicologico', '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(4, 'Psicopedagogo', '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(5, 'TerapeutaOcupacional', '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(6, 'Administrador', '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(7, 'SuperAdministrador', '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(8, 'Secretaria', '2017-11-22 21:37:52', '2017-11-22 21:37:52'),
	(9, 'Secretaria', '2017-11-22 21:38:52', '2017-11-22 21:38:52');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.perfil_usuario
CREATE TABLE IF NOT EXISTS `perfil_usuario` (
  `idPerfilUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPerfil` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPerfilUsuario`),
  KEY `perfil_usuario_idperfil_foreign` (`idPerfil`),
  KEY `perfil_usuario_id_foreign` (`id`),
  CONSTRAINT `perfil_usuario_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  CONSTRAINT `perfil_usuario_idperfil_foreign` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.perfil_usuario: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `perfil_usuario` DISABLE KEYS */;
INSERT INTO `perfil_usuario` (`idPerfilUsuario`, `idPerfil`, `id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(2, 2, 2, '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(3, 3, 3, '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(4, 4, 4, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(5, 5, 5, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(6, 6, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(7, 7, 7, '2017-11-21 13:09:53', '2017-11-21 13:09:53'),
	(8, 8, 9, '2017-11-22 21:38:53', '2017-11-22 21:38:53'),
	(9, 9, 9, '2017-11-22 21:38:53', '2017-11-22 21:38:53');
/*!40000 ALTER TABLE `perfil_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.permiso
CREATE TABLE IF NOT EXISTS `permiso` (
  `idPermiso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombrePermiso` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPermiso`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.permiso: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
INSERT INTO `permiso` (`idPermiso`, `nombrePermiso`, `created_at`, `updated_at`) VALUES
	(1, 'IngresoNino', '2017-11-21 13:09:42', '2017-11-21 13:09:42'),
	(2, 'AsignarCitas', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(3, 'ingresoProfesional', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(4, 'ContactosPendientes', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(5, 'EvaluarCitas', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(6, 'IngresoTutor', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(7, 'GenerarAnamnesis', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(8, 'FinalizarInformeFinal', '2017-11-21 13:09:43', '2017-11-21 13:09:43'),
	(9, 'IngresoProfesional', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(10, 'LlenarInformeTutor', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(11, 'ModificarFichasNinos', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(12, 'ModificarProfesionales', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(13, 'EditarTutorPlus', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(14, 'EditarNinoPlus', '2017-11-21 13:09:44', '2017-11-21 13:09:44'),
	(15, 'EditarProfesional', '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(16, 'VisualizarInformesFinales', '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(17, 'MostrarCalendarioProfesional', '2017-11-21 13:09:45', '2017-11-21 13:09:45');
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.permiso_perfil
CREATE TABLE IF NOT EXISTS `permiso_perfil` (
  `idPermisoPerfil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPermiso` int(10) unsigned NOT NULL,
  `idPerfil` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPermisoPerfil`),
  KEY `permiso_perfil_idpermiso_foreign` (`idPermiso`),
  KEY `permiso_perfil_idperfil_foreign` (`idPerfil`),
  CONSTRAINT `permiso_perfil_idperfil_foreign` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`),
  CONSTRAINT `permiso_perfil_idpermiso_foreign` FOREIGN KEY (`idPermiso`) REFERENCES `permiso` (`idPermiso`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.permiso_perfil: ~36 rows (aproximadamente)
/*!40000 ALTER TABLE `permiso_perfil` DISABLE KEYS */;
INSERT INTO `permiso_perfil` (`idPermisoPerfil`, `idPermiso`, `idPerfil`, `created_at`, `updated_at`) VALUES
	(1, 16, 1, '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(2, 10, 1, '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(3, 5, 2, '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(4, 17, 2, '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(5, 5, 3, '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(6, 17, 3, '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(7, 5, 4, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(8, 17, 4, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(9, 5, 5, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(10, 17, 5, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(11, 1, 6, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(12, 3, 6, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(13, 9, 6, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(15, 2, 6, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(16, 4, 6, '2017-11-21 13:09:49', '2017-11-21 13:09:49'),
	(17, 6, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(18, 7, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(19, 3, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(20, 9, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(22, 11, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(23, 12, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(24, 13, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(25, 14, 6, '2017-11-21 13:09:50', '2017-11-21 13:09:50'),
	(26, 15, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(27, 8, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(28, 16, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(29, 5, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(30, 17, 6, '2017-11-21 13:09:51', '2017-11-21 13:09:51'),
	(31, 1, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(32, 3, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(33, 9, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(35, 2, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(36, 4, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(37, 6, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(38, 3, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(39, 9, 7, '2017-11-21 13:09:52', '2017-11-21 13:09:52'),
	(40, 1, 8, '2017-11-22 21:38:53', '2017-11-22 21:38:53'),
	(41, 1, 9, '2017-11-22 21:38:53', '2017-11-22 21:38:53');
/*!40000 ALTER TABLE `permiso_perfil` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.permissions: ~76 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
	(1, 'browse_admin', NULL, '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(2, 'browse_database', NULL, '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(3, 'browse_media', NULL, '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(4, 'browse_compass', NULL, '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(5, 'browse_menus', 'menus', '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(6, 'read_menus', 'menus', '2017-11-21 16:17:17', '2017-11-21 16:17:17', NULL),
	(7, 'edit_menus', 'menus', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(8, 'add_menus', 'menus', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(9, 'delete_menus', 'menus', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(10, 'browse_pages', 'pages', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(11, 'read_pages', 'pages', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(12, 'edit_pages', 'pages', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(13, 'add_pages', 'pages', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(14, 'delete_pages', 'pages', '2017-11-21 16:17:18', '2017-11-21 16:17:18', NULL),
	(15, 'browse_roles', 'roles', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(16, 'read_roles', 'roles', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(17, 'edit_roles', 'roles', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(18, 'add_roles', 'roles', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(19, 'delete_roles', 'roles', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(20, 'browse_users', 'users', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(21, 'read_users', 'users', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(22, 'edit_users', 'users', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(23, 'add_users', 'users', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(24, 'delete_users', 'users', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(25, 'browse_posts', 'posts', '2017-11-21 16:17:19', '2017-11-21 16:17:19', NULL),
	(26, 'read_posts', 'posts', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(27, 'edit_posts', 'posts', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(28, 'add_posts', 'posts', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(29, 'delete_posts', 'posts', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(30, 'browse_categories', 'categories', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(31, 'read_categories', 'categories', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(32, 'edit_categories', 'categories', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(33, 'add_categories', 'categories', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(34, 'delete_categories', 'categories', '2017-11-21 16:17:20', '2017-11-21 16:17:20', NULL),
	(35, 'browse_settings', 'settings', '2017-11-21 16:17:21', '2017-11-21 16:17:21', NULL),
	(36, 'read_settings', 'settings', '2017-11-21 16:17:21', '2017-11-21 16:17:21', NULL),
	(37, 'edit_settings', 'settings', '2017-11-21 16:17:21', '2017-11-21 16:17:21', NULL),
	(38, 'add_settings', 'settings', '2017-11-21 16:17:21', '2017-11-21 16:17:21', NULL),
	(39, 'delete_settings', 'settings', '2017-11-21 16:17:21', '2017-11-21 16:17:21', NULL),
	(40, 'browse_citas', 'citas', '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL),
	(41, 'read_citas', 'citas', '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL),
	(42, 'edit_citas', 'citas', '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL),
	(43, 'add_citas', 'citas', '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL),
	(44, 'delete_citas', 'citas', '2017-11-22 00:51:33', '2017-11-22 00:51:33', NULL),
	(45, 'browse_nino_tutor', 'nino_tutor', '2017-11-22 00:55:41', '2017-11-22 00:55:41', NULL),
	(46, 'read_nino_tutor', 'nino_tutor', '2017-11-22 00:55:41', '2017-11-22 00:55:41', NULL),
	(47, 'edit_nino_tutor', 'nino_tutor', '2017-11-22 00:55:41', '2017-11-22 00:55:41', NULL),
	(48, 'add_nino_tutor', 'nino_tutor', '2017-11-22 00:55:41', '2017-11-22 00:55:41', NULL),
	(49, 'delete_nino_tutor', 'nino_tutor', '2017-11-22 00:55:41', '2017-11-22 00:55:41', NULL),
	(50, 'browse_ninos', 'ninos', '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL),
	(51, 'read_ninos', 'ninos', '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL),
	(52, 'edit_ninos', 'ninos', '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL),
	(53, 'add_ninos', 'ninos', '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL),
	(54, 'delete_ninos', 'ninos', '2017-11-22 00:57:55', '2017-11-22 00:57:55', NULL),
	(55, 'browse_ordendiagnostico', 'ordendiagnostico', '2017-11-22 00:58:25', '2017-11-22 00:58:25', NULL),
	(56, 'read_ordendiagnostico', 'ordendiagnostico', '2017-11-22 00:58:25', '2017-11-22 00:58:25', NULL),
	(57, 'edit_ordendiagnostico', 'ordendiagnostico', '2017-11-22 00:58:25', '2017-11-22 00:58:25', NULL),
	(58, 'add_ordendiagnostico', 'ordendiagnostico', '2017-11-22 00:58:25', '2017-11-22 00:58:25', NULL),
	(59, 'delete_ordendiagnostico', 'ordendiagnostico', '2017-11-22 00:58:25', '2017-11-22 00:58:25', NULL),
	(60, 'browse_perfil', 'perfil', '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL),
	(61, 'read_perfil', 'perfil', '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL),
	(62, 'edit_perfil', 'perfil', '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL),
	(63, 'add_perfil', 'perfil', '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL),
	(64, 'delete_perfil', 'perfil', '2017-11-22 01:00:08', '2017-11-22 01:00:08', NULL),
	(65, 'browse_perfil_usuario', 'perfil_usuario', '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL),
	(66, 'read_perfil_usuario', 'perfil_usuario', '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL),
	(67, 'edit_perfil_usuario', 'perfil_usuario', '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL),
	(68, 'add_perfil_usuario', 'perfil_usuario', '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL),
	(69, 'delete_perfil_usuario', 'perfil_usuario', '2017-11-22 01:00:34', '2017-11-22 01:00:34', NULL),
	(70, 'browse_permiso', 'permiso', '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL),
	(71, 'read_permiso', 'permiso', '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL),
	(72, 'edit_permiso', 'permiso', '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL),
	(73, 'add_permiso', 'permiso', '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL),
	(74, 'delete_permiso', 'permiso', '2017-11-22 01:03:43', '2017-11-22 01:03:43', NULL),
	(75, 'browse_permiso_perfil', 'permiso_perfil', '2017-11-22 01:06:51', '2017-11-22 01:06:51', NULL),
	(76, 'read_permiso_perfil', 'permiso_perfil', '2017-11-22 01:06:51', '2017-11-22 01:06:51', NULL),
	(77, 'edit_permiso_perfil', 'permiso_perfil', '2017-11-22 01:06:51', '2017-11-22 01:06:51', NULL),
	(78, 'add_permiso_perfil', 'permiso_perfil', '2017-11-22 01:06:51', '2017-11-22 01:06:51', NULL),
	(79, 'delete_permiso_perfil', 'permiso_perfil', '2017-11-22 01:06:51', '2017-11-22 01:06:51', NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.permission_groups
CREATE TABLE IF NOT EXISTS `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.permission_groups: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.permission_role: ~79 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(55, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(61, 1),
	(62, 1),
	(63, 1),
	(64, 1),
	(65, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.posts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrator', '2017-11-21 16:11:15', '2017-11-21 16:11:15'),
	(2, 'user', 'Normal User', '2017-11-21 16:17:16', '2017-11-21 16:17:16');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.settings: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.translations
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.translations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;

-- Volcando estructura para tabla proyectocolegio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `rut` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `profesion` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_rut_unique` (`rut`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectocolegio.users: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `rut`, `name`, `apellidos`, `email`, `avatar`, `password`, `telefono`, `profesion`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, NULL, '12345', 'TutorNombre', 'TutorApellido', 'tutormail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'Tutor', NULL, '2017-11-21 13:09:45', '2017-11-21 13:09:45'),
	(2, NULL, '1236789', 'FonoNombre', 'FonoApellido', 'fonomail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'Fonoaudiologo', NULL, '2017-11-21 13:09:46', '2017-11-21 13:09:46'),
	(3, NULL, '1456789', 'psicologicoNombre', 'psicologicoApellido', 'psicologicomail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'Psicologico', NULL, '2017-11-21 13:09:47', '2017-11-21 13:09:47'),
	(4, NULL, '145678912312', 'psicopedagogoNombre', 'psicopedagogoApellido', 'psicopedagogomail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'Psicopedagogo', NULL, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(5, NULL, '11242567289', 'terapeutaOcupacionalNombre', 'terapeutaOcupacionalApellido', 'terapeutaocupacionalmail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'TerapeutaOcupacional', NULL, '2017-11-21 13:09:48', '2017-11-21 13:09:48'),
	(6, 1, '12789', 'AdminNombre', 'AdminApellido', 'adminmail@gmail.com', 'users/default.png', '$2y$10$2oT2cRDjQbnJ86qfDahkBe6QxiQlZE7TkRocPnSV1KijVT514P202', NULL, 'Administrador', 'VfNjLo1nuf94ds4DkizHElD3yedSGNCgqi4Hw6CRYO1Nb9uYIbGJcMrzi4em', '2017-11-21 13:09:51', '2017-11-21 16:39:15'),
	(7, NULL, '1234567893', 'SuperNombre', 'SuperApellido', 'supermail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'SuperAdministrador', NULL, '2017-11-21 13:09:53', '2017-11-21 13:09:53'),
	(9, NULL, '1234567894', 'SecretariaNombre', 'SecretariaApellido', 'secretariamail@gmail.com', 'users/default.png', '$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe', NULL, 'Secretaria', NULL, '2017-11-22 21:38:53', '2017-11-22 21:38:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
