

		 <div id="footer-menu">
            <div class="wrapcontent">
               <div id="nav_menu-3" class="widget-area">
                  <h4 class="widget-title">Dự án vinpearls</h4>
                  <div class="menu-du-an-vinpearl-container">
                     <ul id="menu-du-an-vinpearl" class="menu">
                         <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                         
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          'cat' => '2',
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                          <li id="menu-item-<?php the_ID(); ?>" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                                       <?php endwhile; ?>
                                     <?php endif; ?>

                       
                       
                     </ul>
                  </div>
               </div>
               <div id="nav_menu-4" class="widget-area">
                  <h4 class="widget-title">Dự án vinhomes</h4>
                  <div class="menu-du-an-vinhomes-container">
                     <ul id="menu-du-an-vinhomes" class="menu">
                         <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                         
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          'cat' => '3',
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                          <li id="menu-item-<?php the_ID(); ?>" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                                       <?php endwhile; ?>
                                     <?php endif; ?>
                     </ul>
                  </div>
               </div>
               <div id="nav_menu-5" class="widget-area">
                  <h4 class="widget-title">Dự án condotel</h4>
                  <div class="menu-du-an-condotel-container">
                     <ul id="menu-du-an-condotel" class="menu">
                         <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                         
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          'cat' => '4',
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                          <li id="menu-item-<?php the_ID(); ?>" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                                       <?php endwhile; ?>
                                     <?php endif; ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-widgets">
            <div class="wrap">
               <div class="footer-widgets-1 widget-area">
                  <section id="text-3" class="widget widget_text">
                     <?php echo do_shortcode('[contact-form-7 id="24" title="Form Footer"]' ); ?>
                    
                  </section>
                  <section id="facebook-like-widget-5" class="widget facebook_like">
                     <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Like Facebook</h4>
                        <script>(function(d, s, id) {
                           var js, fjs = d.getElementsByTagName(s)[0];
                           if (d.getElementById(id)) return;
                           js = d.createElement(s); js.id = id;
                           js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                           fjs.parentNode.insertBefore(js, fjs);
                           }(document, 'script', 'facebook-jssdk'));
                        </script> 
                        <div class="fb-like-box" data-href="<?php $linkfb = cs_get_option("link_fb"); echo $linkfb;?>" data-height="65" data-width="280" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" allowTransparency="true" ></div>
                     </div>
                  </section>
                  <section id="facebook-like-widget-4" class="widget facebook_like">
                     <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Like Facebook</h4>
                        <script>(function(d, s, id) {
                           var js, fjs = d.getElementsByTagName(s)[0];
                           if (d.getElementById(id)) return;
                           js = d.createElement(s); js.id = id;
                           js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                           fjs.parentNode.insertBefore(js, fjs);
                           }(document, 'script', 'facebook-jssdk'));
                        </script> 
                        <div class="fb-like-box" data-href="<?php $linkfb = cs_get_option("link_fb2"); echo $linkfb;?>" data-height="65" data-width="280" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" allowTransparency="true" ></div>
                     </div>
                  </section>
                  <section id="text-4" class="widget widget_text">
                     <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Kết nối với chúng tôi</h4>
                        <div class="textwidget">
                           <div class="social-bar colors-icon"><a class="facebook" href="<?php $linkfb = cs_get_option("link_fb3"); echo $linkfb;?>"><i class="fa fa-facebook"></i></a><a class="twitter" href="<?php $linktw = cs_get_option("link_tw"); echo $linktw;?>"><i class="fa fa-twitter"></i></a><a class="youtube" href="<?php $linkyt = cs_get_option("link_yt"); echo $linkyt;?>"><i class="fa fa-youtube"></i></a></div>
                           <div id="hotphone"> <a href="tel:0945606446"><i class="fa fa-phone"></i> 094.560.6446</a></div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
         <footer class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
            <div class="wrap">
               <p id='credit-link'><a rel='nofollow' target='_blank' href='http://beeweb.com.vn' title='thiet ke website'> Designed by Always Wanna Fly </a></p>
               <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
            </div>
         </footer>
      </div>
      <!-- Google Code dành cho Thẻ tiếp thị lại 
         Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
          <script type="text/javascript">/*  */
         var google_conversion_id = 917503878;
         var google_custom_params = window.google_tag_params;
         var google_remarketing_only = true;
         /*  */ -->
      </script> 
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script> 
      <noscript>
         <div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/917503878/?value=0&amp;guid=ON&amp;script=0"/></div>
      </noscript>
      <script type="text/javascript">var enablePopup = 1;
         var imageUrl 	= 'http://bietthudangcap.vn/wp-content/uploads/2016/03/popup_2503.jpg';
         var articleUrl 	= 'http://casanova.vn';
         var targetUrl 	= '_blank';
         var popup_area = "";
         if(enablePopup){
         	popup_area += "<div id='popupContact'>";
         	popup_area += "<div><a id='popupContactClose' href='javascript:void(0);'><span>&nbsp;</span></a></div>";
         				popup_area += "<a href='javascript:disablePopup();' target='_top'><img src='" + imageUrl + "' width='800'></a>";
         				popup_area += "</div><div id='backgroundPopup'></div>";
         						 document.write(popup_area);
         										}
      </script> 
  
      <script type='text/javascript'>/*  */
         var _wpcf7 = {"loaderUrl":"http:\/\/bietthudangcap.vn\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"\u0110ang g\u1eedi ...","cached":"1"};
         /*  */
      </script> 

      <script type='text/javascript'>/*  */
         var a3_lazyload_params = {"apply_images":"1","apply_videos":"1"};
         var a3_lazyload_params = {"apply_images":"1","apply_videos":"1"};
         /*  */
      </script> 
  
      <script type='text/javascript'>/*  */
         var a3_lazyload_extend_params = {"edgeY":"0"};
         var a3_lazyload_extend_params = {"edgeY":"0"};
         /*  */
      </script> 
  
   </body>
   <?php wp_footer(); ?>
</html>