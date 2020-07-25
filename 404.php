
<?php
/**
 * the template for displaying 404 pages (Not Found)
 */

get_header();

?>
         <?php if(insut_option('error_enable_main_container',0)): ?>
            <main id="site-content" class="qomodo-main-container blog-single" role="main">
         <?php  endif; ?>
               <section class="error-area">
                  <div class="page-title-bg">
                        <div class="page-title-shape-1">
                           <img src="<?php echo esc_url(INSUT_IMG); ?>/shapes/login-shape.png" alt="<?php echo esc_attr__('Error Shape','insut'); ?>">
                        </div>
                        <div class="page-title-shape-2">
                           <img src="<?php echo esc_url(INSUT_IMG); ?>/shapes/page-title-shape-2.png" alt="<?php echo esc_attr__('Error Shape 2','insut'); ?>">
                        </div>
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="shape-3"></div>
                        <div class="shape-4"></div>
                  </div>
                  <div class="container">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="error-content text-center">
                                    <img src="<?php echo esc_url(INSUT_IMG); ?>/error-thumb.png" alt="<?php echo esc_attr__('Error Thumb','insut'); ?>">
                                    <h2 class="title"><?php echo esc_html(insut_option('error_text')); ?></h2>
                                    <span> <?php echo esc_html('This page does not exist or has been removed', 'insut'); ?> </span>
                                    <?php if(insut_option('enable_404_search_button',1)): ?> 
                                      <a class="main-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">  <?php esc_html_e('Back to Home', 'insut'); ?></a>
                                    <?php endif; ?>
                              </div>
                           </div>
                        </div>
                  </div>
               </section>
         <?php if(insut_option('error_enable_main_container',0)): ?>        
            </main><!-- Main container end -->
        <?php  endif; ?>
<?php get_footer(); ?>