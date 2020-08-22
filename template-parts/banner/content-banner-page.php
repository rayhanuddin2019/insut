<?php 

    $banner_image    = '';
    $banner_title    = get_the_title();
    $show            = quomodo_market_option('page_banner_show',1);
    $show_breadcrumb = quomodo_market_option('page_show_breadcrumb',1);
    $banner_class    = '';
    
     /* Title start */   

    if(quomodo_market_meta_option( get_the_ID(), 'banner_page_title' ) != ''){

        $banner_title = quomodo_market_meta_option( get_the_ID(), 'banner_page_title' );
        
     }elseif(quomodo_market_option( 'banner_page_title') !=''){

        $banner_title = quomodo_market_option( 'banner_page_title');
        
    }else{

        $banner_title = get_the_title(); 
    } 
    $banner_title      = str_replace(['{', '}'], ['<span>', '</span>'], $banner_title);
    /* Title end */
  

?>

<?php if($show): ?>

    <div class="page-title-area page-banner banner-page bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <h3 class="title"> <?php echo quomodo_market_kses($banner_title); ?> </h3>
                        <nav aria-label="breadcrumb">
                            <?php if($show_breadcrumb): ?>
                                <?php quomodo_market_get_breadcrumbs(); ?>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php endif; ?>

