<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thammy
 */

?>
</div>
    <footer id="footer">
      <div class="footer-logo">
        <img class="normal_logo" src="<?php echo get_template_directory_uri() .'/media/images/footer-logo.png' ?>" title="Footer Logo">
      </div>
      <div class="footer-widgets-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-12 col-12 dt-sc-one-fourth first">
                <aside id="nav_menu-2" class="widget widget_nav_menu">
                  <h3 class="widgettitle">Links</h3>
                  <div class="menu-footer-widget-menu-container">
                    <ul id="menu-footer-widget-menu" class="menu">
                      <li id="menu-item-397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-105 current_page_item menu-item-397">
                        <a href="https://dreamspa.dttheme.com/">Home</a>
                      </li>

                      <li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a href="https://dreamspa.dttheme.com/about-us/">About us</a>
                      </li>

                      <li id="menu-item-399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-399">
                        <a href="https://dreamspa.dttheme.com/blog/">Blog</a>
                      </li>

                      <li id="menu-item-400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400"><a href="https://dreamspa.dttheme.com/gallery/">Gallery</a>
                      </li>

                      <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401">
                        <a href="https://dreamspa.dttheme.com/location/">Location</a>
                      </li>
                    </ul>
                  </div>
                </aside>
              </div>

              <div class="col-lg-3 col-md-4  col-sm-12 col-12 dt-sc-one-fourth ">
                <aside id="text-4" class="widget widget_text">
                  <h3 class="widgettitle">Services</h3>
                  <div class="textwidget">
                    <ul>
                      <li> <a title="" href=""> Aromatheraphy </a> </li>
                      <li> <a title="" href=""> Skin Care </a> </li>
                      <li> <a title="" href=""> Herbal Spa </a> </li>
                      <li> <a title="" href=""> Hydrotherapy </a> </li>
                      <li> <a title="" href=""> Electropathy </a> </li>
                    </ul>
                  </div>
                </aside>
              </div>

              <div class="col-lg-3 col-md-4  col-sm-12 col-12 dt-sc-one-fourth ">
                <aside id="text-3" class="widget widget_text">
                  <h3 class="widgettitle">Social</h3>
                  <div class="textwidget">
                    <ul class="dt-sc-social-icons">
                      <li> <a title="" href=""> <i class="fa fa-facebook"> </i> Facebook </a> </li>
                      <li> <a title="" href=""> <i class="fa fa-twitter"> </i> Twitter </a> </li>
                      <li> <a title="" href=""> <i class="fa fa-google-plus"> </i> Google Plus </a> </li>
                      <li> <a title="" href=""> <i class="fa fa-youtube"> </i> Youtube </a> </li>
                    </ul>
                  </div>
                </aside>
              </div>
              <div class="col-lg-3 col-md-4  col-sm-12 col-12 dt-sc-one-fourth ">
                <aside id="text-2" class="widget widget_text">
                  <h3 class="widgettitle">About</h3>
                    <div class="textwidget"><img title="DreamSpa" alt="DreamSpa" src="<?php echo get_template_directory_uri() .'/media/images/logo.png' ?>">
                    <div class="dt-sc-hr-invisible-small"> </div>
                    <p> Cannot foresee the pain and trouble that are bound to who fail in their duty through weakness of will, which is the same and pain.   </p>
                  </div>
                </aside>
                </div>
              </div>
            </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="copyright-content">DreamSpa © 2016. Design by Design Themes</div>
          </div>
        </div>
    </footer>
  </div>
 </div>
 <style type="text/css">
 	.wpcp-carousel-section.nav-vertical-center {
	  padding: 0px;
	}
	.slick-next {
		margin-right: 10px;
	}
	.slick-prev{
		margin-left: 10px;
	}
 </style>
</div>
</body>
</html>
<?php wp_footer(); ?>
