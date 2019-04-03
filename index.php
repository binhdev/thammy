<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thammy
 */

get_header();
?>

<div id="slider">
	<?php echo do_shortcode('[sp_wpcarousel id="18"]'); ?>
</div>
<section id="primary" class="content-full-width">
  <div class="dt-sc-hr-invisible "></div>
  <div class="fullwidth-section">
    <div class="container">
      <div class="border-title aligncenter">
        <h2>A Warm Welcome</h2>
        <h6>We at Dream Spa provide various services to the nature of the clients. Wish how you would like to spend the</h6>
        <h6>time here we can talk and come to a conclusion.</h6>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-sm-12 col-12 dt-sc-one-third  space first">
          <div class="dt-sc-ico-content type1 green">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico1.png' ?>" alt=""></span>
            </div>
            <h2>Ayurveda Spa</h2>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/services1.jpg' ?>" alt="" title="">
            </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-12 col-12  dt-sc-one-third  space ">
          <div class="dt-sc-ico-content type1 chocolate">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico2.png' ?>" alt=""></span>
            </div>
            <h2>Luxury Spa</h2>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/services2.jpg' ?>" alt="" title="">
            </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-12 col-12  dt-sc-one-third  space ">
          <div class="dt-sc-ico-content type1 blue">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico3.png' ?>" alt=""></span>
            </div>
            <h2>Massage Spa</h2>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/services3.jpg' ?>" alt="" title="">
            </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="dt-sc-hr-invisible-medium"></div>
  <div class="fullwidth-section skin-white">
    <div class="container">
      <div class="border-title aligncenter">
        <h2>Popular Procedures</h2>
        <h6>These procedures are the best and most loved by our customers.</h6>
      </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 col-sm-12 col-12 dt-sc-one-third  space first">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/popular-procedures1.jpg' ?>" alt="Aromatheraphy">
            </div>
            <h2>Aromatheraphy</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias provident destiny is about voles.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-sm-12 col-12 dt-sc-one-third  space ">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/popular-procedures2.jpg' ?>" alt="Skin Care">
            </div>
            <h2>Skin Care</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias provident destiny is about voles.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-sm-12 col-12 dt-sc-one-third  space ">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/popular-procedures3.jpg' ?>" alt="Herbal Spa">
            </div>
            <h2>Herbal Spa</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias provident destiny is about voles.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-medium"></div>
    <div class="border-title aligncenter">
      <h2>Our Gallery</h2>
      <h6>Take a look at our practice and process of defining spa!</h6>
    </div>
  </div>
  <div class="slide-album">
		 <?php echo do_shortcode( '[sp_wpcarousel id="22"]' ); ?>
	</div>
</div>
</div>
</section>
<?php
get_footer();
