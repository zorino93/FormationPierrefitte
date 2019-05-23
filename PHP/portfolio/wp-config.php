<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZndA4f(B|hpCu(ZKIY`O}4YibmeIF7Z(KDv0mvj_N|330:a$5kFKFBp|GOMdT+yS' );
define( 'SECURE_AUTH_KEY',  '~uS4Q+?<Gd<H[3p94:yn1u6M<q]5*V:KSDh6%2cVY1jUV4A$LYsEWA|8aso&3]B*' );
define( 'LOGGED_IN_KEY',    '0{-)>BQF%]C^$!{E1UUzxl6Z8=^|is=f?5mSap6Fy&Ra/M^mKt49UvatwAnJRd|N' );
define( 'NONCE_KEY',        '(JC&hRHsvX#ZDMs0:J!k@lH8%)dlpj3O#>:mR+Y!R+E4l#Zb-gZ!||ut.=rPDMc~' );
define( 'AUTH_SALT',        'oB/HTP-+b,RKmM*HwJ,fpZ] VUM<JN@9cYL/qq!BBGdBn}ht~0w|}V=B;Qtw(hBo' );
define( 'SECURE_AUTH_SALT', '=qWs|D(_y55p@L5>z4P&|PWw 6d>A74bth)J`@wu4}<o>NY$6huxHE+pp@FE]koF' );
define( 'LOGGED_IN_SALT',   '/nkynkwA@ l4`+~5frt4p{[rQ_`5d^H6z.*5&<Y}#Jm%&BtS O{E^t;&^^9Js`Jy' );
define( 'NONCE_SALT',       '+LH}VzC(?,%bq{_rOVgr`L&R #N|#GOY`AA#yUDMVc/E0t6|O7o*% iSrZ{q@2I`' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
