<?php
global $img_folder;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#31307D"><?php /* TODO:
    replace with realfavicongenerator.net snippet */ ?>

    <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) :
      function spi_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
      }
      add_action( 'wp_head', 'spi_render_title' );
    endif;
    ?>

    <?php $theme_info = wp_get_theme(); ?>

    <?php wp_enqueue_style('fontawesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('main',
			get_template_directory_uri() . '/static/css/main.css',
			array(), $theme_info->version ); ?>

    <?php wp_enqueue_script( 'scripts',
    get_template_directory_uri() . '/static/js/main.js',
    array('jquery'), '0.1', true ); ?>

    <?php wp_head(); ?>
  </head>

  <body<?php if(is_home()) { echo ' class="home"'; } ?>>

  <header class="bies">

    <a href="<?php echo get_site_url(); ?>">
      <picture>
        <source srcset="<?=$img_folder?>bies.svg" type="image/svg+xml">
        <img class="bies__image" alt="Study association i.d"
          srcset="<?=$img_folder?>bies.png 1x,
            <?=$img_folder?>bies@2x.png 2x"
          src="<?=$img_folder?>bies.png">
      </picture>
    </a>

    <nav class="primary-menu">
      <?php wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'primary-menu__list' ) ); ?>
    </nav>

  </header>

  <div class="js-menu-toggle menu-toggle">
    menu
  </div>
