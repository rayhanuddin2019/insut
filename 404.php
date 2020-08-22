<?php

get_header();
get_template_part( 'template-parts/banner/content', 'banner-blog' ); 

?>

<div id="site-content" class="qomodo-main-container blog blog-area" role="main">
	<div class="container">
		<div class="row">
         <div class="col-lg-6 mx-auto">
            <section class="blog-error-page">
                  <div class="error-page text-center">
                  <?php	get_search_form(); ?>
                     <div class="error-code">
                        <h2><strong><?php esc_html_e('404', 'quomodo-market'); ?></strong></h2>
                     </div>
                     <div class="error-message">
                        <h3><?php esc_html_e('Oops... Page Not Found!', 'quomodo-market'); ?></h3>
                     </div>
                     <div class="error-body">
                        <?php esc_html_e('Try using the button below to go to main page of the site', 'quomodo-market'); ?> <br>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-btn"><?php esc_html_e('Back to Home Page', 'quomodo-market'); ?></a>
                     </div>
                  </div>
               </div>
            </section> 
         </div><!-- #col -->
  	</div><!-- #container -->
</div>


<?php
get_footer();
