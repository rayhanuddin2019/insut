

    <div class="single-blog-post">
        <?php if(has_post_thumbnail()): ?>
            <div class="sbp-thumb">
                    <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=" <?php the_title(); ?>">
                    <?php 
                    if ( is_sticky() ) {
                        echo '<sup class="meta-featured-post thumb"> <i class="fal fa-thumbtack"></i> '  . ' </sup>';
                    }
                    
                   ?> 
                <div class="sbp-icon">
                    <i class="flaticon-wifi-router"></i>
                </div>
            </div>
        <?php endif; ?>
        <div class="sbp-details clearfix">
            <?php insut_post_meta() ?> 
            <?php insut_social_share() ?> 
           
            <h3 class="sbp-title">
               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p>
                 <?php insut_excerpt( insut_option('blog_excerpt_word',30), null ); ?>
            </p>
                <?php 
                      if( !is_single() && insut_option('blog_readmore',1) == true ):

                          printf('<div class="qomodo-post-footer readmore-btn-area"><a class="read-more" href="%1$s">%2$s <i class="icofont-arrow-right"></i></a></div>',
                          get_the_permalink(),
                          insut_option('blog_readmore_text','Read More')
                          );

                      endif; 
                ?>

        </div>
    </div>