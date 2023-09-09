<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
						 
		<?php wp_head(); ?>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	
	</head>
	
	<body <?php body_class(); ?>>

		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		
		$background_image_url = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header.jpg'; 
		
		?>

		<a class="skip-link button" href="#site-content"><?php _e( 'Skip to the content', 'baskerville' ); ?></a>

		
		
		<div class="navigation section no-padding bg-dark">
		
			<div class="navigation-inner section-inner" style="display: flex; align-items: center; justify-content: space-between;">
			
				<button class="nav-toggle toggle fleft hidden">
					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
					
				</button>

				<?php 

				$custom_logo_id 	= get_theme_mod( 'custom_logo' );
				$legacy_logo_url 	= get_theme_mod( 'baskerville_logo' );

				$blog_title 		= get_bloginfo( 'title' );

				if ( $custom_logo_id  || $legacy_logo_url ) : 

					$custom_logo_url = $custom_logo_id ? wp_get_attachment_image_url( $custom_logo_id, 'full' ) : $legacy_logo_url;
				
					?>

					<a class="nav-toggle logo hidden" style="padding: 0;" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img style="height: 50px;" src="<?php echo esc_url( $custom_logo_url ); ?>">
						<span class="screen-reader-text"><?php echo $blog_title; ?></span>
					</a>

				<?php endif; ?>
						
				<ul class="main-menu">

					<li class="menu-item logo-in-list">
						<a href="https://museo.ar/" style="width: max-content;" aria-current="page">
							<img style="height: 50px;" src="<?php echo esc_url( $custom_logo_url ); ?>">
							<span class="screen-reader-text"><?php echo $blog_title; ?></span>
						</a>
					</li>
				
					<?php 
					
					if ( has_nav_menu( 'primary' ) ) {

						$nav_args = array( 
							'container' 		=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary', 
							'walker' 			=> new baskerville_nav_walker,
						);
																		
						wp_nav_menu( $nav_args ); 

					} else {

						$list_pages_args = array(
							'container' => '',
							'title_li' 	=> '',
						);
					
						wp_list_pages( $list_pages_args );
						
					} 
					
					?>
											
				</ul><!-- .main-menu -->
				 
				<!-- <button class="search-toggle toggle fright">
					<span class="screen-reader-text"><?php _e( 'Toggle search field', 'baskerville' ); ?></span>
				</button> -->
				 
				<div class="clear"></div>
				 
			</div><!-- .navigation-inner -->
			
		</div><!-- .navigation -->
		
		<div class="mobile-navigation section bg-graphite no-padding hidden">
					
			<ul class="mobile-menu">
			
				<?php

				if ( has_nav_menu( 'primary' ) ) {
																	
					wp_nav_menu( $nav_args ); 

				} else {
				
					wp_list_pages( $list_pages_args );
					
				} 
				
				?>
										
			 </ul><!-- .main-menu -->
		
		</div><!-- .mobile-navigation -->