<?php

	get_header();
	get_template_part( 'template-parts/banner/content', 'banner-shop' ); 
	$blog_sidebar    = quomodo_market_option('blog_sidebar',3);
	$column  = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-woo')) ? 'col-lg-12' : 'col-lg-8';

  ?>
	<main id="site-content" class="qomodo-main-container blog blog-area" role="main">
			<div class="container">
				<div class="row">
					<?php

						if( $blog_sidebar == 2 ){
							get_sidebar( 'woo' );
						} 

					?>
					<div class="<?php echo esc_attr($column);  ?>">
						<div class="main-content-inner wooshop clearfix">
							<?php if ( have_posts() ) : ?>
								<?php woocommerce_content(); ?>
							<?php endif; ?>
						</div> <!-- close .col-sm-12 -->
					</div><!--/.row -->

					<?php

						if( $blog_sidebar == 3 ){
							get_sidebar( 'woo' );
						} 

					?>

				</div><!--/.row -->
			</div><!--/.row -->
	</main><!-- #main-content -->


<?php get_footer(); ?>