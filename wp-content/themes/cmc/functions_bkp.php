<?php

/**
 * cmc's functions and definitions
 *
 * @package cmc
 * @since cmc 1.0
 */
if (!function_exists('cmc_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function cmc_setup()
	{
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain('cmc', get_template_directory() . '/languages');
		/**
		 * Add default posts and comments RSS feed links to &lt;head&gt;.
		 */
		add_theme_support('automatic-feed-links');
		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails');
		/**
		 * Add support for two custom navigation menus.
		 */
		require_once('bs4navwalker.php');
		register_nav_menus(array(
			'primary'    => __('Primary Menu', 'cmc'),
			'secondary'  => __('Secondary Menu', 'cmc')
		));
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
	}
endif; // cmc_setup
add_action('after_setup_theme', 'cmc_setup');
/**
 * Register the theme options
 */
if (function_exists('acf_add_options_page')) {
	// $icon = get_bloginfo('stylesheet_directory') . '/assets/images/icon/theme-icon.png';
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		// 'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		// 'icon_url'      => $icon,
		'position'      => '02',
		// 'redirect'		=> false,
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Color Settings',
		'menu_title'	=> 'Color',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Seo Settings',
		'menu_title'	=> 'Seo',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Settings',
		'menu_title'	=> 'Social',
		'parent_slug'	=> 'theme-general-settings',
	));
}
if (function_exists('acf_add_options_page')) {
	acf_add_options_sub_page(array(
		'page_title'     => 'Events Page',
		'menu_title'    => 'Events Page',
		'parent_slug'    => 'edit.php?post_type=events',
	));
}
if (function_exists('acf_add_options_page')) {
	acf_add_options_sub_page(array(
		'page_title'     => 'Departments Page',
		'menu_title'    => 'Departments	 Page',
		'parent_slug'    => 'edit.php?post_type=departments',
	));
}
if (function_exists('acf_add_options_page')) {
	acf_add_options_sub_page(array(
		'page_title'     => 'Gallery Page',
		'menu_title'    => 'Gallery	 Page',
		'parent_slug'    => 'edit.php?post_type=gallery',
	));
}
if (function_exists('acf_add_options_page')) {
	acf_add_options_sub_page(array(
		'page_title'     => 'Our Campuses Page',
		'menu_title'    => 'Our Campuses Page',
		'parent_slug'    => 'edit.php?post_type=our-campuses',
	));
}
/**
 * Register the theme Files Js and CSS files
 */
