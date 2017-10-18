<?php
# Database Configuration
define( 'DB_NAME', 'wp_bonusjellow' );
# define( 'DB_USER', 'bonusjellow' );
define( 'DB_USER', 'root' );
#define( 'DB_PASSWORD', 'KvZ3zXYJoOl92Th90Ssm' );
define( 'DB_PASSWORD', 'root' );
define('DB_HOST', 'localhost');
define( 'DB_HOST_SLAVE', 'localhost' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');


$table_prefix = 'wp_';
define('WP_ALLOW_REPAIR', true);
# Security Salts, Keys, Etc
define('AUTH_KEY',         'P)! 8Qg)L8e}d}qD#b;|u0I>2tkkvScBD|<yd3PV-HWPorOtI)) Ax=+!mQJ4@vv');
define('SECURE_AUTH_KEY',  '82^<9c6aS|%v7?3RZL c6D5g/4Q|tB^vZ&kx#-I^A9$*+<FXs#nyvA.LY?{dBu_x');
define('LOGGED_IN_KEY',    'LHN_Id`ah.hVTAc7&`k-^VkLJX$I&US9X@l1mUc:k#ln^,7y5R_M.oP0dy$VI3?5');
define('NONCE_KEY',        '~MJ1I$_DqyL+^-uF~=DEX<,tI$%`58.>-.iE_he_H65nb&18]{wbFg=t&/tQP^HL');
define('AUTH_SALT',        'S?hD:LaJF@|(U|4 7<(u%-F<h>RDlb0Je.#I`k8>~g3ks@[k)vA&L{#2G3~Gb|&[');
define('SECURE_AUTH_SALT', '}RrT>Ot4*%B:x2,=hjfILD<97,@8zj/qyFVWl:_WcUB2:+te3&KT<b7^lM3q%!Mm');
define('LOGGED_IN_SALT',   'kpM<G(SNW>?qts<l+4vA<=BCQBhEAI<1L(|iT-1xc)-Vi75GFsW!&oz)W|aaLV+0');
define('NONCE_SALT',       'T&{W!}zUUced;HkKH^vF<p% *UuO)kI4![PIUe!Kpab&|yt+Cf,8Tn{k9E=:aN(Q');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'bonusjellow' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'd0b80c0bec20d8d753a0e64b1c7b58651ae3074f' );

define( 'WPE_CLUSTER_ID', '100386' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'bonusjellow.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100386', );

$wpe_special_ips=array ( 0 => '104.198.4.122', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings

/** Sets up WordPress vars and included files. */
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, 'localhost');
if ($mypos === false) {
define('WP_HOME','http://bonusjellow.wpengine.com');
define('WP_SITEURL','http://bonusjellow.wpengine.com');
} else {
define('WP_HOME','http://localhost:8888');
define('WP_SITEURL','http://localhost:8888');
}






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
