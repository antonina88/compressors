<?php
/*загружаем стили и скрипты*/

/*function load_style_script() {
	wp_enqueue_script('jquery.min', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('jquery-migrate.min', get_template_directory_uri() . '/js/jquery-migrate.min.js');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('jquery.easing.1.3.min', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js');
	wp_enqueue_script('jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js');
	wp_enqueue_script('jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js');
	wp_enqueue_script('jquery.stellar.min', get_template_directory_uri() . '/js/jquery.stellar.min.js');
	wp_enqueue_script('waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js');
	wp_enqueue_script('jquery.counterup.min', get_template_directory_uri() . '/js/jquery.counterup.min.js');
	wp_enqueue_script('jquery.isotope.min', get_template_directory_uri() . '/js/jquery.isotope.min.js');

	wp_enqueue_script('jquery.imagesloaded.min', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js');
	wp_enqueue_script('wow.min', get_template_directory_uri() . '/js/wow.min.js');
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
	wp_enqueue_script('jquery.mb.YTPlayer.min', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js');
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
	wp_enqueue_script('jquery.themepunch.tools.min', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js');
	wp_enqueue_script('jquery.themepunch.revolution.min', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js');
	wp_enqueue_script('revolution-custom', get_template_directory_uri() . '/js/revolution-custom.js');
	wp_enqueue_script('isotope-custom', get_template_directory_uri() . '/js/isotope-custom.js');
	wp_enqueue_script('jquery.cubeportfolio.min', get_template_directory_uri() . '/js/jquery.cubeportfolio.min.js');
	wp_enqueue_script('cube-portfolio', get_template_directory_uri() . '/js/cube-portfolio.js');
	wp_enqueue_script('pace.min', get_template_directory_uri() . '/js/pace.min.js');

	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('pe-icon-7-stroke', get_template_directory_uri() . '/css/pe-icon-7-stroke.css');
	wp_enqueue_style('helper', get_template_directory_uri() . '/css/helper.css');
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('settings', get_template_directory_uri() . '/css/settings.css');
	wp_enqueue_style('rev-style', get_template_directory_uri() . '/css/rev-style.css');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style('owl.theme', get_template_directory_uri() . '/css/owl.theme.css');
	wp_enqueue_style('yamm', get_template_directory_uri() . '/css/yamm.css');
	wp_enqueue_style('cubeportfolio.min', get_template_directory_uri() . '/css/cubeportfolio.min.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

	add_action('wp_enqueue_scripts', 'load_style_script');*/


	register_nav_menu('menu', "Меню");

	/* поддержка мениатюр для постов*/
	add_theme_support('post-thumbnails');

	/* слайдер */
	add_action('init', 'slider');

	function slider() {
		register_post_type( 'slider', array(
			'public' => true,
			'supports' => array('title', 'thumbnail'),
			'labels' => array(
				'name' => 'Слайдер',
				'all_items' => 'Все слайды',
				'add_new' => 'Добавить новый',
				'add_new_item' => 'Добавление слайда'
			)
		));
	}
?>
