<?php

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . '/codestar-framework/codestar-framework.php';

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'spinpack';
  
	if ( ! function_exists( 'spinpack_get_option' ) ) {
		function spinpack_get_option( $option = '', $default = false ) {
			$options = get_option( 'spinpack' );
			return ( isset( $options[$option] )  ? $options[$option] : $default );
		}
	} 
 
    //
    // Create options
    CSF::createOptions( $prefix, array(
  
      // framework title
      'framework_title'         => 'اسپینپک',
      'framework_class'         => '',
  
      // menu settings
      'menu_title'              => 'اسپینپک',
      'menu_slug'               => 'spinpack',
      'menu_type'               => 'submenu',
      'menu_capability'         => 'manage_options',
      'menu_icon'               => null,
      'menu_position'           => null,
      'menu_hidden'             => true,
      'menu_parent'             => '',
  
      // menu extras
      'show_bar_menu'           => true,
      'show_sub_menu'           => false,
      'show_in_network'         => true,
      'show_in_customizer'      => false,
  
      'show_search'             => false,
      'show_reset_all'          => false,
      'show_reset_section'      => true,
      'show_footer'             => true,
      'show_all_options'        => true,
      'show_form_warning'       => true,
      'sticky_header'           => true,
      'save_defaults'           => true,
      'ajax_save'               => true,
  
      // admin bar menu settings
      'admin_bar_menu_icon'     => '',
      'admin_bar_menu_priority' => 80,
  
      // footer
      'footer_text'             => '',
      'footer_after'            => '',
      'footer_credit'           => '',
  
      // database model
      'database'                => '', // options, transient, theme_mod, network
      'transient_time'          => 0,
  
      // contextual help
      'contextual_help'         => array(),
      'contextual_help_sidebar' => '',
  
      // typography options
      'enqueue_webfont'         => true,
      'async_webfont'           => false,
  
      // others
      'output_css'              => true,
  
      // theme and wrapper classname
      'nav'                     => 'normal',
      'theme'                   => 'dark',
      'class'                   => '',
  
      // external default values
      'defaults'                => array(),
  
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'تنظیمات اصلی',
      'icon'   => 'fa fa-tools',
      'fields' => array(
  
        array(
            'type'    => 'content',
            'content' => '<p style="color:#93033c;font-size:14px"> نسخه افزونه: '.  SPINPACK_VERSION ,
        ),

        array(
            'type'    => 'submessage',
            'style'   => 'info',
            'content' => 'برای به نمایش درآوردن دکمه پشتیبانی این گزینه را فعال کنید.',
        ),
        array(
          'id'         => 'show_btn',
          'type'       => 'switcher',
          'title'      => 'نمایش دکمه پشتیبانی :',
          'text_on'    => 'روشن',
          'text_off'   => 'خاموش',
          'subtitle'   => 'روشن/خاموش کردن دکمه پشتیبانی',
          'default'    => true ,
          'text_width' => 70
        ),
        array(
            'type'    => 'submessage',
            'style'   => 'info',
            'content' => 'برای لینک دار کردن دکمه پشتیبانی، لینک مورد نظر را در کادر زیر وارد کنید.',
        ),
        array(
			'id'      => 'btn_link',
			'type'    => 'text',
		    'title'   => 'لینک پشتیبانی :',
			'attributes' => array(
				'dir' => 'ltr',
			),
        ),
        array(
            'type'    => 'submessage',
            'style'   => 'info',
            'content' => 'برای نمایش متن راهنمای دکمه پشتیبانی، متن خود را در کادر زیر وارد کنید.',
        ),
        array(
			'id'      => 'tooltip_text',
			'type'    => 'text',
		    'title'   => 'متن راهنما :',
        ),
      )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'تنظیمات ظاهری',
      'icon'   => 'far fa-star',
      'fields' => array(
  
        array(
            'type'    => 'content',
            'content' => '<p>در این قسمت شما میتوایند خیلی راحت دکمه پشتیبانی را سفارشی سازی کنید.</p>',
        ),

        array(
            'type'    => 'submessage',
            'style'   => 'info',
            'content' => 'برای تغییر پس زمینه دکمه پشتیبانی، در کارد زیر رنگ مورد نظر خود را انتخاب کنید.',
        ),
        array(
			'id'      => 'custom_btn_color',
			'type'    => 'color',
			'default' => '#1bbb31',
			'title'   => 'رنگ پس زمینه :',
        ),
      )
    ) );

    CSF::createSection( $prefix, array(
      'title'  => 'درباره اسپینپک',
      'icon'   => 'fas fa-award',
      'fields' => array(
  
        array(
          'type'    => 'content',
          'content' => '
                  <h2>اسپینپک</h2>
                  <p>افزونه اسپنپک یکی از بهترین افزونه های پشتیبانی میباشد که با آن قادر خواهید بود یک سیستم پشتیبانی با لینک دلخواه خود راه اندازی کنید با مشتریان خود صحبت کنید.</p>
                  <p><a href="https://www.venoustarh.ir/shop/product/spinpack-pro/" target="_blank">دریافت نسخه پرو افزونه اسپینپک</a><br/><br/></p>',
           ),
           array(
            'type'    => 'content',
            'content' => 'اگر از افزونه کاربردی اسپینپک راضی هستید، لطفا به اسپینپک <a href="https://wordpress.org/support/plugin/spinpack/reviews/" target="_blank">5 ستاره</a> دهید.' ,
          ), 
  
      )
    ) );
  
  }
  