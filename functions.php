

<?php

get_template_part( 'inc/halim-option' );

// Add custom function in here
function halim_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post', 'sliders', 'teams', 'testimonials', 'portfolio') );
    // add_theme_support( 'custom-logo' );

    load_theme_textdomain( 'halim', get_template_directory() . '/languages' );

    register_nav_menus( array(
        // 'main-menu' => esc_html__( 'Main Menu', 'halim' ),
        'main-menu' => __( 'Primary Menu', 'halim' ),
    ));
}

add_action( 'after_setup_theme', 'halim_theme_setup' );

function halim_css_js_enqueue() {
   // Enqueue CSS files
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-style', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-theme-style', get_template_directory_uri(). '/assets/css/owl.theme.default.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri(). '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri(). '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri(). '/style.css', array(), '1.0.0', 'all' );

// Ensure jQuery is loaded
    // wp_enqueue_script('jquery');
    
    // Enqueue other scripts with dependencies on jQuery
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup-js', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'halim_css_js_enqueue' );



// Custom function for post
function halim_custom_posts() {
    // sliders custom post
    register_post_type( 'sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'halim'),
            'singular_name' =>  __('Sliders', 'halim')
        ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    )
    );

    // services custom post
    register_post_type( 'services', array(
        'labels' => array(
            'name' => __('Services', 'halim'),
            'singular_name' =>  __('Service', 'halim')
        ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'custom-fields' ),
    )
    );

    // teams custom post
    register_post_type( 'teams', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' =>  __('Team', 'halim')
        ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
    )
    );

    // testimonials custom post
    register_post_type( 'testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' =>  __('Testimonial', 'halim')
        ),
        'public' => true,
        'supports' => array( 'thumbnail', 'custom-fields', 'page-attributes' ),
    )
    );

    // gallery custom post
    register_post_type( 'gallery', array(
        'labels' => array(
            'name' => __('Gallerys', 'halim'),
            'singular_name' =>  __('Gallery', 'halim')
        ),
        'public' => true,
        'supports' => array( 'title', 'custom-fields', 'page-attributes' ),
    )
    );

    // portfolio custom post
    register_post_type( 'portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'halim'),
            'singular_name' =>  __('portfolio', 'halim')
        ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
    )
    );

    // portfolio taxonomy
    register_taxonomy( 'portfolio-type', 'portfolio', array(
        'labels' => array(
            'name' => __( 'Portfolio Types', 'halim' ),
            'singular_name' => __( 'Portfolio Type', 'halim' ),
            // 'search_items' =>  __( 'Search Portfolio Types', 'halim' ),
            // 'all_items' => __( 'All Portfolio Types', 'halim' ),
            // 'parent_item' => __( 'Parent Portfolio Type', 'halim' ),
            // 'parent_item_colon' => __( 'Parent Portfolio Type:', 'halim' ),
            // 'edit_item' => __( 'Edit Portfolio Type', 'halim' ),
            // 'update_item' => __( 'Update Portfolio Type', 'halim' ),
            // 'add_new_item' => __( 'Add New Portfolio Type', 'halim' ),
            // 'new_item_name' => __( 'New Portfolio Type Name', 'halim' ),
            // 'menu_name' => __( 'Portfolio Types', 'halim' ),
        ),
        'hierarchical' => true,
        'public' => true,
        // 'show_ui' => true,
        'show_admin_column' => true,
    ) );
}

add_action( 'init', 'halim_custom_posts' );


// halim custom widgets
function halim_custom_widgets() {
    // sidebar widget
    register_sidebar(
        array(
            'name' => __('Main Sidebar', 'halim'),
            'id' => __('sidebar-1', 'halim'),
            'description' => 'Add widgets here.',
            'before_widget' => '<div id="%1$s" class="sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // footer widget
    register_sidebar(
        array(
            'name' => __('Footer Widget 1', 'halim'),
            'id' => __('footer-widget-1', 'halim'),
            'description' => 'Add widgets here.',
            'before_widget' => '<div id="%1$s" class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    // footer widget
    register_sidebar(
        array(
            'name' => __('Footer Widget 2', 'halim'),
            'id' => __('footer-widget-2', 'halim'),
            'description' => 'Add widgets here.',
            'before_widget' => '<div id="%1$s" class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // footer widget
    register_sidebar(
        array(
            'name' => __('Footer Widget  3', 'halim'),
            'id' => __('footer-widget-3', 'halim'),
            'description' => 'Add widgets here.',
            'before_widget' => '<div id="%1$s" class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // footer widget
    register_sidebar(
        array(
            'name' => __('Footer Widget 4', 'halim'),
            'id' => __('footer-widget-4', 'halim'),
            'description' => 'Add widgets here.',
            'before_widget' => '<div id="%1$s" class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

add_action( 'widgets_init', 'halim_custom_widgets' );


// comments custom fields
function halim_comments_field($field) {
    $comment = $field['comment'];
    $name = $field['author'];
    $email = $field['email'];
    $website = $field['url'];
    $cookies = $field['cookies'];

    // unset
    unset($field['comment']);
    unset($field['author']);
    unset($field['email']);
    unset($field['url']);
    unset($field['cookies']);

    // arrange your wish
    $field['author'] = $name;
    $field['email'] = $email;
    $field['url'] = $website;
    $field['comment'] = $comment;
    $field['cookies'] = $cookies;

    return $field;
}

// add_filter('comment_form_defaults', 'halim_comments_field');
add_filter('comment_form_fields', 'halim_comments_field');