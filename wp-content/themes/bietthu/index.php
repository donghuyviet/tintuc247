<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	
   
            <!--// meta slider-->
            <div class="content-sidebar-wrap">
               <main class="content" role="main">
                  <div id="home-content" class="clearfix">
                     <h2 class="heading"> <a href="http://localhost/os_bietthu/category/du-an-vinpearl/" title="Dự Án VinPearl"> Dự Án VinPearl </a></h2>
                     <div class="clearfix"></div>
                     <div class="wrapcontent">
                        <div class="news-list-home clearfix">
                              <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                          'posts_per_page' => '6',
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          'cat' => '2',
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                           <div class="news-item-home clearfix">
                                               <div class="news-item-wrap clearfix">
                                                  <div class="news-item-thumb">
                                                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                        <?php
                                                           // Must be inside a loop.
                                                            
                                                           if ( has_post_thumbnail() ) {
                                                               the_post_thumbnail();
                                                           }
                                                           else {
                                                               echo '<img src="http://localhost/wp_hoanggia/wp-content/themes/bietthu/images/thumbnail-default-360x200.jpg" />';
                                                           }
                                                           ?>
                                                     </a>
                                                  </div>
                                                  <div class="news-item-info clearfix">
                                                     <h3 class="news-item-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                     <div class="news-item-des"></div>
                                                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-item-more"><?php the_title(); ?></a>
                                                  </div>
                                               </div>
                                            </div>

                                       <?php endwhile; ?>
                                     <?php endif; ?>
                        </div>
                        <!--news-list-home-->
                     </div>
                     <h2 class="heading"> <a href="http://localhost/os_bietthu/category/du-an-vinhomes/" title="Dự Án VinHomes"> Dự Án VinHomes </a></h2>
                     <div class="clearfix"></div>
                     <div class="wrapcontent">
                        <div class="news-list-home clearfix">
                           <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                          'posts_per_page' => '6',
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          'cat' => '3',
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                           <div class="news-item-home clearfix">
                                               <div class="news-item-wrap clearfix">
                                                  <div class="news-item-thumb">
                                                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                        <?php
                                                           // Must be inside a loop.
                                                            
                                                           if ( has_post_thumbnail() ) {
                                                               the_post_thumbnail();
                                                           }
                                                           else {
                                                               echo '<img src="http://localhost/wp_hoanggia/wp-content/themes/bietthu/images/thumbnail-default-360x200.jpg" />';
                                                           }
                                                           ?>
                                                     </a>
                                                  </div>
                                                  <div class="news-item-info clearfix">
                                                     <h3 class="news-item-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                     <div class="news-item-des"></div>
                                                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-item-more"><?php the_title(); ?></a>
                                                  </div>
                                               </div>
                                            </div>

                                       <?php endwhile; ?>
                                     <?php endif; ?>
                        </div>
                        <!--news-list-home-->
                     </div>
                     <h2 class="heading"> <a href="#" title="Video"> Video </a></h2>
                     <div class="wrapcontent">
                        <div id="tabContaier" class="clearfix">
                           <ul>
                              <li><a href="#tab1" title="<?php $tt = cs_get_option("box_video1"); echo $tt['tieu_de'] ;?>"><?php $tt = cs_get_option("box_video1"); echo $tt['tieu_de'] ;?></a></li>
                              <li><a href="#tab2" title="<?php $tt = cs_get_option("box_video2"); echo $tt['tieu_de2'] ;?>"><?php $tt = cs_get_option("box_video2"); echo $tt['tieu_de2'] ;?></a></li>
                              <li><a href="#tab3" title="<?php $tt = cs_get_option("box_video3"); echo $tt['tieu_de3'] ;?>"><?php $tt = cs_get_option("box_video3"); echo $tt['tieu_de3'] ;?></a></li>
                              <li><a href="#tab4" title="<?php $tt = cs_get_option("box_video4"); echo $tt['tieu_de4'] ;?>"><?php $tt = cs_get_option("box_video4"); echo $tt['tieu_de4'] ;?></a></li>
                           </ul>
                        </div>
                        <!-- end tabcontaier -->
                        <div class="tabDetails clearfix">
                           <div id="tab1" class="tabContents">
                              <div class="video-left"><?php $tt = cs_get_option("box_video1"); echo $tt['video'] ;?></div>
                              <div class="des-right">
                                <?php $tt = cs_get_option("box_video1"); echo $tt['noi_dung'] ;?>
                              </div>
                           </div>
                           <div id="tab2" class="tabContents">
                              <div class="video-left"><?php $tt = cs_get_option("box_video2"); echo $tt['video2'] ;?></div>
                              <div class="des-right">
                                 <?php $tt = cs_get_option("box_video2"); echo $tt['noi_dung2'] ;?>
                              </div>
                           </div>
                           <div id="tab3" class="tabContents">
                              <div class="video-left"><?php $tt = cs_get_option("box_video3"); echo $tt['video3'] ;?></div>
                              <div class="des-right">
                                <?php $tt = cs_get_option("box_video3"); echo $tt['noi_dung3'] ;?>
                                 </div>
                                 <div><strong><span style="font-size: 20px;"> </span></strong></div>
                                 <div><strong><span style="font-size: 20px;"> </span></strong></div>
                              </div>
                           </div>
                           <div id="tab4" class="tabContents">
                              <div class="video-left"><?php $tt = cs_get_option("box_video4"); echo $tt['video4'] ;?></div>
                              <div class="des-right">
                                 <?php $tt = cs_get_option("box_video4"); echo $tt['noi_dung4'] ;?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end video wrap -->
                     <h2 class="heading"> <a href="http://localhost/os_bietthu/category/cac-loi-ich-dau-tu/" title="Lợi ích đầu tư"> Lợi ích đầu tư </a></h2>
                     <div class="wrapcontent">
                        <div class="news-event">

                        <?php $args = array(
                          'post_type' => 'post',
                          'order' => 'DESC',
                          'orderby' => 'ID',
                          'cat' => '5',

                        );$news = new WP_Query($args); ?>
                        <?php if($news->have_posts()): ?>
                          <?php while($news->have_posts()): $news->the_post(); ?>
                            <div class="news-event-item">
                              <div class="news-event-thumb">
                                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                  <?php
                                       // Must be inside a loop.
                                        
                                       if ( has_post_thumbnail() ) {
                                           the_post_thumbnail();
                                       }
                                       else {
                                           echo '<img src="http://localhost/os_bietthu/wp-content/themes/bietthu/images/thumbnail-default-360x200.jpg" />';
                                       }
                                       ?>
                                 </a>
                              </div>
                              <h3 class="news-event-title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                              </h3>
                              <div class="news-event-des">
                                <?php the_content(); ?>
                              </div>
                           </div>
                          <?php endwhile; ?>
                        <?php endif;wp_reset_query(); ?>
                           
                        
                        </div>
                     </div>
                     <!-- end news home -->
                  </div>
                  <!--#End #home-content--> 
               </main>
               <!-- end #content -->
            </div>
            <!-- end content-sidebar-wrap -->
         </div>
      
       
<?php get_footer(); ?>
