
<?php get_header() ?>


	
	
    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
                 <?php if ( have_posts() && is_front_page() ) :  while ( have_posts() ) : the_post(); ?>
                 <li class=" carousel-item">
            <div class="post-margin">
                <h6 class="post-title"><a href=" <?php the_permalink() ?>"><?php the_title() ?></a></h6>
                <span><i class="fa fa-clock-o"></i> <?php the_time('F d, Y') ?></span>
            </div>
            
                        <div class="featured-image">
           <?php the_post_thumbnail('class="attachment-post-standard' ) ?>               <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <?php the_excerpt() ?>
            </div>
        </li>

        <?php endwhile; ?>
           
            <?php endif; ?>
        
            
                
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- End Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
 			<div class="wrap-col">
                 
        	<!-- Start Post Item -->
            <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

              <div class="post">
                <div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
                      </div>
                
                <h4 class="post-title"><a href=" <?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    <ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('d.m.Y') ?></li>
                    <li><i class="fa fa-folder-open-o"></i><?php the_category(  ) ?></li>
                    <li><i class="fa fa-comment-o"></i><?php comments_popup_link("0","1","%") ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                                        <div class="featured-image">
                            
                    <?php the_post_thumbnail('class="attachment-post-standard' ) ?>          
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>
                                        
                    <div class="post-margin">
                   <?php the_content() ?>
                   <!-- post tags -->
                     <div class="post-tags">
                    <?php the_tags('<span class="fa-stack fa-lg">
                       <i class="fa fa-circle fa-stack-2x"></i>
                       <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
                    </span> ')  ?></div>
                    <div class="clear"></div>          
                  <!-- End Post Tags -->
                    </div>
                    
            
            
                     <ul class="post-social">
                     <li><a href="#" target="_blank">
                     <i class="fa fa-facebook"></i></a>
                     </li>
                                
                     <li>
                     <a href="#" target="_blank">
                     <i class="fa fa-twitter"></i></a>
                     </li>
                                
                     <li>
                     <a href="#" target="_blank">
                     <i class="fa fa-google-plus"></i></a>
                     </li>
                    
                    <li>
                    <a href="#" target="_blank">
                    <i class="fa fa-linkedin"></i></a>
                    </li>
                    
                    <li>
                    <a href="<?php the_permalink() ?>" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                    </li>
                    </ul>
                    
                    <div class="clear"></div>
                    </div>
                    <!-- End Post Item -->


            <?php endwhile; ?>
            <?php else: ?>
               Ничего не найдено!
            <?php endif; ?>




         
        <!-- Start Pagination -->
              <?php  the_posts_pagination( array(
                'prev_next'    => false,

                
            ) );
                    ?>   
        <!-- End Pagination -->
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->

		 <!-- Start Sidebar -->
       <?php get_sidebar() ?>
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	
	<!-- Start Footer -->
    <?php get_footer() ?>
    
