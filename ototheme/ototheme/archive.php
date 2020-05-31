<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ototheme
 */

get_header();

?>

  <div class="div-box-body my-5">
        <div class="container">
            <div class="row ">
                <!-- <div class="col-md-3 sidebar">
                    <div class="div-box-3-1">
                        <div class="title-sidebar">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        <div class="content-sidebar-product">
                            <ul>
                                <li><a href="">Sản phẩm 1</a></li>
                                <li><a href="">Sản phẩm 1</a></li>
                                <li><a href="">Sản phẩm 1</a></li>
                                <li><a href="">Sản phẩm 1</a></li>
                                <li><a href="">Sản phẩm 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="div-box-3-2">
                        <div class="title-sidebar">
                            <p>Hỗ trợ Online</p>
                        </div>
                        <div class="content-sidebar-contact text-center my-3">
                            <p class="text1">Tư vấn khách hàng</p>
                            <p class="text2">0919.407.122</p>
                        </div>
                    </div>
                    <div class="div-box-3-2">
                        <div class="title-sidebar">
                            <p>Thông tin mới nhất</p>
                        </div>
                        <div class="content-sidebar-newws">
                            <div class="box-1 mt-3">
                                <a href="" title="">
                                    <img src="./assets/image/img-featured.jpg" alt="">
                                    <h3>Nâng cấp động cơ tăng ép cho xe</h3>
                                </a>

                            </div>
                            <div class="box-1 mt-3">
                                <a href="" title="">
                                    <img src="./assets/image/img-featured.jpg" alt="">
                                    <h3>Nâng cấp động cơ tăng ép cho xe</h3>
                                </a>

                            </div>
                            <div class="box-1 mt-3">
                                <a href="" title="">
                                    <img src="./assets/image/img-featured.jpg" alt="">
                                    <h3>Nâng cấp động cơ tăng ép cho xe</h3>
                                </a>

                            </div>
                            <div class="box-1 mt-3">
                                <a href="" title="">
                                    <img src="./assets/image/img-featured.jpg" alt="">
                                    <h3>Nâng cấp động cơ tăng ép cho xe</h3>
                                </a>

                            </div>
                            <div class="box-1 mt-3">
                                <a href="" title="">
                                    <img src="./assets/image/img-featured.jpg" alt="">
                                    <h3>Nâng cấp động cơ tăng ép cho xe</h3>
                                </a>

                            </div>

                        </div>
                    </div>
                </div> -->
				<?php
				 $i= get_queried_object();
		$cate=get_field('chose_achive',$i);
				
				?>
                <div class="col-md-12 achive">
                    <div class="box-product-1">
                        <div class="title text-center">
                            <h3>
                                <a title="">
                                    <span><?php the_archive_title()?></span>
                                </a>
                            </h3>
                        </div>
                        <div class="temple-product ">
                            <div class="row ml">
						<?php
						$cat_id = $wp_query->get_queried_object_id();
						$args = array (
							'cat'            => $cat_id,
							'posts_per_page' => 8,
							) ;
							$the_query = new WP_Query ($args);
						if ( have_posts() ) : 
							while ($the_query-> have_posts() ) :
							$the_query -> the_post();
							 global $post;
                                 $do_not_duplicate[$post->ID] = $post->ID;
                                 if (has_post_thumbnail()) {
                                     $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                 }
                                 $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                                    // đoạn chạy được rồi 
                                   
							?>
								 <div class="col-md-3 my-3">
                                    <div class="box-is-one">
                                        <div class="img">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <img src="<?=$img?>" alt="<?=the_title()?>">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <h3 style="font-size:16px;"><?=the_title()?></h3>
												<?php
												if($cate == 'sanpham'){
												   ?>
														<p class="price"><?=number_format(get_field('Price'));?>đ</p>
													<?php
												}
											   else{
												   ?>
												 <h4 style="font-size:16px; color:#000"><?=wp_trim_words(get_the_content(),15,'...')?></h4>
												<?php 
											   }
												?>
                                               
                                            </a>
                                        </div>
                                        <div class="quickview">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                    </div>                               
                                </div>
							<?php 
								endwhile;
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
									?>   
                            </div>
                        </div>
                    </div>
					<button class="btn text-center load-more mt-5">Xem thêm</button>
                </div>
            </div>
        </div>
    </div>
	

<?php
get_footer();
