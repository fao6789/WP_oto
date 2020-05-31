<?php
/**
 * ototheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ototheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ototheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ototheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ototheme, use a find and replace
		 * to change 'ototheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ototheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ototheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ototheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ototheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ototheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ototheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ototheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ototheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ototheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ototheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ototheme_widgets_init' );

function ototheme_widgets_phone() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Số điện thoại', 'ototheme' ),
			'id'            => 'sidebar-phone',
			'description'   => esc_html__( 'Điền số điện thoại', 'ototheme' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'ototheme_widgets_phone' );

/**
 * Enqueue scripts and styles.
 */
function ototheme_scripts() {
	wp_enqueue_style( 'ototheme-bootstrapcss', get_template_directory_uri() . '/assets/libs/css/bootstrap.min.css');
	wp_enqueue_style( 'ototheme-owlcss', get_template_directory_uri() . '/assets/libs/css/owl.carousel.min.css');
	wp_enqueue_style( 'ototheme-owlthemecss', get_template_directory_uri() . '/assets/libs/css/owl.theme.default.css' );
	wp_enqueue_style( 'ototheme-css', get_template_directory_uri() . '/assets/css/css.css' );

	wp_enqueue_script( 'ototheme-jq', get_template_directory_uri() . '/assets/libs/js/jquery-3.4.1.min.js', array(), '20151215', true);
	wp_enqueue_script( 'ototheme-poper', get_template_directory_uri() . '/assets/libs/js/popper.min.js', array(), '20151215', true);
	wp_enqueue_script( 'ototheme-bootstrapjs', get_template_directory_uri() . '/assets/libs/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script( 'ototheme-owljs', get_template_directory_uri() . '/assets/libs/js/owl.carousel.min.js', array(), '20151215', true);
	wp_enqueue_script( 'ototheme-common', get_template_directory_uri() . '/assets/js/comon.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ototheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'widgets_init', 'create_widget' );
function create_widget() {
        register_widget('C_Widget');
}

class C_Widget extends WP_Widget {
 
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
			'phone_widget', // id của widget
			'Số điện thoại', // tên của widget
	   
			array(
				'description' => 'Điền số điện thoại' // mô tả
			)
		  );
	}

	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
		//Biến tạo các giá trị mặc định trong form
		$default = array(
			'title' => 'Số điện thoại'
		);
		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $default);

		//Tạo biến riêng cho giá trị mặc định trong mảng $default
		$title = esc_attr( $instance['title'] );

		//Hiển thị form trong option của widget
		echo '<p>Nhập số <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';

	}

	/**
	 * save widget form
	 */

	function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );
 
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;

	}

	/**
	 * Show widget
	 */

	function widget( $args, $instance ) {
		extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
 
        //In tiêu đề widget
        echo $before_title.$title.$after_title;
 
        // Nội dung trong widget
 
        // echo "ABC XYZ";
 
        // Kết thúc nội dung trong widget
 
        echo $after_widget;

	}

}

// show thêm bài viết tại chuyên mục

add_action('wp_ajax_loadmore', 'get_post_loadmore');
add_action('wp_ajax_nopriv_loadmore', 'get_post_loadmore');
function get_post_loadmore() {
    $offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0; // lấy dữ liệu phái client gởi
    $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&offset='.$offset);
    global $wp_query; $wp_query->in_the_loop = true; 
	while ($getposts->have_posts()) : $getposts->the_post();
	 if (has_post_thumbnail()) {
                                     $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                 }
                                 $img = ($large_image_url[0] != '') ? $large_image_url[0] : '';
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
    <?php endwhile; wp_reset_postdata();
	die(); 
}

//end show
//
//// Remove Parent Category from Child Category URL
add_filter('term_link', 'devvn_no_category_parents', 1000, 3);
function devvn_no_category_parents($url, $term, $taxonomy) {
    if($taxonomy == 'category'){
        $term_nicename = $term->slug;
        $url = trailingslashit(get_option( 'home' )) . user_trailingslashit( $term_nicename, 'category' );
    }
    return $url;
}
// Rewrite url mới
function devvn_no_category_parents_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'category',
        'post_type' => 'post',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        foreach ($terms as $term){
            $term_slug = $term->slug;
            add_rewrite_rule($term_slug.'/?$', 'index.php?category_name='.$term_slug,'top');
            add_rewrite_rule($term_slug.'/page/([0-9]{1,})/?$', 'index.php?category_name='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($term_slug.'/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?category_name='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_no_category_parents_rewrite_rules');
 
/*Sửa lỗi khi tạo mới category bị 404*/
function devvn_new_category_edit_success() {
    devvn_no_category_parents_rewrite_rules(true);
}
add_action('created_category','devvn_new_category_edit_success');
add_action('edited_category','devvn_new_category_edit_success');
add_action('delete_category','devvn_new_category_edit_success');