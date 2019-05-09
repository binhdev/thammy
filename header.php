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
            <nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <div class="primary-menu">

                <ul id="menu-main-menu" class="menu navbar-nav">
                  <li>
                    <div id="logo">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Dream Spa">
                        <img class="normal_logo" src="<?php echo get_template_directory_uri() .'/media/images/logo.png' ?>" alt="Dream Spa" title="Dream Spa">
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="">
                      Giới thiệu
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Thẩm mỹ mắt
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Tạo hình mắt 2 mí</a>
                      <a class="dropdown-item" href="#">Lấy mỡ và da thừa mi mắt dưới</a>
                      <a class="dropdown-item" href="#">Phẫu thuật nâng lông mày</a>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Thẩm mỹ mũi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Nâng sống mũi bằng vật liệu nhân tạo</a>
                      <a class="dropdown-item" href="#">Nâng sống mũi Hàn Quốc S-line</a>
                      <a class="dropdown-item" href="#">Thu gọn cánh mũi</a>
                      <a class="dropdown-item" href="#">Thu gọn đầu mũi</a>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Phẫu thuật khuôn mặt
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Tạo hình môi</a>
                      <a class="dropdown-item" href="#">Tạo hình cằm V-line</a>
                      <a class="dropdown-item" href="#">Tạo má lúm đồng tiền</a>
                      <a class="dropdown-item" href="#">Tạo hình gò má</a>
                      <a class="dropdown-item" href="#">Căng da mặt - cổ</a>
                      <a class="dropdown-item" href="#">Phẩu thuật tạo hình tai vểnh</a>
                      <a class="dropdown-item" href="#">Phẩu thuật sứt môi</a>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Phẫu thuật khác
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Phẩu thuật sứa sẹo</a>
                      <a class="dropdown-item" href="#">Phẩu thuật trị tận gốc hôi nách</a>
                      <a class="dropdown-item" href="#">Xóa nốt ruồi, mụn thịt</a>
                    </ul>
                  </li>
                  <li>
                    <a href="">Đặt lịch</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>">Liên hệ</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url( home_url( '/vi-tri' ) ); ?>">Vị trí</a>
                  </li>
                </ul>
              </div>
            </div>
            </nav>
          </div>
        </header>
        <div id="main">