function load_stylesheets()
{
	wp_register_style('animate.min.css', get_template_directory_uri() . '/assets/animation/animate.min.css', array(), '2.3.4', 'all');
	wp_register_style('bootstrap.min.css', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), '5.2.2', 'all');
	wp_register_style('fancybox.css', get_template_directory_uri() . '/assets/fancybox/fancybox.css', array(), '4.0', 'all');
	wp_register_style('font-awesome.css', get_template_directory_uri() . '/assets/font-awesome/all.min.css', array(), '5.15.4', 'all');
	wp_register_style('owl.carousel.min.css', get_template_directory_uri() . '/assets/slider/owl.carousel.min.css', array(), '1.9.0', 'all');
	wp_register_style('owl.theme.default.css', get_template_directory_uri() . '/assets/slider/owl.theme.default.css', array(), '1.9.0', 'all');
	wp_register_style('comman-style.php', get_template_directory_uri() . '/assets/comman/comman-style.php', array(), '1.0.0', 'all');
	wp_register_style('responsive.min.css', get_template_directory_uri() . '/assets/comman/responsive.min.css', array(), '1.0.0', 'all');
	wp_register_style('style.css', get_template_directory_uri() . '/style.css', array(
		'animate.min.css',
		'bootstrap.min.css',
		'fancybox.css',
		'font-awesome.css',
		'owl.carousel.min.css',
		//'owl.theme.default.css',
		'comman-style.php',
		'responsive.min.css',
	), '1.01', 'all');
	wp_enqueue_style('style.css');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_scripts()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery.min.js', get_template_directory_uri() . '/assets/comman/jquery.min.js', array(), '3.6.0', 'all');
	wp_register_script('wow.min.js', get_template_directory_uri() . '/assets/animation/wow.min.js', array(), '2.3.4', 'all');
	wp_register_script('bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.bundle.min.js', array(), '5.2.2', 'all');
	wp_register_script('fancybox.js', get_template_directory_uri() . '/assets/fancybox/fancybox.js', array(), '5.15.4', 'all');
	wp_register_script('owl.carousel.min.js', get_template_directory_uri() . '/assets/slider/owl.carousel.min.js', array(), '1.9.0', 'all');
	wp_register_script('jquery.validate.min.js', get_template_directory_uri() . '/assets/form-validation/jquery.validate.min.js', array(), '1.9.0', 'all');
	wp_register_script('additional-methods.min.js', get_template_directory_uri() . '/assets/form-validation/additional-methods.min.js', array(), '1.9.0', 'all');
	wp_register_script('pagination.min.js', get_template_directory_uri() . '/assets/pagination/pagination.min.js', array(), '1.9.0', 'all');
	wp_register_script('init.min.js', get_template_directory_uri() . '/assets/comman/init.min.js', array(
		'jquery.min.js',
		'wow.min.js',
		'bootstrap.bundle.min.js',
		'fancybox.js',
		'owl.carousel.min.js',
		'jquery.validate.min.js',
		'additional-methods.min.js',
		'pagination.min.js',
	), 1.01, true);
	wp_enqueue_script('init.min.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');
