 <aside class="sidebar sidebar-primary widget-area">
                  <section id="nav_menu-2" class="widget widget_nav_menu">
                     <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Danh mục dịch vụ</h4>
                     </div>
                  </section>
                  <section id="imgqc-2" class="widget img-qc">
                     <div class="widget-wrap">
                        <h4 class="widget-title widgettitle">Hình ảnh hoạt động</h4>
                        <div class="image-adv">
                                 <?php 
                                    $args = array(
                                          'post_type' => 'post',
                                          'posts_per_page' => '7',
                                          'order' => 'DESC',
                                          'orderby' => 'ID',
                                          
                                          );
                                       $news = new WP_Query($args);

                                     ?>

                                     <?php if($news->have_posts()): ?>
                                       <?php while($news->have_posts()): $news->the_post(); ?>

                                       <div class="image-item"> <a href="<?php the_permalink(); ?>" rel=""  title=""> 
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

                                       <?php endwhile; ?>
                                     <?php endif; ?>
                          
                           
                        </div>
                     </div>
                  </section>
                  <section id="facebook-like-widget-2" class="widget facebook_like">
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
                        <div class="fb-like-box" data-href="<?php $linkfb = cs_get_option("link_fb1"); echo $linkfb;?>" data-height="239" data-width="280" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" allowTransparency="true" ></div>
                     </div>
                  </section>
                  <section id="facebook-like-widget-3" class="widget facebook_like">
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
                        <div class="fb-like-box" data-href="<?php $linkfb = cs_get_option("link_fb2"); echo $linkfb;?>" data-height="239" data-width="280" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" allowTransparency="true" ></div>
                     </div>
                  </section>
               </aside>