<?php
/**
 * L5 Cognitas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since L5 Cognitas 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * 
 * 
 * Enqueue scripts and styles.
 * 
 * 
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */


 /**
 * Enqueue scripts and styles.
 */



// Register Styles
function theme_styles() {
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/build/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' ); 



// Register Scripts
function theme_js() {
    global $wp_scripts;
    // wp_enqueue_script('jquery','', '', false );
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/build/js/scripts.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );



// Register Menus
function cognitas_menus() {

	$locations = array(
        'header'  => __( 'Header Menu', 'cognitas' ),
		'primary'  => __( 'Desktop Horizontal Menu', 'cognitas' ),
		'expanded' => __( 'Desktop Expanded Menu', 'cognitas' ),
		'mobile'   => __( 'Mobile Menu', 'cognitas' ),
		'footer'   => __( 'Footer Menu', 'cognitas' ),
		'social'   => __( 'Social Menu', 'cognitas' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'cognitas_menus' );




 



add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support( 'template' );
    



add_filter('show_admin_bar', '__return_false');

 
	class Primary_Walker_Nav_Menu extends Walker_Nav_Menu{

        function start_lvl( &$output, $depth ) {
            $indent = str_repeat("\t", $depth);
            $submenu = ($depth > 0) ? ' sub-menu' : '';
            $output .= "\n$indent<ul class=\"header-menu__dropdown-list$submenu depth_$depth\">\n";
        }
    
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    
            $indent = ($depth) ? str_repeat("\t", $depth) : '';
    
            $li_attributes = '';
            $class_names = $value = '';
    
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
            $classes[] = ($args->walker->has_children) ? 'header-menu__li-has-dropdown' : '';
            $classes[] = 'header-menu__li';
            $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
            $classes[] = 'menu-item-'. $item->$ID;
            if( $depth && $args->walker->has_children ) {
                $classes[] = 'header-menu__item--dropdown';
            }
    
            $class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = 'class="' . esc_attr($class_names) . '"';
    
            $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
            $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
    
            $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
    
            $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
    
            $attributes .= ! ( $args->walker->has_children ) ? ' class="header-menu__dropdown-list"' : '';
    
            $item_output = $args->before;
            $item_output .= '<a class="header-menu__link"' . $attributes .'><span>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= ( $depth == 0 && $args->walker->has_children ) ? '</span>' : '</span></a>';
            $item_output .=( $depth == 0 && $args->walker->has_children ) ?'<span class="header-menu__dropdown-carret"></span>' : "";
            $item_output .= '</a>';
            $item_output .= $args->after;
    
            $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    
          }
  
    //     function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
    //         $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
     
    //         if ($item->url && $item->url != '#') {
    //             $output .= '<a href="' . $item->url . '">';
    //         } else {
    //             $output .= '<span>';
    //         }
     
    //         $output .= $item->title;
     
    //         if ($item->url && $item->url != '#') {
    //             $output .= '</a>';
    //         } else {
    //             $output .= '</span>';
    //         }
     
    //         if ($args->walker->has_children) {
    //             $output .= '<i class="caret fa fa-angle-down"></i>';
    //         }
    //     }
    // }



// add_action( 'init', 'register_themepost', 20 );
// function register_themepost() {
//     $labels = array(
//         'name' => _x( 'projecten', 'my_custom_post','custom' ),
//         'singular_name' => _x( 'Project', 'my_custom_post', 'custom' ),
//         'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
//         'add_new_item' => _x( 'Add New Project Post', 'my_custom_post', 'custom' ),
//         'edit_item' => _x( 'Edit Project Post', 'my_custom_post', 'custom' ),
//         'new_item' => _x( 'New Project Post', 'my_custom_post', 'custom' ),
//         'view_item' => _x( 'View Project Post', 'my_custom_post', 'custom' ),
//         'search_items' => _x( 'Search Project Posts', 'my_custom_post', 'custom' ),
//         'not_found' => _x( 'No ProjectPosts found', 'my_custom_post', 'custom' ),
//         'not_found_in_trash' => _x( 'No Project Posts found in Trash', 'my_custom_post', 'custom' ),
//         'parent_item_colon' => _x( 'Parent Project Post:', 'my_custom_post', 'custom' ),
//         'menu_name' => _x( 'Case Studies', 'my_custom_post', 'custom' ),
//     );

//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => false,
//         'description' => 'Custom Project Posts',
//         'supports' => array( 'title', 'editor', 'thumbnail' ),
//         'taxonomies' => array( 'post_tag','projecten_categories'),
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
//         'show_in_nav_menus' => true,
//         'publicly_queryable' => true,
//         'exclude_from_search' => false,
//         'query_var' => true,
//         'can_export' => true,
//         'rewrite' => array('slug' => 'projecten/%projecten_categories%','with_front' => FALSE),
//         'public' => true,
//         'has_archive' => 'projecten',
//         'capability_type' => 'post'
//     );  
//     register_post_type( 'projecten', $args );//max 20 charachter cannot contain capital letters and spaces
// }  

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// function case_studies_posttype() {
//     $args = array(
//         'public' => true,
//         'labels' => array(
//             'name' => __( 'Case Studies' ),
//             'singular_name' => __( 'Case Study' )
//         ),
//         'supports' => array ( 'title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail' ),
//         'has_archive' => true,
//         'hierarchical' => true,
//         'rewrite' => array('slug' => 'case-studies'),
//         'show_in_rest' => true,
//         'menu_icon' => 'dashicons-portfolio'
//     );
//     register_post_type( 'case_studies', $args);
// }
// add_action( 'init', 'case_studies_posttype' );


function casestudies_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Case Studies'),
        'singular_name'       => __( 'Case Study', 'Post Type Singular Name', 'wpheirarchy' ),
        'supports' => array ( 'title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail' ),
        'menu_icon' => 'dashicons-portfolio',
        // 'rewrite' => array('slug' => 'case-studies'),
    );	
    register_post_type( 'case-studies', $args );
}
add_action( 'init', 'casestudies_post_type' );


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}