function remove_css_id_filter($var)
{
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('page_css_class', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_css_class', 'remove_css_id_filter', 100, 1);
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{
	register_sidebar(array(
		'name'          => 'Footer',
		'id'            => 'footer-menu',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'arphabet_widgets_init');
function google_fonts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'google_fonts');
//Portfolio Post 
//Post Renameing
function add_author_support_to_posts()
{
	add_post_type_support('portfolio', 'author');
}
add_action('init', 'add_author_support_to_posts');
// Function to change "posts" to "news" in the admin side menu
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'News Tag';
	$submenu['edit.php'][15][0] = 'News Categories';
	echo '';
}
add_action('admin_menu', 'change_post_menu_label');
// Function to change post object labels to "news"
function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
	$post_type = 'post';
	$post_type_object = get_post_type_object($post_type);
	$post_type_object->has_archive = 'true';
	$post_type_object->rewrite = array(
		'slug' => 'news',
	);
	register_post_type($post_type, $post_type_object);
}
add_action('init', 'change_post_object_label');
function THEME_SLUG_posts_add_rewrite_rules($wp_rewrite)
{
	$new_rules = [
		'news/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged=' . $wp_rewrite->preg_index(1),
		'news/(.+?)/?$' => 'index.php?post_type=post&name=' . $wp_rewrite->preg_index(1),
	];
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
	return $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'THEME_SLUG_posts_add_rewrite_rules');
function THEME_SLUG_posts_change_blog_links($post_link, $id = 0)
{
	$post = get_post($id);
	if (is_object($post) && $post->post_type == 'post') {
		return home_url('/news/' . $post->post_name . '/');
	}
	return $post_link;
}
add_filter('post_link', 'THEME_SLUG_posts_change_blog_links', 1, 3);
//Custom post type
// Services Custom Post Type
function services_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Services',
		'add_new' => 'Add New Services',
		'add_new_item' => 'Add New Services',
		'edit_item' => 'Edit Services',
		'new_item' => 'New Services',
		'all_items' => 'All Services',
		'view_item' => 'View Services',
		'search_items' => 'Search Services',
		'not_found' =>  'No Services Found',
		'not_found_in_trash' => 'No Services found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Services',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		//'show_in_menu' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'services', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-layout',
		// 'template_lock' => 'all', // Enable "Choose template" option
		// 'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes',
			'page-template',
		)
	);
	flush_rewrite_rules();
	register_post_type('services', $args);
	// register taxonomy
	register_taxonomy(
		'services-category',
		'services',
		array(
			'hierarchical' => true,
			'label'        => 'Services Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'services-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'services-tag',
		'services',
		array(
			'hierarchical'          => false,
			'label'                 => 'Services Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'services-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'services_int');
// Events Custom Post Type
function events_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Events',
		'singular_name' => 'Events',
		'add_new' => 'Add New Events',
		'add_new_item' => 'Add New Events',
		'edit_item' => 'Edit Events',
		'new_item' => 'New Events',
		'all_items' => 'All Events',
		'view_item' => 'View Events',
		'search_items' => 'Search Events',
		'not_found' =>  'No Events Found',
		'not_found_in_trash' => 'No Events found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Events',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'events', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-tickets',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		)
	);
	flush_rewrite_rules();
	register_post_type('events', $args);
	// register taxonomy
	register_taxonomy(
		'events-category',
		'events',
		array(
			'hierarchical' => true,
			'label'        => 'Events Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'events-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'events-tag',
		'events',
		array(
			'hierarchical'          => false,
			'label'                 => 'Events Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'events-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'events_int');
// Departments Custom Post Type
function departments_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Departments',
		'singular_name' => 'Departments',
		'add_new' => 'Add New Departments',
		'add_new_item' => 'Add New Departments',
		'edit_item' => 'Edit Departments',
		'new_item' => 'New Departments',
		'all_items' => 'All Departments',
		'view_item' => 'View Departments',
		'search_items' => 'Search Departments',
		'not_found' =>  'No Departments Found',
		'not_found_in_trash' => 'No Departments found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Departments',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		//'show_in_menu' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'departments', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-groups',
		// 'template_lock' => 'all', // Enable "Choose template" option
		// 'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		)
	);
	flush_rewrite_rules();
	register_post_type('departments', $args);
	// register taxonomy
	register_taxonomy(
		'departments-category',
		'departments',
		array(
			'hierarchical' => true,
			'label'        => 'Departments Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'departments-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'departments-tag',
		'departments',
		array(
			'hierarchical'          => false,
			'label'                 => 'Departments Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'departments-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'departments_int');
// Faculty Custom Post Type
function faculty_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Faculty',
		'singular_name' => 'Faculty',
		'add_new' => 'Add New Faculty',
		'add_new_item' => 'Add New Faculty',
		'edit_item' => 'Edit Faculty',
		'new_item' => 'New Faculty',
		'all_items' => 'All Faculty',
		'view_item' => 'View Faculty',
		'search_items' => 'Search Faculty',
		'not_found' =>  'No Faculty Found',
		'not_found_in_trash' => 'No Faculty found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Faculty',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		//'show_in_menu' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'faculty', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-businessman',
		// 'template_lock' => 'all', // Enable "Choose template" option
		// 'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		)
	);
	flush_rewrite_rules();
	register_post_type('faculty', $args);
	// register taxonomy
	register_taxonomy(
		'faculty-category',
		'faculty',
		array(
			'hierarchical' => true,
			'label'        => 'Faculty Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'faculty-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'faculty-tag',
		'faculty',
		array(
			'hierarchical'          => false,
			'label'                 => 'Faculty Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'faculty-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'faculty_int');
// Gallery Custom Post Type
function gallery_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Gallery',
		'singular_name' => 'Gallery',
		'add_new' => 'Add New Gallery',
		'add_new_item' => 'Add New Gallery',
		'edit_item' => 'Edit Gallery',
		'new_item' => 'New Gallery',
		'all_items' => 'All Gallery',
		'view_item' => 'View Gallery',
		'search_items' => 'Search Gallery',
		'not_found' =>  'No Gallery Found',
		'not_found_in_trash' => 'No Gallery found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Gallery',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'gallery', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		)
	);
	flush_rewrite_rules();
	register_post_type('gallery', $args);
	// register taxonomy
	register_taxonomy(
		'gallery-category',
		'gallery',
		array(
			'hierarchical' => true,
			'label'        => 'Gallery Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'gallery-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'gallery-tag',
		'gallery',
		array(
			'hierarchical'          => false,
			'label'                 => 'Gallery Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'gallery-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'gallery_int');
// Our Campuses Custom Post Type
function our_campuses_int()
{
	// set up service labels
	$labels = array(
		'name' => 'Our Campuses',
		'singular_name' => 'Our Campuses',
		'add_new' => 'Add New Our Campuses',
		'add_new_item' => 'Add New Our Campuses',
		'edit_item' => 'Edit Our Campuses',
		'new_item' => 'New Our Campuses',
		'all_items' => 'All Our Campuses',
		'view_item' => 'View Our Campuses',
		'search_items' => 'Search Our Campuses',
		'not_found' =>  'No Our Campuses Found',
		'not_found_in_trash' => 'No Our Campuses found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Our Campuses',
	);
	// register post type
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		"publicly_queryable" => true,
		"hierarchical" => false,
		'rewrite' => array('slug' => 'our-campuses', 'with_front' => false),
		'query_var' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'page-attributes'
		)
	);
	flush_rewrite_rules();
	register_post_type('our-campuses', $args);
	// register taxonomy
	register_taxonomy(
		'our-campuses-category',
		'our-campuses',
		array(
			'hierarchical' => true,
			'label'        => 'Our Campuses Category',
			'query_var'    => true,
			'rewrite'      => array(
				'slug'       => 'our-campuses-category',
				'with_front' => false,
			),
		)
	);
	//register tags
	register_taxonomy(
		'our-campuses-tag',
		'our-campuses',
		array(
			'hierarchical'          => false,
			'label'                 => 'Our Campuses Tags',
			'query_var'             => true,
			'show_ui'               => true,
			'update_count_callback' => '_update_post_term_count',
			'rewrite'               => array(
				'slug'       => 'our-campuses-tag',
				'with_front' => false,
			),
		)
	);
	flush_rewrite_rules();
}
add_action('init', 'our_campuses_int');
// Breadcrumbs
function custom_breadcrumbs()
{
	// Settings
	$separator          = '&gt;';
	$breadcrums_id      = 'breadcrumbs';
	$breadcrums_class   = 'breadcrumb';
	$home_title         = 'Home';
	// If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
	$custom_taxonomy    = 'product_cat';
	// Get the query & post information
	global $post, $wp_query;
	// Do not display on the homepage
	if (!is_front_page()) {
		// Build the breadcrums
		echo '<nav aria-label="breadcrumb">';
		echo '<ol id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
		// Home page
		echo '<li class=" breadcrumb-item item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
		echo '<li class=" breadcrumb-item separator separator-home"> ' . $separator . ' </li>';
		if (is_archive() && !is_tax() && !is_category() && !is_tag()) {
			// echo '<li class=" breadcrumb-item item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title() . '</strong></li>';
			echo '<li class=" breadcrumb-item item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
		} else if (is_archive() && is_tax() && !is_category() && !is_tag()) {
			// If post is a custom post type
			$post_type = get_post_type();
			// If it is a custom post type display name and link
			if ($post_type != 'post') {
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
				echo '<li class=" breadcrumb-item item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class=" breadcrumb-item separator"> ' . $separator . ' </li>';
			}
			$custom_tax_name = get_queried_object()->name;
			echo '<li class=" breadcrumb-item item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
		} else if (is_single()) {
			// If post is a custom post type
			$post_type = get_post_type();
			// If it is a custom post type display name and link
			if ($post_type != 'post') {
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
				echo '<li class=" breadcrumb-item item-cat item-custom-post-type-' . $post_type . '"><a class=" bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class=" breadcrumb-item separator"> ' . $separator . ' </li>';
			}
			// Get post category info
			$category = get_the_category();
			if (!empty($category)) {
				// Get last category post is in
				$last_category = end(array_values($category));
				// Get parent any categories and create array
				$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','), ',');
				$cat_parents = explode(',', $get_cat_parents);
				// Loop through parent categories and store in variable $cat_display
				$cat_display = '';
				foreach ($cat_parents as $parents) {
					$cat_display .= '<li class=" breadcrumb-item item-cat"><a class="1 bread-cat bread-custom-post-type-' . $post_type . '"  href="' . get_post_type_archive_link($post_type) . '/news">' . get_post_type_object(get_post_type())->labels->singular_name . '</a></li>';
					$cat_display .= '<li class=" breadcrumb-item separator"> ' . $separator . ' </li>';
				}
			}
			// If it's a custom post type within a custom taxonomy
			$taxonomy_exists = taxonomy_exists($custom_taxonomy);
			if (empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
				$taxonomy_terms = get_the_terms($post->ID, $custom_taxonomy);
				$cat_id         = $taxonomy_terms[0]->term_id;
				$cat_nicename   = $taxonomy_terms[0]->slug;
				$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
				$cat_name       = $taxonomy_terms[0]->name;
			}
			// Check if the post is in a category
			if (!empty($last_category)) {
				echo $cat_display;
				echo '<li class=" breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				// Else if post is in a custom taxonomy
			} else if (!empty($cat_id)) {
				echo '<li class=" breadcrumb-item item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
				echo '<li class=" breadcrumb-item separator"> ' . $separator . ' </li>';
				echo '<li class=" breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			} else {
				echo '<li class=" breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			}
		} else if (is_category()) {
			// Category page
			$post_type = get_post_type();
			echo '<li class=" breadcrumb-item item-cat"><a class="1 bread-cat bread-custom-post-type-' . $post_type . '"  href="' . get_post_type_archive_link($post_type) . '/news">' . get_post_type_object(get_post_type())->labels->singular_name . '</a></li>';
			echo '<li class=" breadcrumb-item item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
		} else if (is_page()) {
			// Standard page
			if ($post->post_parent) {
				// If child page, get parents
				$anc = get_post_ancestors($post->ID);
				// Get parents in the right order
				$anc = array_reverse($anc);
				// Parent page loop
				if (!isset($parents)) $parents = null;
				foreach ($anc as $ancestor) {
					$parents .= '<li class=" breadcrumb-item item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
					$parents .= '<li class=" breadcrumb-item separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
				}
				// Display parent pages
				echo $parents;
				// Current page
				echo '<li class=" breadcrumb-item item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
			} else {
				// Just display current page if not parents
				echo '<li class=" breadcrumb-item item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
			}
		} else if (is_tag()) {
			// Tag page
			// Get tag information
			$term_id        = get_query_var('tag_id');
			$taxonomy       = 'post_tag';
			$args           = 'include=' . $term_id;
			$terms          = get_terms($taxonomy, $args);
			$get_term_id    = $terms[0]->term_id;
			$get_term_slug  = $terms[0]->slug;
			$get_term_name  = $terms[0]->name;
			// Display the tag name
			echo '<li class=" breadcrumb-item item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
		} elseif (is_day()) {
			// Day archive
			// Year link
			echo '<li class=" breadcrumb-item item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class=" breadcrumb-item separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			// Month link
			echo '<li class=" breadcrumb-item item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
			echo '<li class=" breadcrumb-item separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
			// Day display
			echo '<li class=" breadcrumb-item item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
		} else if (is_month()) {
			// Month Archive
			// Year link
			echo '<li class=" breadcrumb-item item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class=" breadcrumb-item separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			// Month display
			echo '<li class=" breadcrumb-item item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
		} else if (is_year()) {
			// Display year archive
			echo '<li class=" breadcrumb-item item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
		} else if (is_author()) {
			// Auhor archive
			// Get the author information
			global $author;
			$userdata = get_userdata($author);
			// Display author name
			echo '<li class=" breadcrumb-item item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
		} else if (get_query_var('paged')) {
			// Paginated archives
			echo '<li class=" breadcrumb-item item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">' . __('Page') . ' ' . get_query_var('paged') . '</strong></li>';
		} else if (is_search()) {
			// Search results page
			echo '<li class=" breadcrumb-item item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
		} elseif (is_404()) {
			// 404 page
			echo '<li>' . 'Error 404' . '</li>';
		}
		echo '</ol>';
		echo '</nav>';
	}
}
/**
 * Remove this code
 */
/**
 * @snippet  Duplicate posts and pages without plugins
 * @author   Misha Rudrastyh
 * @url      https://rudrastyh.com/wordpress/duplicate-post.html
 */
// Add the duplicate link to action list for post_row_actions
// for "post" and custom post types
add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
// for "page" post type
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);
function rd_duplicate_post_link($actions, $post)
{
	if (!current_user_can('edit_posts')) {
		return $actions;
	}
	$url = wp_nonce_url(
		add_query_arg(
			array(
				'action' => 'rd_duplicate_post_as_draft',
				'post' => $post->ID,
			),
			'admin.php'
		),
		basename(__FILE__),
		'duplicate_nonce'
	);
	$actions['duplicate'] = '<a href="' . $url . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	return $actions;
}
/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');
function rd_duplicate_post_as_draft()
{
	// check if post ID has been provided and action
	if (empty($_GET['post'])) {
		wp_die('No post to duplicate has been provided!');
	}
	// Nonce verification
	if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__))) {
		return;
	}
	// Get the original post id
	$post_id = absint($_GET['post']);
	// And all the original post data then
	$post = get_post($post_id);
	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
	// if post data exists (I am sure it is, but just in a case), create the post duplicate
	if ($post) {
		// new post data array
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
		// insert the post by wp_insert_post() function
		$new_post_id = wp_insert_post($args);
		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies(get_post_type($post)); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		if ($taxonomies) {
			foreach ($taxonomies as $taxonomy) {
				$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
				wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
			}
		}
		// duplicate all post meta
		$post_meta = get_post_meta($post_id);
		if ($post_meta) {
			foreach ($post_meta as $meta_key => $meta_values) {
				if ('_wp_old_slug' == $meta_key) { // do nothing for this meta key
					continue;
				}
				foreach ($meta_values as $meta_value) {
					add_post_meta($new_post_id, $meta_key, $meta_value);
				}
			}
		}
		wp_safe_redirect(
			add_query_arg(
				array(
					'post_type' => ('post' !== get_post_type($post) ? get_post_type($post) : false),
					'saved' => 'post_duplication_created' // just a custom slug here
				),
				admin_url('edit.php')
			)
		);
		exit;
	} else {
		wp_die('Post creation failed, could not find original post.');
	}
}
/*
 * In case we decided to add admin notices
 */
add_action('admin_notices', 'rudr_duplication_admin_notice');
function rudr_duplication_admin_notice()
{
	// Get the current screen
	$screen = get_current_screen();
	if ('edit' !== $screen->base) {
		return;
	}
	//Checks if settings updated
	if (isset($_GET['saved']) && 'post_duplication_created' == $_GET['saved']) {
		echo '<div class="notice notice-success is-dismissible"><p>Post copy created.</p></div>';
	}
}
/**
 * Modify main search query
 */
function custom_search_filter($query)
{
	if ($query->is_search && !is_admin()) {
		$query->set('post_type', array('post', 'page'));
		$query->set('posts_per_page', 10); // Adjust the number of search results per page
	}
	return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');
