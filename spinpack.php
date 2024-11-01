<?php

/**
 * Plugin Name: اسپینپک
 * Author: تیم ونوس طرح
 * Description: افزونه اسپینپک | بهترین پلتفرم پشتیبانی وردپرس
 * Author URI: https://www.venoustarh.ir/
 * Version: 6.0
 *
 * Text Domain: spinpack
 * Domain Path: /
*/

if (!defined('ABSPATH')) exit;

load_plugin_textdomain('spinpack');
define( 'SPINPACK_VERSION', '6.0' );
define( 'SPINPACK_IMG_URL', plugin_dir_url(__FILE__) . 'assets/img/');
define( 'SPINPACK_PLUGIN_URL', plugin_dir_url(__FILE__));
define( 'spinpack_pro', get_option( 'spinpack_perfix' ) );

if ( ! function_exists( 'is_plugin_active' ) ) {
	   require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
if ( ! function_exists( 'check_active_pro_spinpack' ) ) {
	function check_active_pro_spinpack() {
		if ( is_plugin_active( 'spinpack-pro/spinpack-pro.php' ) ) {
			deactivate_plugins( spinpack_pro );
			die( '<div dir=rtl style="font-family: tahoma; color: red;">' . esc_html__( 'برای فعال کردن نسخه رایگان، لطفاً ابتدا نسخه پرو را غیرفعال کنید', 'spinpack' ) . '</div>' );    }
	}
}

register_activation_hook( __FILE__, 'check_active_pro_spinpack' );
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_script( 'jquery' );
	}
);
include('admin/options.php');

function spinpack_run() {
    include ('inc/functions.php');
}
add_action('wp_footer', 'spinpack_run', 99);

function spinpack_set_page($links) { 
    $settings_link = '<a href="admin.php?page=spinpack">' . __( 'تنظیمات', 'spinpack' ) . '</a>';
	$ver_pro_link = '<a href="https://www.venoustarh.ir/shop/product/spinpack-pro/" target="_blank" style="color:red;font-weight:bold;">' . __( 'نسخه پرو', 'spinpack' ) . '</a>'; 
    array_unshift($links, $settings_link, $ver_pro_link); 
    return $links; 
}
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'spinpack_set_page' );

add_action('admin_menu', 'menu_spinpack');
function menu_spinpack() {
    add_menu_page(
	    __('اسپینپک', 'spinpack'),
	    __('اسپینپک', 'spinpack'),
	    'manage_options',
		'spinpack',
	    'spinpack_settings_page',
	    SPINPACK_IMG_URL . 'logo-mini.svg',
		60
	);
}

function spinpack_settings_page() { 
?>
  <div class="wrap about-wrap" style="font-family:vazir">
<?php
}

?>