// function case_studies_posttype() {
//     $args = array(
//         'labels' => array(
//             'name' => __( 'Case Studies' ),
//             'singular_name' => __( 'Case Study' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array('slug' => 'case-studies'),
//         'show_in_rest' => true,
//     )
//     register_post_type( 'case_studies', $args);
// }
// add_action( 'init', 'case_studies_posttype' );


// function custom_post_type() {
 
//     // Set UI labels for Custom Post Type
//         $labels = array(
//             'name'                => _x( 'Case Studies', 'Post Type General Name', 'twentytwenty' ),
//             'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'twentytwenty' ),
//             'menu_name'           => __( 'Case Studies', 'twentytwenty' ),
//             'parent_item_colon'   => __( 'Parent Case Study', 'twentytwenty' ),
//             'all_items'           => __( 'All Case Studies', 'twentytwenty' ),
//             'view_item'           => __( 'View Case Studies', 'twentytwenty' ),
//             'add_new_item'        => __( 'Add New Case Study', 'twentytwenty' ),
//             'add_new'             => __( 'Add New', 'twentytwenty' ),
//             'edit_item'           => __( 'Edit Case Study', 'twentytwenty' ),
//             'update_item'         => __( 'Update Case Study', 'twentytwenty' ),
//             'search_items'        => __( 'Search Case Study', 'twentytwenty' ),
//             'not_found'           => __( 'Not Found', 'twentytwenty' ),
//             'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
//         );
         
//     // Set other options for Custom Post Type
         
//         $args = array(
//             'label'               => __( 'case_studies', 'twentytwenty' ),
//             'description'         => __( 'Movie news and reviews', 'twentytwenty' ),
//             'labels'              => $labels,
//             // Features this CPT supports in Post Editor
//             'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             // You can associate this CPT with a taxonomy or custom taxonomy. 
//             'taxonomies'          => array( 'genres' ),
//             /* A hierarchical CPT is like Pages and can have
//             * Parent and child items. A non-hierarchical CPT
//             * is like Posts.
//             */ 
//             'hierarchical'        => false,
//             'public'              => true,
//             'show_ui'             => true,
//             'show_in_menu'        => true,
//             'show_in_nav_menus'   => true,
//             'show_in_admin_bar'   => true,
//             'menu_position'       => 5,
//             'can_export'          => true,
//             'has_archive'         => true,
//             'exclude_from_search' => false,
//             'publicly_queryable'  => true,
//             'capability_type'     => 'post',
//             'show_in_rest' => true,
     
//         );
         
//         // Registering your Custom Post Type
//         register_post_type( 'case_studies', $args );
     
//     }
     
//     /* Hook into the 'init' action so that the function
//     * Containing our post type registration is not 
//     * unnecessarily executed. 
//     */
     
//     add_action( 'init', 'custom_post_type', 0 );



// OPTIONS 