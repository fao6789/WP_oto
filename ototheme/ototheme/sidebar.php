<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ototheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

					<div class="div-box-3-1">
                        <div class="title-sidebar">
                            <p>Danh mục sản phẩm</p>
                        </div>
                        <div class="content-sidebar-product">
							<?php
							$categories = get_categories( array(
								'orderby' => 'name',
								'order'   => 'ASC',
								'parent' => 1,
							
							) );
// 							var_dump($categories);
							foreach($categories as $i){
								$id = $i->term_id;
								
									?>
										<ul>
											<li>
												<a href="<?=get_home_url().'/'.$i->slug?>">
													<?=$i->name?> (<?=$i->category_count?>)
												</a>
											</li>
										</ul>
									<?php
								
								
							}
							
							?> 
                        </div>
                    </div>
                    <div class="div-box-3-2 mt-2">
                        <div class="title-sidebar">
                            <p>Hỗ trợ Online</p>
                        </div>
                        <div class="content-sidebar-contact text-center my-3">
                            <p class="text1">Tư vấn khách hàng</p>
							<?php  dynamic_sidebar('sidebar-phone')?>
                        </div>
                    </div>
                    <div class="div-box-3-2">
                        <div class="title-sidebar">
                            <p>Thông tin mới nhất</p>
                        </div>
                        <div class="content-sidebar-newws">
                            <?php
                             $my_query1 = new WP_Query('cat=3&offset=0&showposts=6');while ($my_query1->have_posts()): $my_query1->the_post();
                                global $post;
                                $do_not_duplicate[$post->ID] = $post->ID;
                                if (has_post_thumbnail()) {
                                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                }
                                $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                            ?>
                            <div class="box-1 mt-3">
                                <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                    <img src="<?=$img?>" alt="">
                                    <h3><?=the_title()?></h3>
                                </a>
                            </div>
                            <hr>
                                <?php
                                        endwhile;
                                        wp_reset_query();
                                ?>
                        </div>
                    </div>
