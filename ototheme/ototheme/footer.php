<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ototheme
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="footer">
			<div class="container  py-3">
				<div class="row">
					<div class="col-md-4">
						<p class="title">
							Sản phẩm
						</p>
						
						<ul>
							<li><a href="">Về chúng tôi</a></li>
							<li><a href="">Hướng dẫn mua hàng</a></li>
							<li><a href="">Vận chuyển và thanh toán</a></li>
							<li><a href="">Chính sách bảo hành</a></li>
							<li><a href="">Liên hệ</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<p class="title">
							Thông tin liên hệ
						</p>
						
						<ul>
							<li><a href="">Địa chỉ:</a></li>
							<li><a href="">Điện thoại</a></li>
							<li><a href="">Email:</a></li>
							<li><a href="">Website:</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<p class="title">
							Bản đồ
						</p>
						
					</div>
				</div>
			</div>
			<div class="bottomfooter text-center">
				@Copyright 2019 website, All rights reserved
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="hotline-phone-ring-wrap">
	<div class="hotline-bar">
		<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
		<a href="tel:<?php  dynamic_sidebar('sidebar-phone')?>" class="pps-btn-img">
			<img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
		</a>
		</div>
	</div>
	</div>
</div>

<?php wp_footer(); ?>
<script>
	$(document).ready(function(){
		var offset = 8; // khái báo số lượng bài viết đã hiển thị
	    $('.load-more').click(function(event) {
	    	$.ajax({ // Hàm ajax
	            type : "post", //Phương thức truyền post hoặc get
	            dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
	            async: false,
	            url : '<?php echo admin_url('admin-ajax.php');?>', // Nơi xử lý dữ liệu
	            data : {
	                action: "loadmore", //Tên action, dữ liệu gởi lên cho server
	                offset: offset, // gởi số lượng bài viết đã hiển thị cho server
	            },
	            beforeSend: function(){
	                // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
	            },
	            success: function(response) {
	                $('.achive .temple-product .ml').append(response);
	                offset = offset + 8; // tăng bài viết đã hiển thị
	            },
	            error: function( jqXHR, textStatus, errorThrown ){
	                //Làm gì đó khi có lỗi xảy ra
	                console.log( 'The following error occured: ' + textStatus, errorThrown );
	            }
	       });
	    });
	});
</script>
<script src="https://uhchat.net/code.php?f=fa27c0"></script>
</body>
</html>
