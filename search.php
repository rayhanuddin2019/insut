<?php
/**
 * The main template file
 */

	get_header(); 
	
	get_template_part( 'template-parts/banner/content', 'banner-blog' ); 

	$blog_sidebar    = quomodo_market_option('blog_sidebar',3);
	
	$column  = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-8';

?>

	<main id="site-content" class="qomodo-main-container blog blog-area" role="main">
		<div class="container">
			<div class="row">
				<?php

					if( $blog_sidebar == 2 ){
						get_sidebar();
					} 
				
				?>
					<div class="<?php echo esc_attr($column);?>">
						<div class="qomodo-page-header">
							<h2>
								<?php printf(esc_html__('Search Results for: %s', 'quomodo-market'), get_search_query()); ?>
							</h2>
						</div>
					   <?php if(!quomodo_market_option('blog_grid',0)): ?>
						<div class="blog-standard-area">
							<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'template-parts/blog/content', get_post_format() ); ?>
									<?php endwhile; ?>
								<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
							<?php else : ?>
								<?php get_template_part( 'template-parts/blog/content', 'none' ); ?>
							<?php endif; ?>
						</div><!-- .blog-standard-area -->
						<?php else: ?>
							<div class="row justify-content-center">
								<?php if ( have_posts() ) : ?>
										<?php while ( have_posts() ) : the_post(); ?>
										    <div class="col-lg-6 col-md-6 col-sm-9">
										    	<?php get_template_part( 'template-parts/blog/content', get_post_format() ); ?>
								            </div>
										<?php endwhile; ?>
									<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
								<?php else : ?>
									<?php get_template_part( 'template-parts/blog/content', 'none' ); ?>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div><!-- .col-md-8 -->

				<?php 
     			if( $blog_sidebar == 3 ){
						get_sidebar();
					}
        		?>
				
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main-content -->
	<?php get_footer(); ?>