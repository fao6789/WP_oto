<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ototheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="black-layout-main" ></div>
<div id="page" class="site">
	<div class="div-box-header-box">
		<button class="navbar-toggler hidden-des" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="hidden-des logo">
			<?php the_custom_logo();?>
		</div>
        <div class="container flex-header hidden-mb">
			<div class="mt-1 hidden-mb">
				<form method="get" id="search_form_top" action="https://www.google.com.vn/search" target="_blank" onsubmit="jQuery('#q').val('site:bongdatoday.info ' + jQuery('#q_tmp').val())">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="  search-query form-control" placeholder="Tìm kiếm" value="" onkeypress="" autocomplete="off" id="q_tmp"/>
                    <input type="hidden" name="q" id="q" value= "">
                </div>
            </div>
				</form>
		</div>
            <p>Hotline: <?php  dynamic_sidebar('sidebar-phone')?></p>
        </div>
    </div>
	<div class="container">
		<header id="masthead" class="site-header div-box-logo-menu">
			<div class="logo hidden-mb">
				<?php the_custom_logo();?>
			</div>
			  
			<div class="rep-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				
			</div>
			
		</header>
	</div><!-- #masthead -->
