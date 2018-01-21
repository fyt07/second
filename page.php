
<?php get_header() ?> 
    	
        <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
 			<div class="wrap-col">
                 <?php the_breadcrumb() ?>        	<!-- Start Post Item -->
            <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

              <div class="post">
				
                <div class="post-margin">
                
                <div class="post-avatar">
                 <div class="avatar-frame"></div><?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>               </div>
                
                <h4 class="post-title"><a href=" <?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    <ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('d.m.Y') ?></li>
                    
                    
                    </ul>
                    <div class="clear"></div>
                </div>
                
                                       
                            
                    <?php the_post_thumbnail('class="attachment-post-standard' ) ?>          
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    
                                        
                    <div class="post-margin">
                   <?php the_content() ?>
                    </div>
                    <!-- post tags -->
                     <div class="post-tags">
                    <?php the_tags('<span class="fa-stack fa-lg">
                       <i class="fa fa-circle fa-stack-2x"></i>
                       <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
                    </span> ')  ?></div>
            <div class="clear"></div>          
                  <!-- End Post Tags -->
            
            
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
                 	</ul>
                    
                    <div class="clear"></div>
                    </div>
                    <!-- End Post Item -->


            <?php endwhile; ?>
           
            <?php endif; ?>
            

	


          
            
	
            
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