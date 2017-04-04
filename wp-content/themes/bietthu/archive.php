<?php get_header(); ?>

  <!--// meta slider-->
            <div class="content-sidebar-wrap wrapcontent">
               <main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                  <div id="home-content" class="clearfix">
                     <h1 class="archive-title"><?php single_cat_title( ); ?></h1>
                     <div class="news-list-home news-item-archive">
                           
                     <?php $post_type = get_post_type(); ?>
                        <?php if(get_post_type() == 'duan'){
                           get_template_part( 'template-parts/content', 'duan' );
                        }else{
                           get_template_part( 'template-parts/content', 'none' );
                        }

                         ?>

                     </div>
                     <!--End .news-list-->
                  </div>
                  <!--End #news-wrap--> 
               </main>
               <!-- end #content --> 
               <?php get_sidebar(); ?>
              <!-- get sidebarhere -->
            </div>
            <!-- end #content-sidebar-wrap -->
         </div>

<?php get_footer(); ?>
