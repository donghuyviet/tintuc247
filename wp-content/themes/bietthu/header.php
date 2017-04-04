<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">
   <head>
      <meta charset="UTF-8" />    
      <title><?php the_title(); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1" /> 
      <link rel='stylesheet' id='font-opensans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600italic%2C700italic%2C700%2C300%2C600%2C400&#038;ver=4.2.10' type='text/css' media='all' />
      
   
   </head>

   <?php 
  $classbody ='';
  if(is_home()){
     $classbody ='home blog header-full-width full-width-content';
  }elseif(is_archive()){
    $classbody ='archive category category-du-an-vinpearl category-7 header-full-width content-sidebar';
  }elseif(is_page()){
    $classbody ='about-page';
  }elseif(is_single()){
    $classbody ='single single-post single-format-standard header-full-width full-width-content';
  }
  if(is_page(get_page('15'))){
     $classbody ='contact-page';
  }
 ?>
   <?php wp_head(); ?>
   <body class="<?php echo $classbody; ?>">
      <div class="site-container">
         <header class="site-header">
            <div class="wrap">
               <a class='imgbanner' href='<?php echo get_home_url(); ?>' title=''>
               <img src='<?php $image_id = cs_get_option( 'box_banner' );
  $attachment = wp_get_attachment_image_src( $image_id['img_banner'], 'full' );
  echo $attachment[0] ;
  ?>' width='980' height='260' alt='Biệt thự đẳng cấp' /></a>
               <div class="title-area">
                  <h1 class="site-title"><a href="<?php echo get_home_url(); ?>">Biệt thự đẳng cấp</a></h1>
               </div>
               <button id="toggle-top"><i class="fa fa-bars"></i> Menu</button>
            </div>
         </header>
         <nav class="nav-primary" role="navigation">
            <div class="wrap">
            <?php wp_nav_menu( array(
                     'theme_location' => 'menu-top',
                     'menu_id' => 'menu-menu-top',
                     'menu_class' =>'menu genesis-nav-menu menu-primary',



            )); ?>
               
            </div>
         </nav>

         <div class="site-inner">
            <!-- meta slider -->
            <div style="width: 100%;" class="metaslider metaslider-responsive metaslider-25 ml-slider">
               <div id="metaslider_container_25">
                  <ul id='metaslider_25' class='rslides'>
                  <?php
                  $args = array(
                        'post_type' => 'slides',
                        'posts_per_page' => '5',
                        'order' => 'DESC',
                        'orderby' => 'ID',
                          'tax_query' => array(
                            array(
                            'taxonomy' => 'slides_category',
                            'field'    => 'term_id',
                            'terms'    => '8',
                            ),
                          ),

                ); $news = new WP_query($args); ?>
                <?php if($news->have_posts()): ?>
                    <?php while($news->have_posts()): $news->the_post(); ?>
                         <li><a href="<?php the_permalink(); ?>" target="_blank">

                         <?php
                           // Must be inside a loop.
                            
                           if ( has_post_thumbnail() ) {
                               the_post_thumbnail();
                           }
                           else {
                               echo '<img src="http://localhost/os_bietthu/wp-content/themes/bietthu/images/thumbnail-default-360x200.jpg" />';
                           }
                           ?>

                         </a></li>
                    <?php endwhile; ?>
                <?php endif;wp_reset_query(); ?>
                   
                  </ul>
               </div>
               <script type="text/javascript">var metaslider_25 = function($) {
                  $('#metaslider_25').responsiveSlides({ 
                      timeout:3000,
                      pager:false,
                      nav:true,
                      pause:true,
                      speed:600,
                      prevText:"&lt;",
                      nextText:"&gt;",
                      auto:true
                  });
                  };
                  var timer_metaslider_25 = function() {
                  var slider = !window.jQuery ? window.setTimeout(timer_metaslider_25, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_25, 1) : metaslider_25(window.jQuery);
                  };
                  timer_metaslider_25();
               </script> 
            </div>