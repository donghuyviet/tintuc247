<?php
/*
	Template Name: Tiến độ dự án


*/
	?>
	<?php get_header(); ?>
    <!--TOP-->
    <!--CONTAINER-->
    <div class="container">
        <!--BACKGROUND-->
        <div class="bg-page">
            <div class="color-bg">
                <img src="images/xprogress.jpg" alt="Background - Giới thiệu"/>
            </div>
        </div>
        <!--BACKGROUND-->
        <div class="center">
            <div class="sub-nav">
                <ul>
                    <li class=""><a href="" data-open="1" >Tiến Độ Dự Án</a>
                    </li>
                </ul>
            </div>
            <div class="content-page project-progress">
                <div class="box-content">
                    <div class="colum-box active" id="1">
                        <div class="about-box select ">
                            <h3>Tiến độ dự án</h3>
                            <div class="scrollA">
                                <div class="main-content">
                                    <div class="inside">
                                       <div class="container2">
                                           <div class="project-list">
                                            <?php 
						                    $args = array(
						                        'post_type' => 'post',
						                        // 'posts_per_page' => '3',
						                        'order' => 'ASC',
						                        'orderby' => 'ID',
						                        'cat' => '4',

						                        );
						                    $news = new WP_query($args);
						                     ?>
						                     <?php if($news -> have_posts()): ?>
						                        <?php while($news->have_posts()) : $news->the_post(); ?>

						                        <div class="project-item">
                                                    <div class="project-img">
                                                        	<?php the_post_thumbnail(); ?>
                                                         </div>
                                                    <p id="<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                </div>

						                        <?php endwhile; ?>
						                     <?php endif;wp_reset_query(); ?>
                                               
                                                <!-- <div class="project-item">
                                                    <div class="project-img">
                                                        <img src="images/AGS-160928-00-Toan-canh.jpg" class="attachment-custom size-custom wp-post-image" alt="THI CÔNG ĐẾN SÀN TẦNG 19"> </div>
                                                    <p id="thi-cong-den-san-tang-19">THI CÔNG ĐẾN SÀN TẦNG 19</p>
                                                </div>
                                                <div class="project-item">
                                                    <div class="project-img">
                                                        <img src="images/AGS-160928-00-Toan-canh.jpg" class="attachment-custom size-custom wp-post-image" alt="THI CÔNG ĐẾN SÀN TẦNG 19"> </div>
                                                    <p id="thi-cong-den-san-tang-19">THI CÔNG ĐẾN SÀN TẦNG 19</p>
                                                </div>
                                                <div class="project-item">
                                                    <div class="project-img">
                                                        <img src="images/AGS-160928-00-Toan-canh.jpg" class="attachment-custom size-custom wp-post-image" alt="THI CÔNG ĐẾN SÀN TẦNG 19"> </div>
                                                    <p id="thi-cong-den-san-tang-19">THI CÔNG ĐẾN SÀN TẦNG 19</p>
                                                </div>
                                                <div class="project-item">
                                                    <div class="project-img">
                                                        <img src="images/AGS-160928-00-Toan-canh.jpg" class="attachment-custom size-custom wp-post-image" alt="THI CÔNG ĐẾN SÀN TẦNG 19"> </div>
                                                    <p id="thi-cong-den-san-tang-19">THI CÔNG ĐẾN SÀN TẦNG 19</p>
                                                </div>
                                                <div class="project-item">
                                                    <div class="project-img">
                                                        <img src="images/AGS-160928-00-Toan-canh.jpg" class="attachment-custom size-custom wp-post-image" alt="THI CÔNG ĐẾN SÀN TẦNG 19"> </div>
                                                    <p id="thi-cong-den-san-tang-19">THI CÔNG ĐẾN SÀN TẦNG 19</p>
                                                </div> -->
                                           </div>
                                       </div> 
                                    </div>
                                </div>
                            </div>
                            <!--PAGE CONTROLS-->
                            <div class="page-controls-project">
                                <div class="page-project">
                                   <!--  <ul>   
                                        <li><a class="" href=""><<</a></li>
                                        <li class="active"><a href="">01</a>
                                        </li>
                                        <li><a href="">02</a>
                                        </li>
                                        <li><a href="">03</a>
                                        </li>
                                        <li><a class="" href="">>></a></li>
                                    </ul> -->
                                    <?php //wp_pagenavi(); ?>
                                </div>
                            </div>
                           
                            <!--/PAGE CONTROLS-->
                        </div>
                        <div class="bg-white"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--CENTER-->
        <!--BOTTOM-->
       
        <!--BOTTOM-->  
    <?php get_footer(); ?>