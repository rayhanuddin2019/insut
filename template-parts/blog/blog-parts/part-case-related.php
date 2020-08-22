
<?php
   // related post 
   if( !quomodo_market_option( 'case_related_post',0 ) ){
    return;
  }
   $related_case = quomodo_market_related_posts_by_case_cat(get_the_id());
  
   

?>
    <div class="realtive-case-area">
        <h3> <?php echo esc_html__('Some Relative Case Studies','quomodo-market'); ?> </h3>
        <div class="case-relative-slider owl-carousel">
            <?php foreach($related_case as $case) : ?>

                    <a class="crs-item" href="<?php echo esc_url(get_the_permalink($case)); ?>">
                        <?php if(has_post_thumbnail($case)): ?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($case, 'full')); ?>" alt="<?php the_title_attribute($case); ?>">
                        <?php endif; ?> 
                    </a>
                        
            <?php endforeach; ?>
        </div>
    </div>