<?php 
   
   $single_post_tags = quomodo_market_option('single_post_tags','1');
   if( ! $single_post_tags ){
      return;
   }

   $tag_list     = get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>' );
   $social_share = quomodo_market_option('social_share');
   
   $post_social_share_show = quomodo_market_option('post_social_share_show',0);

   ?> 
  

   <div class="single-blog-socialbar">
         <?php if($tag_list): ?>
         <div class="tags-item d-flex ">
            <h5 class="title"> <?php echo esc_html__( 'Tags:', 'quomodo-market' ) ?> </h5>
             <?php echo quomodo_market_kses($tag_list); ?>
         </div>
         <?php endif; ?>

         <?php if($post_social_share_show): ?>
         <div class="social-item d-flex align-items-center">
            <h5 class="title"><?php echo esc_html__( 'Share:', 'quomodo-market' ) ?> </h5>
            <?php quomodo_market_social_share() ?>
         </div>
         <?php endif; ?>
   </div>