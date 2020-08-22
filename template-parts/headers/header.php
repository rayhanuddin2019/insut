<?php
    // get header customizer option 
  
   
    $logo                    = QUOMODO_MARKET_IMG . '/logo2.png';
    $quomodo_market_logo_url = quomodo_market_option( 'dark_logo', $logo );
    $button_enable           = quomodo_market_option('button_enable','0');
    $button_link             = quomodo_market_option('button_link','#');
    $button_text             = quomodo_market_option('button_text','Contact Us');
    $enable_cart             = quomodo_market_option('enable_cart','0');
 
    $cart_image = quomodo_market_option('cart_image','#');
    
    fw_print($enable_cart);
   

?>

 <!--====== HEADER PART START ======-->
    
 <header class="header-area">
        <?php get_template_part( 'template-parts/headers/header', 'top' ); ?>
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <!-- logo -->
                                <?php echo quomodo_market_text_logo()?'<h1 class="logo-title">':''; ?> 
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php if(quomodo_market_text_logo()): ?> 
                                            <?php echo esc_html(quomodo_market_text_logo()); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url($quomodo_market_logo_url); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                        <?php endif; ?>
                                    </a>
                                   <?php echo quomodo_market_text_logo()?'</h1>':''; ?>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                     <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                                </div> <!-- navbar collapse -->

                                <div class="navbar-btn d-none d-sm-block">

                                    <?php if($enable_cart && class_exists( 'WooCommerce' )): ?>
                                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="shoping-cart">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23">
                                                    <path fill="#202030" fill-rule="evenodd" d="M22.813 13.684c-.115.544-.445.816-.989.816H9.234l.258 1.375h11.559c.315 0 .573.129.773.387.2.258.272.544.215.86l-.258 1.073c.917.43 1.375 1.146 1.375 2.149 0 .659-.236 1.224-.709 1.697a2.316 2.316 0 0 1-1.697.709 2.316 2.316 0 0 1-1.697-.709 2.316 2.316 0 0 1-.71-1.697c0-.688.244-1.26.731-1.719h-9.023c.487.458.73 1.031.73 1.719 0 .659-.236 1.224-.709 1.697a2.316 2.316 0 0 1-1.697.709 2.316 2.316 0 0 1-1.697-.709 2.316 2.316 0 0 1-.71-1.697c0-.917.402-1.619 1.204-2.106L4.164 3.5H1.156c-.286 0-.53-.1-.73-.3-.2-.201-.301-.445-.301-.731V1.78c0-.286.1-.53.3-.73C.627.85.87.75 1.157.75h4.426a.94.94 0 0 1 .623.236c.186.158.308.351.365.58L6.957 3.5h16.887a.98.98 0 0 1 .816.387c.2.258.258.544.172.86l-2.02 8.937z"/>
                                                </svg>
                                                <span class="cart-count">1</span>
                                            </a>
                                    <?php endif; ?>
                                    
                                    <?php if($button_enable): ?>  
                                      <a class="main-btn" href="<?php echo esc_url($button_link); ?>">  <?php echo esc_html($button_text); ?> </a>
                                    <?php endif; ?>
                                </div>
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
      