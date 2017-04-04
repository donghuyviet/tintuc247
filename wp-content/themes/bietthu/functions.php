<?php 




//call theme option
require_once dirname(__FILE__) .'/vn4u-option/cs-framework.php';
//require_once('libs/logo-options/logo-options.php');
add_action( 'after_setup_theme', 'vn4u_setup' );
if ( ! function_exists( 'vn4u_setup' ) ):
    function vn4u_setup() {
        register_nav_menu( 'menu-top', __('Menu Top') );
        register_nav_menu( 'menu-res', __('Menu Responsive') );
        register_nav_menu( 'menu-bottom', __('Menu Bottom') );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         */
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'slider', 1400, 450, true );
        add_image_size( 'thumbnails', 600, 400, true );
        add_image_size( 'timthumb', 140, 92, true );
}
endif;


/**
 * Kenit site title
 * 
 */
function vn4u_site_title() {
  global $page, $paged;
  wp_title( '|', true, 'right' );
  bloginfo( 'name' );
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Trang %s', 'kenit' ), max( $paged, $page ) );
}
/**
 * Register widget area.
 *
 */
function vn4u_widgets_init() {
    register_sidebar( array(
    'name' => __( 'Home Pages', 'kenit' ),
    'id' => 'home',
    'description'   => __( 'Home', 'kenit' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="title"><span><i class="fa fa-folder-open"></i> ',
    'after_title' => '</span></h3>',
  ) );
    register_sidebar( array(
    'name' => __( 'Sidebar', 'kenit' ),
    'id' => 'sidebar',
    'description'   => __( 'Sidebar', 'kenit' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="title"><span>',
    'after_title' => '</span></h3>',
  ) );
}
add_action( 'widgets_init', 'vn4u_widgets_init' );
/**
 *
 * 
 */
function vn4u_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  echo implode(' ', $words)."..."; } else {
  echo implode(' ', $words); }
}
/**
 * Enqueue scripts and styles.
 */

/**
 * 
 * Remove <p> Tags From Cat Description
 */
remove_filter('term_description','wpautop');
function vn4u_plugin_facebook() { ?>
    <div class="like-click clearfix">
      <div class="fb-btn fb-send" data-href="<?php the_permalink(); ?>"></div>
      <div class="fb-btn fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
    <div class="alert alert-success notice text-center" role="alert">Góp ý, phản hồi cho chúng tôi nhé</div>
    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="15" data-colorscheme="light"></div>      
<?php } 

remove_filter( 'the_content', 'easy_image_gallery_append_to_content' );
function remove_footer_admin () {
    echo 'Phát triển bởi KenIT.NET';
}
add_filter('admin_footer_text', 'remove_footer_admin');
add_filter('show_admin_bar', '__return_false');


function bietthu_styles() {
  /*
   * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
   * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
   */
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', 'all' );
  wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', 'all' );


  wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery.js', array(), '', true );
  wp_enqueue_script('jquery-migrate.min',get_template_directory_uri() . '/js/jquery-migrate.min.js', array(), '', true );
  wp_enqueue_script('casnova_popup',get_template_directory_uri() . '/js/casnova_popup.js', array(), '', true );
  
  wp_enqueue_script('jquery.form.min',get_template_directory_uri() . '/js/jquery.form.min.js', array(), '', true );
  wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js', array(), '', true );
  wp_enqueue_script('owl.carousel.min',get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
  wp_enqueue_script('main',get_template_directory_uri() . '/js/main.js', array(), '', true );
  wp_enqueue_script('responsive',get_template_directory_uri() . '/js/responsive.js', array(), '', true );
  wp_enqueue_script('jquery.lazyloadxt.min',get_template_directory_uri() . '/js/jquery.lazyloadxt.min.js', array(), '', true );
  wp_enqueue_script('jquery.lazyloadxt.srcset.min',get_template_directory_uri() . '/js/jquery.lazyloadxt.srcset.min.js', array(), '', true );
  wp_enqueue_script('jquery.lazyloadxt.extend',get_template_directory_uri() . '/js/jquery.lazyloadxt.extend.js', array(), '', true );
	wp_enqueue_script('responsiveslides.min',get_template_directory_uri() . '/js/responsiveslides.min.js', array(), '', true );


}
add_action( 'wp_enqueue_scripts', 'bietthu_styles' );



/*Custom post type*/

 function duan() {

 

    $labels = array(
        'name' => _x('Dự án','vn4u'),
        'singular_name' => _x('Dự Án','vn4u'),
        'add_new' => __ ('Thêm Dự Án'),
        'add_new_item' => __('Thêm Thêm dự án mới'),
        'edit_item' => __('Sửa Dự Án'),
        'new_item' => __('Thêm Dự Án'),
        'all_items' => __('Tất cả Dự án'),
        'view_item' => __('Xem Dự Án'),
        'search_item' => __('Tìm Dự Án'),
        'not_found' => __('Hiện tại chưa có ảnh nào'),
        'not_found_in_trash' => __('Không có ảnh nào trong sọt rác'),
        'menu_name' => 'Dự Án'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => true,
        'supports' => array('title', 'thumbnail','editor'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',        
    );

    

    register_post_type( 'duan',$args);
    register_taxonomy( 'duan_category', 'duan', array( 'hierarchical' => true, 'label' => ('Danh mục'), 'rewrite' => array( 'slug' => ('du-an') ) ) );
    flush_rewrite_rules();

}

add_action( 'init', 'duan' );



function slides() { 
 
    $labels = array(
        'name' => _x('Slide','vn4u'),
        'singular_name' => _x('Slide','vn4u'),
        'add_new' => __ ('Thêm ảnh'),
        'add_new_item' => __('Thêm ảnh mới'),
        'edit_item' => __('Sửa ảnh'),
        'new_item' => __('Thêm ảnh mới'),
        'all_items' => __('Tất cả ảnh'),
        'view_item' => __('Xem ảnh'),
        'search_item' => __('Tìm ảnh'),
        'not_found' => __('Hiện tại chưa có ảnh nào'),
        'not_found_in_trash' => __('Không có ảnh nào trong sọt rác'),
        'menu_name' => 'Slide'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',        
    );
    
    register_post_type( 'slides',$args);
    register_taxonomy( 'slides_category', 'slides', array( 'hierarchical' => true, 'label' => ('Hệ thống Slide'), 'rewrite' => array( 'slug' => ('slides') ) ) );
    flush_rewrite_rules();
}
add_action( 'init', 'slides' );
 

  ?>