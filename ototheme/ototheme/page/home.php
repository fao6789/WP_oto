<?php
/*
Template Name: Trang chủ
 */
get_header();
?>

<!-- banner -->
    <div class="banner">
        <div class="owl-carousel owl-theme" id="banner">
             <?php 
                $banner = get_field('banner');
                foreach($banner as $i):
            ?>
                <div class="item">
                    <a href="<?=$i['url_banner']?>" title="<?=$i['title_banner']?>">
                        <img src="<?=$i['img_banner']['url']?>" alt="<?=$i['title_banner']?>">
                    </a>
                </div>
            <?php 
                endforeach;
            ?>
        </div>
	</div>
<!-- end banner -->
    <div class="div-box-body my-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 sidebar">
                   <?php
                    get_sidebar();
                   ?>
                </div>
                <div class="col-md-9 main">
                    <div class="box-product-1">
                        <div class="title">
                            <h3>
                                
                                <?php 
                                    $sp1 = get_field('list_1');
                                    $id1=$sp1->term_id;   
                                ?>
                                <a href="<?=get_term_link($sp1->term_id)?>" title="">
                                    <span><?=$sp1->name?></span>
                                </a>
                            </h3>
                        </div>
                        <div class="temple-product ">
                            <div class="row ml">
                            <?php
                               
                               
                                $my_query1 = new WP_Query('cat=' . $id1 . '&offset=0&showposts=6');while ($my_query1->have_posts()): $my_query1->the_post();
                                 global $post;
                                 $do_not_duplicate[$post->ID] = $post->ID;
                                 if (has_post_thumbnail()) {
                                     $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                 }
                                 $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                                    // đoạn chạy được rồi 
                                //  var_dump($my_query);
                            
                                 ?>
                                <div class="col-md-4 my-3">
                                    <div class="box-is-one">
                                        <div class="img">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <img src="<?=$img?>" alt="<?=the_title()?>">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <h3 ><?=the_title()?></h3>
                                                <p class="price"><?=number_format(get_field('Price'));?>đ</p>
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
                                wp_reset_query();
                            ?>    
                            </div>
                        </div>
                    </div>

                    <div class="box-product-1">
                        <div class="title">
                            <h3>
                                
                                <?php 
                                    $sp2 = get_field('list_2');
                                    $id2=$sp2->term_id;   
                                ?>
                                <a href="<?=get_term_link($sp2->term_id)?>" title="">
                                    <span><?=$sp2->name?></span>
                                </a>
                            </h3>
                        </div>
                        <div class="temple-product ">
                            <div class="row ml">
                            <?php
                               
                               
                                $my_query2 = new WP_Query('cat=' . $id2 . '&offset=0&showposts=6');while ($my_query2->have_posts()): $my_query2->the_post();
                                 global $post;
                                 $do_not_duplicate[$post->ID] = $post->ID;
                                 if (has_post_thumbnail()) {
                                     $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                 }
                                 $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                                    // đoạn chạy được rồi 
                                //  var_dump($my_query);
                            
                                 ?>
                                <div class="col-md-4 my-3">
                                    <div class="box-is-one">
                                        <div class="img">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <img src="<?=$img?>" alt="<?=the_title()?>">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <h3><?=the_title()?></h3>
                                                <p class="price"><?=number_format(get_field('Price'));?>đ</p>
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
                                wp_reset_query();
                            ?>    
                            </div>
                        </div>
                    </div>

                    <div class="box-product-1">
                        <div class="title">
                            <h3>
                                
                                <?php 
                                    $sp3 = get_field('list_3');
                                    $id3=$sp3->term_id;   
                                ?>
                                <a href="<?=get_term_link($sp3->term_id)?>" title="">
                                    <span><?=$sp3->name?></span>
                                </a>
                            </h3>
                        </div>
                        <div class="temple-product ">
                            <div class="row ml">
                            <?php
                               
                               
                                $my_query3 = new WP_Query('cat=' . $id3 . '&offset=0&showposts=6');while ($my_query3->have_posts()): $my_query3->the_post();
                                 global $post;
                                 $do_not_duplicate[$post->ID] = $post->ID;
                                 if (has_post_thumbnail()) {
                                     $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                 }
                                 $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
                                    // đoạn chạy được rồi 
                                //  var_dump($my_query);
                            
                                 ?>
                                <div class="col-md-4 my-3">
                                    <div class="box-is-one">
                                        <div class="img">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <img src="<?=$img?>" alt="<?=the_title()?>">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <a href="<?=get_the_permalink()?>" title="<?=the_title()?>">
                                                <h3><?=the_title()?></h3>
                                                <p class="price"><?=number_format(get_field('Price'));?>đ</p>
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
                                wp_reset_query();
                            ?>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news my-4">
        <div class="container">
            <div class="title text-center">
                <h3><a href="">Tin Tức Mới Nhất</a></h3>
            </div>
            <div class="box-news-index">
                <div class="row ml">
                    <?php
                      $my_query1 = new WP_Query('cat=3&offset=0&showposts=6');while ($my_query1->have_posts()): $my_query1->the_post();
                      global $post;
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
                                    <h3 style="font-size:16px;"><?=the_title()?></h3>
                                    <h4><?=wp_trim_words(get_the_content(),15,'...')?></h4>
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
                                endwhile;
                                wp_reset_query();
                    ?>    
                </div>
            </div>
        </div>
    </div>
   
<?php
get_footer();