<?php 

	 $id = get_queried_object()->term_id;
	$args = array(
		'post_type' => 'duan',
		'posts_per_page' => '6',
		'order' => 'DESC',
		'orderby' => 'ID',
		'cat' => $id
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
                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-item-more"><?php the_permalink(); ?></a>
              </div>
           </div>
        </div>

 	<?php endwhile; ?>
 <?php endif; ?>