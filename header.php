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
          <div class="container">
            <div id="logo">
              <a href="" title="Dream Spa">
                <img class="normal_logo" src="<?php echo get_template_directory_uri() .'/media/images/logo.png' ?>" alt="Dream Spa" title="Dream Spa">
              </a>
            </div>
          </div>
          <div class="main-menu-wrapper">
            <nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <div class="container">
                <ul id="menu-main-menu" class="menu navbar-nav">
                  <li>
                    <a href="">Giới thiệu</a>
                  </li>
                  <li>
                    <a href="">Nâng mũi</a>
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
                  <li>
                    <a href="">Đặt lịch</a>
                  </li>
                  <li>
                    <a href="">Liên hệ</a>
                  </li>
                </ul>
              </div>
            </div>
            </nav>
          </div>
        </header>
        <div id="main">
