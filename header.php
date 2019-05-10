<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thammy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'utf-8' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="inner-wrapper">
      <div id="header-wrapper">
        <header id="header" class="header1">
          <div class="main-menu-wrapper">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
              <nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-light" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <div class="primary-menu">
              <div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Dream Spa">
                  <img class="normal_logo" src="<?php echo get_template_directory_uri() .'/media/images/logo.png' ?>" alt="Dream Spa" title="Dream Spa">
                </a>
              </div>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu_class'     => 'menu navbar-nav',
                  'menu_id' => 'menu-main-menu',
                  'walker' => new WPDocs_Walker_Nav_Menu()
                 ) );
              ?>
                <?php endif; ?>
              </div>
            </div>
            </nav><!-- .main-navigation -->
          </div>
        </header>
        <div id="main">
