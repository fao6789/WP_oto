<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
                <div class="col-md-3 sidebar">
                   
                       <?php
						get_sidebar();
					   ?>
                </div> 
				
                <div class="col-md-9 achive">
                    <div class="box-product-1">
                        <div class="title text-center">
                            <h3>
                                <a title="">
                                    <span><?=the_title()?></span>
                                </a>
                            </h3>
							
                        </div>  
						<div class="mt-3">
							<?=the_content();?>
						</div>
                    </div>
						
                </div>
            </div>
        </div>
    </div>
	

<?php
get_footer();
