

    <!-- Single Blog Start -->
    
     
        <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
           
                <div class="single-blog-thumb">
                    <img src="<?php echo get_the_post_thumbnail_url(null,'full'); ?>" alt=" <?php the_title_attribute(); ?>">
<<<<<<< HEAD
=======
                    <div class="sbp-icon">
                        <?php if( $image_icon == '' ):  ?> 
                            <i class="insut-Icon11"> <span class="path3"></span> </i>
                        <?php else: ?>
                            <i class="<?php echo esc_attr($image_icon); ?>"> <span class="path3"></span> </i>
                        <?php endif; ?>
                    </div>
>>>>>>> e263985ac7f7eb9b1ed4fe6c7687141874a33a91
                </div>
            <?php endif; ?>

        <div class="single-blog-top-content">
             <div class="single-blog-top-tags">
            <?php quomodo_market_random_category_retrip(false); ?>
            </div>
            <h3 class="title"><?php the_title(); ?></h3>
          
            <?php quomodo_market_post_meta() ?> 

            <?php
                if ( is_search() ) {
                    the_excerpt();
                    } else {
                        the_content( esc_html__( 'Continue reading &rarr;', 'quomodo-market' ) );
                        quomodo_market_link_pages();
                }
            ?>
    
        </div>
        <?php get_template_part( 'template-parts/blog/blog-parts/part', 'tags' ); ?>

        <?php  if ( is_user_logged_in() && is_single() ) { ?>
                <p style="float:left;">
                    <?php
                        edit_post_link( 
                        esc_html__( 'Edit', 'quomodo-market' ), 
                        '<span class="meta-edit">', 
                        '</span>'
                        );
                    ?>
                </p>
        <?php } ?>
      

    <!-- Single Blog End -->
  
    