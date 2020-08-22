<?php 

   $copyright_text        = quomodo_market_option('copyright_text','Copyright © 2020 All rights reserved.');
   $copyright_credited_by = quomodo_market_option('copyright_credited_by','Site By Quomodo');
 
   $copyright_credited_by = str_replace(['{', '}'], ['<span>', '</span>'], $copyright_credited_by);

?>
      <!--====== FOOTER PART START ======-->

    <footer class="footer-area <?php echo esc_attr(quomodo_market_is_footer_widget_active()?'':'pt-0'); ?>">
        <div class="container">
            <?php  get_template_part( 'template-parts/footer/subscribe');  ?>
            <?php if( quomodo_market_is_footer_widget_active() ): ?> 
                <div class="footer-widget-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <?php  dynamic_sidebar( 'footer-one' ); ?>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        <?php  dynamic_sidebar( 'footer-two' ); ?>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <?php  dynamic_sidebar( 'footer-three' ); ?>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                        <?php  dynamic_sidebar( 'footer-four' ); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
       <?php if( $copyright_text !='' ): ?>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-item">

                                <p> <?php echo quomodo_market_kses( $copyright_text ); ?> </p>
                                <?php if($copyright_credited_by !=''): ?>
                                    <span> <?php echo quomodo_market_kses($copyright_credited_by) ?> </span>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <?php endif; ?>
    </footer>
    <?php  get_template_part( 'template-parts/footer/back-to-top');  ?>
    
    <!--====== FOOTER PART ENDS ======-->