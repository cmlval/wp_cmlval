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
define('DB_NAME', 'db_christianluque');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'VF^#7zOo!i[9[{Gbc!Os5|ne-t%v&BodIhNs}K]0p(kV2 WY}>@aeQrn4HLT/Dep');
define('SECURE_AUTH_KEY', 'Q0M/{8t$G}cf-$):.hH}QUjy}0_OZD-_xZrT%Q1UhsQC`pvi;/|TzmTUF?C8r:AJ');
define('LOGGED_IN_KEY', 'NRkg3~G`XT,~=zFUv8>v4~{gAQ*o-C]h-`cda%F/xAGBI>=F<FxqXpQNQ=J]Q.m.');
define('NONCE_KEY', '&fvig4:q=`>eT??s,7{5l]nnL[gh](cM<w/=@sM1+.(|]5@2u2oCV<8ithSfyoba');
define('AUTH_SALT', '|3hZ^{`H9mz~BRB;nECtL~TR] P{rjI9:$XENe+8`ULUh&V^N3?{HA,A97HWO>iy');
define('SECURE_AUTH_SALT', 'pS>:elf.:5<F4-+eug76k@4vK/MmNoD^XFFfDL=J=JxDqx %5JQ?^<YH[V4WG=I?');
define('LOGGED_IN_SALT', '-HWsAI]F*XOfb6VJtLgt,$qkVGtB)OCBV<p!&l/g_`*jcC>Yf<H[p,tsf/vp,(1|');
define('NONCE_SALT', '(bxrA&]H8*rf9OQ6+jK20txid ]lOOG%aP{ e}sO4`2Hw~%RW!sYlgXjx/ 6@uL,');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'chlu';


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

