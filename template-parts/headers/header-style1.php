<?php
    // get header customizer option 
  
   
    $quomodo_market_logo_url                    = QUOMODO_MARKET_IMG . '/logo.png';
  
    $button_enable           = quomodo_market_option('button_enable','0');
    $button_link             = quomodo_market_option('button_link','#');
    $button_text             = quomodo_market_option('button_text','Contact Us');
    $enable_cart             = quomodo_market_option('enable_cart','0');
    $cart_image              = quomodo_market_option('cart_image','#');
    
    if(quomodo_market_option( 'logo')){
        $quomodo_market_logo_url = quomodo_market_option( 'logo'); 
      
    }
   
     
 
?>

<<<<<<< HEAD
 <!--====== HEADER PART START ======-->
    
 <header class="header-area">
        <?php get_template_part( 'template-parts/headers/header', 'top' ); ?>
        <div class="header-nav">
=======
        <!-- Header Topbar Start -->
        <section class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <?php if($header_contact_phone || $header_contact_email || $header_contact_address): ?>
                                <!-- inof Start -->
                                <div class="info-area">
                                    <?php if($header_contact_phone): ?>
                                        <div class="single-info">
                                            <i class="insut-Icon10"></i>
                                            <h5>
                                                <span> 
                                                  <?php echo esc_html($header_contact_phone_label); ?>
                                                </span>
                                                <?php echo esc_html($header_contact_phone_value); ?>
                                            </h5>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($header_contact_email): ?>
                                        <div class="single-info">
                                            <i class="insut-Icon12"></i>
                                               <h5><span> <?php echo esc_html($header_contact_email_label); ?></span>
                                                <a href="mailto:<?php echo esc_attr( $header_contact_email_value ); ?>">
                                                    <?php echo esc_html($header_contact_email_value); ?>
                                                </a>
                                            </h5>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($header_contact_address): ?>
                                    <div class="single-info">
                                        <i class="insut-Icon13"></i>
                                        <h5>
                                            <span><?php echo esc_html($header_contact_address_label); ?></span>
                                            <?php echo esc_html($header_contact_address_value); ?>
                                        </h5>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- inof End -->
                        <?php endif; ?>
                    </div>
                    <?php if($enable_header_social && is_array($social_link)): ?>
                        <div class="col-lg-3 col-md-3">
                            <!-- Socail Start -->
                            <ul class="topbar-socail">

                                <?php foreach($social_link as $social_item): ?> 
                                   <li><a href="<?php echo esc_url($social_item['bookmark_url']); ?>"><i class="<?php echo esc_attr($social_item['bookmark_icon']); ?>"></i></a>
                                <?php endforeach; ?> 
                             
                            </ul>
                            <!-- Social End -->
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Header Topbar End -->

           <!-- Main Header Start -->
        <header class="header-01">
>>>>>>> e263985ac7f7eb9b1ed4fe6c7687141874a33a91
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
<<<<<<< HEAD
                                   <?php echo quomodo_market_text_logo()?'</h1>':''; ?>
=======
                            <?php echo insut_text_logo()?'</h1>':''; ?>

                            <!-- Moblie Btn Start -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Moblie Btn End -->

                            <!-- Nav Menu Start -->
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                               <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                            </div>
                            <!-- Nav Menu End -->
                            <?php if($button_enable): ?>  
                                <!-- Contact Btn -->
                                   <a href="<?php echo esc_url($button_link); ?>" class="contact-btn">
                                        <i class="insut-Icon10"></i>
                                        <?php echo esc_html($button_text); ?>
                                   </a>
                                <!-- Contact Btn End -->
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header End -->

   
>>>>>>> e263985ac7f7eb9b1ed4fe6c7687141874a33a91

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                     <?php  get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                                    
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
      