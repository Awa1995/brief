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
define( 'DB_NAME', 'brief' );

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
define( 'AUTH_KEY',         't[q1{ThKo&& _u?#_w2y0[g*fx)*b6aCsA`KY[7]+e<%agn&1I@ET]ORSk2d[V2j' );
define( 'SECURE_AUTH_KEY',  'R/`?qtmoTK#-o!C$e)j/Ft+`Tf`2{br$(LgD~&b{QJc=[ijN?DoE<r3EC1Ui#bbQ' );
define( 'LOGGED_IN_KEY',    '?vA%,0wD-eG=`d~;yP#>+F6*{ZyS4y~`Qc.+/ .] Rj*,-!)R$,=HBXU_woR!~?`' );
define( 'NONCE_KEY',        '%84;nHH3ey.66=o0:G%OYEBba6_IMR+7wdf&O6;`Jm(lCYdx(d@Lfa[quz&iIKDV' );
define( 'AUTH_SALT',        '.~.G:*-QC{MVJG:<I!a#C?Wp|_n_=!r;OJ;=:1yF:jz!^r2L,b|k2Azp0ELb6{aU' );
define( 'SECURE_AUTH_SALT', 'y[0ZK.onWIG|KeyD%wLS{!e-X;A:8g%uYT&@ZH _1y*F#$%e@Er)Zq6$-iBjWwih' );
define( 'LOGGED_IN_SALT',   ':oC:])/0jJ9bu~`3L;UIMs{kt=U#q#/AYC*&O2Dg-vjlk<LTs`(G|Y)C_xQ47vIK' );
define( 'NONCE_SALT',       'T}ksm5}_q, l4Y!D&zrp_5#^U|xDK*x}M#D6:!<rgV%z>bYL*teEqLpHJ{%,OsK~' );
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
