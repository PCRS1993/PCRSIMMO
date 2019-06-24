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
define( 'DB_NAME', 'SA-IMMOBILIER' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'PCRS' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Pcrs15981993*' );

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
define( 'AUTH_KEY',         'I~@(o <3zUM=b!cU6_3K)KE[f{`HglknINFd@JT}k/x%HB^|Ki-m|I84jB`EO_8^' );
define( 'SECURE_AUTH_KEY',  'BA}&CCE{;G-Xe.VUzo(^P1[fSaH$<1*Ga[GZ3<h+xGmu>s(24]C~qq#dRvAV/pO.' );
define( 'LOGGED_IN_KEY',    '1X+)JEIh hq:=)z%5[syA(/Z7+1!t%3Y?2+QMZ{Lu$T9rzjkuKrD!d{/,R[E2|:H' );
define( 'NONCE_KEY',        '$XOJi|+Vs_4sNL7,cbT1;aX_Fsr<_R2JEGii/x}F-}rDV^mlV-4Mks ~^ <(VjKQ' );
define( 'AUTH_SALT',        '`E+Q6pZG&[m!`g}q%b3H;ZK#/bpQgcc/7gs`s1J>ERqmfVv?,,:~n-xkjpJiGX,s' );
define( 'SECURE_AUTH_SALT', 'M<Oz:keT?^wtx;d]TT{sOAedX*mCcBs`<]uQKl%+|u!6J@#n]6z~ju}` ] k@1a(' );
define( 'LOGGED_IN_SALT',   '$sxl(ON(0yy#bH]m~73EsLFkMQSk5iCv.$jh@>Us-j]@DcB:zCdFS>-N1$hu-+]h' );
define( 'NONCE_SALT',       'IP#,6e!g.|_G<1%m+/]7q$8XkN9ZrZvaGh/EPBQ)6pVjGZfh-=+bXJ6u9ZNa!Qme' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('FS_METHOD', 'direct');


