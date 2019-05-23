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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Jk0`!IkU$)h7RACL/Y}o]^Qgpe$PM8|[:vLvAk%LWClL(/&bg@nS3!d1tVB$/o9}' );
define( 'SECURE_AUTH_KEY',  '%JNY)NlA{5g&A@a^Ox_zKlRz> (9p(t05*xrz;4jN_,chLVK4Wp?7grKbl~H@g8,' );
define( 'LOGGED_IN_KEY',    '{:pQF1C5,`c:JU812v=G9n@vJ57j IC[KNG:A(&yK{x*h^75|dbC:Y(-<Bg3JRF_' );
define( 'NONCE_KEY',        ':M4jXY=3:KY@UcoPAZfRG3DD~GMD1.5Ac}q<0(_&;_p<$ P]OXbkd/g5UKAk6b`o' );
define( 'AUTH_SALT',        '{lkW|E2)^q_>A7lOB/;YI/@LRhEnRqFWWr*O`%|0yrTmecQ{ZI#&o;7&Lp!e~$hA' );
define( 'SECURE_AUTH_SALT', 'wA?1|7OF=]TxN7IiP~>2pb^U_GoGw<M=TdnLy*QT5BPyf+NqZeTreZr+diC/z:&~' );
define( 'LOGGED_IN_SALT',   '{i!dnyCZw,NZo>kHa$pwla2GRlTJVE FW%Q=vdXfL,*{S`U3bBZ1n6M}^<DTq`cY' );
define( 'NONCE_SALT',       'sY%,S=xZM.)vJ5zU2A`pdEy%@;h*/ 1*gu`wpIlK|S=DG}nnmu!8kCIV[>09@@u)' );
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
