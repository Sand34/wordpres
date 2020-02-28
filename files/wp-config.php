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
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         '|##=,NAH/K;=L<g&L}aK.DrtCUNr~HH,rrjM-Lgbwq0z*:.*_ly:6hmKU/H51yKP' );
define( 'SECURE_AUTH_KEY',  '*]puBRh(pD/@I7:-daBL-fkC9<ReH5Q;5p]TI`]>Ur.BJw_|<@BGR46o7.PNBYsa' );
define( 'LOGGED_IN_KEY',    '4Kzut7es7tVGCpUmQJwXS{;]>2, U!#vb(Fz/L/AJlzx<I8PXS-7:d^XpcO %a,0' );
define( 'NONCE_KEY',        'b7rgRW$oI,vX.Zl]&Se-q#!kcC@[/qZcA+dcf#s-.et[NG9(pW=2?UGPoZVYrvJ#' );
define( 'AUTH_SALT',        'mR&Zr^>@Shl`dUd#R?sS!jE]*A9D Dh}{q.sK6.cEcF:Eyp|WAtC`ghh6YGK1YkF' );
define( 'SECURE_AUTH_SALT', 'aQ.I~$*QN}eU)rPPZ]-&2Z|/Wig@>g[{y+(N]S4_Mj,dxm3nFV60VWbpc;eXh3{Q' );
define( 'LOGGED_IN_SALT',   'BoVNW]j>%ac1DD{}zCP.Nnzf?S%]on]>`h~{N1[dk`%N1&Z/JQX ,O*8/P6PLWMM' );
define( 'NONCE_SALT',       'uy_E0`BtkHTA1-X/f,3+n^^Pv_Q;BE*r,i0//[d?:.$Z71TFML~p[4LBboX;l5kQ' );
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

