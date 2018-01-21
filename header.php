<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo("name") ?></title>

<link rel='stylesheet' id='reset-css'  href='https://wptest/wp-content/themes/fstthem/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='https://wptest/wp-content/themes/fstthem/css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='https://wptest/wp-content/themes/fstthem/css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='https://wptest/wp-content/themes/fstthem/css/orbit.css' type='text/css' media='all' />

<link rel='stylesheet' id='style-css'  href="<?php bloginfo ('template_url') ?>/style.css" type='text/css' media='all' />

<link rel='stylesheet' id='color-scheme-css'  href='https://wptest/wp-content/themes/fstthem/css/color/green.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://wptest/wp-content/themes/fstthem/css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://wptest/wp-content/themes/fstthem/css/responsive.css" type="text/css" media="screen">
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/jquery.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/hoverIntent.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/superfish.js'></script>
<script type='text/javascript' src='https://wptest/wp-content/themes/fstthem/js/orbit.min.js'></script>


 <script src="<?php bloginfo ('template_url') ?>/js/css3-mediaqueries.js"></script>

<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>

	<?php wp_head() ?>
</head>

<body class="home blog">
<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">
            
                    <a href="<?php echo home_url() ?> ">
                    <img src="<?php bloginfo ('template_url') ?>/images/logo.png" id="logo" />
                    </a>
                    
					<!-- Navigation Menu -->
					<?php wp_nav_menu( array(
						'theme_location'  => 'top-menu',
						'menu'            => '', 
						'container'       => 'ul', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'sf-menu', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
                    
                    	<!-- <ul class="sf-menu">
                            <li class="menu-item current-menu-item">
                                <a href="<?php echo home_url() ?>">Home</a></li>
                    	   <li class="menu-item">
                                <a href="blog.html">Blog</a></li>
                            <li class="menu-item">
                                <a href="#">Features</a>
                                    <ul class="sub-menu">
                                    	<li class="menu-item"><a href="#">Menu 01</a></li>
                                    	<li class="menu-item"><a href="#">Menu 02</a></li>
                                    	<li class="menu-item"><a href="#">Menu 03</a></li>
                                    </ul>
                            </li>
                            <li class="menu-item">
                                <a href="about.html">About us</a></li>
                        </ul>	 -->
                    <!-- End Navigation Menu -->
                    
                    <div class="clear"></div>
                    
            </div>
			</div>
        </div>
    <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->