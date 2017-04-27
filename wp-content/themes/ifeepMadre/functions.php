<?php
define('IMAGES', TEMPPATH. "/images");


function ifeepMadre_styles(){
  wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
  wp_enqueue_style('bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
  wp_enqueue_style('raleway',"https://fonts.googleapis.com/css?family=Raleway");

  wp_enqueue_style('style',get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('fontawesome',"https://use.fontawesome.com/3d66408ee0.js");

  wp_enqueue_script('bootstrapjs',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'),'3.36',true);
}
add_action('wp_enqueue_scripts', 'ifeepMadre_styles');

add_theme_support('post-thumbnails');

// crear el menu de navegacion

register_nav_menus(array(
  'menu_principal'=>__('Menu Principal','ifeepMadre')
));

// registrar nav walker que es el gestor de menu dinamico

require_once('wp_bootstrap_navwalker.php');

function wbp_theme_setup(){
  register_nav_menus(array(
    'primary' =>__('Primary Menu')
  ));
}
add_action( 'after_setup_theme', 'wbp_theme_setup');

function ifeepMadre_widgets() {
  register_sidebar(array(
    'name' => __('Footer Widget'),
    'id' => 'footer_widget',
    'description' => 'Widget para el footer de la pagina',
    'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ) );

}
add_action('widgets_init','ifeepMadre_widgets');
