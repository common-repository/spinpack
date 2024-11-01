<?php if (!defined('ABSPATH')) exit;

$custom_icon_image = SPINPACK_IMG_URL .('phone.svg');
$custom_btn_color = '#1bbb31';
$tooltip_text = '';

if ( class_exists( 'CSF') ) {
	$custom_btn_color = spinpack_get_option('custom_btn_color', true);
    $show_btn = spinpack_get_option('show_btn', true);
    $btn_link = spinpack_get_option('btn_link', true);
	$tooltip_text = spinpack_get_option('tooltip_text', true);
}
?>

<style type="text/css">
.spinpack {
	background: <?php echo esc_html( $custom_btn_color ); ?> url('<?php echo esc_html( $custom_icon_image ); ?>');
    height: 60px;
    width: 60px;
	position: fixed;
	bottom: 30px;
	right: 30px;
	z-index: 99;
    border-radius: 70px;
    box-shadow: 0px 0px 8px #636363;
	transition: all 0.2s;
}

.spinpack-tooltip {
	position:absolute;
	right:0;
	bottom:100%;
	margin-bottom:15px;
	z-index:99;
	background-color:#fff;
	border-radius:4px;
	box-shadow:0 3px 20px rgba(25,63,125,0.15);
	pointer-events:none;
	color:#989cad;
	padding:10px 15px;
	font-size:14px;
	font-weight:500;
	line-height:1.6;
	white-space:nowrap;
}

.spinpack-tooltip:before  {
	content:'';
	position:absolute;
	bottom:-6px;
	right:21px;
	width:12px;
	height:12px;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	transform:rotate(45deg);
	border-radius:0 0 4px 0;
	background-color:inherit;
}
</style>


<!-- start btn contact -->
<?php if ( $show_btn ){ ?>
    <a href="<?php echo esc_html( $btn_link ); ?>" >
        <div class="spinpack">
		    <?php if ( !empty($tooltip_text) ) : ?>
		        <div class="spinpack-tooltip"><?php echo esc_html( $tooltip_text ); ?></div>
			<?php endif; ?>
		</div>
    </a>
<?php } ?>
<!-- end btn contact -->
