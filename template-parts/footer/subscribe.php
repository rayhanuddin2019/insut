<?php 

  if( ! quomodo_market_option('footer_subscribe',0) ){
     return;
  }

  $allowed_page = quomodo_market_footer_cta_allowed_pages(quomodo_market_option('footer_subscribe_permited_pages'));

  if( ! $allowed_page ){
     return;
  } 

  $title                           = quomodo_market_option('footer_subscribe_title');
  $footer_subscribe_mailchimp_code = quomodo_market_option('footer_subscribe_mailchimp_code');


 ?>    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="footer-subscribe-box text-center animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
                <?php if($title !=''): ?>
                   <h3 class="title"> <?php echo esc_html($title); ?> </h3>
                <?php endif; ?>
                <?php echo do_shortcode($footer_subscribe_mailchimp_code); ?>  
            </div>
        </div>
    </div>