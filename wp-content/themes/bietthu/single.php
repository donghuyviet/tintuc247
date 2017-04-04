<?php get_header(); ?>
         
         <div class="site-inner">
            <div class="content-sidebar-wrap wrapcontent">
               <main class="content">
                  <div id="home-content" class="clearfix">
                     <h1 class="entry-title"><?php the_title(); ?></h1>
                     <div class="entry-content">
                              <?php the_content(); ?>
                        <div class='dd_post_share'>
                           <div class='dd_buttons'>
                              <div class='dd_button'>
                                 <div class='dd-google1-ajax-load dd-google1-263'></div>
                                 <g:plusone size='none' href='<?php the_permalink(); ?>'></g:plusone>
                              </div>
                              <div class='dd_button'>
                                 <script src="//connect.facebook.net/en_US/all.js#xfbml=1"></script>
                                 <fb:like href="<?php the_permalink(); ?>" send="true" show_faces="false"  layout="button_count" width="92"  ></fb:like>
                              </div>
                              <div class='dd_button'>
                                 <div class='dd-twitter-ajax-load dd-twitter-263'></div>
                                 <a href="<?php the_permalink(); ?>" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="horizontal" data-text="<?php the_title(); ?>" data-via="" ></a>
                              </div>
                              <div class='dd_button'>
                                 <div class='dd-fbshare-ajax-load dd-fbshare-263'></div>
                                 <a class='DD_FBSHARE_AJAX_263' name='fb_share' type='button_count' share_url ='http://bietthudangcap.vn/bai-dai-nha-trang/' href='<?php the_permalink(); ?>'></a>
                              </div>
                           </div>
                           <div style='clear:both'></div>
                        </div>
                        <script type="text/javascript">jQuery(document).ready(function($) { window.setTimeout('loadGoogle1_263()',1000);window.setTimeout('loadTwitter_263()',1000);window.setTimeout('loadFBShare_263()',1000); });</script><script type="text/javascript">function loadGoogle1_263(){ jQuery(document).ready(function($) { $('.dd-google1-263').remove();$.getScript('https://apis.google.com/js/plusone.js'); }); } function loadTwitter_263(){ jQuery(document).ready(function($) { $('.dd-twitter-263').remove();$.getScript('http://platform.twitter.com/widgets.js'); }); } function loadFBShare_263(){ jQuery(document).ready(function($) { $('.dd-fbshare-263').remove(); $.getScript('http://static.ak.fbcdn.net/connect.php/js/FB.Share'); }); }</script><!-- Social Buttons Generated by Digg Digg plugin v5.3.6,
                           Author : Buffer, Inc
                           Website : http://bufferapp.com/diggdigg --> <span class="st_plusone_hcount"></span>
                     </div>
                     <div id="related-news">
                       <!--  <h3>Tin Liên Quan</h3> -->

                        <?php
                            $categories = get_the_category($post->ID);
                            if ($categories) 
                            {
                                $category_ids = array();
                                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                         
                                $args=array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                                'caller_get_posts'=>1
                                );
                                $my_query = new wp_query($args);
                                if( $my_query->have_posts() ) 
                                {
                                    echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
                                    while ($my_query->have_posts())
                                    {
                                        $my_query->the_post();
                                        ?>
                                         <li> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                        <?php
                                    }
                                    echo '</ul>';
                                }
                            }
                        ?>


                       <!--  <ul>
                           <li> <a href="http://bietthudangcap.vn/vinpearl-phu-quoc-villas-phu-quoc-giai-doan-3/" title="Vinpearl Phú Quốc Villas &#8211; Phú Quốc giai đoạn III">Vinpearl Phú Quốc Villas &#8211; Phú Quốc giai đoạn III</a></li>
                           <li> <a href="http://bietthudangcap.vn/paradise-phuquoc/" title="Vinpearl Paradise Phú Quốc">Vinpearl Paradise Phú Quốc</a></li>
                           <li> <a href="http://bietthudangcap.vn/vinpearl-golf-land-resort-villas/" title="Vinpearl Golfland Nha Trang">Vinpearl Golfland Nha Trang</a></li>
                           <li> <a href="http://bietthudangcap.vn/vinpearl-nhatrangbay/" title="Vinpearl Premium Nha Trang Bay">Vinpearl Premium Nha Trang Bay</a></li>
                           <li> <a href="http://bietthudangcap.vn/vinpearl-da-nang-resort-villas-2/" title="Vinpearl Đà Nẵng Resort &#038; Villas 2">Vinpearl Đà Nẵng Resort &#038; Villas 2</a></li>
                        </ul> -->
                     </div>
                     <!-- end related -->
                  </div>
               </main>
               <!-- end #content -->
            </div>
            <!-- end #content-sidebar-wrap -->
         </div>
      <?php get_footer(); ?>