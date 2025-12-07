<?php


function contra_scripts() {

      // CSS Files
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/bootstrap.css');
      wp_enqueue_style('contra-style', get_template_directory_uri() . '/css/style.css');
      wp_enqueue_style('animresponsiveate', get_template_directory_uri() . '/css/responsive.css');
      wp_enqueue_style('switcher', get_template_directory_uri() . '/css/color-switcher-design.css');
      wp_enqueue_style('default-theme', get_template_directory_uri() . '/css/color-themes/default-theme.css');

      // JS Files

      wp_enqueue_script('jquery');
      wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
      wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), null, true);
      wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), null, true);
      wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.js', array('jquery'), null, true);
      wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), null, true);
      wp_enqueue_script('appear', get_template_directory_uri() . '/js/appear.js', array('jquery'), null, true);
      wp_enqueue_script('mixitup', get_template_directory_uri() . '/js/mixitup.js', array('jquery'), null, true);
      wp_enqueue_script('contra-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
      wp_enqueue_script('color-settings', get_template_directory_uri() . '/js/color-settings.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'contra_scripts' );

add_action('after_setup_theme', 'contra_theme_support');

function contra_theme_support() {
      

      // Loading Theme Textdomain
      load_theme_textdomain('finexus-finance',get_template_directory().'/languages' );

      //Generate automatic feed links on head
      add_theme_support('automatic_feed_links');

      //Adding support for automatic title-tag
      add_theme_support('title-tag');

      //Enableing post Thumbnails support
      add_theme_support('post-thumbnails');

      // Custom logo support
      add_theme_support('custom-logo',
       array(
                  'height'      => 250,
                  'width'       => 250,
                  'flex-width'  => true,
                  'flex-height' => true,
       ));

      // Widgets Support
       add_theme_support('widgets');

      // This theme use wp nav menu on this location

       register_nav_menus( array(
      'menu-1'      => esc_html__( 'Primary', 'contra' ),
      'quick_link'  => esc_html__( 'Quick Menu', 'contra' ),
      'useful_link' => esc_html__( 'Useful Menu', 'contra' ),
));

}


add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

  }
});

// add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
// function enqueue_parent_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }


// add_filter('wp_nav_menu_args', 'contra_nav_menu_args');
// function contra_nav_menu_args($args) {
//   $args['show_home'] = false;
//   return $args;
// }
