<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ECO_db' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',5COvXGhXe&G#2[;qX`zBFKi=<;thH3C/U:,*4CbSnpDWI4%!Niv5-__~)*9?ivP' );
define( 'SECURE_AUTH_KEY',  '>@/w9q*Gh%o7|@~`{[~OaJS#lc;_AZ~p`tD}dg(,$P{GQ9[{6C#]JE]O}H02bxfa' );
define( 'LOGGED_IN_KEY',    '0WL4B8__#z]fjxFYFgC7lA8[s>{R6^gPpOw8&I$(Bf6?<H#^X&KM{3AuPBN&hH.@' );
define( 'NONCE_KEY',        'kxv6JsI_)tGS*seVj7r{(/tf(q?DmG>loM`#x)6F=:1%isv.Jki/aG@H^1`cKDM(' );
define( 'AUTH_SALT',        'r6f!a98)6A(#D04S{dDAXg%.+(6/C5R*+NY/[NL<?Wd=ACOWKx!yUi}@%_k!_4ZS' );
define( 'SECURE_AUTH_SALT', ' {!t8/Fq70D^|Vp{87oy!%4h_rA,FUfq~`- Xy?4Y5wM_4#z%KHFp3E&|2:Ziy;+' );
define( 'LOGGED_IN_SALT',   'SG< 1bD*~WRHU_uL+qg;fquFo+W2T_kp;S921f^;`-<8c;6yeAU1<?~86$mTKQp@' );
define( 'NONCE_SALT',       'cest o%G[TB(?M]}=1frP=3FUXM(_c7_c*8{|]TcR}49&,O 7f:n(tRBK8Pi&(V3' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
