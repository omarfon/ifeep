<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'word');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'root');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j=+9E@7u54iY4~[`D04i&0:?mZ<^5Nk79?SVk|sIx0<9ADx2CiZm4F/:z^_|irUu');
define('SECURE_AUTH_KEY',  'sLg!Fu lk!`KE+2C1Vj?Yxwr_+S_{.a/uNFz$XcopI#B%?5&G^g]sr<],37D48U{');
define('LOGGED_IN_KEY',    '4& SkFaRlPc16_Wdylx-!$8;Y~itrF)e|7X~17}G)F)<cF0m(gL1?hfc;|?QS~ 1');
define('NONCE_KEY',        'r1I5peb>]@J:1JaH~)]/3_mpS/H>2ginERa4hIp-H4}^^z<XoWiq0F[6%)r[Q, d');
define('AUTH_SALT',        'Q]fj([9PzMj<8 hOJY2y[35Vq6*Hq?r1Z_-`sev$:9e)owarn*m5NV|*{#HcvoA-');
define('SECURE_AUTH_SALT', 'J+P ^2 <(,E<60(!{Tw;L6j|;?D3u%%r7xwm!QACk|6%=.u4m,X*&bJIJ9QQ S3{');
define('LOGGED_IN_SALT',   '^;lQBZ&b;*WyG7*e?opCy~7;W>]3AAPNKdhMsmCdRdtj/am,y-$_ZU91wA3-X;k_');
define('NONCE_SALT',       'Qpx.u/Z.BH/_,s.@>WJ!`ukV;QR)j<z%*,z6!Bv71/DQRV4H]fY$o(_ S$+,I:{Y');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
