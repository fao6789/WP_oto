<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ototheme
 */

get_header();
?>
 <div class="div-box-body mt-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 sidebar">
					<?php
					 get_sidebar();
					?>
                </div>
                <div class="col-md-9 main-single">
						<?php
					 $i= get_queried_object();
						$cate=get_field('chose',$i);
						if($cate == 'sanpham'){
					?>
                    <div class="box-header-product">
                       <div class="row">
                        <div class="div-box-img-product-single col-md-6">
						
                            <div id="sync1" class="owl-carousel owl-theme">
								<?php
									$term= get_queried_object();
									$img_slides= get_field('img_b',$term);
									
									if($img_slides != null):
									foreach ($img_slides as $i):
								?>
									<div class="item">
										<img src="<?=$i['img_bonus']['url']?>" alt="">
									</div>
								<?php
									endforeach;
								endif;
								?>   
							</div>
							
                            <div id="sync2" class="owl-carousel owl-theme">
								<?php
									$term= get_queried_object();
									$img_slides= get_field('img_b',$term);
									if($img_slides != null):
									foreach ($img_slides as $i):
								?>
                                <div class="item">
                                    <img src="<?=$i['img_bonus']['url']?>" alt="">
								</div>
								<?php
									endforeach;endif;
								?>  
                            </div>
                        </div>
                        <div class="short-description col-md-6">
                            <h1 class="title-ss"><?=the_title()?></h1>
                            <p class="price">Giá : <span><?=number_format(get_field('Price'));?>đ</span></p>
                            <p class="dess-main-single"><?=get_field('des')?></p>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                   Nháº­n BÃ¡o GiÃ¡
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                Mua Ngay
                            </button> -->
                        </div>
                       </div>
                    </div>
                    <div class="content-single-main">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả</a>
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Thông số kĩ thuật</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?=the_content()?></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table table-striped">
                                    <tbody>
										<?php
											$thong_so= get_field('thong_so'); 
										  ?>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td class="default">Nguồn gốc</td>
                                        <td class="specifications"><?=$thong_so['from']?></td>
									 </tr>
                                     <tr>
                                        <th scope="row">2</th>
                                        <td class="default">Kiểu xe</td>
                                        <td class="specifications"><?=$thong_so['kind']?></td>
				                     </tr>
									 <tr>
                                        <th scope="row">3</th>
                                        <td class="default">Động cơ</td>
                                        <td class="specifications"><?=$thong_so['dong_co']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">4</th>
                                        <td class="default">Đời xe</td>
                                        <td class="specifications"><?=$thong_so['year']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">5</th>
                                        <td class="default">Hộp số</td>
                                        <td class="specifications"><?=$thong_so['hop_so']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">6</th>
                                        <td class="default">Dẫn động</td>
                                        <td class="specifications"><?=$thong_so['dan_dong']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">7</th>
                                        <td class="default">Màu xe</td>
                                        <td class="specifications"><?=$thong_so['color']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">8</th>
                                        <td class="default">Màu nội thất</td>
                                        <td class="specifications"><?=$thong_so['mau_noi_that']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">9</th>
                                        <td class="default">Nội thất</td>
                                        <td class="specifications"><?=$thong_so['noi_that']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">10</th>
                                        <td class="default">Chỗ ngồi</td>
                                        <td class="specifications"><?=$thong_so['cho_ngoi']?></td>
				                      </tr>
									  <tr>
                                        <th scope="row">11</th>
                                        <td class="default">Bảo hành</td>
                                        <td class="specifications"><?=$thong_so['bao_hanh']?></td>
				                      </tr>
									   <tr>
                                        <th scope="row">12</th>
                                        <td class="default">Nhiên liệu</td>
                                        <td class="specifications"><?=$thong_so['nhien_lieu']?></td>
				                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                    </div>
					<?php
						}
					else{
						?>
					  <h1 class="title-ss" style="font-weight:700; font-size:1.5rem;"><?=the_title()?></h1>
					<?php
						the_content();
					}
					?>	
			   </div>
            </div>
        </div>
</div>
    <div class="news my-4 sptt">
        <div class="container">
            <div class="title text-center">
				<?php
				if($cate == 'sanpham'){
				?>
				<h3><a>Sản phẩm tương tự</a></h3>
				<?php
				}
				else 
				{
					?>
				<h3><a>Bài viết liên quan</a></h3>
				<?php
				}
				?>
				
                
            </div>
            <div class="box-news-index">
                <div class="row ml">
					<?php
					global $post;
                      $categories = get_the_category($post->ID);
						if ($categories):
							$category_ids = array();
							foreach ($categories as $individual_category):
								$category_ids[] = $individual_category->term_id;
								$args = array(
									'category__in' => $category_ids,
									'post__not_in' => array($post->ID),
									'showposts' => 6,
									'ignore_sticky_posts' => 1,
									'orderby' => 'rand',
								);
								$my_query = new wp_query($args);
							endforeach;
						while ($my_query->have_posts()):
							$my_query->the_post();
                      
                      $do_not_duplicate[$post->ID] = $post->ID;
                      if (has_post_thumbnail()) {
                          $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                      }
                      $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                    ?>
                    <div class="col-md-3 mt-3">
                        <div class="box-news-smal">
                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                <div class="img">
                                    <img src="<?=$img?>" alt="<?=the_title()?>">
                                </div>
                                <div class="content text-center mt-3">
                                    <h3><?=the_title()?></h3>
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
                                </div>
                            </a>
                            <div class="quickview">
                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                       Xem chi tiết
                            </a>
                        </div>
                        </div>
                        
                    </div>
                    <?php
                                endwhile;endif;
                                wp_reset_query();
                    ?>    
                </div>
            </div>
        </div>
    </div>

	
<?php
get_footer();
