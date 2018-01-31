<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_rohanhgupta' );
define( 'DB_USER', 'rohanhgupta' );
define( 'DB_PASSWORD', 'NRWBbLQdkD4netqSAmaW' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'A?Sm.PCJ|(,a|V$X>-H|Ff=QXHu{A7bQDO p$-<X[:*OQ-(V5ATsW)h&`uS8~K F');
define('SECURE_AUTH_KEY',  'my`+!8<?e+JXW:Nif3ir;+HFmu9Z?S2Tx`o-fL=,ddXFH-geHw 77]9|x-v>k$.S');
define('LOGGED_IN_KEY',    'oG#l^fvfJ}>_Se/Ex<c*>^Boi56TXn^kVLb|G*<FbI>Gp;IM3hxY^TU0*YZ*`do5');
define('NONCE_KEY',        'Q7brvrQOZ<c(;>nc@3zInL6 v+++{krTQc|D!p4euSN*=a!c Xj%+G)|AU*~(ZR|');
define('AUTH_SALT',        'R}`#xQ3w@e)YD]FO^!pzuNIDVg>K~M+-G:&5|5f.Qewvq48~4LvTs*w50%MjT4?T');
define('SECURE_AUTH_SALT', '>N) =[^w,3G&:KPb0@fRc{|pZ%Bl|Jfv!|KP4U=L^.[x2Xm3.mUzR=iH;L-K[j]I');
define('LOGGED_IN_SALT',   'u-ix!1-yMD4=5ToxUz9|$Z-QadV=1/8c5bH;qk@x|$ORC{LL0no>l?u(S<5UP?v+');
define('NONCE_SALT',       '|qu/)N0KoYdA^cemq8Q:)Td?({|]$S);pI.;CcJS2g-3?+!)9pEFC(I#Xk?5wGH[');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'rohanhgupta' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'eebb87827513ed09bed39f67a31de1365da93445' );

define( 'WPE_CLUSTER_ID', '100954' );

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

$wpe_all_domains=array ( 0 => 'rohanhgupta.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100954', );

$wpe_special_ips=array ( 0 => '104.199.123.93', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WP_SITEURL', 'http://rohanhgupta.staging.wpengine.com' );

define( 'WP_HOME', 'http://rohanhgupta.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
