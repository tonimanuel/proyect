-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 22:52:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesta`
--

CREATE TABLE `cesta` (
  `idCesta` int(11) NOT NULL,
  `PrecioTotal` decimal(10,0) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `idItem` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `PrecioItem` decimal(10,0) NOT NULL,
  `idCesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `idPlataforma` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Lanzamiento` date NOT NULL,
  `Precio` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` longtext COLLATE utf8_bin NOT NULL,
  `Imagen` varchar(2050) COLLATE utf8_bin DEFAULT NULL COMMENT 'Imagen de la plataforma',
  `Logo` varchar(2050) COLLATE utf8_bin NOT NULL COMMENT 'Logo de la consola'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`idPlataforma`, `Nombre`, `Lanzamiento`, `Precio`, `Stock`, `Descripcion`, `Imagen`, `Logo`) VALUES
(2, 'Nintendo Switch', '2017-03-17', 329, 25, 'Nintendo Switch  es la octava consola de videojuegos principal desarrollada por Nintendo. Conocida en el desarrollo por su nombre codigo UNiX, se dio a conocer en octubre de 2016 y fue lanzada mundialmente el 3 de marzo de 2017. Nintendo considera a Switch una consola hibrida. Se puede utilizar como consola de sobremesa con la unidad principal insertada en una estacion de acoplamiento para conectarla con un televisor. Alternativamente, puede ser extraida de la base y utilizada de forma similar a una tableta a traves de su pantalla tactil LCD, o colocada sobre una superficie gracias a su soporte plastico integrado siendo asi visible por varios jugadores. La Switch utiliza dos controladores inalambricos llamados en conjunto Joy-Con, que incluyen cuatro botones de accion estandar y un joystick direccional, asi como sensores para la deteccion de movimiento y retroalimentacion tactil de alta definicion, aunque se diferencian en algunos botones y caracteristicas adicionales. Dos Joy-Con pueden conectarse uno a cada lado de la consola para usarse como consola portatil, conectarse al accesorio Grip proporcionado junto a la consola para usarlos como un mando mas tradicional, o ser utilizados individualmente en la mano como el mando Wii, y de esta forma usarse con juegos multijugador locales. Tambien puede utilizar ciertos controles inal?mbricos y/o alambricos que no incluye la consola, adoptado como Pro Controller, que incluyen las mismas caracteristicas que los mandos tradicionales a excepci?n de que este incluye deteccion NFC para Amiibo y vibracion HD.   Los juegos para esta consola y otras aplicaciones estan disponibles como cartuchos fisicos ROM de flash y como distribucion digital, y no utilizan bloqueo de region, por lo que puedes comprar juegos de cualquier mercado.  ', 'imagenes/nintendo switch.jpg', 'imagenes/switch logo.png'),
(3, 'Playstation 5', '2020-11-23', 499, 0, 'PlayStation 5 es una consola de videojuegos de sobremesa desarrollada por Sony Interactive Entertainment. Es la sucesora de la PlayStation 4, y se lanzo el 12 de noviembre de 2020 en Norteamerica, Japon, Australasia y Corea del Sur, mientras que fue lanzada el 19 de noviembre de 2020 en el resto del mundo.   Es la quinta consola de sobremesa de la marca PlayStation y la tercera en ser diseñada por Mark Cerny. Desde su lanzamiento la consola ha contado con dos modelos: una consola PlayStation 5 con lector de discos BD UHD-ROM y tambien para la funcion multimedia, y una versi?n digital llamada, PlayStation 5 Digital Edition sin el lector.   La consola PS5 compite contra las consolas Xbox Series X|S de Microsoft y Switch de Nintendo para abrir paso a la novena generacion de videojuegos.   La PlayStation 5 utiliza el mismo tipo de CPU de la marca AMD que la PlayStation 4, pero introduce una unidad de estado salido (SSD) personalizada diseñada para la transmision de datos de alta velocidad que permiten mejoras significativas en el rendimiento gráfico. El hardware también incluye una GPU AMD personalizada que posibilita la renderizacion por trazado de rayos, soporte para pantallas de resolucion 4K y una alta tasa de fotogramas por segundo, efectos de audio 3D en tiempo real y retrocompatibilidad con la mayor?a de los videojuegos para PlayStation 4 y PlayStation VR.   ', 'imagenes/playstation 5.jpg', 'imagenes/ps5 logo.jpg'),
(4, 'Playstation 4', '2013-11-29', 399, 15, 'PlayStation 4 oficialmente abreviada como PS4) es la cuarta videoconsola del modelo PlayStation.8 Es la segunda consola de Sony en ser diseñada por Mark Cerny y forma parte de las videoconsolas de octava generacion. Fue anunciada oficialmente el 20 de febrero de 2013 en el evento PlayStation Meeting 2013,9 aunque el diseño de la consola no fue presentado hasta el 10 de junio en el E3 2013.10 Es la sucesora de la PlayStation 3 y compite con Wii U y Switch de Nintendo y Xbox One de Microsoft. Su lanzamiento fue el 15 de noviembre de 2013 en Estados Unidos y en Europa y Sudamerica fue el 29 de noviembre de 2013,119 mientras que en Japon fue el 22 de febrero de 2014.2   Alejandose de la compleja arquitectura utilizada en el procesador Cell de la videoconsola PlayStation 3, la PlayStation 4 cuenta con un procesador AMD de 8 nucleos bajo la arquitectura x86-64. Estas instrucciones x86-64 est?n dise?ados para hacer mas ficil el desarrollo de videojuegos en la consola de nueva generacion, que atrae a un mayor numero de desarrolladores. Estos cambios ponen de manifiesto el esfuerzo de Sony para mejorar las lecciones aprendidas durante el desarrollo, la producci?n y el lanzamiento de la PS3. Otras caracter?sticas de hardware notables de la PS4 es que incluyen 8 GB de memoria unificada GDDR5, una unidad de disco Blu-ray m?s r?pido, y los chips personalizados dedicados a tareas de procesamiento de audio, v?deo y de fondo.   Entre las nuevas aplicaciones y servicios, Sony lanz? la aplicaci?n PlayStation App, permitiendo a los que tengan una PS4 convertir los tel?fonos inteligentes y las tabletas en una segunda pantalla para mejorar la jugabilidad o en teclados externos para m?s comodidad en el momento de escribir. La compa??a tambi?n planeaba debutar con Gaikai, un servicio de juego basado en la nube que aloja contenidos y juegos descargables. Mediante la incorporacion del boton \"Share\" en el nuevo controlador hace que sea posible compartir en cualquier momento capturas de pantalla, trofeos, compras o videos en paginas como Facebook, Twitter y hacer stream de lo que se juegue y ver el de otros amigos en directo desde Ustream o Twitch, Sony plane? colocar mas énfasis en el juego social. La consola PS4 el primer d?a de su lanzamiento vendi? mas de 1 millon de consolas solo en territorio de los Estados Unidos.12 Al inicio de su conferencia de prensa en la Gamescom 2014, Sony anuncio que ya habia vendido mas de 10 000 000 unidades de la PlayStation 4 en el mundo a usuarios finales. Esta diseñada para la amplia integracion con PlayStation Vita.  ', 'imagenes/playstation 4.jpg', 'imagenes/logo play 4.jpg'),
(5, 'Playstation', '1995-09-29', 429, 3, 'PlayStation es la primera videoconsola de Sony, y la primera de dicha compa??a en ser dise?ada por Ken Kutaragi, y es una videoconsola de sobremesa de 32 bits lanzada por Sony Computer Entertainment el 3 de diciembre de 1994 en Jap?n. Se considera la videoconsola m?s exitosa de la quinta generaci?n tanto en ventas como en popularidad. Adem?s de la original, en el a?o 2000 se lanz? la PSone (tambi?n llamado modelo slim). Tuvo gran ?xito al implantar el CD-ROM dentro de su hardware a pesar de que otras compa??as como SEGA (Sega CD), Panasonic (3DO), Philips (CD-i), SNK (Neo Geo CD), NEC (Super CD-ROM) y Atari (Atari Jaguar) ya lo hab?an empleado. Dichas compa??as tuvieron poco ?xito al utilizar el CD-ROM como soporte para almacenar juegos. Se estima que Sony pudo vender 105 500 000 unidades de su videoconsola en diez a?os. La consola fue retirada oficialmente del mercado el 23 de marzo de 2006.', 'imagenes/playstation 1.jpg', 'imagenes/play 1 logo.png'),
(6, 'Game Cube', '2002-05-03', 199, 9, 'Nintendo GameCube tambi?n llamada simplemente GameCube y abreviada como GCN en Am?rica y NGC en Jap?n, es la quinta consola de sobremesa hecha por Nintendo. Es la sucesora del Nintendo 64 y la predecesora del Wii.   Sus principales caracter?sticas son su procesador central basado en un IBM PowerPC (tecnolog?a previa utilizada en computadoras personales y port?tiles), y su procesador gr?fico desarrollado por ATI Technologies. Nintendo, por primera vez, prescinde del cartucho (ROM) como formato de almacenamiento, y adopta un formato ?ptico propio, el Nintendo Optical Disc. El nombre ?GameCube? se debe a que el sistema tiene la forma parecida a la de un cubo. Es adem?s la primera consola de Nintendo que no cuenta en su fecha de lanzamiento con un juego de Mario, mascota oficial de la compa??a.   La consola fue lanzada el 14 de septiembre de 2001 en Jap?n, el 18 de noviembre de 2001 en Norteam?rica, el 3 de mayo de 2002 en Europa y el 17 de mayo de 2002 en Australia. Fue descontinuada el 28 de octubre de 2007 en Jap?n, el 17 de mayo de 2008 en Europa y el 15 de junio de 2008 en Norteam?rica y el ?ltimo videojuego fue Madden NFL 08.56 Seg?n las cifras oficiales, el GameCube logr? vender 21 740 000 unidades mundialmente.   ', 'imagenes/game cube.jpg', 'imagenes/game cube logo.png'),
(7, 'Nintendo 3DS', '2011-02-26', 250, 9, 'Nintendo 3DS es una videoconsola port?til de la multinacional de origen japon?s, Nintendo, para videojuegos y multimedia, cuya atracci?n principal es poder mostrar gr?ficos en 3D sin necesidad de gafas especiales, gracias a la autoestereoscopia.10 La consola es retrocompatible con la Nintendo DS y con el software de DSiWare.10 Tras haberse anunciado en 2010, Nintendo lo present? oficialmente en el E3 2010,1011 llevando consolas de prueba para los asistentes al evento.12 La consola es la sucesora de la serie port?til Nintendo DS10 y compiti? principalmente con su ?nico rival en el mercado, la PlayStation Vita de Sony.13   Nintendo 3DS fue lanzada el 26 de febrero de 2011 en Jap?n; el 25 de marzo de 2011 en Europa; el 27 de marzo de 2011 en Am?rica del Norte;1415 y en Australia el 31 de marzo de 2011. El 28 de julio de 2011, Nintendo anunci? una bajada dr?stica de precio que ser?a efectiva desde el 12 de agosto. Como compensaci?n, los compradores que la hubieran adquirido antes de la bajada de precio recibir?an gratuitamente diez juegos de Nintendo Entertainment System desde el 1 de septiembre de 2011 y otros 10 de Game Boy Advance desde el 16 de diciembre, descargables desde la Nintendo eShop.16   El 17 de septiembre de 2020, Nintendo anunci? el cese de producci?n de la Nintendo 2DS XL, la ?nica consola de la Familia Nintendo 3DS que quedaba en producci?n en ese entonces, dando fin a la Familia Nintendo 3DS y centr?ndose completamente en la familia Nintendo Switch  ', 'imagenes/nintendo 3ds.jpg', 'imagenes/logo 3ds.jpg'),
(8, 'Wii U', '2012-11-30', 299, 15, 'Wii U con nombre clave Project Caf?,9 es una consola perteneciente a la octava generaci?n de videoconsolas,10111213 siendo la s?ptima consola de sobremesa creada por Nintendo y directa sucesora de Wii.9 La consola fue lanzada el 18 de noviembre de 2012 en terreno norteamericano siendo su fecha de apertura.1415 Se present? en la conferencia de Nintendo durante el Electronic Entertainment Expo 2011 el 7 de junio de 2011.16Compet?a principalmente con la PlayStation 4 de Sony y la Xbox One de Microsoft.   Wii U es la primera consola de Nintendo en producir gr?ficos en alta definici?n hasta una resoluci?n de 1080p. Incluye un nuevo mando que incorpora una pantalla t?ctil que recibe se?al en calidad 480p de la consola, lo que permite seguir jugando incluso cuando el televisor est? apagado. A este nuevo mando se le ha denominado: Wii U GamePad. El sistema es retrocompatible con los juegos de Wii, y soporta los perif?ricos de Wii, como el Wiimote o la Wii Balance Board e incluyendo la tecnolog?a NFC,17 adem?s de que es compatible con las figuras y cartas amiibo como accesorio propio (tambi?n compatibles en la Nintendo 3DS, que modifican la forma de jugar videojuegos). Sin embargo, no es retrocompatible con los perif?ricos de Nintendo GameCube (a excepci?n del mando que se conecta mediante un adaptador) pero tiene capacidad de descargar los videojuegos desde la consola virtual.18   A finales de mayo de 2017, Nintendo ces? la fabricaci?n de la consola Wii U. El ?ltimo videojuego publicado para la consola Wii U fue The Legend of Zelda: Breath of the Wild.  ', 'imagenes/wii u.jpg', 'imagenes/Wii-u.png'),
(9, 'Playstation 2', '2000-11-24', 450, 5, 'La PlayStation 2 (oficialmente abreviada como PS2) es la segunda videoconsola de sobremesa producida por Sony Computer Entertainment, y la tercera consola de Sony en ser dise?ada por Ken Kutaragi. Adem?s de ser la sucesora de la PlayStation.   Fue lanzada por primera vez el 4 de marzo del a?o 2000 en Jap?n, y unos meses despu?s en el resto del mundo. Es la videoconsola m?s vendida de la historia, con m?s de 160 millones de unidades vendidas. Esta consola es tambi?n la que m?s t?tulos posee, aproximadamente 3870 t?tulos, seguida por su predecesora la PlayStation con unos 2500 t?tulos. Esta cantidad de t?tulos dada la extraordinaria acogida por parte del p?blico en general hacia la misma, lo que incluso la consolid? como la consola con m?s tiempo en el mercado y a su vez la consola con m?s duraci?n en el mismo, hasta que el 3 de enero del a?o 2013 se decide detener su fabricaci?n tras 13 a?os de actividad    ', 'imagenes/playstation 2.jpg', 'imagenes/logo play 2.png'),
(10, 'PC', '1980-04-04', 1500, 6, 'Una computadora personal, computador personal u ordenador, conocida como PC (siglas en ingles de Personal Computer), es un tipo de microcomputadora diseñada en principio para ser utilizada por una sola persona. Habitualmente, la sigla PC se refiere a las computadoras IBM PC compatibles. Una computadora personal es generalmente de tama?o medio y es usada por un solo usuario (aunque hay sistemas operativos que permiten varios usuarios simultaneamente, lo que es conocido como multiusuario). Suele denominarse ordenador de sobremesa, debido a su posicion estetica e imposibilidad de transporte a diferencia de un ordenador portatil.    Una computadora personal suele estar equipada para cumplir tareas comunes de la informatica moderna, es decir, permite navegar por Internet, estudiar, escribir textos y realizar otros trabajos de oficina o educativos, como editar textos y bases de datos, a ocho demos de actividades de ocio, como escuchar musica, ver videos, jugar, etc. En cuanto a su movilidad podemos distinguir entre computadora de escritorio y computadora portatil. ', 'imagenes/pc.jpg', 'imagenes/logo pc.png'),
(11, 'Super Nintendo', '1992-06-12', 180, 12, 'La Super Nintendo Entertainment System, conocida popularmente como la Super Nintendo, tambi?n llamada la Super Famicom (japon?s: ?????????, Hepburn: Supa Famikon) en Jap?n7? (abreviada SFC) y la Hyundai Super Comboy (hangul: ?? ?? ???, romanizaci?n revisada: Hyeondae Syupeo Keomboi) en Corea del Sur,8? tambi?n nombrada oficialmente de forma abreviada como la Super NES o SNES en Am?rica9? y como la Super Nintendo en Europa,10? es la tercera videoconsola de sobremesa de Nintendo y la sucesora de Nintendo Entertainment System (NES) en Am?rica y Europa. Mantuvo una gran rivalidad en todo el mundo con la Sega Mega Drive (o Sega Genesis) durante la era de 16 bits. Fue descontinuada en el a?o 1999 (2003 en Jap?n)11? y a?os m?s tarde, fue relanzada virtualmente a trav?s de la Consola Virtual en la Wii en 2006, Wii U en 2013, Nintendo 3DS (solo la versi?n New) en 2016 y Nintendo Switch en 2019 (no a trav?s de la Consola Virtual, si no a trav?s del servicio en l?nea Nintendo Switch Online).    Fue la m?s exitosa y vendida de la era de los 16 bits. Gracias al chip Super FX, la SNES tuvo los primeros videojuegos totalmente tridimensionales en la consola, siendo Star Fox el primer videojuego para consola de videojuegos con gr?ficos completamente tridimensionales', 'imagenes/super nintendo.jpg', 'imagenes/super nintnedo logo.png'),
(41, 'antonio', '0000-00-00', 40, 27, 'juego', 'imagenes/', 'imagenes/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `IdVideojuego` int(11) NOT NULL,
  `IdPlataforma` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Precio` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'El usuario debe ser ?nico en la Base de Datos. Adem?s debe tener una longitud m?nima de 6 caracteres.',
  `Password` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'La contrase?a no puede ser nula.\nTiene que tener una longitud m?nima de 8 caracteres, contener n?meros y alg?n car?cter especial de la siguiente lista (!,@,#,$,%,&,?,?,*,?)',
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Apellido1` varchar(45) COLLATE utf8_bin NOT NULL,
  `Apellido2` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Telefono` varchar(10) COLLATE utf8_bin NOT NULL COMMENT 'Se comprobar? que solo puedan ser tel?fonos nacionales',
  `Email` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Se comprobar? que es un email v?lido',
  `CP` varchar(5) COLLATE utf8_bin NOT NULL,
  `Provincia` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Se comprobar? que la provincia introducida concuerda con el CP introducido',
  `ComunidadAutonoma` varchar(45) COLLATE utf8_bin NOT NULL COMMENT 'Se comprobar? que la provincia seleccionada pertenece a la comunidad aut?noma correspondiente',
  `Rol` varchar(45) COLLATE utf8_bin NOT NULL,
  `Dni` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Password`, `Nombre`, `Apellido1`, `Apellido2`, `Telefono`, `Email`, `CP`, `Provincia`, `ComunidadAutonoma`, `Rol`, `Dni`) VALUES
