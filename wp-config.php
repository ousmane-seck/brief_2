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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'doudou' );

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
define( 'AUTH_KEY',         '*OrIw)IQDoRf=5GWCYSe+`b9wIKui7`4G:}TW[rRL/c5X:d8<R$?:w$tKa=p4$cY' );
define( 'SECURE_AUTH_KEY',  'al|[=o>{M,[{ab|pjRPAr5PCkuu-A5*Q@):}&4j4vT%3AOg2!Dc9^xb0|{LlXGk6' );
define( 'LOGGED_IN_KEY',    '?yNAbvn7!:6S<7b44?U<8^-d>/B+5WSi;hBk2LyhP3yZknzL(.PMHcyM?lU bSU*' );
define( 'NONCE_KEY',        'moIKB)(n+A+9a<k=UXamC{0q^h88ph#1B> @oOtai*%Br/^#4WhqLGPM3nN^n#lM' );
define( 'AUTH_SALT',        '.z-l=@v!LwM4_U_JfDYb~%n1nb/d$+ Q&O]F-tX$O+l7l~Hw<6F]/^>=o<d34ZXz' );
define( 'SECURE_AUTH_SALT', 'e=(!]KDMdQZrY*G2s3z|G#xtY%cs[x%#xxuTe5Kqzfaw&KJ*v,;oauZUSPH|O@P)' );
define( 'LOGGED_IN_SALT',   '7si;5,:ds3<eG_db)f_V$t2_|bOxbn.S[Ior)=1d<2] >!Uf<68Rp1,&@ZWVadC<' );
define( 'NONCE_SALT',       'o}cvAg.B48hiPQF1 V)AC6)WgeH]q&KLl8LAD].yhD$4lT~QaWRth(^~HdGq)l(q' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
