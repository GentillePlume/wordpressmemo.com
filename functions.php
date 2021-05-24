<?php

add_action( 'wp_enqueue_scripts', 'insert_css' );

function insert_css() {

	//########## Import all the stylesheets here like the example below ##########
	wp_register_style( 'ploume', 'https://source.ploume.io/latest/css/ploume.css' );
	wp_enqueue_style( 'ploume' );

	wp_register_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap' );
	wp_enqueue_style( 'fonts' );

	wp_register_style( 'ballooncss', 'https://cdnjs.cloudflare.com/ajax/libs/balloon-css/1.2.0/balloon.min.css' );
	wp_enqueue_style( 'ballooncss' );

	wp_register_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' );
	wp_enqueue_style( 'fontawesome' );

	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	//########## Import all the javascript scripts here like the example below ##########
	wp_register_script( 'jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
 	wp_enqueue_script( 'jquery2' );

	wp_register_script( 'highlightjs', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js' );
 	wp_enqueue_script( 'highlightjs' );
}

add_theme_support( 'menus' );

register_nav_menus( [
	'main-menu'  => 'Main navigation',
	'footer-menu'     => 'Footer navigation'
] );

add_theme_support( 'post-thumbnails' );

function create_post_type() {
	register_post_type( 'yacht',
		array(
			'label'              => __( 'Yachts' ),
			'singular_label'     => __( 'Yacht' ),
			'add_new_item'       => __( 'Add item' ),
			'edit_item'          => __( 'Edit item' ),
			'new_item'           => __( 'New item' ),
			'view_item'          => __( 'View item' ),
			'search_items'       => __( 'Search items' ),
			'not_found'          => __( 'Not found réalisation trouvée' ),
			'not_found_in_trash' => __( 'Not found in trash' ),
			'public'             => true,
			'show_ui'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_icon'          => 'dashicons-screenoptions',
			'taxonomies'         => array( 'types' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'rewrite'            => array( 'slug' => 'yacht', 'with_front' => true )
		)
	);
}

add_action( 'init', 'create_post_type' );

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'wordpressmemo.com' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action('widgets_init', 'themename_widgets_init');
