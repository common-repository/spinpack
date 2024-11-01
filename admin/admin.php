<?php if (!defined('ABSPATH')) exit;

add_action('admin_menu', 'menu_spinpack');
function menu_spinpack() {
    add_menu_page(
	    __('اسپینپک', 'spinpack'),
	    __('اسپینپک', 'spinpack'),
	    'manage_options',
		'spinpack',
	    'spinpack_settings_page',
	    SPINPACK_IMG_URL . 'logo-mini.svg',
		98
	);
}

function spinpack_settings_page() { 

?>
	<div class="wrap about-wrap" style="font-family:vazir">
		<h1>به اسپینپک خوش آمديد</h1>
			<div class="about-text">بهترین پلتفرم پشتیبانی برای سایت های وردپرسی</div>

		<a class="wp-badge" href="#" style="background-color:#2196f3 !important;background-image:url('<?php echo SPINPACK_IMG_URL ?>logo.svg') !important;background-position: center center;background-size: 140px auto !important;"></a>

		<h2 class="nav-tab-wrapper">
			<a class="nav-tab nav-tab-active" href="admin.php?page=spinpack">تنظيمات</a>
		</h2>
<?php

}
