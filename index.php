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
  <div class="fullwidth-section skin-white">
    <div class="container">
      <div class="border-title aligncenter">
        <h2>Tại Sao Chọn Thẩm Mỹ Viện Hướng Dương</h2>
        <h6>Tôn vinh vẻ đẹp tự nhiên - Hoàn hảo đến từng đường nét</h6>
      </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 col-sm-12 col-12 dt-sc-one-third  space first">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/w1.jpg' ?>" alt="Aromatheraphy">
            </div>
            <h2>Kinh nghiệm</h2>
              <p>Với 20 năm cống hiến miệt mài cho sắc đẹp cộng đồng, Hướng Dương trong mắt khách hàng là một Viện Thẩm Mỹ vừa có TÂM vừa có TẦM</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-sm-12 col-12 dt-sc-one-third  space ">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/w2.jpg' ?>" alt="Skin Care">
            </div>
            <h2>Đội ngũ bác sĩ</h2>
              <p>Các chuyên gia tại Hướng Dương đều đã tu nghiệp tại nhiều nước uy tín về PTTM, đặc biệt họ đã và đang làm việc ở đây suốt 20 năm qua.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-sm-12 col-12 dt-sc-one-third  space ">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/w3.jpg' ?>" alt="Herbal Spa">
            </div>
            <h2>Dịch vụ</h2>
              <p>Mọi cuộc phẫu thuật đều được thực hiện tại phòng vô trùng ở Hướng Dương hoặc các Bệnh viện lớn bởi các bác sĩ chuyên nghiệp, dày dặn kinh nghiệm.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 col-sm-12 col-12 dt-sc-one-third  space first">
        <div class="dt-sc-popular-procedures with-image">
          <div class="dt-sc-popular-procedures-wrapper">
            <div class="border"> </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri() .'/media/images/w4.jpg' ?>" alt="Aromatheraphy">
            </div>
            <h2>Cam kết</h2>
              <p>Tại Hướng Dương, với kinh nghiệm và trách nhiệm trong công việc, đội ngũ bác sĩ sẽ đưa ra giải pháp chính xác nhất cho từng khuôn mặt.</p>
          </div>
          <a href="#" class="dt-sc-button small">Read More</a>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-medium"></div>
    <div class="border-title aligncenter">
      <h2>Tái sinh nhan sắc</h2>
      <h6>Nhưng khách hàng đã đến và làm đẹp với chúng tôi!</h6>
    </div>
  </div>

  <div class="slide-album container">
		 <?php echo do_shortcode( '[sp_wpcarousel id="22"]' ); ?>
	</div>

  <div class="fullwidth-section">
    <div class="container">
      <div class="border-title aligncenter">
        <h2>Dịch Vụ Nổi Bật Của Chúng Tôi</h2>
        <h6>Phẫu thuật thẩm mỹ Hướng Dương là một trung tâm thẩm mỹ uy tín, thường xuyên cập nhật và áp dụng kỹ thuật mới, nên luôn được đánh giá là một địa chỉ đáng tin cậy để mọi người tìm đến khi có nhu cầu làm đẹp.</h6>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 col-sm-12 col-12 dt-sc-one-third  space first">
          <div class="dt-sc-ico-content type1 green">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico1.png' ?>" alt=""></span>
            </div>
            <h2>Tạo hình mắt</h2>
            <div class="image">
              <img width="200px" height="200px" src="<?php echo get_template_directory_uri() .'/media/images/X1.jpg' ?>" alt="" title="">
            </div>
            <ul class="listSer">
              <li>Kết quả thẩm mỹ tự nhiên, đẹp tinh tế.</li>
              <li>Không để lại sẹo, không có dấu vết thẩm mỹ.</li>
              <li>Phần rẻ quạt ở góc mắt được loại bỏ, mắt trở nên to đẹp.</li>
              <li>Khoảng cách của hai góc mắt được đưa về vị trí phù hợp tạo nên sự cân đối, hài hòa.</li>
              <li>Đôi mắt có chiều sâu, to tròn.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 col-12  dt-sc-one-third  space ">
          <div class="dt-sc-ico-content type1 chocolate">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico2.png' ?>" alt=""></span>
            </div>
            <h2>Tạo hình mũi S-Line</h2>
            <div class="image">
              <img width="200px" height="200px"  src="<?php echo get_template_directory_uri() .'/media/images/X2.jpg' ?>" alt="" title="">
            </div>
            <ul class="listSer">
              <li>Sở hữu sống mũi như mỹ nhân Hàn Quốc.</li>
              <li>Tạo sự hài hòa, cân xứng cho khuôn mặt.</li>
              <li>Được bác sĩ tư vấn và tạo hình kĩ lưỡng.</li>
              <li>Đảm bảo an toàn sau phẩu thuật.</li>
              <li>Độ bền cao do chất liệu lấy từ sụn tự thân.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 col-12  dt-sc-one-third  space ">
          <div class="dt-sc-ico-content type1 blue">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico3.png' ?>" alt=""></span>
            </div>
            <h2>Thẫm mỹ tạo hình môi</h2>
            <div class="image">
              <img width="200px" height="200px" src="<?php echo get_template_directory_uri() .'/media/images/X3.jpg' ?>" alt="" title="">
            </div>
            <ul class="listSer">
              <li>Tạo hình môi đẹp “đúng chuẩn” HOT-TREND!</li>
              <li>Tạo dáng môi ĐẸP TỰ NHIÊN đạt tỉ lệ cân đối.</li>
              <li>Tạo môi trái tim đẹp tự nhiên, không để lại dấu vết thẩm mỹ.</li>
              <li>Tạo môi trái tim khắc phục toàn diện khuyết điểm ở môi.</li>
              <li>Sở hữu ngay môi xinh kiêu kỳ, đẹp khó cưỡng.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-12 col-12  dt-sc-one-third  space ">
          <div class="dt-sc-ico-content type1 yellow">
            <div class="icon">
              <span> <img src="<?php echo get_template_directory_uri() .'/media/images/services-ico3.png' ?>" alt=""></span>
            </div>
            <h2>Tạo hình Cằm V-Line</h2>
            <div class="image">
              <img width="200px" height="200px" src="<?php echo get_template_directory_uri() .'/media/images/X4.jpg' ?>" alt="" title="">
            </div>
            <ul class="listSer">
              <li>Phương pháp được nhiều người sử dụng.</li>
              <li>Mang lại chiếc cằm đẹp chuẩn V-line.</li>
              <li>Không đau và không để lại sẹo.</li>
              <li>Tuyệt đối an toàn cho khách hàng.</li>
              <li>Hiệu quả thẩm mỹ được duy trì lâu dài.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</section>
<?php
get_footer();
