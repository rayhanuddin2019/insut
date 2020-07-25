<?php
/**
 * The main template file
 */

	get_header(); 
	
	get_template_part( 'template-parts/banner/content', 'banner-blog' ); 

	$blog_sidebar    = insut_option('blog_sidebar',3);
	
	$column  = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-8';

?>

	<main id="site-content" class="qomodo-main-container blog blog-page-section" role="main">
		<div class="container">
			<div class="row">

				<?php

					if($blog_sidebar == 2){
						get_sidebar();
					} 
				
				?>
		
					<div class="<?php echo esc_attr($column);?>">
						<?php if ( have_posts() ) : ?>
							
									<?php while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'template-parts/blog/content', get_post_format() ); ?>
									<?php endwhile; ?>
							
							<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/blog/content', 'none' ); ?>
						<?php endif; ?>
					</div><!-- .col-md-8 -->
				
				<?php 

					if($blog_sidebar == 3){
						get_sidebar();
					}

				?>
				
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main-content -->
	<?php get_footer(); ?>