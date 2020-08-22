
    <?php if(!quomodo_market_option('blog_grid',0)): ?>
        <div class="blog-standard-item mt-30 <?php echo esc_attr(is_sticky()?'sticky':''); ?>">
            <?php if(has_post_thumbnail()): ?>
                <div class="blog-standard-thumb">
                   <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=" <?php the_title(); ?>">
                </div>
            <?php endif; ?>
            <div class="blog-standard-content">
                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <p><?php quomodo_market_excerpt( quomodo_market_option('blog_excerpt_word',30), null ); ?></p>
                
                <?php 
                    if( !is_single() && quomodo_market_option('blog_readmore',1) == true ):
                        printf('<div class="qomodo-post-footer readmore-btn-area"><a class="main-btn" href="%1$s">%2$s</a></div>',
                        get_the_permalink(),
                        quomodo_market_option('blog_readmore_text','Read More')
                        );
                    endif; 
                ?>

                <div class="info">
                    <?php quomodo_market_post_meta() ?> 
                </div>
            </div>
        </div>
    <?php else: ?>   
        <div class="blog-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
              <?php if(has_post_thumbnail()): ?>
                <div class="blog-thumb">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=" <?php the_title(); ?>">
                </div>
             <?php endif; ?>
            <div class="blog-content">
                <span> <?php echo quomodo_market_kses(quomodo_market_post_time_ago_function()); ?> </span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="text">
                    <p><?php quomodo_market_excerpt( quomodo_market_option('blog_excerpt_word',30), null ); ?></p>
                    
                    <?php 
                        if( !is_single() && quomodo_market_option('blog_readmore',1) == true ):
                            printf('<div class="qomodo-post-footer readmore-btn-area"><a class="main-btn" href="%1$s">%2$s</a></div>',
                            get_the_permalink(),
                            quomodo_market_option('blog_readmore_text','Read More')
                            );
                        endif; 
                    ?>

                </div>
            </div>
        </div>
    <?php endif; ?>   