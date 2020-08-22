

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="case-details-area">
                <div class="case-d-img">
                <img src="<?php echo get_the_post_thumbnail_url(null,'full'); ?>" alt=" <?php the_title_attribute(); ?>">
                </div>
                <div class="case-meta-area">
                    <div class="single-case-meta">
                        <h5><?php echo esc_html__('CLIENTS:','quomodo-market') ?></h5>
                        <p> <?php echo quomodo_market_meta_option(get_the_id(),'case_client_name','','quomodo_market_case_options') ?></p>
                    </div>
                    <div class="single-case-meta">
                        <h5><?php echo esc_html__('Date:','quomodo-market') ?> </h5>
                        <p><?php echo get_the_date(get_option( 'date_format' )); ?></p>
                    </div>
                    <div class="single-case-meta">
                        <h5><?php echo esc_html__('Duration:','quomodo-market') ?></h5>
                        <p><?php echo quomodo_market_meta_option(get_the_id(),'case_duration','','quomodo_market_case_options') ?></p>
                    </div>
                    <div class="single-case-meta">
                        <h5><?php echo esc_html__('Share:','quomodo-market'); ?></h5>
                        <?php quomodo_market_social_share('case-socail-share'); ?>
                    </div>
                </div>
                <div class="case-content">
                  <?php the_content( esc_html__( 'Continue reading &rarr;', 'quomodo-market' ) ); ?>
                </div>
                <?php get_template_part( 'template-parts/blog/blog-parts/part', 'case-related' ); ?>
            </div>
        </div>
    </div>
</div>
    