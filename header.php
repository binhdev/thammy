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
          <div class="top-bar">
            <div class="container">
              <ul class="contact-details">
                <li>
                  <span class="fa fa-phone"></span>Call Us +91 12345 67890
                </li>
                <li>
                  <span class="fa fa-user"></span>Mail Us :
                  <a href="mailto:admin@dreamspa.com" title="">admin@dreamspa.com</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- end top-bar -->
          <div class="container">
            <div id="logo">
              <a href="" title="Dream Spa">
                <img class="normal_logo" src="<?php echo get_template_directory_uri() .'/media/images/logo.png' ?>" alt="Dream Spa" title="Dream Spa">
              </a>
            </div>
          </div>
          <div class="main-menu-wrapper">
            <nav id="main-menu">
              <div class="container">
                <ul id="menu-main-menu" class="menu">
                  <li>
                    <a href=""><i class="fa fa-home"></i>Giới thiệu</a>
                  </li>
                  <li>
                    <a href="">Nâng mũi</a>
                    <div class="megamenu-child-container">
                      <ul class="sub-menu">
                        <li>

                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="">Cắt mí</a>
                  </li>
                  <li>
                    <a href="">Hàm mặt</a>
                  </li>
                  <li>
                    <a href="">Vóc dáng</a>
                  </li>
                  <li>
                    <a href="">Điều trị khác</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <div id="main">