(10, 'Administrador', '1@2Baaaa', 'Admin', 'Admin', 'Admin', '123548754', 'admin@gmail.com', '<br /', 'Melilla', 'Melilla', 'admin', '45314595K'),
(12, 'antonio', 'Alumno2021.', 'Antonio', 'Martinez ', 'El mouanid', '606743856', 'tonimanuel4@gmail.com', '<br /', 'Melilla', 'Melilla', 'usuario', '45313662M'),
(13, '', '', '', '', '', '', '', '', '', '', 'usuario', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `idVideojuego` int(11) NOT NULL,
  `Titulo` varchar(45) COLLATE utf8_bin NOT NULL,
  `Compania` varchar(45) COLLATE utf8_bin NOT NULL,
  `Publicacion` date NOT NULL,
  `Descripcion` longtext COLLATE utf8_bin NOT NULL,
  `Imagen` varchar(2050) COLLATE utf8_bin DEFAULT NULL COMMENT 'Url de la imagen de la car?tula del juego'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVideojuego`, `Titulo`, `Compania`, `Publicacion`, `Descripcion`, `Imagen`) VALUES
(1, 'The Legend of Zelda: Ocarina of Time', 'The Legend of Zelda: Ocarina of Time', '1998-11-28', 'The Legend of Zelda: Ocarina of Time es un videojuego de acción-aventura de 1998 desarrollado por la filial Nintendo EAD y publicado por Nintendo para la consola Nintendo 64', 'imagenes/zelda ocarina of time.jpg'),
(2, 'Fortnite', 'Nintendo', '2017-04-27', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor de juego y mecánicas', 'imagenes/fortnite.jpg'),
(3, 'The Legend of Zelda: The wind waker', 'Nintendo', '2017-03-04', 'Abre los ojos. Despierta, Link Cinco a?os despu?s de la ?ltima entrega original para sobremesa, el futuro de la serie The Legend of Zelda llega a Nintendo Switch y Wii U replanteando por completo las bases de la saga. Producido por Eiji Aonuma, The Legend of Zelda: Breath of the Wild te sumergir? en un mundo de descubrimiento con un impresionante estilo art?stico similar a The Wind Waker o Skyward Sword, una cautivadora banda sonora y una intrigante y melanc?lica historia. Despierta tras un siglo de letargo, ad?ntrate en el Hyrule m?s amplio y abierto jam?s creado por las tres grandes Diosas y forja tu propio camino con el orden y aventuras que quieras. La historia de la familia real de Hyrule es tambi?n la historia del cataclismo. Y la historia del cataclismo siempre ha sido la de Ganon. Descubre el enigm?tico pasado de esta asolada tierra, un mundo entero repleto de aventuras que espera ser explorado, y viaja como Link por bastos campos, espesos bosques y cumbres nevadas bajo el cielo abierto de Hyrule para revelar c?mo la oscuridad se impuso sobre la luz. Caracter?sticas: Olvida todas las convenciones de The Legend of Zelda y ad?ntrate en un enorme y abierto Hyrule, lucha contra temibles enemigos, caza feroces bestias y recolecta ingredientes para preparar comidas y elixires con los que subsistir. Resuelve los puzles que albergan los m?s de cien santuarios diferentes, ?brete camino entre sus trampas y consigue objetos especiales e ?tems que te ser?n de ayuda en tu recorrido. Prep?rate a conciencia y aprovecha las cualidades de variados atuendos  equipamiento para adaptarte al clima o aprovechar efectos especiales como ser m?s r?pido o m?s sigiloso. Pon a prueba tu capacidad estrat?gica utilizando a tu favor el entorno y elaborando las estrategias adecuadas con las que acabar con enemigos de todas las formas y tama?os. Como es peligroso ir solo. ?Lleva un amiibo! The Legend of Zelda: Breath of the Wild es compatible con figuras amiibo de la serie que te otorgar?n recompensas en forma de cofres o, con la figura Link Lobo de Twilight Princess, recibe la asistencia del temible animal para luchar contra enemigos o encontrar m?s f?cilmente objetos. The Legend of Zelda es una serie de videojuegos de acci?n-aventura creada por los dise?adores japoneses Shigeru Miyamoto y Takashi Tezuka,? y desarrollada por Nintendo, empresa que tambi?n se encarga de su distribuci?n internacional. Su trama por lo general describe las heroicas aventuras del joven guerrero Link, que debe enfrentarse a peligros y resolver acertijos para ayudar a la Princesa Zelda a derrotar a Ganondorf y salvar su hogar, el reino de Hyrule. Entra en un mundo de aventura Olvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploraci?n y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe con las convenciones. Viaja por praderas, bosques y cumbres monta?osas para descubrir qu? ha sido del asolado reino de Hyrule en esta maravillosa aventura a cielo abierto.', 'imagenes/zelda the wind waker.jpg'),
(4, 'The Legend of Zelda: Breath of the Wild', 'Nintendo', '2017-03-04', 'Abre los ojos. Despierta, Link Cinco a?os despu?s de la ?ltima entrega original para sobremesa, el futuro de la serie The Legend of Zelda llega a Nintendo Switch y Wii U replanteando por completo las bases de la saga. Producido por Eiji Aonuma, The Legend of Zelda: Breath of the Wild te sumergir? en un mundo de descubrimiento con un impresionante estilo art?stico similar a The Wind Waker o Skyward Sword, una cautivadora banda sonora y una intrigante y melanc?lica historia. Despierta tras un siglo de letargo, ad?ntrate en el Hyrule m?s amplio y abierto jam?s creado por las tres grandes Diosas y forja tu propio camino con el orden y aventuras que quieras. La historia de la familia real de Hyrule es tambi?n la historia del cataclismo. Y la historia del cataclismo siempre ha sido la de Ganon. Descubre el enigm?tico pasado de esta asolada tierra, un mundo entero repleto de aventuras que espera ser explorado, y viaja como Link por bastos campos, espesos bosques y cumbres nevadas bajo el cielo abierto de Hyrule para revelar c?mo la oscuridad se impuso sobre la luz. Caracter?sticas: Olvida todas las convenciones de The Legend of Zelda y ad?ntrate en un enorme y abierto Hyrule, lucha contra temibles enemigos, caza feroces bestias y recolecta ingredientes para preparar comidas y elixires con los que subsistir. Resuelve los puzles que albergan los m?s de cien santuarios diferentes, ?brete camino entre sus trampas y consigue objetos especiales e ?tems que te ser?n de ayuda en tu recorrido. Prep?rate a conciencia y aprovecha las cualidades de variados atuendos  equipamiento para adaptarte al clima o aprovechar efectos especiales como ser m?s r?pido o m?s sigiloso. Pon a prueba tu capacidad estrat?gica utilizando a tu favor el entorno y elaborando las estrategias adecuadas con las que acabar con enemigos de todas las formas y tama?os. Como es peligroso ir solo. ?Lleva un amiibo! The Legend of Zelda: Breath of the Wild es compatible con figuras amiibo de la serie que te otorgar?n recompensas en forma de cofres o, con la figura Link Lobo de Twilight Princess, recibe la asistencia del temible animal para luchar contra enemigos o encontrar m?s f?cilmente objetos. The Legend of Zelda es una serie de videojuegos de acci?n-aventura creada por los dise?adores japoneses Shigeru Miyamoto y Takashi Tezuka,? y desarrollada por Nintendo, empresa que tambi?n se encarga de su distribuci?n internacional. Su trama por lo general describe las heroicas aventuras del joven guerrero Link, que debe enfrentarse a peligros y resolver acertijos para ayudar a la Princesa Zelda a derrotar a Ganondorf y salvar su hogar, el reino de Hyrule. Entra en un mundo de aventura Olvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploraci?n y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe con las convenciones. Viaja por praderas, bosques y cumbres monta?osas para descubrir qu? ha sido del asolado reino de Hyrule en esta maravillosa aventura a cielo abierto.', 'imagenes/zelda breath of the wild.jpg'),
(5, 'Final Fantasy IX', 'Square', '2000-07-07', 'Final Fantasy IX es un videojuego de rol realizado por la empresa japonesa Squaresoft en 2000. Esta es la novena entrega del juego y el último capítulo de la saga realizado para la consola PlayStation', 'imagenes/final fantasy ix.jpg'),
(6, 'Bloodborne', 'From Software', '2015-03-26', 'Hazte con Bloodborne en para PlayStation 4 y encarna al cazador, uno de los mejores juegos para PlayStation 4. Un juego de acci?n tan exigente como desafiante. ?Estar?s a la altura de este reto o perecer?s en el intento? Con una ambientaci?n t?trica y oscura, este RPG de acci?n se ha convertido en uno de los cl?sicos m?s c?lebres de PlayStation 4.', 'imagenes/bloodborne.jpg'),
(7, 'Fifa21', 'BluePoint', '2020-11-23', 'El superfamoso juego de futbol del momento.', 'imagenes/fifa21.jpg'),
(8, 'Dragon Quest VIII: El periplo del rey maldito', 'Square Enix', '2004-11-27', 'Una siniestra amenaza se cierne sobre el reino y amenaza con destruirlo en DRAGON QUEST VIII: El periplo del Rey Maldito para la familia de consolas Nintendo 3DS.   Una misi?n ?pica, un grupo de h?roes por accidente y una terrible maldici?n...     Un retorcido buf?n ha lanzado una maldici?n sobre el reino de Trodain, transformando al rey en un trol, a la princesa en un caballo y sellando el Castillo de Trodain con enredaderas encantadas. En el papel de Hero, te embarcar?s en una misi?n para poner freno al demente buf?n y devolver el reino a la normalidad con la ayuda de los aliados que reclutes en tu camino.     ?Lucha!   Lidera a un equipo de h?roes a trav?s de un mundo enorme plagado de siniestras mazmorras en las que tendr?is que plantar cara a cientos de monstruos en cl?sicas batallas por turnos. Usa la astucia para derrotar a tus enemigos a tu propio ritmo, o usa la funci?n \"acelerar\" para acabar con tus rivales m?s r?pidamente.   A medida que tus guerreros se vayan haciendo m?s fuertes, as?gnales puntos de destreza para que aprendan nuevos hechizos, habilidades, etc. Equipa a tus h?roes con los artefactos m?s novedosos para el combate y combina objetos viejos en el pote de alquimia para crear objetos nuevos instant?neamente.     No sigas el camino marcado...   Durante tu aventura, aseg?rate de explorar todos los pueblos, visitar todas las tiendas y emprender todas las misiones secundarias posibles. Forma un equipo de monstruos y llega a lo m?s alto en la Arena de Monstruos o saca fotos de tu aventura que podr?s compartir con otros usuarios v?a StreetPass.   Descubre las otras novedades de la versi?n para Nintendo 3DS de DRAGON QUEST VIII: El periplo del Rey Maldito', 'imagenes/dragon quest viii.jpg'),
(9, 'Dragon Ball Figtherz', 'Arc System Works', '2018-02-01', 'Llega la Lucha Definitiva      Vuelve la acci?n Dragon Ball a PlayStation 4, Xbox One y Nintendo Switch con Dragon Ball FighterZ, el juego de lucha 2D para la actual generaci?n. Tras el ?xito de Xenoverse, llega un nuevo Dragon Ball que mejora al m?ximo los gr?ficos del anime, con una mec?nica f?cil de aprender pero... Dif?cil de dominar.        Caracter?sticas:        Soporte 3vs3 Tag.   Permite al jugador entrenar y manejar el estilo de m?s de un luchador con lo que se consigue una jugabilidad m?s profunda.        Excelentes gr?ficos anime   El poder del motor Unreal llevado a la m?xima potencia para hacer de Dragon Ball FighterZ una haza?a de fuerza.        Luchas espectaculares   Disfruta de combos en el a?re, escenarios interactivos y famosas escenas del anime de Dragon Ball a una resoluci?n de 60FPS y 1080p. Con mejores resoluciones incluso en PlayStyation 4 Pro y Xbox One X        Tras el ?xito de la saga Xenoverse, llega un nuevo juego Dragon Ball de lucha en 2D para la generaci?n actual de consolas.   DRAGON BALL FighterZ vuelve con todo el contenido que ha hecho que las series DRAGON BALL sean tan apreciadas: espectaculares enfrentamientos sin fin con los luchadores m?s poderosos.   Desarrollado por Arc System Works, DRAGON BALL FighterZ mejora al m?ximo los gr?ficos del anime y resulta f?cil de aprender pero dif?cil de dominar.', 'imagenes/dragon ball figther z.jpg'),
(10, 'World of Warcraft: Shadowlans', 'Blizzard', '2020-11-23', '10  Enfr?ntate al m?s all?   El velo entre la vida y la muerte ya no existe.      Con un ?nico acto de destrucci?n, Sylvanas Brisaveloz ha abierto el camino al m?s all?. Los defensores m?s entregados de Azeroth han acabado en una oscuridad que lo devora todo. Una antigua fuerza mortal amenaza con romper sus ataduras y deshilachar la realidad.      Reinos ocultos de maravillas y terrores esperan a aquellos que se atrevan a pasar al otro lado. Las Tierras Sombr?as albergan un reino de difuntos. Se trata de un mundo entre mundos cuyo delicado equilibro preserva la vida y la muerte.      Como adalid de Azeroth, se te ha otorgado el poder de cruzar en cuerpo y alma. Ahora debes investigar una conspiraci?n para deshacer el cosmos y ayudar a las leyendas del pasado y del presente de Warcraft a regresar a su hogar... o a cruzar al otro lado.', 'imagenes/wow shadowlands.jpg'),
(11, 'Chrono Trigger', 'Square', '1995-03-11', '?El cla?sico juego de rol regresa cargado    de mejoras, viaja al pasado ma?s remoto, al futuro lejano y al fin de los tiempos.    Comienza una gran aventura para salvar el planeta...    Chrono Trigger es el c?lebre juego de rol creado por un magnifico equipo compuesto por Yuji Horii (DRAGON QUEST) , Akira Toriyama (Dragon Ball) y los creadores de FINAL FANTASY. A medida que avanzas en la trama, viajara?s a distintas e?pocas histo?ricas: el presente, el Medioevo, el futuro, la Prehistoria y la Antigu?edad. Esta apasionante aventura e?pica entretendra? horas y horas tanto a los entusiastas de la serie como a los jugadores noveles.    Esta es la versio?n definitiva de CHRONO TRIGGER, y en ella se han actualizado los controles y se han renovado los gra?ficos y el sonido para que tu aventura sea todavi?a ma?s agradable y divertida de jugar. Para completar tu viaje, este ti?tulo tambie?n incluye las misteriosas mazmorras \"Vo?rtice dimensional\" y \"Santuario olvidado\". Enfre?ntate a los desafi?os que te esperan y quiza?s consigas revelar secretos antiguos...    Historia    Gracias a un encuentro fortuito en la plaza de Lynne durante la Feria del milenio de Gardia, nuestro joven h?roe Chrono se encuentra con una chica llamada Marle Deciden explorar la feria juntos y alli? acuden a la exhibicio?n de una nueva tecnologi?a de teletransporte inventada por Lucca, la amiga de Crono.    A Marle le pica la curiosidad y, como no le teme a nada, se ofrece voluntaria para participar en una demostracio?n. Sin embargo, la ma?quina se estropea en el momento clave y envi?a a Marle a una dimensio?n alternativa. Crono encuentra el colgante de la chica y decide ir tras ella para salvarla, pero aparece en el pasado... Cuatrocientos an~os antes de su e?poca. Viaja al pasado ma?s remoto, al futuro lejano e incluso al fin de los tiempos. a.', 'imagenes/chrono trigger.png'),
(28, 'Inazuma Eleven Go: ', 'Level5', '2020-11-23', 'es un videojuego de rol y deportes para Nintendo 3DS desarrollado y publicado por Level-5. Sali? a la venta el 15 de diciembre de 2011 en Jap?n y el 13 de junio de 2014 en Europa. Hay dos versiones del juego, Shine y Dark, que se lanzaron en Europa como Luz y Sombra. Una serie manga del mismo nombre basada en el juego comenz? a publicarse en la revista japonesa CoroCoro Comic, mientras que el anime basado en el juego realizado por OLM se comenz? a emitir el 14 de mayo de 2011.', 'imagenes/inazuma eleven go.jpg'),
(30, 'Grand Theft Auto V', 'Rockstar Games', '2013-09-17', 'Grand Theft Auto V (abreviado como GTA V o GTA 5) es un videojuego de acci?n-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.4? Posteriormente, fue lanzado el 18 de noviembre de 2014 para las consolas de nueva generaci?n PlayStation 4 y Xbox One con mejores gr?ficos y novedades interesantes como la vista en primera persona, luego para Microsoft Windows el 14 de abril de 2015 y finalmente se confirm? su lanzamiento para PlayStation 5, Xbox Series X y Xbox Series S en la segunda mitad del 2021.5?6? Se trat? del primer gran t?tulo en la serie Grand Theft Auto desde el lanzamiento de Grand Theft Auto IV en 2008, el cual estren? la ?era HD? de la mencionada serie de videojuegos.7?', 'imagenes/gta.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`idCesta`),
  ADD KEY `Cesta` (`idCliente`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `ItemPerteneceACesta` (`idCesta`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`idPlataforma`),
  ADD UNIQUE KEY `Nombre_UNIQUE` (`Nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`,`IdVideojuego`,`IdPlataforma`),
  ADD KEY `Es_un_videojuego_idx` (`IdVideojuego`),
  ADD KEY `De_la_plataforma_idx` (`IdPlataforma`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  ADD UNIQUE KEY `Usuario_UNIQUE` (`Usuario`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`idVideojuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `idPlataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD CONSTRAINT `Cesta` FOREIGN KEY (`idCliente`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `ItemPerteneceACesta` FOREIGN KEY (`idCesta`) REFERENCES `cesta` (`idCesta`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_Es_un_Videojuego` FOREIGN KEY (`IdVideojuego`) REFERENCES `videojuego` (`idVideojuego`),
  ADD CONSTRAINT `FK_Pertenece_a_la_Plataforma` FOREIGN KEY (`IdPlataforma`) REFERENCES `plataforma` (`idPlataforma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
