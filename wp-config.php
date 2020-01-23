<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'prueba_wp' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '}UW3sT`:(&!*0]^@iAh]*cf?<R_b[OhaPhOkX>~!snf.S%ZA<IG=;MxH/tEV3u/O' );
define( 'SECURE_AUTH_KEY', 'O!_Y|kmW efQ0PoK3?Hup@+}SAjohvjv87L=Wy5/vUu))l)>x{LEoD}/kc+F;p2o' );
define( 'LOGGED_IN_KEY', 'QjDXrlz@Q/ cz[6<jv+sU6|2D^.T%I~@-icQ17aotWoq?G`J!eNt<&yBx42~e}TF' );
define( 'NONCE_KEY', 'D4X7FvyQ!fsANT5pP1j<2BMNV|_Z9D7u:zIQAL#} o[W3)Q?k@uYWH fe/)e1&cF' );
define( 'AUTH_SALT', 'XoJQS@F$?^S_!j;PcZLMcwe@pD?XtyfW~B^hsvdZ]x5D@cDp`xiR:@)~!ufwXgqN' );
define( 'SECURE_AUTH_SALT', 'lAI;[&AXNjYq&9|gW>Q09dze6aoYg*W3SjZ`l0aQh[~GB-,X`-4#LtpyoE=b*j%n' );
define( 'LOGGED_IN_SALT', 'c}HpVKY4|{tMaK&]CD2+Y)XYc;BAiDvkR8`(p;W 1Mgrx`7>-nbFJ#1GG(K@@vAR' );
define( 'NONCE_SALT', 'a.]D(/K/{1Tug,vh2E=Fqc_2VEO_GB}_|(N{{c+qPjp,T)g21=6.W7[d@Gk?HV)B' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

